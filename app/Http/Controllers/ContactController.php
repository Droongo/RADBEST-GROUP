<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class ContactController extends Controller
{
    /** GET /contact — formerly contact.html */
    public function show(): View
    {
        return view('pages.contact');
    }

    /**
     * POST /contact — stores the enquiry and emails it to the team.
     *
     * Answers JSON for the fetch() request made by resources/js/pages/contact.js,
     * and redirects back to the form for browsers without JavaScript.
     */
    public function store(ContactRequest $request): JsonResponse|RedirectResponse
    {
        $message = ContactMessage::create($request->validated() + [
            'ip_address' => $request->ip(),
        ]);

        try {
            Mail::to(config('site.contact_recipient'))->send(new ContactMessageReceived($message));
        } catch (Throwable $e) {
            // The enquiry is already saved; log the mail failure instead of
            // showing the visitor an error for something they can't fix.
            report($e);
        }

        $status = "Thank you, {$message->name}. Your message has been sent and we'll get back to you as soon as we can. You can also call us on +251 90 344 4440.";

        if ($request->expectsJson()) {
            return response()->json(['message' => $status]);
        }

        return redirect()->to(route('contact').'#get-in-touch')->with('contact_status', $status);
    }
}
