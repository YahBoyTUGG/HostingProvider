<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VirtualMachine;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use phpseclib3\Net\SSH2;

class VirtualMachineTerminalController extends Controller
{
    public function show(VirtualMachine $virtualMachine): Response|RedirectResponse
    {
        if (! $this->isStarterVps($virtualMachine)) {
            return redirect()->route('admin.dashboard')
                ->withErrors(['terminal' => 'The browser terminal is only available for Starter VPS.']);
        }

        return Inertia::render('Admin/VirtualMachineTerminal', [
            'virtualMachine' => [
                'id' => $virtualMachine->id,
                'name' => $virtualMachine->name,
                'ip_address' => $virtualMachine->ip_address,
                'ssh_port' => $virtualMachine->ssh_port,
                'ssh_user' => 'root',
            ],
        ]);
    }

    public function execute(Request $request, VirtualMachine $virtualMachine): Response|RedirectResponse
    {
        if (! $this->isStarterVps($virtualMachine)) {
            abort(404);
        }

        $validated = $request->validate([
            'command' => ['required', 'string', 'max:10000'],
        ]);

        $ssh = new SSH2($virtualMachine->ip_address, $virtualMachine->ssh_port);
        $password = config('services.starter_vps.password', '1234');

        if (! $ssh->login('root', $password)) {
            return back()->withErrors(['terminal' => 'SSH authentication failed.']);
        }

        $output = $ssh->exec($validated['command']);

        return back()->with('terminal_output', [
            'command' => $validated['command'],
            'output' => $output === false ? 'The command did not return any output.' : $output,
        ]);
    }

    private function isStarterVps(VirtualMachine $virtualMachine): bool
    {
        return $virtualMachine->subscription?->serverOffer?->name === 'Starter VPS'
            && $virtualMachine->subscription?->serverOffer?->type === 'vps';
    }
}
