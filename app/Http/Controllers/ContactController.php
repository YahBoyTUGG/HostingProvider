<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show(): Response
    {
        return Inertia::render('Contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Save entry directly to the database
        Contact::create($validated);

        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
}
