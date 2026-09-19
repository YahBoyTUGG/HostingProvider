<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    Activity,
    ArrowRight,
    Gauge,
    Headphones,
    ShieldCheck,
    Zap,
} from '@lucide/vue';
import SiteHeader from '@/components/SiteHeader.vue';

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

    <div
        class="flex min-h-screen flex-col justify-between bg-[#0b0f19] font-sans text-slate-100 selection:bg-indigo-500 selection:text-white"
    >
        <SiteHeader />

        <main class="mx-auto w-full max-w-7xl flex-grow px-6 py-12 sm:py-16">
            <section
                class="relative overflow-hidden rounded-t-3xl rounded-b-none border border-indigo-500/20 bg-slate-900 px-6 py-12 shadow-2xl shadow-indigo-950/30 sm:px-12 lg:px-16 lg:py-16"
            >
                <div
                    class="pointer-events-none absolute -top-32 -right-24 h-80 w-80 rounded-full bg-indigo-600/15 blur-3xl"
                ></div>
                <div class="relative max-w-3xl">
                    <p
                        class="mb-5 text-xs font-semibold tracking-[0.24em] text-indigo-300 uppercase"
                    >
                        VelocityRig infrastructure
                    </p>
                    <h1
                        class="max-w-3xl text-4xl leading-tight font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl"
                    >
                        Compute that keeps your next big idea moving.
                    </h1>
                    <p
                        class="mt-6 max-w-2xl text-base leading-7 text-slate-300 sm:text-lg"
                    >
                        Launch dependable VPS and dedicated servers with fast
                        NVMe storage, predictable resources, and infrastructure
                        built for demanding workloads.
                    </p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <Link
                            href="/catalog"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/25 transition hover:bg-indigo-500"
                        >
                            Explore the catalog
                            <ArrowRight class="h-4 w-4" />
                        </Link>
                        <Link
                            href="/about"
                            class="inline-flex items-center justify-center rounded-xl border border-slate-700 px-5 py-3 text-sm font-semibold text-slate-200 transition hover:border-slate-500 hover:bg-slate-800"
                        >
                            Meet the team
                        </Link>
                    </div>
                </div>
            </section>

            <section
                class="relative z-0 -mt-px grid overflow-hidden rounded-b-2xl border-x border-b border-slate-800 bg-slate-900/45 sm:grid-cols-3"
                aria-label="Infrastructure highlights"
            >
                <div
                    class="flex items-center gap-3 border-b border-slate-800 px-5 py-5 sm:border-r sm:border-b-0"
                >
                    <Zap class="h-5 w-5 text-indigo-400" />
                    <div>
                        <p class="text-sm font-semibold text-white">
                            Fast provisioning
                        </p>
                        <p class="mt-1 text-xs text-slate-500">
                            Get online without the wait
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center gap-3 border-b border-slate-800 px-5 py-5 sm:border-r sm:border-b-0"
                >
                    <ShieldCheck class="h-5 w-5 text-emerald-400" />
                    <div>
                        <p class="text-sm font-semibold text-white">
                            Reliable by design
                        </p>
                        <p class="mt-1 text-xs text-slate-500">
                            Resources you can count on
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-3 px-5 py-5">
                    <Headphones class="h-5 w-5 text-amber-300" />
                    <div>
                        <p class="text-sm font-semibold text-white">
                            Human support
                        </p>
                        <p class="mt-1 text-xs text-slate-500">
                            Help when your workload matters
                        </p>
                    </div>
                </div>
            </section>

            <section class="pt-20">
                <div
                    class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-end"
                >
                    <div>
                        <p
                            class="text-xs font-semibold tracking-[0.2em] text-indigo-400 uppercase"
                        >
                            Featured capacity
                        </p>
                        <h2
                            class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl"
                        >
                            Start with the right amount of power.
                        </h2>
                    </div>
                    <Link
                        href="/catalog"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-300 transition hover:text-indigo-200"
                    >
                        View full catalog
                        <ArrowRight class="h-4 w-4" />
                    </Link>
                </div>

                <div
                    v-if="featured_offers && featured_offers.length > 0"
                    class="grid items-stretch gap-8 pt-6 lg:grid-cols-3"
                >
                    <div
                        v-for="item in featured_offers"
                        :key="item.id"
                        :class="[
                            'relative flex flex-col justify-between rounded-2xl p-8 transition',
                            item.is_highlighted
                                ? 'border-2 border-indigo-500 bg-slate-900 shadow-2xl ring-1 shadow-indigo-600/20 ring-indigo-500/50'
                                : 'border border-slate-800/80 bg-slate-900/50 hover:border-slate-700',
                        ]"
                    >
                        <!-- Floating Badge -->
                        <div
                            v-if="item.badge || item.is_highlighted"
                            class="absolute -top-3.5 left-1/2 z-10 -translate-x-1/2 rounded-full bg-indigo-600 px-3.5 py-1 text-[11px] font-bold tracking-wider whitespace-nowrap text-white uppercase shadow-md shadow-indigo-600/30"
                        >
                            {{ item.badge || 'Featured' }}
                        </div>

                        <div>
                            <h3 class="mb-1 text-xl font-bold text-white">
                                {{ item.server_offer.name }}
                            </h3>
                            <p
                                class="mb-6 text-xs font-semibold tracking-widest text-indigo-400 uppercase"
                            >
                                {{ item.server_offer.type }} &bull;
                                {{ item.server_offer.city }},
                                {{ item.server_offer.country }}
                            </p>

                            <div class="mb-8 flex items-baseline gap-1">
                                <span class="text-4xl font-extrabold text-white"
                                    >${{
                                        item.server_offer.price_monthly
                                    }}</span
                                >
                                <span class="text-sm text-slate-400"
                                    >/month</span
                                >
                            </div>

                            <!-- Hardware Specs -->
                            <ul class="mb-8 space-y-3.5 text-sm text-slate-300">
                                <li class="flex items-center gap-3">
                                    <span class="text-indigo-400">⚡</span>
                                    <span
                                        >{{ item.server_offer.cpu_cores }} vCPU
                                        Cores</span
                                    >
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="text-indigo-400">🧠</span>
                                    <span
                                        >{{ item.server_offer.ram_gb }} GB DDR
                                        RAM</span
                                    >
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="text-indigo-400">💾</span>
                                    <span
                                        >{{
                                            item.server_offer.storage_amount_gb
                                        }}
                                        GB
                                        {{
                                            item.server_offer.storage_type
                                        }}</span
                                    >
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="text-indigo-400">🌐</span>
                                    <span
                                        >{{ item.server_offer.bandwidth_tb }} TB
                                        Bandwidth</span
                                    >
                                </li>
                                <li
                                    v-if="item.server_offer.gpu_model"
                                    class="flex items-center gap-3"
                                >
                                    <span class="text-indigo-400">🎮</span>
                                    <span>{{
                                        item.server_offer.gpu_model
                                    }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Direct Order Action Link -->
                        <Link
                            :href="route('checkout.show', item.server_offer.id)"
                            :class="[
                                'w-full rounded-xl py-3.5 text-center text-sm font-semibold shadow-md transition',
                                item.is_highlighted
                                    ? 'bg-indigo-600 text-white shadow-indigo-600/30 hover:bg-indigo-500'
                                    : 'bg-slate-800 text-slate-200 hover:bg-slate-700 hover:text-white',
                            ]"
                        >
                            {{ item.button_text }}
                        </Link>
                    </div>
                </div>

                <div v-else class="py-20 text-center text-slate-400">
                    No active featured server offers found.
                </div>
            </section>

            <section
                class="grid gap-6 border-y border-slate-800 py-20 md:grid-cols-3"
            >
                <div class="md:col-span-1">
                    <p
                        class="text-xs font-semibold tracking-[0.2em] text-indigo-400 uppercase"
                    >
                        Built for serious workloads
                    </p>
                    <h2
                        class="mt-3 text-3xl font-bold tracking-tight text-white"
                    >
                        Less infrastructure friction. More room to build.
                    </h2>
                </div>
                <div class="grid gap-5 sm:grid-cols-2 md:col-span-2">
                    <div class="border-l border-slate-700 pl-5">
                        <Gauge class="h-5 w-5 text-indigo-400" />
                        <h3 class="mt-4 font-semibold text-white">
                            Predictable performance
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Choose the CPU, memory, storage, and bandwidth
                            profile that fits your workload.
                        </p>
                    </div>
                    <div class="border-l border-slate-700 pl-5">
                        <Activity class="h-5 w-5 text-emerald-400" />
                        <h3 class="mt-4 font-semibold text-white">
                            Room to scale
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Start lean and move to a larger plan as your
                            applications and customers grow.
                        </p>
                    </div>
                    <div class="border-l border-slate-700 pl-5">
                        <ShieldCheck class="h-5 w-5 text-amber-300" />
                        <h3 class="mt-4 font-semibold text-white">
                            Clear, capable hosting
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Straightforward plans and visible specifications
                            make it easier to choose confidently.
                        </p>
                    </div>
                    <div class="border-l border-slate-700 pl-5">
                        <Headphones class="h-5 w-5 text-sky-300" />
                        <h3 class="mt-4 font-semibold text-white">
                            Support that speaks human
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-slate-400">
                            Reach the team through support tickets when you need
                            a real answer, not a maze.
                        </p>
                    </div>
                </div>
            </section>

            <section class="py-20">
                <div
                    class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-center"
                >
                    <div>
                        <p
                            class="text-xs font-semibold tracking-[0.2em] text-indigo-400 uppercase"
                        >
                            A simpler launch path
                        </p>
                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight text-white"
                        >
                            From plan to production in three steps.
                        </h2>
                        <p class="mt-4 leading-7 text-slate-400">
                            Everything you need to move from an infrastructure
                            idea to a running instance without unnecessary
                            ceremony.
                        </p>
                    </div>
                    <div class="grid gap-4 sm:grid-cols-3">
                        <div
                            class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5"
                        >
                            <span class="text-sm font-bold text-indigo-300"
                                >01</span
                            >
                            <h3 class="mt-8 font-semibold text-white">
                                Choose
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                Compare plans by the resources your application
                                actually needs.
                            </p>
                        </div>
                        <div
                            class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5"
                        >
                            <span class="text-sm font-bold text-indigo-300"
                                >02</span
                            >
                            <h3 class="mt-8 font-semibold text-white">
                                Configure
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                Select your term and complete checkout with a
                                clear monthly price.
                            </p>
                        </div>
                        <div
                            class="rounded-2xl border border-slate-800 bg-slate-900/60 p-5"
                        >
                            <span class="text-sm font-bold text-indigo-300"
                                >03</span
                            >
                            <h3 class="mt-8 font-semibold text-white">
                                Deploy
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-slate-400">
                                Get access to your provisioned instance and
                                start building.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="flex flex-col items-start justify-between gap-6 rounded-3xl border border-indigo-500/30 bg-indigo-500/10 px-6 py-10 sm:flex-row sm:items-center sm:px-10"
            >
                <div>
                    <p
                        class="text-xs font-semibold tracking-[0.2em] text-indigo-300 uppercase"
                    >
                        Ready when you are
                    </p>
                    <h2 class="mt-2 text-2xl font-bold text-white">
                        Find a home for your next workload.
                    </h2>
                </div>
                <Link
                    href="/catalog"
                    class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-slate-200"
                >
                    Browse plans
                    <ArrowRight class="h-4 w-4" />
                </Link>
            </section>
        </main>
    </div>
</template>
