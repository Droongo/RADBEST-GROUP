<?php

namespace Tests\Feature;

use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use App\Models\NewsletterSubscriber;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class SiteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(ValidateCsrfToken::class);
    }

    public static function pages(): array
    {
        return [
            'home' => ['/', 'page-home', 'From Ethiopia,'],
            'about' => ['/about', 'page-about', 'Executive'],
            'coffee' => ['/coffee', 'page-coffee', 'Yirgacheffe Gedeb Halo Hartume'],
            'manufacturing' => ['/manufacturing', 'page-manufacturing', 'Threads, Tapes'],
            'trading' => ['/trading', 'page-trading', 'Wacker silicone sealant'],
            'gallery' => ['/gallery', 'page-gallery', 'Showing <b>41</b> photos'],
            'contact' => ['/contact', 'page-contact', 'Send us a message'],
        ];
    }

    #[DataProvider('pages')]
    public function test_every_page_renders_with_its_body_class(string $uri, string $bodyClass, string $marker): void
    {
        $this->get($uri)
            ->assertOk()
            ->assertSee('<body class="'.$bodyClass.'">', false)
            ->assertSee($marker, false)
            ->assertSee('id="nav"', false)
            ->assertSee('class="site-footer"', false)
            ->assertSee('favicon.ico', false)
            ->assertSee('favicon-16x16.png', false)
            ->assertSee('favicon-32x32.png', false);
    }

    public function test_favicon_files_exist(): void
    {
        foreach (['favicon.ico', 'favicon-16x16.png', 'favicon-32x32.png'] as $file) {
            $this->assertGreaterThan(0, filesize(public_path($file)), "$file is missing or empty");
        }
    }

    public function test_legacy_html_urls_redirect_permanently(): void
    {
        $this->get('/rad.html')->assertStatus(301)->assertRedirect('/');

        foreach (['about', 'coffee', 'manufacturing', 'trading', 'gallery', 'contact'] as $page) {
            $this->get("/{$page}.html")->assertStatus(301)->assertRedirect("/{$page}");
        }
    }

    public function test_gallery_filter_counts_match_the_photo_list(): void
    {
        $this->get('/gallery')
            ->assertSee('All photos<i>41</i>', false)
            ->assertSee('Coffee<i>14</i>', false)
            ->assertSee('Trading &amp; furniture<i>20</i>', false)
            ->assertSee('Manufacturing<i>7</i>', false);
    }

    public function test_navigation_marks_the_current_section_active(): void
    {
        $this->get('/about')->assertSee('<a href="'.route('about').'" class="active">About</a>', false);
        $this->get('/coffee')->assertSee('#divisions" class="active"', false);
        $this->get('/contact')->assertSee('class="mob-only active"', false);
    }

    public function test_contact_form_stores_the_enquiry_and_emails_the_team(): void
    {
        Mail::fake();

        $this->postJson('/contact', [
            'name' => 'Abebe Kebede',
            'phone' => '+251 900 000 000',
            'email' => 'abebe@example.com',
            'company' => 'Example PLC',
            'message' => 'We would like a quote for 20 t of Guji natural.',
        ])->assertOk()->assertJsonPath('message', fn ($m) => str_starts_with($m, 'Thank you, Abebe Kebede.'));

        $this->assertDatabaseHas('contact_messages', ['email' => 'abebe@example.com', 'company' => 'Example PLC']);
        Mail::assertSent(ContactMessageReceived::class, fn ($mail) => $mail->hasTo(config('site.contact_recipient'))
            && $mail->hasReplyTo('abebe@example.com'));
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $this->postJson('/contact', ['email' => 'not-an-email'])
            ->assertStatus(422)
            ->assertJsonValidationErrors(['name', 'phone', 'email']);

        $this->assertSame(0, ContactMessage::count());
    }

    public function test_contact_form_works_without_javascript(): void
    {
        Mail::fake();

        $this->post('/contact', ['name' => 'Sara', 'phone' => '0911', 'email' => 'sara@example.com'])
            ->assertRedirect(route('contact').'#get-in-touch')
            ->assertSessionHas('contact_status');

        $this->post('/contact', [])
            ->assertRedirect(route('contact').'#get-in-touch')
            ->assertSessionHasErrors(['name', 'phone', 'email']);
    }

    public function test_newsletter_subscribes_once_per_address(): void
    {
        $this->postJson('/newsletter', ['email' => 'News@Example.com'])->assertOk()->assertJson(['message' => 'Thank you ✓']);
        $this->postJson('/newsletter', ['email' => 'news@example.com'])->assertOk();

        $this->assertSame(1, NewsletterSubscriber::where('email', 'news@example.com')->count());

        $this->postJson('/newsletter', ['email' => ''])->assertStatus(422)->assertJsonValidationErrors('email');
    }
}
