<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

defineOptions({
    layout: null,
});

interface TeamMember {
    id: number;
    name: string;
    role: string;
    bio: string;
    email: string;
    avatar: string;
    github?: string;
}

const teamMembers: TeamMember[] = [
    {
        id: 1,
        name: 'Filip Popovski',
        role: 'Founder & Infrastructure Lead',
        bio: 'Specializes in high-availability KVM systems, high-speed routing, and bare-metal server cluster architecture.',
        email: 'filip.popovski@velocityrig.io',
        avatar: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=250',
        github: 'https://github.com/popot-od-vatican',
    },
    {
        id: 2,
        name: 'David Damevski',
        role: 'Chief Network Engineer',
        bio: 'Oversees edge location deployment, anti-DDoS mitigation strategies, and low-latency network interconnects.',
        email: 'david.damevski@velocityrig.io',
        avatar: 'images/staff/david.jpg',
        github: 'https://github.com/KillBastard2'
    },
    {
        id: 3,
        name: 'Aleksandar Noveski',
        role: 'Head of Systems Operations',
        bio: 'Focuses on storage array performance optimizations, hypervisor security, and enterprise support response.',
        email: 'aleksandar.noveski@velocityrig.io',
        avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=250',
        github: 'https://github.com/YahBoyTUGG'
    },
        {
        id: 4,
        name: 'Kiko Noveski',
        role: 'Head of Systems Operations',
        bio: 'Focuses on storage array performance optimizations, hypervisor security, and enterprise support response.',
        email: 'kiko.noveski@velocityrig.io',
        avatar: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=250',
    }
];
</script>

<template>
    <Head title="About Us - VelocityRig" />

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
                <div class="flex items-center gap-6 text-sm font-medium">
                    <Link :href="route('catalog')" class="text-slate-400 hover:text-slate-200 transition-colors">Catalog</Link>
                    <Link :href="route('tickets.index')" class="text-slate-400 hover:text-slate-200 transition-colors">Contact Forum</Link>
                    <Link :href="route('dashboard')" class="text-indigo-400 hover:text-indigo-300 font-semibold">Dashboard</Link>
                </div>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-16">
            <!-- Company Overview Section -->
            <section class="max-w-3xl space-y-4">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-400">Who We Are</span>
                <h1 class="text-4xl font-extrabold text-white tracking-tight sm:text-5xl">
                    High-Performance Compute Infrastructure built for Scale.
                </h1>
                <p class="text-slate-400 text-lg leading-relaxed">
                    Founded in 2024, VelocityRig was built to eliminate the gap between high-end hardware performance and cloud deployment flexibility. We deliver bare-metal dedicated servers and high-speed VPS instances tailored for demanding compute workloads, real-time gaming clusters, and database infrastructure.
                </p>
            </section>

            <!-- Key Company Metrics -->
            <section class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-slate-800/50 border border-slate-700/60 rounded-2xl p-6 backdrop-blur">
                    <div class="text-3xl font-extrabold text-indigo-400">99.99%</div>
                    <div class="text-sm font-medium text-slate-300 mt-1">Uptime SLA Guarantee</div>
                    <div class="text-xs text-slate-500 mt-2">Powered by redundant power feeds and multi-homed BGP network routing.</div>
                </div>
                <div class="bg-slate-800/50 border border-slate-700/60 rounded-2xl p-6 backdrop-blur">
                    <div class="text-3xl font-extrabold text-indigo-400">&lt; 15ms</div>
                    <div class="text-sm font-medium text-slate-300 mt-1">Global Edge Latency</div>
                    <div class="text-xs text-slate-500 mt-2">Strategically deployed across tier-4 data centers worldwide.</div>
                </div>
                <div class="bg-slate-800/50 border border-slate-700/60 rounded-2xl p-6 backdrop-blur">
                    <div class="text-3xl font-extrabold text-indigo-400">24 / 7 / 365</div>
                    <div class="text-sm font-medium text-slate-300 mt-1">Systems Operations Support</div>
                    <div class="text-xs text-slate-500 mt-2">Engineers monitoring infrastructure and answering tickets around the clock.</div>
                </div>
            </section>

            <!-- Meet the Staff / Team Section -->
            <section class="space-y-8">
                <div class="space-y-2">
                    <h2 class="text-2xl font-bold text-white tracking-tight">Our Team</h2>
                    <p class="text-slate-400 text-sm">Direct leadership and systems architects behind the platform.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        v-for="member in teamMembers"
                        :key="member.id"
                        class="bg-slate-800/80 border border-slate-700 rounded-2xl p-6 flex flex-col justify-between space-y-6 shadow-xl"
                    >
                        <div class="space-y-4">
                            <img
                                :src="member.avatar"
                                :alt="member.name"
                                class="w-32 h-32 rounded-full object-cover border-2 border-indigo-500/40"
                            />
                            <div>
                                <h3 class="text-lg font-bold text-white">{{ member.name }}</h3>
                                <p class="text-sm font-semibold text-indigo-400 mt-0.5">{{ member.role }}</p>
                            </div>
                            <p class="text-slate-400 text-sm leading-relaxed">
                                {{ member.bio }}
                            </p>
                        </div>

                        <div class="pt-4 border-t border-slate-700/60">
                            <span class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider block mb-1">Direct Contact</span>
                            <a
                                :href="`mailto:${member.email}`"
                                class="text-sm font-mono text-slate-300 hover:text-indigo-400 transition-colors break-all"
                            >
                                {{ member.email }}
                            </a>
                            <br>
                            <a
                                :href="member.github"
                                target="_blank"
                                class="text-sm font-mono text-slate-300 hover:text-indigo-400 transition-colors break-all"
                            >
                                Github
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Support Forum / Redirect CTA -->
            <section class="bg-indigo-950/40 border border-indigo-500/30 rounded-3xl p-8 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="space-y-2 max-w-xl">
                    <h3 class="text-2xl font-bold text-white tracking-tight">Need assistance or technical inquiry?</h3>
                    <p class="text-slate-300 text-sm">
                        Submit a ticket through our Support Forum to open a direct inquiry with our infrastructure operations team.
                    </p>
                </div>
                <Link
                    :href="route('contact.show')"
                    class="px-6 py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm rounded-xl shadow-lg shadow-indigo-600/30 transition-all whitespace-nowrap"
                >
                    Open Contact Forum
                </Link>
            </section>
        </main>
    </div>
</template>
