<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

interface ServerOffer {
    id: number;
    name: string;
    type: string;
    ram_gb: number;
    cpu_cores: number;
    storage_amount_gb: number;
    storage_type: string;
    bandwidth_tb: number;
    gpu_model: string | null;
    price_monthly: string;
    country: string;
    city: string;
}

interface FeaturedOffer {
    id: number;
    badge: string | null;
    button_text: string;
    is_highlighted: boolean;
    server_offer: ServerOffer;
}

interface Props {
    auth?: {
        user?: Record<string, any> | null;
    };
    featured_offers: FeaturedOffer[];
}

defineProps<Props>();
</script>

<template>
    <Head title="High-Performance VPS & Dedicated Hosting" />

    <div class="min-h-screen bg-[#0b0f19] text-slate-100 font-sans selection:bg-indigo-500 selection:text-white flex flex-col justify-between">
        <!-- Top Navigation -->
        <header class="border-b border-slate-800/80 bg-[#0b0f19]/80 backdrop-blur-md sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
                <Link :href="route('home')" class="flex items-center gap-3">
                    <div class="h-10 w-10 rounded-xl bg-indigo-600 flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-600/30">
                        VR
                    </div>
                    <span class="text-xl font-bold tracking-tight text-white">Velocity<span class="text-indigo-500">Rig</span></span>
                </Link>

                <nav class="flex items-center gap-4">
                    <template v-if="auth?.user">
                        <Link
                            :href="route('dashboard')"
                            class="px-5 py-2.5 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-500 transition shadow-md shadow-indigo-600/20 text-sm"
                        >
                            Dashboard
                        </Link>
                    </template>
                    <template v-else>
                        <Link
                            :href="route('login')"
                            class="text-sm font-medium text-slate-300 hover:text-white transition px-3 py-2"
                        >
                            Sign In
                        </Link>
                        <Link
                            :href="route('register')"
                            class="px-5 py-2.5 rounded-lg bg-indigo-600 text-white font-medium hover:bg-indigo-500 transition shadow-md shadow-indigo-600/20 text-sm"
                        >
                            Get Started
                        </Link>
                    </template>
                </nav>
            </div>
        </header>

        <!-- Main Content Section -->
        <main class="max-w-7xl mx-auto px-6 py-16 w-full flex-grow">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-4">
                    High-Performance Compute Fleets
                </h1>
                <p class="text-slate-400 text-base">
                    Deploy instantly provisioned VPS and Dedicated bare-metal instances built on low-latency NVMe arrays.
                </p>
            </div>

            <!-- Featured Server Cards Grid (pt-6 allows space for absolute badges) -->
            <div v-if="featured_offers && featured_offers.length > 0" class="grid lg:grid-cols-3 gap-8 items-stretch pt-6">
                <div
                    v-for="item in featured_offers"
                    :key="item.id"
                    :class="[
                        'p-8 rounded-2xl flex flex-col justify-between transition relative',
                        item.is_highlighted
                            ? 'bg-slate-900 border-2 border-indigo-500 shadow-2xl shadow-indigo-600/20 ring-1 ring-indigo-500/50'
                            : 'bg-slate-900/50 border border-slate-800/80 hover:border-slate-700'
                    ]"
                >
                    <!-- Floating Badge -->
                    <div
                        v-if="item.badge || item.is_highlighted"
                        class="absolute -top-3.5 left-1/2 -translate-x-1/2 px-3.5 py-1 rounded-full bg-indigo-600 text-white text-[11px] font-bold uppercase tracking-wider shadow-md shadow-indigo-600/30 whitespace-nowrap z-10"
                    >
                        {{ item.badge || 'Featured' }}
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-white mb-1">{{ item.server_offer.name }}</h3>
                        <p class="text-xs text-indigo-400 uppercase tracking-widest font-semibold mb-6">
                            {{ item.server_offer.type }} &bull; {{ item.server_offer.city }}, {{ item.server_offer.country }}
                        </p>

                        <div class="flex items-baseline gap-1 mb-8">
                            <span class="text-4xl font-extrabold text-white">${{ item.server_offer.price_monthly }}</span>
                            <span class="text-slate-400 text-sm">/month</span>
                        </div>

                        <!-- Hardware Specs -->
                        <ul class="space-y-3.5 mb-8 text-sm text-slate-300">
                            <li class="flex items-center gap-3">
                                <span class="text-indigo-400">⚡</span>
                                <span>{{ item.server_offer.cpu_cores }} vCPU Cores</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-indigo-400">🧠</span>
                                <span>{{ item.server_offer.ram_gb }} GB DDR RAM</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-indigo-400">💾</span>
                                <span>{{ item.server_offer.storage_amount_gb }} GB {{ item.server_offer.storage_type }}</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="text-indigo-400">🌐</span>
                                <span>{{ item.server_offer.bandwidth_tb }} TB Bandwidth</span>
                            </li>
                            <li v-if="item.server_offer.gpu_model" class="flex items-center gap-3">
                                <span class="text-indigo-400">🎮</span>
                                <span>{{ item.server_offer.gpu_model }}</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Direct Order Action Link -->
                    <Link
                        :href="route('checkout.show', item.server_offer.id)"
                        :class="[
                            'w-full text-center py-3.5 rounded-xl font-semibold transition text-sm shadow-md',
                            item.is_highlighted
                                ? 'bg-indigo-600 text-white hover:bg-indigo-500 shadow-indigo-600/30'
                                : 'bg-slate-800 text-slate-200 hover:bg-slate-700 hover:text-white'
                        ]"
                    >
                        {{ item.button_text }}
                    </Link>
                </div>
            </div>

            <!-- Fallback Empty State -->
            <div v-else class="text-center py-20 text-slate-400">
                No active featured server offers found.
            </div>
        </main>

        <!-- Footer -->
        <footer class="border-t border-slate-800/80 py-8 px-6 text-center text-xs text-slate-500">
            <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; {{ new Date().getFullYear() }} VelocityRig. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-slate-400 transition">Terms</a>
                    <a href="#" class="hover:text-slate-400 transition">Privacy</a>
                    <a href="#" class="hover:text-slate-400 transition">Support</a>
                </div>
            </div>
        </footer>
    </div>
</template>
