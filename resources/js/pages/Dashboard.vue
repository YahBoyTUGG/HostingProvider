<script setup lang="ts">
import { Head, Link, router, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    activeSubscriptions: {
        type: Array,
        default: () => [],
    },
    monthlySpend: {
        type: Number,
        default: 0,
    },
    subscriptionHistory: {
        type: Array,
        default: () => [],
    },
    flash: Object,
});

const page = usePage();
const user = page.props.auth?.user || {};

const isProfileMenuOpen = ref(false);
const processingPowerId = ref(null);
const processingCancelId = ref(null);

const togglePower = (subscriptionId: number) => {
    processingPowerId.value = subscriptionId;
    router.post(
        route('subscriptions.toggle-power', subscriptionId),
        {},
        {
            preserveScroll: true,
            onFinish: () => (processingPowerId.value = null),
        }
    );
};

const cancelSubscription = (subscriptionId: number) => {
    if (confirm('Are you sure you want to cancel this subscription? The server will be stopped immediately.')) {
        processingCancelId.value = subscriptionId;
        router.post(
            route('subscriptions.cancel', subscriptionId),
            {},
            {
                preserveScroll: true,
                onFinish: () => (processingCancelId.value = null),
            }
        );
    }
};

const logout = () => {
    router.post('/logout');
};
</script>

