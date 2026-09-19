<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

interface TicketMessage {
    id: number;
    message: string;
    created_at: string;
    user?: {
        first_name?: string;
        last_name?: string;
        role?: string;
    } | null;
}

interface Ticket {
    id: number;
    subject: string;
    status: string;
    created_at: string;
    messages: TicketMessage[];
}

defineProps<{
    ticket: Ticket;
}>();

const statusLabels: Record<string, string> = {
    open: 'Open',
    answered: 'Answered',
    closed: 'Closed',
};

const statusClasses: Record<string, string> = {
    open: 'border-amber-400/30 bg-amber-400/10 text-amber-300',
    answered: 'border-emerald-400/30 bg-emerald-400/10 text-emerald-300',
    closed: 'border-slate-500/40 bg-slate-700/60 text-slate-300',
};

const getStatusLabel = (status: string) => statusLabels[status] ?? 'Unknown';
const getStatusClasses = (status: string) => statusClasses[status] ?? 'border-slate-500/40 bg-slate-700/60 text-slate-300';
const getAuthorName = (message: TicketMessage) => {
    const name = [message.user?.first_name, message.user?.last_name].filter(Boolean).join(' ');

    return name || (message.user?.role === 'admin' ? 'Support team' : 'You');
};
</script>

<template>
    <Head :title="`${ticket.subject} - VelocityRig`" />

    <div class="min-h-screen bg-slate-900 text-slate-100 font-sans">
        <header class="border-b border-slate-800 bg-slate-900/90 backdrop-blur sticky top-0 z-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-indigo-600 flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/20">
                        VR
                    </div>
                    <span class="font-semibold text-lg tracking-tight">VelocityRig</span>
                </div>
                <Link href="/tickets" class="text-sm font-medium text-slate-400 hover:text-slate-200 transition-colors">Back to tickets</Link>
            </div>
        </header>

        <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-wrap items-start justify-between gap-4 mb-8">
                <div>
                    <p class="text-xs text-slate-500">Ticket #{{ ticket.id }}</p>
                    <h1 class="text-3xl font-extrabold text-white tracking-tight mt-1">{{ ticket.subject }}</h1>
                    <p class="text-sm text-slate-500 mt-2">Opened {{ new Date(ticket.created_at).toLocaleDateString() }}</p>
                </div>
                <span
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border text-xs font-semibold"
                    :class="getStatusClasses(ticket.status)"
                >
                    <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                    {{ getStatusLabel(ticket.status) }}
                </span>
            </div>

            <section class="space-y-4">
                <article
                    v-for="message in ticket.messages"
                    :key="message.id"
                    class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-5 shadow-xl"
                >
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <p class="text-sm font-semibold text-slate-200">{{ getAuthorName(message) }}</p>
                        <time class="text-xs text-slate-500">{{ new Date(message.created_at).toLocaleString() }}</time>
                    </div>
                    <p class="text-sm leading-6 text-slate-300 whitespace-pre-wrap">{{ message.message }}</p>
                </article>

                <div v-if="!ticket.messages.length" class="border border-dashed border-slate-700 rounded-2xl p-10 text-center">
                    <p class="text-slate-400">No messages have been added to this ticket yet.</p>
                </div>
            </section>
        </main>
    </div>
</template>
