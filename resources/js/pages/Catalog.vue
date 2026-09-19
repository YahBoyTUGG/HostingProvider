<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import SiteHeader from '@/components/SiteHeader.vue';

defineOptions({
    layout: null,
});

interface ServerOffer {
    id: number;
    name: string;
    type: 'vps' | 'dedicated';
    price_monthly: number;
    cpu_cores: number;
    ram_gb: number;
    storage_gb: number;
    bandwidth_tb: number;
    has_gpu: boolean;
    durations: string[]; // e.g. ['monthly', 'quarterly', 'yearly']
}

const props = defineProps<{
    offers: ServerOffer[];
}>();

// --- Filter & Sort State ---
const search = ref('');
const serverType = ref<'all' | 'vps' | 'dedicated'>('all');
const requireGpu = ref(false);
const minCores = ref<number | ''>('');
const minRam = ref<number | ''>('');
const minStorage = ref<number | ''>('');
const selectedDuration = ref('all');
const sortBy = ref<'price_asc' | 'price_desc' | 'cores_desc' | 'ram_desc'>(
    'price_asc',
);

// --- Filtering & Sorting Logic ---
const filteredOffers = computed(() => {
    return props.offers
        .filter((offer) => {
            // Search Query
            if (
                search.value &&
                !offer.name.toLowerCase().includes(search.value.toLowerCase())
            ) {
                return false;
            }
            // VPS / Dedicated
            if (serverType.value !== 'all' && offer.type !== serverType.value) {
                return false;
            }
            // GPU Capability
            if (requireGpu.value && !offer.has_gpu) {
                return false;
            }
            // Hardware Specs
            if (
                minCores.value !== '' &&
                offer.cpu_cores < Number(minCores.value)
            ) {
                return false;
            }
            if (minRam.value !== '' && offer.ram_gb < Number(minRam.value)) {
                return false;
            }
            if (
                minStorage.value !== '' &&
                offer.storage_gb < Number(minStorage.value)
            ) {
                return false;
            }
            // Billing Durations
            if (
                selectedDuration.value !== 'all' &&
                !offer.durations.includes(selectedDuration.value)
            ) {
                return false;
            }
            return true;
        })
        .sort((a, b) => {
            if (sortBy.value === 'price_asc')
                return a.price_monthly - b.price_monthly;
            if (sortBy.value === 'price_desc')
                return b.price_monthly - a.price_monthly;
            if (sortBy.value === 'cores_desc') return b.cpu_cores - a.cpu_cores;
            if (sortBy.value === 'ram_desc') return b.ram_gb - a.ram_gb;
            return 0;
        });
});

const resetFilters = () => {
    search.value = '';
    serverType.value = 'all';
    requireGpu.value = false;
    minCores.value = '';
    minRam.value = '';
    minStorage.value = '';
    selectedDuration.value = 'all';
    sortBy.value = 'price_asc';
};
</script>

