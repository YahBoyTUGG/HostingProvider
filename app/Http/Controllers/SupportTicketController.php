<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SupportTicketController extends Controller
{
    public function index(Request $request): Response
    {
        $tickets = $request->user()->tickets()
            ->with('latestMessage')
            ->latest()
            ->get();

        return Inertia::render('ViewTickets', [
            'tickets' => $tickets,
        ]);
    }

    public function create(Request $request): Response
    {
        $subscriptions = $request->user()->subscriptions()
            ->select('id', 'server_offer_id')
            ->with([
                'serverOffer:id,name',
                'virtualMachine:id,subscription_id,ip_address',
            ])
            ->get();

        return Inertia::render('CreateTicket', [
            'subscriptions' => $subscriptions->map(fn ($subscription) => [
                'id' => $subscription->id,
                'name' => $subscription->serverOffer?->name ?? 'Unnamed service',
                'ip_address' => $subscription->virtualMachine?->ip_address ?? '',
            ])->values(),
        ]);
    }

    public function show(Request $request, Ticket $ticket): Response
    {
        abort_unless($ticket->user_id === $request->user()->id, 404);

        $ticket->load('messages.user');

        return Inertia::render('ViewTicketStatus', [
            'ticket' => $ticket,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subscription_id' => [
                'nullable',
                Rule::exists('subscriptions', 'id')->where('user_id', $request->user()->id),
            ],
            'priority' => 'required|in:low,normal,high',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $ticket = $request->user()->tickets()->create([
            'subscription_id' => $validated['subscription_id'] ?? null,
            'subject' => $validated['subject'],
            'priority' => $validated['priority'],
        ]);

        $ticket->messages()->create([
            'user_id' => $request->user()->id,
            'message' => $validated['message'],
        ]);

        return redirect()->route('tickets.index')->with('success', 'Support ticket opened successfully.');
    }
}
