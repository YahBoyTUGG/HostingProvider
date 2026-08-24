<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SupportTicketController extends Controller
{
    public function index(Request $request)
    {
        $tickets = $request->user()->isAdmin()
            ? Ticket::with('user')->latest()->get()
            : Ticket::where('user_id', $request->user()->id)->latest()->get();

        return Inertia::render('Tickets/Index', ['tickets' => $tickets]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $ticket = Ticket::create([
            'user_id' => $request->user()->id,
            'subject' => $validated['subject'],
            'status' => 'open',
        ]);

        $ticket->messages()->create([
            'user_id' => $request->user()->id,
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Ticket created.');
    }

    public function reply(Request $request, Ticket $ticket)
    {
        $validated = $request->validate(['message' => 'required|string']);

        $ticket->messages()->create([
            'user_id' => $request->user()->id,
            'message' => $validated['message'],
        ]);

        if ($request->user()->isAdmin()) {
            $ticket->update(['status' => 'answered']);
        } else {
            $ticket->update(['status' => 'open']);
        }

        return back();
    }
}
