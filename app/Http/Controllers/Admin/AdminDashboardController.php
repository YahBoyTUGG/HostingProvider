<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Dockerfile;
use App\Models\Features;
use App\Models\OperatingSystem;
use App\Models\ServerOffer;
use App\Models\Subscription;
use App\Models\Ticket;
use App\Models\User;
use App\Models\UserContainer;
use App\Models\VirtualMachine;
use App\Services\DockerContainerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function index(DockerContainerService $dockerService)
    {
        $dockerfiles = Dockerfile::with([
            'user:id,first_name,last_name,email',
            'userContainers',
        ])->latest()->get();

        foreach ($dockerfiles as $dockerfile) {
            try {
                $dockerService->syncStatuses($dockerfile);
            } catch (\Throwable $exception) {
                report($exception);
            }
        }

        $dockerfiles->load('userContainers');

        return Inertia::render('Admin/Dashboard', [
            'users' => User::latest()->get(),
            'offers' => ServerOffer::latest()->get(),
            'featuredOffers' => Features::with('server_offer')->orderBy('sort_order')->get(),
            'contacts' => Contact::latest()->get(),
            'tickets' => Ticket::with([
                'user',
                'subscription.serverOffer:id,name,type',
                'messages.user',
            ])->latest()->get(),
            'subscriptions' => Subscription::with([
                'user:id,first_name,last_name,email',
                'serverOffer:id,name',
            ])->latest()->get(),
            'virtualMachines' => VirtualMachine::with([
                'operatingSystem:id,name,version',
                'subscription.user:id,first_name,last_name,email',
                'subscription.serverOffer:id,name,type',
            ])->latest()->get(),
            'operatingSystems' => OperatingSystem::orderBy('name')->orderBy('version')->get([
                'id',
                'name',
                'version',
            ]),
            'dockerfiles' => $dockerfiles,
        ]);
    }

    public function pauseDockerContainer(UserContainer $userContainer, DockerContainerService $service)
    {
        try {
            $service->pause($userContainer);
        } catch (\Throwable $exception) {
            report($exception);

            return back()->withErrors(['docker' => $exception->getMessage()]);
        }

        return back()->with('success', 'Docker container paused.');
    }

    public function unpauseDockerContainer(UserContainer $userContainer, DockerContainerService $service)
    {
        try {
            $service->unpause($userContainer);
        } catch (\Throwable $exception) {
            report($exception);

            return back()->withErrors(['docker' => $exception->getMessage()]);
        }

        return back()->with('success', 'Docker container resumed.');
    }

    public function destroyDockerfile(Dockerfile $dockerfile, DockerContainerService $service)
    {
        $service->remove($dockerfile->load('userContainers'));

        return back()->with('success', 'Docker image, container, and source archive removed.');
    }

    public function update_subscription_status(Request $request, Subscription $subscription)
    {
        $subscription->update($request->validate([
            'status' => 'required|in:active,cancelled,expired',
        ]));

        return back()->with('success', 'Subscription status updated.');
    }

    public function update_virtual_machine_status(Request $request, VirtualMachine $virtualMachine)
    {
        $virtualMachine->update($request->validate([
            'status' => 'required|in:running,stopped,provisioning',
        ]));

        return back()->with('success', 'Virtual machine status updated.');
    }

    public function promote_user(User $user)
    {
        $user->update(['role' => 'admin']);

        return back()->with('success', 'User promoted to admin.');
    }

    public function demote_user(Request $request, User $user)
    {
        abort_if($request->user()->is($user), 422, 'You cannot demote your own account.');

        $user->update(['role' => 'user']);

        return back()->with('success', 'User demoted.');
    }

    public function store_user(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'living_address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|in:user,admin',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return back()->with('success', 'User created.');
    }

    public function destroy_user(Request $request, User $user)
    {
        abort_if($request->user()->is($user), 422, 'You cannot delete your own account.');

        $user->delete();

        return back()->with('success', 'User deleted.');
    }

    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'living_address' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $user->update($validated);

        return back()->with('success', 'User profile updated.');
    }

    public function store_offer(Request $request)
    {
        $validated = $this->validateOffer($request);

        ServerOffer::create($validated);

        return back()->with('success', 'Server offer created.');
    }

    public function update_offer(Request $request, ServerOffer $offer)
    {
        $offer->update($this->validateOffer($request));

        return back()->with('success', 'Server offer updated.');
    }

    public function destroy_offer(ServerOffer $offer)
    {
        $offer->delete();

        return back()->with('success', 'Offer deleted.');
    }

    public function update_feature(Request $request, Features $feature)
    {
        $feature->update($this->validateFeature($request));

        return back()->with('success', 'Featured offer updated.');
    }

    public function store_feature(Request $request)
    {
        $validated = $this->validateFeature($request);

        abort_if(
            Features::where('server_offer_id', $validated['server_offer_id'])->exists(),
            422,
            'This offer is already featured.',
        );

        Features::create($validated);

        return back()->with('success', 'Featured offer created.');
    }

    public function destroy_feature(Features $feature)
    {
        $feature->delete();

        return back()->with('success', 'Featured offer removed.');
    }

    public function mark_contact_read(Contact $contact)
    {
        $contact->update(['is_read' => true]);

        return back()->with('success', 'Contact marked as read.');
    }

    public function reply_to_ticket(Request $request, Ticket $ticket)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        $ticket->messages()->create([
            'user_id' => $request->user()->id,
            'message' => $validated['message'],
        ]);
        $ticket->update(['status' => 'answered']);

        return back()->with('success', 'Ticket response sent.');
    }

    public function close_ticket(Ticket $ticket)
    {
        $ticket->update(['status' => 'closed']);

        return back()->with('success', 'Ticket closed.');
    }

    private function validateOffer(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:vps,dedicated',
            'ram_gb' => 'required|integer|min:1',
            'cpu_cores' => 'required|integer|min:1',
            'storage_amount_gb' => 'required|integer|min:1',
            'storage_type' => 'required|string|max:255',
            'bandwidth_tb' => 'required|integer|min:1',
            'gpu_model' => 'nullable|string|max:255',
            'gpu_count' => 'required|integer|min:0',
            'price_monthly' => 'required|numeric|min:0',
            'price_6_months' => 'nullable|numeric|min:0',
            'price_1_year' => 'required|numeric|min:0',
            'price_2_years' => 'nullable|numeric|min:0',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'is_active' => 'sometimes|boolean',
        ]);
    }

    private function validateFeature(Request $request): array
    {
        return $request->validate([
            'server_offer_id' => 'required|exists:server_offers,id',
            'badge' => 'nullable|string|max:255',
            'button_text' => 'required|string|max:255',
            'sort_order' => 'required|integer|min:0',
            'is_highlighted' => 'sometimes|boolean',
        ]);
    }
}