<template>
    <Head title="User Dashboard - Server Management" />

    <div class="min-h-screen bg-slate-900 text-slate-100 font-sans">
        <!-- Top Navigation Bar -->
        <header class="border-b border-slate-800 bg-slate-900/90 backdrop-blur sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <!-- Brand Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-indigo-600 flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/20">
                        VR
                    </div>
                    <span class="font-semibold text-lg tracking-tight">VelocityRig</span>
                </div>

                <!-- Right Header Controls -->
                <div class="flex items-center gap-4">
                    <Link
                        v-if="user.role === 'admin'"
                        href="/admin/dashboard"
                        class="text-m font-medium text-indigo-400 hover:text-indigo-300 transition-colors hidden sm:inline-block"
                    >
                        Admin Console
                    </Link>

                    <Link
                        :href="route('tickets.index')"
                        class="text-m font-medium text-slate-400 hover:text-slate-200 transition-colors hidden sm:inline-block"
                    >
                        Support Tickets
                    </Link>

                    <div class="h-4 w-px bg-slate-800 hidden sm:block"></div>

                    <!-- User Profile & Settings Dropdown -->
                    <div class="relative">
                        <button
                            @click="isProfileMenuOpen = !isProfileMenuOpen"
                            class="flex items-center gap-3 p-1.5 rounded-xl hover:bg-slate-800/80 border border-transparent hover:border-slate-700 transition-all focus:outline-none"
                        >
                            <div class="w-8 h-8 rounded-lg bg-indigo-500/20 border border-indigo-500/30 flex items-center justify-center font-semibold text-indigo-400 text-xs">
                                {{ user.first_name ? user.first_name[0] : 'U' }}{{ user.last_name ? user.last_name[0] : '' }}
                            </div>
                            <div class="text-left hidden md:block">
                                <p class="text-s font-medium text-slate-200 leading-none">
                                    {{ user.first_name }} {{ user.last_name }}
                                </p>
                                <p class="text-[12px] text-slate-400 leading-tight mt-0.5 truncate max-w-[120px]">
                                    {{ user.email }}
                                </p>
                            </div>
                            <svg class="w-4 h-4 text-slate-400 transition-transform" :class="{ 'rotate-180': isProfileMenuOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Profile Dropdown Menu -->
                        <div
                            v-if="isProfileMenuOpen"
                            @click.outside="isProfileMenuOpen = false"
                            class="absolute right-0 mt-2 w-56 rounded-2xl bg-slate-800 border border-slate-700 shadow-2xl py-2 z-50 text-sm"
                        >
                            <div class="px-4 py-2 border-b border-slate-700/60">
                                <p class="text-xs font-semibold text-white">{{ user.first_name }} {{ user.last_name }}</p>
                                <p class="text-xs text-slate-400 truncate">{{ user.email }}</p>
                            </div>

                            <Link
                                :href="route('profile.edit')"
                                class="w-full flex items-center gap-2 px-4 py-2 text-slate-300 hover:bg-slate-700/50 hover:text-white transition-colors"
                            >
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Account Settings
                            </Link>

                            <div class="my-1 border-t border-slate-700/60"></div>

                            <button
                                @click="logout"
                                class="w-full text-left flex items-center gap-2 px-4 py-2 text-rose-400 hover:bg-rose-500/10 hover:text-rose-300 transition-colors font-medium"
                            >
                                <svg class="w-4 h-4 text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Log Out
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
            <!-- Flash Message Banner -->
            <div v-if="$page.props.flash?.success" class="p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex justify-between items-center">
                <span>{{ $page.props.flash.success }}</span>
            </div>

            <!-- Dashboard Overview Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 backdrop-blur">
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Active Instances</p>
                    <div class="mt-2 flex items-baseline justify-between">
                        <span class="text-3xl font-extrabold text-white">{{ activeSubscriptions.length }}</span>
                        <span class="text-xs font-medium text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md border border-emerald-500/20">
                            Operational
                        </span>
                    </div>
                </div>

                <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 backdrop-blur">
                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Estimated Monthly Spend</p>
                    <div class="mt-2 flex items-baseline justify-between">
                        <span class="text-3xl font-extrabold text-white">${{ monthlySpend ? monthlySpend.toFixed(2) : '0.00' }}</span>
                        <span class="text-xs text-slate-400">USD / mo</span>
                    </div>
                </div>

                <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 backdrop-blur flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Expand Fleet</p>
                        <p class="text-sm text-slate-300 mt-1">Deploy high-performance VPS or Bare Metal servers.</p>
                    </div>
                    <Link
                        :href="route('home')"
                        class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold rounded-xl shadow-lg shadow-indigo-600/30 transition-all shrink-0"
                    >
                        + New Server
                    </Link>
                </div>
            </div>

            <!-- Active Virtual Machines Section -->
            <section class="space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">Active Provisioned Servers</h2>
                    <span class="text-sm text-slate-400">{{ activeSubscriptions.length }} Servers Running</span>
                </div>

                <div v-if="activeSubscriptions.length === 0" class="bg-slate-800/40 border border-dashed border-slate-700 rounded-2xl p-12 text-center space-y-3">
                    <p class="text-slate-400 text-base">You have no active servers provisioned.</p>
                    <Link :href="route('catalog')" class="inline-block px-5 py-2.5 bg-indigo-600 text-white font-medium rounded-xl text-sm">
                        Browse Server Plans
                    </Link>
                </div>

                <div v-else class="grid grid-cols-1 gap-6">
                    <div
                        v-for="sub in activeSubscriptions"
                        :key="sub.id"
                        class="bg-slate-800/80 border border-slate-700 rounded-2xl p-6 shadow-xl space-y-6"
                    >
                        <!-- Server Card Header -->
                        <div class="flex flex-wrap items-center justify-between gap-4 pb-4 border-b border-slate-700/60">
                            <div class="space-y-1">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-lg font-bold text-white">{{ sub.server_offer?.name }}</h3>
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold uppercase tracking-wider"
                                        :class="sub.virtual_machine?.status === 'running' ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/30' : 'bg-rose-500/10 text-rose-400 border border-rose-500/30'"
                                    >
                                        <span class="w-1.5 h-1.5 rounded-full" :class="sub.virtual_machine?.status === 'running' ? 'bg-emerald-400 animate-pulse' : 'bg-rose-400'"></span>
                                        {{ sub.virtual_machine?.status || 'provisioning' }}
                                    </span>
                                </div>
                                <p class="text-xs font-mono text-slate-400">Hostname: {{ sub.virtual_machine?.name }}</p>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center gap-3">
                                <button
                                    @click="togglePower(sub.id)"
                                    :disabled="processingPowerId === sub.id"
                                    class="px-4 py-2 rounded-xl text-xs font-semibold transition-all border shadow-sm flex items-center gap-2"
                                    :class="sub.virtual_machine?.status === 'running'
                                        ? 'bg-amber-500/10 border-amber-500/30 text-amber-400 hover:bg-amber-500/20'
                                        : 'bg-emerald-500/10 border-emerald-500/30 text-emerald-400 hover:bg-emerald-500/20'"
                                >
                                    <span v-if="processingPowerId === sub.id" class="animate-spin">...</span>
                                    <span>{{ sub.virtual_machine?.status === 'running' ? 'Stop Instance' : 'Start Instance' }}</span>
                                </button>

                                <button
                                    @click="cancelSubscription(sub.id)"
                                    :disabled="processingCancelId === sub.id"
                                    class="px-3 py-2 rounded-xl text-xs font-semibold bg-rose-500/10 border border-rose-500/20 text-rose-400 hover:bg-rose-500/20 transition-all"
                                >
                                    Cancel Plan
                                </button>
                            </div>
                        </div>

                        <!-- Technical Specs Grid -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                            <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-800">
                                <span class="text-xs text-slate-500 block">IP Address</span>
                                <span class="font-mono text-slate-200 font-medium">{{ sub.virtual_machine?.ip_address }}</span>
                            </div>
                            <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-800">
                                <span class="text-xs text-slate-500 block">Operating System</span>
                                <span class="text-slate-200 font-medium">{{ sub.virtual_machine?.operating_system?.full_name }}</span>
                            </div>
                            <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-800">
                                <span class="text-xs text-slate-500 block">SSH Connection</span>
                                <span class="font-mono text-slate-300 text-xs">ssh {{ sub.virtual_machine?.ssh_user }}@{{ sub.virtual_machine?.ip_address }}</span>
                            </div>
                            <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-800">
                                <span class="text-xs text-slate-500 block">Billing Term</span>
                                <span class="text-slate-200 font-medium capitalize">{{ sub.billing_cycle?.replace('_', ' ') }} (${{ sub.cost }})</span>
                            </div>
                        </div>

                        <!-- Installed Apps -->
                        <div v-if="sub.virtual_machine?.preinstalled_apps?.length" class="flex items-center gap-2 pt-2">
                            <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Installed Addons:</span>
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    v-for="app in sub.virtual_machine.preinstalled_apps"
                                    :key="app.id"
                                    class="px-2 py-0.5 bg-slate-700/60 text-slate-300 text-xs rounded-md border border-slate-600/50"
                                >
                                    {{ app.name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Subscription History Table -->
            <section class="space-y-4 pt-4">
                <h2 class="text-xl font-bold text-white">Billing & Subscription History</h2>

                <div class="bg-slate-800/60 border border-slate-700/60 rounded-2xl overflow-hidden shadow-xl">
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead class="bg-slate-900/80 text-xs font-semibold uppercase text-slate-400 border-b border-slate-700">
                            <tr>
                                <th class="px-6 py-4">Server Offer</th>
                                <th class="px-6 py-4">Cycle</th>
                                <th class="px-6 py-4">Cost</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Renews / Expiration</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700/50">
                            <tr v-for="item in subscriptionHistory" :key="item.id" class="hover:bg-slate-700/20 transition-colors">
                                <td class="px-6 py-4 font-medium text-white">{{ item.server_offer?.name }}</td>
                                <td class="px-6 py-4 capitalize">{{ item.billing_cycle?.replace('_', ' ') }}</td>
                                <td class="px-6 py-4 font-mono">${{ item.cost }}</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 py-1 rounded-md text-xs font-semibold capitalize"
                                        :class="item.status === 'active' ? 'bg-emerald-500/10 text-emerald-400' : 'bg-slate-700 text-slate-400'"
                                    >
                                        {{ item.status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-xs text-slate-400">
                                    {{ item.ends_at ? new Date(item.ends_at).toLocaleDateString() : 'N/A' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</template>
