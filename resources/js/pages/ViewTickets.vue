<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

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
const getStatusClasses = (status: string) => statusClasses[status] ?? 'border-slate-500/40 bg-slate-700/60 text-slate-300';
const getStatusDotClasses = (status: string) => statusDotClasses[status] ?? 'bg-slate-400';

defineProps<{
    tickets: Ticket[];
}>();
</script>

<template>
    <Head title="My Support Tickets - VelocityRig" />

    <div class="min-h-screen bg-slate-900 text-slate-100 font-sans">
        <header class="border-b border-slate-800 bg-slate-900/90 backdrop-blur sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-indigo-600 flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/20">
                        VR
                    </div>
                    <span class="font-semibold text-lg tracking-tight">VelocityRig</span>
                </div>
                <div class="flex items-center gap-6 text-sm font-medium">
                    <Link :href="route('dashboard')" class="text-slate-400 hover:text-slate-200 transition-colors">Dashboard</Link>
                    <Link :href="route('tickets.create')" class="text-indigo-400 hover:text-indigo-300">New Ticket</Link>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex items-center justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-3xl font-extrabold text-white tracking-tight">My Support Tickets</h1>
                    <p class="text-slate-400 mt-1">View the support requests you have submitted.</p>
                </div>
                <Link
                    :href="route('tickets.create')"
                    class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white rounded-xl text-sm font-semibold transition-colors"
                >
                    Open Ticket
                </Link>
            </div>

            <div v-if="tickets.length" class="space-y-4">
                <article
                    v-for="ticket in tickets"
                    :key="ticket.id"
                    class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-5 shadow-xl"
                >
                    <Link :href="`/tickets/${ticket.id}`" class="block group">
                        <div class="flex flex-wrap items-start justify-between gap-3">
                            <div>
                                <p class="text-xs text-slate-500">Ticket #{{ ticket.id }}</p>
                                <h2 class="text-lg font-semibold text-white mt-1 group-hover:text-indigo-300 transition-colors">{{ ticket.subject }}</h2>
                            </div>
                            <span
                                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border text-xs font-semibold"
                                :class="getStatusClasses(ticket.status)"
                            >
                                <span class="w-1.5 h-1.5 rounded-full" :class="getStatusDotClasses(ticket.status)"></span>
                                {{ getStatusLabel(ticket.status) }}
                            </span>
                        </div>
                        <p class="text-xs text-slate-500 mt-4">
                            Opened {{ new Date(ticket.created_at).toLocaleDateString() }}
                            <span v-if="ticket.latest_message"> · Latest reply available</span>
                        </p>
                    </Link>
                </article>
            </div>

            <div v-else class="border border-dashed border-slate-700 rounded-2xl p-12 text-center">
                <h2 class="text-lg font-semibold text-white">No support tickets yet</h2>
                <p class="text-slate-400 mt-2">Open a ticket and it will appear here.</p>
                <Link
                    :href="route('tickets.create')"
                    class="inline-block mt-5 px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white rounded-xl text-sm font-semibold transition-colors"
                >
                    Open Your First Ticket
                </Link>
            </div>
        </main>
    </div>
</template>
