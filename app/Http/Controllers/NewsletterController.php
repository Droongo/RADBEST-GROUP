<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * POST /newsletter — footer "Subscribe" form on every page.
     * Subscribing twice with the same address is not an error.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        NewsletterSubscriber::firstOrCreate(['email' => mb_strtolower($data['email'])]);

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Thank you ✓']);
        }

        return back()->with('newsletter_status', 'Thank you ✓');
    }
}
