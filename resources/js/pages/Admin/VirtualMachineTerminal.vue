<script setup lang="ts">
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import SiteHeader from '@/components/SiteHeader.vue';

interface VirtualMachine {
    id: number;
    name: string;
    ip_address: string;
    ssh_port: number;
    ssh_user: string;
}

interface TerminalOutput {
    command: string;
    output: string;
}

const props = defineProps<{
    virtualMachine: VirtualMachine;
}>();

const page = usePage<{
    flash: { terminal_output?: TerminalOutput };
    errors?: { terminal?: string };
}>();
const form = useForm({ command: '' });
const terminalOutput = computed(() => page.props.flash?.terminal_output);

const execute = () => {
    if (!form.command.trim()) return;

    form.post(`/admin/virtual-machines/${props.virtualMachine.id}/terminal`, {
        preserveScroll: true,
        onSuccess: () => {
            form.reset('command');
        },
    });
};
</script>

<template>
    <Head :title="`Terminal - ${virtualMachine.name}`" />

    <div class="min-h-screen bg-slate-950 text-slate-100">
        <SiteHeader />
        <main class="mx-auto max-w-6xl px-4 py-10 sm:px-6 lg:px-8">
            <div class="mb-6 flex flex-wrap items-start justify-between gap-4">
                <div>
                    <Link href="/admin/dashboard" class="text-sm text-indigo-300 hover:text-indigo-200">
                        &larr; Back to operations dashboard
                    </Link>
                    <h1 class="mt-4 text-3xl font-bold text-white">{{ virtualMachine.name }} terminal</h1>
                    <p class="mt-1 font-mono text-sm text-slate-400">
                        SSH {{ virtualMachine.ssh_user }}@{{ virtualMachine.ip_address }}:{{ virtualMachine.ssh_port }}
                    </p>
                </div>
                <div class="rounded-xl border border-amber-500/30 bg-amber-500/10 px-4 py-3 text-sm text-amber-200">
                    Password: <span class="font-mono font-semibold">1234</span>
                </div>
            </div>

            <section class="overflow-hidden rounded-2xl border border-slate-800 bg-black shadow-2xl">
                <div class="flex items-center gap-2 border-b border-slate-800 bg-slate-900 px-4 py-3 text-xs text-slate-400">
                    <span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                    <span class="ml-2">root shell</span>
                </div>
                <div class="min-h-96 max-h-[32rem] overflow-auto p-5 font-mono text-sm leading-6 text-emerald-300">
                    <p>Connected to {{ virtualMachine.ip_address }} as root.</p>
                    <template v-if="terminalOutput">
                        <p class="mt-3 text-slate-400">$ {{ terminalOutput.command }}</p>
                        <pre class="whitespace-pre-wrap break-words text-slate-200">{{ terminalOutput.output }}</pre>
                    </template>
                    <p v-if="page.props.errors?.terminal" class="mt-3 text-rose-300">
                        {{ page.props.errors.terminal }}
                    </p>
                </div>
                <form class="flex items-center gap-3 border-t border-slate-800 bg-slate-900 p-4" @submit.prevent="execute">
                    <span class="font-mono text-emerald-300">root@starter-vps:~$</span>
                    <input
                        v-model="form.command"
                        class="min-w-0 flex-1 bg-transparent font-mono text-sm text-white outline-none placeholder:text-slate-600"
                        placeholder="Enter a command"
                        autocomplete="off"
                        :disabled="form.processing"
                    />
                    <button type="submit" class="rounded-lg bg-emerald-500 px-3 py-2 text-xs font-semibold text-slate-950 hover:bg-emerald-400 disabled:opacity-50" :disabled="form.processing">
                        Run
                    </button>
                </form>
            </section>
        </main>
    </div>
</template>