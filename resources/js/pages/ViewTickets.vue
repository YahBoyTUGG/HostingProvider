<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import SiteHeader from '@/components/SiteHeader.vue';

interface TicketMessage {
    body: string;
    created_at: string;
}

interface Ticket {
    id: number;
    subject: string;
    status: string;
    priority: string;
    created_at: string;
    latest_message?: TicketMessage | null;
}

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

const statusDotClasses: Record<string, string> = {
    open: 'bg-amber-300',
    answered: 'bg-emerald-300',
    closed: 'bg-slate-400',
};

const getStatusLabel = (status: string) => statusLabels[status] ?? 'Unknown';
const getStatusClasses = (status: string) =>
    statusClasses[status] ??
    'border-slate-500/40 bg-slate-700/60 text-slate-300';
const getStatusDotClasses = (status: string) =>
    statusDotClasses[status] ?? 'bg-slate-400';

defineProps<{
    tickets: Ticket[];
}>();
</script>

<template>
    <Head title="My Support Tickets - VelocityRig" />

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />

        <main class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <div class="mb-8 flex items-center justify-between gap-4">
                <div>
                    <h1
                        class="text-3xl font-extrabold tracking-tight text-white"
                    >
                        My Support Tickets
                    </h1>
                    <p class="mt-1 text-slate-400">
                        View the support requests you have submitted.
                    </p>
                </div>
                <Link
                    :href="route('tickets.create')"
                    class="rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition-colors hover:bg-indigo-500"
                >
                    Open Ticket
                </Link>
            </div>

            <div v-if="tickets.length" class="space-y-4">
                <article
                    v-for="ticket in tickets"
                    :key="ticket.id"
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/60 p-5 shadow-xl"
                >
                    <Link :href="`/tickets/${ticket.id}`" class="group block">
                        <div
                            class="flex flex-wrap items-start justify-between gap-3"
                        >
                            <div>
                                <p class="text-xs text-slate-500">
                                    Ticket #{{ ticket.id }}
                                </p>
                                <h2
                                    class="mt-1 text-lg font-semibold text-white transition-colors group-hover:text-indigo-300"
                                >
                                    {{ ticket.subject }}
                                </h2>
                            </div>
                            <span
                                class="inline-flex items-center gap-2 rounded-full border px-3 py-1.5 text-xs font-semibold"
                                :class="getStatusClasses(ticket.status)"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full"
                                    :class="getStatusDotClasses(ticket.status)"
                                ></span>
                                {{ getStatusLabel(ticket.status) }}
                            </span>
                        </div>
                        <p class="mt-4 text-xs text-slate-500">
                            Opened
                            {{
                                new Date(ticket.created_at).toLocaleDateString()
                            }}
                            <span v-if="ticket.latest_message">
                                · Latest reply available</span
                            >
                        </p>
                    </Link>
                </article>
            </div>

            <div
                v-else
                class="rounded-2xl border border-dashed border-slate-700 p-12 text-center"
            >
                <h2 class="text-lg font-semibold text-white">
                    No support tickets yet
                </h2>
                <p class="mt-2 text-slate-400">
                    Open a ticket and it will appear here.
                </p>
                <Link
                    :href="route('tickets.create')"
                    class="mt-5 inline-block rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition-colors hover:bg-indigo-500"
                >
                    Open Your First Ticket
                </Link>
            </div>
        </main>
    </div>
</template>
