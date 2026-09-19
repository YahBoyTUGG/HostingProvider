<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import SiteHeader from '@/components/SiteHeader.vue';

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
        },
    );
};

const cancelSubscription = (subscriptionId: number) => {
    if (
        confirm(
            'Are you sure you want to cancel this subscription? The server will be stopped immediately.',
        )
    ) {
        processingCancelId.value = subscriptionId;
        router.post(
            route('subscriptions.cancel', subscriptionId),
            {},
            {
                preserveScroll: true,
                onFinish: () => (processingCancelId.value = null),
            },
        );
    }
};
</script>

<template>
    <Head title="User Dashboard - Server Management" />

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />
        <span>{{ $page.props.flash.success }}</span>

        <main class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <!-- Dashboard Overview Stats -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 backdrop-blur"
                >
                    <p
                        class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                    >
                        Active Instances
                    </p>
                    <div class="mt-2 flex items-baseline justify-between">
                        <span class="text-3xl font-extrabold text-white">{{
                            activeSubscriptions.length
                        }}</span>
                        <span
                            class="rounded-md border border-emerald-500/20 bg-emerald-500/10 px-2 py-0.5 text-xs font-medium text-emerald-400"
                        >
                            Operational
                        </span>
                    </div>
                </div>

                <div
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 backdrop-blur"
                >
                    <p
                        class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                    >
                        Estimated Monthly Spend
                    </p>
                    <div class="mt-2 flex items-baseline justify-between">
                        <span class="text-3xl font-extrabold text-white"
                            >${{
                                monthlySpend ? monthlySpend.toFixed(2) : '0.00'
                            }}</span
                        >
                        <span class="text-xs text-slate-400">USD / mo</span>
                    </div>
                </div>

                <div
                    class="flex items-center justify-between rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 backdrop-blur"
                >
                    <div>
                        <p
                            class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                        >
                            Expand Fleet
                        </p>
                        <p class="mt-1 text-sm text-slate-300">
                            Deploy high-performance VPS or Bare Metal servers.
                        </p>
                    </div>
                    <Link
                        :href="route('home')"
                        class="shrink-0 rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-600/30 transition-all hover:bg-indigo-500"
                    >
                        + New Server
                    </Link>
                </div>
            </div>

            <!-- Active Virtual Machines Section -->
            <section class="space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">
                        Active Provisioned Servers
                    </h2>
                    <span class="text-sm text-slate-400"
                        >{{ activeSubscriptions.length }} Servers Running</span
                    >
                </div>

                <div
                    v-if="activeSubscriptions.length === 0"
                    class="space-y-3 rounded-2xl border border-dashed border-slate-700 bg-slate-800/40 p-12 text-center"
                >
                    <p class="text-base text-slate-400">
                        You have no active servers provisioned.
                    </p>
                    <Link
                        :href="route('catalog')"
                        class="inline-block rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-medium text-white"
                    >
                        Browse Server Plans
                    </Link>
                </div>

                <div v-else class="grid grid-cols-1 gap-6">
                    <div
                        v-for="sub in activeSubscriptions"
                        :key="sub.id"
                        class="space-y-6 rounded-2xl border border-slate-700 bg-slate-800/80 p-6 shadow-xl"
                    >
                        <!-- Server Card Header -->
                        <div
                            class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-700/60 pb-4"
                        >
                            <div class="space-y-1">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-lg font-bold text-white">
                                        {{ sub.server_offer?.name }}
                                    </h3>
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-0.5 text-xs font-semibold tracking-wider uppercase"
                                        :class="
                                            sub.virtual_machine?.status ===
                                            'running'
                                                ? 'border border-emerald-500/30 bg-emerald-500/10 text-emerald-400'
                                                : 'border border-rose-500/30 bg-rose-500/10 text-rose-400'
                                        "
                                    >
                                        <span
                                            class="h-1.5 w-1.5 rounded-full"
                                            :class="
                                                sub.virtual_machine?.status ===
                                                'running'
                                                    ? 'animate-pulse bg-emerald-400'
                                                    : 'bg-rose-400'
                                            "
                                        ></span>
                                        {{
                                            sub.virtual_machine?.status ||
                                            'provisioning'
                                        }}
                                    </span>
                                </div>
                                <p class="font-mono text-xs text-slate-400">
                                    Hostname: {{ sub.virtual_machine?.name }}
                                </p>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center gap-3">
                                <button
                                    @click="togglePower(sub.id)"
                                    :disabled="processingPowerId === sub.id"
                                    class="flex items-center gap-2 rounded-xl border px-4 py-2 text-xs font-semibold shadow-sm transition-all"
                                    :class="
                                        sub.virtual_machine?.status ===
                                        'running'
                                            ? 'border-amber-500/30 bg-amber-500/10 text-amber-400 hover:bg-amber-500/20'
                                            : 'border-emerald-500/30 bg-emerald-500/10 text-emerald-400 hover:bg-emerald-500/20'
                                    "
                                >
                                    <span
                                        v-if="processingPowerId === sub.id"
                                        class="animate-spin"
                                        >...</span
                                    >
                                    <span>{{
                                        sub.virtual_machine?.status ===
                                        'running'
                                            ? 'Stop Instance'
                                            : 'Start Instance'
                                    }}</span>
                                </button>

                                <button
                                    @click="cancelSubscription(sub.id)"
                                    :disabled="processingCancelId === sub.id"
                                    class="rounded-xl border border-rose-500/20 bg-rose-500/10 px-3 py-2 text-xs font-semibold text-rose-400 transition-all hover:bg-rose-500/20"
                                >
                                    Cancel Plan
                                </button>
                            </div>
                        </div>

                        <!-- Technical Specs Grid -->
                        <div
                            class="grid grid-cols-2 gap-4 text-sm md:grid-cols-4"
                        >
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >IP Address</span
                                >
                                <span
                                    class="font-mono font-medium text-slate-200"
                                    >{{ sub.virtual_machine?.ip_address }}</span
                                >
                            </div>
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >Operating System</span
                                >
                                <span class="font-medium text-slate-200">{{
                                    sub.virtual_machine?.operating_system
                                        ?.full_name
                                }}</span>
                            </div>
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >SSH Connection</span
                                >
                                <span class="font-mono text-xs text-slate-300"
                                    >ssh {{ sub.virtual_machine?.ssh_user }}@{{
                                        sub.virtual_machine?.ip_address
                                    }}</span
                                >
                            </div>
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >Billing Term</span
                                >
                                <span
                                    class="font-medium text-slate-200 capitalize"
                                    >{{
                                        sub.billing_cycle?.replace('_', ' ')
                                    }}
                                    (${{ sub.cost }})</span
                                >
                            </div>
                        </div>

                        <!-- Installed Apps -->
                        <div
                            v-if="
                                sub.virtual_machine?.preinstalled_apps?.length
                            "
                            class="flex items-center gap-2 pt-2"
                        >
                            <span
                                class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                                >Installed Addons:</span
                            >
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    v-for="app in sub.virtual_machine
                                        .preinstalled_apps"
                                    :key="app.id"
                                    class="rounded-md border border-slate-600/50 bg-slate-700/60 px-2 py-0.5 text-xs text-slate-300"
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
                <h2 class="text-xl font-bold text-white">
                    Billing & Subscription History
                </h2>

                <div
                    class="overflow-hidden rounded-2xl border border-slate-700/60 bg-slate-800/60 shadow-xl"
                >
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead
                            class="border-b border-slate-700 bg-slate-900/80 text-xs font-semibold text-slate-400 uppercase"
                        >
                            <tr>
                                <th class="px-6 py-4">Server Offer</th>
                                <th class="px-6 py-4">Cycle</th>
                                <th class="px-6 py-4">Cost</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Renews / Expiration</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-700/50">
                            <tr
                                v-for="item in subscriptionHistory"
                                :key="item.id"
                                class="transition-colors hover:bg-slate-700/20"
                            >
                                <td class="px-6 py-4 font-medium text-white">
                                    {{ item.server_offer?.name }}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    {{ item.billing_cycle?.replace('_', ' ') }}
                                </td>
                                <td class="px-6 py-4 font-mono">
                                    ${{ item.cost }}
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="rounded-md px-2 py-1 text-xs font-semibold capitalize"
                                        :class="
                                            item.status === 'active'
                                                ? 'bg-emerald-500/10 text-emerald-400'
                                                : 'bg-slate-700 text-slate-400'
                                        "
                                    >
                                        {{ item.status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-xs text-slate-400">
                                    {{
                                        item.ends_at
                                            ? new Date(
                                                  item.ends_at,
                                              ).toLocaleDateString()
                                            : 'N/A'
                                    }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</template>
