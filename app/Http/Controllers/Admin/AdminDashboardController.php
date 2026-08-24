<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ServerOffer;
use App\Models\VirtualMachine;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Dashboard', [
            'users' => User::latest()->get(),
            'offers' => ServerOffer::latest()->get(),
            'vms' => VirtualMachine::with(['subscription.user', 'operatingSystem'])->get(),
            'openTickets' => Ticket::with('user')->where('status', 'open')->get(),
        ]);
    }

    public function promote_user(User $user)
    {
        $user->update(['role' => 'admin']);
        return back()->with('success', 'User promoted to admin.');
    }

    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'living_address' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $user->update($validated);
        return back()->with('success', 'User profile updated.');
    }

    public function store_offer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'type' => 'required|in:vps,dedicated',
            'ram_gb' => 'required|integer',
            'cpu_cores' => 'required|integer',
            'storage_amount_gb' => 'required|integer',
            'storage_type' => 'required|string',
            'bandwidth_tb' => 'required|integer',
            'gpu_model' => 'nullable|string',
            'gpu_count' => 'nullable|integer',
            'price_monthly' => 'required|numeric',
            'price_6_months' => 'nullable|numeric',
            'price_1_year' => 'required|numeric',
            'price_2_years' => 'nullable|numeric',
            'country' => 'required|string',
            'city' => 'required|string',
        ]);

        ServerOffer::create($validated);
        return back()->with('success', 'Server offer created.');
    }

    public function destroy_offer(ServerOffer $offer)
    {
        $offer->delete();
        return back()->with('success', 'Offer deleted.');
    }
}
