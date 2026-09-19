<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import SiteHeader from '@/components/SiteHeader.vue';

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
const getStatusClasses = (status: string) =>
    statusClasses[status] ??
    'border-slate-500/40 bg-slate-700/60 text-slate-300';
const getAuthorName = (message: TicketMessage) => {
    const name = [message.user?.first_name, message.user?.last_name]
        .filter(Boolean)
        .join(' ');

    return name || (message.user?.role === 'admin' ? 'Support team' : 'You');
};
</script>

<template>
    <Head :title="`${ticket.subject} - VelocityRig`" />

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />

        <main class="mx-auto max-w-4xl px-4 py-12 sm:px-6 lg:px-8">
            <div class="mb-8 flex flex-wrap items-start justify-between gap-4">
                <div>
                    <p class="text-xs text-slate-500">
                        Ticket #{{ ticket.id }}
                    </p>
                    <h1
                        class="mt-1 text-3xl font-extrabold tracking-tight text-white"
                    >
                        {{ ticket.subject }}
                    </h1>
                    <p class="mt-2 text-sm text-slate-500">
                        Opened
                        {{ new Date(ticket.created_at).toLocaleDateString() }}
                    </p>
                </div>
                <span
                    class="inline-flex items-center gap-2 rounded-full border px-3 py-1.5 text-xs font-semibold"
                    :class="getStatusClasses(ticket.status)"
                >
                    <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
                    {{ getStatusLabel(ticket.status) }}
                </span>
            </div>

            <section class="space-y-4">
                <article
                    v-for="message in ticket.messages"
                    :key="message.id"
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/60 p-5 shadow-xl"
                >
                    <div class="mb-3 flex items-center justify-between gap-3">
                        <p class="text-sm font-semibold text-slate-200">
                            {{ getAuthorName(message) }}
                        </p>
                        <time class="text-xs text-slate-500">{{
                            new Date(message.created_at).toLocaleString()
                        }}</time>
                    </div>
                    <p
                        class="text-sm leading-6 whitespace-pre-wrap text-slate-300"
                    >
                        {{ message.message }}
                    </p>
                </article>

                <div
                    v-if="!ticket.messages.length"
                    class="rounded-2xl border border-dashed border-slate-700 p-10 text-center"
                >
                    <p class="text-slate-400">
                        No messages have been added to this ticket yet.
                    </p>
                </div>
            </section>
        </main>
    </div>
</template>
