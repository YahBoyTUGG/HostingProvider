<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import SiteHeader from '@/components/SiteHeader.vue';

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
        role: 'Sales & Marketing Specialist',
        bio: 'Oversees edge location deployment, anti-DDoS mitigation strategies, and low-latency network interconnects.',
        email: 'david.damevski@velocityrig.io',
        avatar: 'images/staff/david.jpg',
        github: 'https://github.com/KillBastard2',
    },
    {
        id: 3,
        name: 'Aleksandar Noveski',
        role: 'Head of Systems Operations',
        bio: 'Focuses on storage array performance optimizations, hypervisor security, and enterprise support response.',
        email: 'aleksandar.noveski@velocityrig.io',
        avatar: '/images/staff/aleksandar.jpg',
        github: 'https://github.com/YahBoyTUGG',
    },
    {
        id: 4,
        name: 'Hristijan Denkovski',
        role: 'Data Center Technician',
        bio: 'Focuses on storage array performance optimizations, hypervisor security, and enterprise support response.',
        email: 'hristijan.denkovski@velocityrig.io',
        avatar: '/images/staff/hristijan.jpg',
        github: 'https://github.com/hristijandenkovski',
    },
];
</script>

<template>
    <Head title="About Us - VelocityRig" />

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />

        <main class="mx-auto max-w-7xl space-y-16 px-4 py-12 sm:px-6 lg:px-8">
            <!-- Company Overview Section -->
            <section class="max-w-3xl space-y-4">
                <span
                    class="text-xs font-bold tracking-widest text-indigo-400 uppercase"
                    >Who We Are</span
                >
                <h1
                    class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl"
                >
                    High-Performance Compute Infrastructure built for Scale.
                </h1>
                <p class="text-lg leading-relaxed text-slate-400">
                    Founded in 2024, VelocityRig was built to eliminate the gap
                    between high-end hardware performance and cloud deployment
                    flexibility. We deliver bare-metal dedicated servers and
                    high-speed VPS instances tailored for demanding compute
                    workloads, real-time gaming clusters, and database
                    infrastructure.
                </p>
            </section>

            <!-- Key Company Metrics -->
            <section class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                <div
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/50 p-6 backdrop-blur"
                >
                    <div class="text-3xl font-extrabold text-indigo-400">
                        99.99%
                    </div>
                    <div class="mt-1 text-sm font-medium text-slate-300">
                        Uptime SLA Guarantee
                    </div>
                    <div class="mt-2 text-xs text-slate-500">
                        Powered by redundant power feeds and multi-homed BGP
                        network routing.
                    </div>
                </div>
                <div
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/50 p-6 backdrop-blur"
                >
                    <div class="text-3xl font-extrabold text-indigo-400">
                        &lt; 15ms
                    </div>
                    <div class="mt-1 text-sm font-medium text-slate-300">
                        Global Edge Latency
                    </div>
                    <div class="mt-2 text-xs text-slate-500">
                        Strategically deployed across tier-4 data centers
                        worldwide.
                    </div>
                </div>
                <div
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/50 p-6 backdrop-blur"
                >
                    <div class="text-3xl font-extrabold text-indigo-400">
                        24 / 7 / 365
                    </div>
                    <div class="mt-1 text-sm font-medium text-slate-300">
                        Systems Operations Support
                    </div>
                    <div class="mt-2 text-xs text-slate-500">
                        Engineers monitoring infrastructure and answering
                        tickets around the clock.
                    </div>
                </div>
            </section>

            <!-- Meet the Staff / Team Section -->
            <section class="space-y-8">
                <div class="space-y-2">
                    <h2 class="text-2xl font-bold tracking-tight text-white">
                        Our Team
                    </h2>
                    <p class="text-sm text-slate-400">
                        Direct leadership and systems architects behind the
                        platform.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div
                        v-for="member in teamMembers"
                        :key="member.id"
                        class="flex flex-col justify-between space-y-6 rounded-2xl border border-slate-700 bg-slate-800/80 p-6 shadow-xl"
                    >
                        <div class="space-y-4">
                            <img
                                :src="member.avatar"
                                :alt="member.name"
                                class="h-32 w-32 rounded-full border-2 border-indigo-500/40 object-cover"
                            />
                            <div>
                                <h3 class="text-lg font-bold text-white">
                                    {{ member.name }}
                                </h3>
                                <p
                                    class="mt-0.5 text-sm font-semibold text-indigo-400"
                                >
                                    {{ member.role }}
                                </p>
                            </div>
                            <p class="text-sm leading-relaxed text-slate-400">
                                {{ member.bio }}
                            </p>
                        </div>

                        <div class="border-t border-slate-700/60 pt-4">
                            <span
                                class="mb-1 block text-[11px] font-semibold tracking-wider text-slate-500 uppercase"
                                >Direct Contact</span
                            >
                            <a
                                :href="`mailto:${member.email}`"
                                class="font-mono text-sm break-all text-slate-300 transition-colors hover:text-indigo-400"
                            >
                                {{ member.email }}
                            </a>
                            <br />
                            <a
                                :href="member.github"
                                target="_blank"
                                class="font-mono text-sm break-all text-slate-300 transition-colors hover:text-indigo-400"
                            >
                                Github
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Support Forum / Redirect CTA -->
            <section
                class="flex flex-col items-center justify-between gap-6 rounded-3xl border border-indigo-500/30 bg-indigo-950/40 p-8 sm:p-10 md:flex-row"
            >
                <div class="max-w-xl space-y-2">
                    <h3 class="text-2xl font-bold tracking-tight text-white">
                        Need assistance or technical inquiry?
                    </h3>
                    <p class="text-sm text-slate-300">
                        Submit a ticket through our Support Forum to open a
                        direct inquiry with our infrastructure operations team.
                    </p>
                </div>
                <Link
                    :href="route('contact.show')"
                    class="rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold whitespace-nowrap text-white shadow-lg shadow-indigo-600/30 transition-all hover:bg-indigo-500"
                >
                    Open Contact Forum
                </Link>
            </section>
        </main>
    </div>
</template>
