<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

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
const sortBy = ref<'price_asc' | 'price_desc' | 'cores_desc' | 'ram_desc'>('price_asc');

// --- Filtering & Sorting Logic ---
const filteredOffers = computed(() => {
    return props.offers
        .filter((offer) => {
            // Search Query
            if (search.value && !offer.name.toLowerCase().includes(search.value.toLowerCase())) {
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
            if (minCores.value !== '' && offer.cpu_cores < Number(minCores.value)) {
                return false;
            }
            if (minRam.value !== '' && offer.ram_gb < Number(minRam.value)) {
                return false;
            }
            if (minStorage.value !== '' && offer.storage_gb < Number(minStorage.value)) {
                return false;
            }
            // Billing Durations
            if (selectedDuration.value !== 'all' && !offer.durations.includes(selectedDuration.value)) {
                return false;
            }
            return true;
        })
        .sort((a, b) => {
            if (sortBy.value === 'price_asc') return a.price_monthly - b.price_monthly;
            if (sortBy.value === 'price_desc') return b.price_monthly - a.price_monthly;
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

    <div class="min-h-screen bg-slate-900 text-slate-100 font-sans">
        <!-- Top Navigation -->
        <header class="border-b border-slate-800 bg-slate-900/90 backdrop-blur sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-indigo-600 flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-500/20">
                        VR
                    </div>
                    <span class="font-semibold text-lg tracking-tight">VelocityRig</span>
                </div>
                <Link
                    :href="route('dashboard')"
                    class="text-sm font-medium text-slate-400 hover:text-slate-200 transition-colors"
                >
                    Back to Dashboard
                </Link>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Catalog Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-extrabold text-white tracking-tight">Server Catalog</h1>
                <p class="text-slate-400 mt-1">Select and deploy high-performance virtual or bare-metal instances.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Filters -->
                <aside class="space-y-6 bg-slate-800/60 border border-slate-700/60 rounded-2xl p-5 h-fit backdrop-blur">
                    <div class="flex items-center justify-between border-b border-slate-700/60 pb-3">
                        <h2 class="font-bold text-white text-base">Filter Options</h2>
                        <button @click="resetFilters" class="text-xs text-indigo-400 hover:text-indigo-300 font-medium">
                            Reset All
                        </button>
                    </div>

                    <!-- Search -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Search</label>
                        <input
                            v-model="search"
                            type="text"
                            placeholder="Plan name..."
                            class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                        />
                    </div>

                    <!-- Server Architecture Type -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Server Type</label>
                        <div class="grid grid-cols-3 gap-1 bg-slate-900/80 p-1 rounded-xl border border-slate-700">
                            <button
                                @click="serverType = 'all'"
                                class="py-1.5 text-xs font-medium rounded-lg transition-colors"
                                :class="serverType === 'all' ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white'"
                            >
                                All
                            </button>
                            <button
                                @click="serverType = 'vps'"
                                class="py-1.5 text-xs font-medium rounded-lg transition-colors"
                                :class="serverType === 'vps' ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white'"
                            >
                                VPS
                            </button>
                            <button
                                @click="serverType = 'dedicated'"
                                class="py-1.5 text-xs font-medium rounded-lg transition-colors"
                                :class="serverType === 'dedicated' ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white'"
                            >
                                Dedicated
                            </button>
                        </div>
                    </div>

                    <!-- GPU Capabilities Toggle -->
                    <div class="flex items-center justify-between pt-2 border-t border-slate-700/60">
                        <span class="text-sm font-medium text-slate-300">GPU Acceleration</span>
                        <input
                            v-model="requireGpu"
                            type="checkbox"
                            class="w-4 h-4 rounded border-slate-700 bg-slate-900 text-indigo-600 focus:ring-indigo-500"
                        />
                    </div>

                    <!-- Hardware Minimum Specs -->
                    <div class="space-y-4 pt-2 border-t border-slate-700/60">
                        <div>
                            <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Min CPU Cores</label>
                            <input
                                v-model.number="minCores"
                                type="number"
                                placeholder="e.g. 4"
                                class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                            />
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Min RAM (GB)</label>
                            <input
                                v-model.number="minRam"
                                type="number"
                                placeholder="e.g. 16"
                                class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                            />
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Min Storage (GB)</label>
                            <input
                                v-model.number="minStorage"
                                type="number"
                                placeholder="e.g. 100"
                                class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                            />
                        </div>
                    </div>

                    <!-- Plan Duration Filter -->
                    <div class="pt-2 border-t border-slate-700/60">
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Available Term</label>
                        <select
                            v-model="selectedDuration"
                            class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                        >
                            <option value="all">Any Billing Duration</option>
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>
                </aside>

                <!-- Catalog Grid Content -->
                <section class="lg:col-span-3 space-y-6">
                    <!-- Top Toolbar & Sort -->
                    <div class="flex flex-wrap items-center justify-between gap-4 bg-slate-800/60 border border-slate-700/60 rounded-2xl p-4 backdrop-blur">
                        <p class="text-sm text-slate-400">
                            Showing <span class="font-semibold text-white">{{ filteredOffers.length }}</span> available configurations
                        </p>

                        <div class="flex items-center gap-2">
                            <label class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Sort By:</label>
                            <select
                                v-model="sortBy"
                                class="bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-1.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                            >
                                <option value="price_asc">Price: Low to High</option>
                                <option value="price_desc">Price: High to Low</option>
                                <option value="cores_desc">CPU Cores</option>
                                <option value="ram_desc">RAM Size</option>
                            </select>
                        </div>
                    </div>

                    <!-- Empty State -->
                    <div v-if="filteredOffers.length === 0" class="bg-slate-800/40 border border-dashed border-slate-700 rounded-2xl p-12 text-center space-y-3">
                        <p class="text-slate-400 text-base">No server offers match your selected filter criteria.</p>
                        <button @click="resetFilters" class="px-4 py-2 bg-indigo-600 text-white rounded-xl text-sm font-medium">
                            Clear Filters
                        </button>
                    </div>

                    <!-- Server Cards Grid -->
                    <div v-else class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            v-for="offer in filteredOffers"
                            :key="offer.id"
                            class="bg-slate-800/80 border border-slate-700 rounded-2xl p-6 shadow-xl flex flex-col justify-between space-y-6 hover:border-slate-600 transition-all"
                        >
                            <div class="space-y-4">
                                <!-- Card Header -->
                                <div class="flex items-start justify-between gap-2">
                                    <div>
                                        <h3 class="text-xl font-bold text-white">{{ offer.name }}</h3>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="text-xs font-semibold uppercase px-2 py-0.5 rounded-md bg-indigo-500/10 text-indigo-400 border border-indigo-500/20">
                                                {{ offer.type }}
                                            </span>
                                            <span v-if="offer.has_gpu" class="text-xs font-semibold uppercase px-2 py-0.5 rounded-md bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                                GPU Enabled
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-2xl font-extrabold text-white">${{ offer.price_monthly }}</span>
                                        <span class="text-xs text-slate-400 block">/ mo</span>
                                    </div>
                                </div>

                                <!-- Hardware Specifications Grid -->
                                <div class="grid grid-cols-2 gap-3 pt-2 text-xs">
                                    <div class="bg-slate-900/60 p-2.5 rounded-xl border border-slate-800">
                                        <span class="text-slate-500 block">CPU Cores</span>
                                        <span class="font-semibold text-slate-200">{{ offer.cpu_cores }} Cores</span>
                                    </div>
                                    <div class="bg-slate-900/60 p-2.5 rounded-xl border border-slate-800">
                                        <span class="text-slate-500 block">System RAM</span>
                                        <span class="font-semibold text-slate-200">{{ offer.ram_gb }} GB</span>
                                    </div>
                                    <div class="bg-slate-900/60 p-2.5 rounded-xl border border-slate-800">
                                        <span class="text-slate-500 block">Storage</span>
                                        <span class="font-semibold text-slate-200">{{ offer.storage_gb }} GB {{ offer.storage_type }}</span>
                                    </div>
                                    <div class="bg-slate-900/60 p-2.5 rounded-xl border border-slate-800">
                                        <span class="text-slate-500 block">Bandwidth</span>
                                        <span class="font-semibold text-slate-200">{{ offer.bandwidth_tb }} TB</span>
                                    </div>
                                </div>

                                <!-- Durations -->
                                <div class="pt-1">
                                    <span class="text-xs text-slate-500 block mb-1">Supported Billing Cycles:</span>
                                    <div class="flex flex-wrap gap-1">
                                        <span
                                            v-for="duration in offer.durations"
                                            :key="duration"
                                            class="text-[10px] uppercase font-mono px-2 py-0.5 rounded bg-slate-700/50 text-slate-300 border border-slate-600/40"
                                        >
                                            {{ duration }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Deploy Action -->
                            <Link
                                :href="route('checkout.show', { offer: offer.id })"
                                class="w-full py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white text-center font-semibold rounded-xl shadow-lg shadow-indigo-600/20 transition-all block"
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