<template>
    <Head title="Server Catalog - Deploy Instances" />

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />

        <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <!-- Catalog Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-extrabold tracking-tight text-white">
                    Server Catalog
                </h1>
                <p class="mt-1 text-slate-400">
                    Select and deploy high-performance virtual or bare-metal
                    instances.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
                <!-- Sidebar Filters -->
                <aside
                    class="h-fit space-y-6 rounded-2xl border border-slate-700/60 bg-slate-800/60 p-5 backdrop-blur"
                >
                    <div
                        class="flex items-center justify-between border-b border-slate-700/60 pb-3"
                    >
                        <h2 class="text-base font-bold text-white">
                            Filter Options
                        </h2>
                        <button
                            @click="resetFilters"
                            class="text-xs font-medium text-indigo-400 hover:text-indigo-300"
                        >
                            Reset All
                        </button>
                    </div>

                    <!-- Search -->
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Search</label
                        >
                        <input
                            v-model="search"
                            type="text"
                            placeholder="Plan name..."
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3 py-2 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                        />
                    </div>

                    <!-- Server Architecture Type -->
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Server Type</label
                        >
                        <div
                            class="grid grid-cols-3 gap-1 rounded-xl border border-slate-700 bg-slate-900/80 p-1"
                        >
                            <button
                                @click="serverType = 'all'"
                                class="rounded-lg py-1.5 text-xs font-medium transition-colors"
                                :class="
                                    serverType === 'all'
                                        ? 'bg-indigo-600 text-white'
                                        : 'text-slate-400 hover:text-white'
                                "
                            >
                                All
                            </button>
                            <button
                                @click="serverType = 'vps'"
                                class="rounded-lg py-1.5 text-xs font-medium transition-colors"
                                :class="
                                    serverType === 'vps'
                                        ? 'bg-indigo-600 text-white'
                                        : 'text-slate-400 hover:text-white'
                                "
                            >
                                VPS
                            </button>
                            <button
                                @click="serverType = 'dedicated'"
                                class="rounded-lg py-1.5 text-xs font-medium transition-colors"
                                :class="
                                    serverType === 'dedicated'
                                        ? 'bg-indigo-600 text-white'
                                        : 'text-slate-400 hover:text-white'
                                "
                            >
                                Dedicated
                            </button>
                        </div>
                    </div>

                    <!-- GPU Capabilities Toggle -->
                    <div
                        class="flex items-center justify-between border-t border-slate-700/60 pt-2"
                    >
                        <span class="text-sm font-medium text-slate-300"
                            >GPU Acceleration</span
                        >
                        <input
                            v-model="requireGpu"
                            type="checkbox"
                            class="h-4 w-4 rounded border-slate-700 bg-slate-900 text-indigo-600 focus:ring-indigo-500"
                        />
                    </div>

                    <!-- Hardware Minimum Specs -->
                    <div class="space-y-4 border-t border-slate-700/60 pt-2">
                        <div>
                            <label
                                class="mb-1 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                                >Min CPU Cores</label
                            >
                            <input
                                v-model.number="minCores"
                                type="number"
                                placeholder="e.g. 4"
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3 py-2 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                            />
                        </div>

                        <div>
                            <label
                                class="mb-1 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                                >Min RAM (GB)</label
                            >
                            <input
                                v-model.number="minRam"
                                type="number"
                                placeholder="e.g. 16"
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3 py-2 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                            />
                        </div>

                        <div>
                            <label
                                class="mb-1 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                                >Min Storage (GB)</label
                            >
                            <input
                                v-model.number="minStorage"
                                type="number"
                                placeholder="e.g. 100"
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3 py-2 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                            />
                        </div>
                    </div>

                    <!-- Plan Duration Filter -->
                    <div class="border-t border-slate-700/60 pt-2">
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Available Term</label
                        >
                        <select
                            v-model="selectedDuration"
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3 py-2 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                        >
                            <option value="all">Any Billing Duration</option>
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>
                </aside>

                <!-- Catalog Grid Content -->
                <section class="space-y-6 lg:col-span-3">
                    <!-- Top Toolbar & Sort -->
                    <div
                        class="flex flex-wrap items-center justify-between gap-4 rounded-2xl border border-slate-700/60 bg-slate-800/60 p-4 backdrop-blur"
                    >
                        <p class="text-sm text-slate-400">
                            Showing
                            <span class="font-semibold text-white">{{
                                filteredOffers.length
                            }}</span>
                            available configurations
                        </p>

                        <div class="flex items-center gap-2">
                            <label
                                class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                                >Sort By:</label
                            >
                            <select
                                v-model="sortBy"
                                class="rounded-xl border border-slate-700 bg-slate-900/80 px-3 py-1.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                            >
                                <option value="price_asc">
                                    Price: Low to High
                                </option>
                                <option value="price_desc">
                                    Price: High to Low
                                </option>
                                <option value="cores_desc">CPU Cores</option>
                                <option value="ram_desc">RAM Size</option>
                            </select>
                        </div>
                    </div>

                    <!-- Empty State -->
                    <div
                        v-if="filteredOffers.length === 0"
                        class="space-y-3 rounded-2xl border border-dashed border-slate-700 bg-slate-800/40 p-12 text-center"
                    >
                        <p class="text-base text-slate-400">
                            No server offers match your selected filter
                            criteria.
                        </p>
                        <button
                            @click="resetFilters"
                            class="rounded-xl bg-indigo-600 px-4 py-2 text-sm font-medium text-white"
                        >
                            Clear Filters
                        </button>
                    </div>

                    <!-- Server Cards Grid -->
                    <div v-else class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div
                            v-for="offer in filteredOffers"
                            :key="offer.id"
                            class="flex flex-col justify-between space-y-6 rounded-2xl border border-slate-700 bg-slate-800/80 p-6 shadow-xl transition-all hover:border-slate-600"
                        >
                            <div class="space-y-4">
                                <!-- Card Header -->
                                <div
                                    class="flex items-start justify-between gap-2"
                                >
                                    <div>
                                        <h3
                                            class="text-xl font-bold text-white"
                                        >
                                            {{ offer.name }}
                                        </h3>
                                        <div
                                            class="mt-1 flex items-center gap-2"
                                        >
                                            <span
                                                class="rounded-md border border-indigo-500/20 bg-indigo-500/10 px-2 py-0.5 text-xs font-semibold text-indigo-400 uppercase"
                                            >
                                                {{ offer.type }}
                                            </span>
                                            <span
                                                v-if="offer.has_gpu"
                                                class="rounded-md border border-purple-500/20 bg-purple-500/10 px-2 py-0.5 text-xs font-semibold text-purple-400 uppercase"
                                            >
                                                GPU Enabled
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span
                                            class="text-2xl font-extrabold text-white"
                                            >${{ offer.price_monthly }}</span
                                        >
                                        <span
                                            class="block text-xs text-slate-400"
                                            >/ mo</span
                                        >
                                    </div>
                                </div>

                                <!-- Hardware Specifications Grid -->
                                <div
                                    class="grid grid-cols-2 gap-3 pt-2 text-xs"
                                >
                                    <div
                                        class="rounded-xl border border-slate-800 bg-slate-900/60 p-2.5"
                                    >
                                        <span class="block text-slate-500"
                                            >CPU Cores</span
                                        >
                                        <span
                                            class="font-semibold text-slate-200"
                                            >{{ offer.cpu_cores }} Cores</span
                                        >
                                    </div>
                                    <div
                                        class="rounded-xl border border-slate-800 bg-slate-900/60 p-2.5"
                                    >
                                        <span class="block text-slate-500"
                                            >System RAM</span
                                        >
                                        <span
                                            class="font-semibold text-slate-200"
                                            >{{ offer.ram_gb }} GB</span
                                        >
                                    </div>
                                    <div
                                        class="rounded-xl border border-slate-800 bg-slate-900/60 p-2.5"
                                    >
                                        <span class="block text-slate-500"
                                            >Storage</span
                                        >
                                        <span
                                            class="font-semibold text-slate-200"
                                            >{{ offer.storage_gb }} GB
                                            {{ offer.storage_type }}</span
                                        >
                                    </div>
                                    <div
                                        class="rounded-xl border border-slate-800 bg-slate-900/60 p-2.5"
                                    >
                                        <span class="block text-slate-500"
                                            >Bandwidth</span
                                        >
                                        <span
                                            class="font-semibold text-slate-200"
                                            >{{ offer.bandwidth_tb }} TB</span
                                        >
                                    </div>
                                </div>

                                <!-- Durations -->
                                <div class="pt-1">
                                    <span
                                        class="mb-1 block text-xs text-slate-500"
                                        >Supported Billing Cycles:</span
                                    >
                                    <div class="flex flex-wrap gap-1">
                                        <span
                                            v-for="duration in offer.durations"
                                            :key="duration"
                                            class="rounded border border-slate-600/40 bg-slate-700/50 px-2 py-0.5 font-mono text-[10px] text-slate-300 uppercase"
                                        >
                                            {{ duration }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Deploy Action -->
                            <Link
                                :href="
                                    route('checkout.show', { offer: offer.id })
                                "
                                class="block w-full rounded-xl bg-indigo-600 py-2.5 text-center font-semibold text-white shadow-lg shadow-indigo-600/20 transition-all hover:bg-indigo-500"
                            >
                                Configure & Deploy
                            </Link>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</template>
