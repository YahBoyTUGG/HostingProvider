<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';

defineOptions({
    layout: null,
});

const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: '',
});

const submitContact = () => {
    form.post(('contact'), {
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Contact Us - VelocityRig" />

    <div class="min-h-screen bg-slate-900 text-slate-100 font-sans">
        <!-- Header -->
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
                    <Link :href="route('about')" class="text-slate-400 hover:text-slate-200 transition-colors">About Us</Link>
                    <Link :href="route('dashboard')" class="text-indigo-400 hover:text-indigo-300 font-semibold">Dashboard</Link>
                </div>
            </div>
        </header>

        <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-8">
            <div>
                <h1 class="text-3xl font-extrabold text-white tracking-tight">Get in Touch</h1>
                <p class="text-slate-400 mt-1">Have pre-sales questions or general inquiries? Send us a message below.</p>
            </div>

            <!-- Public Contact Form -->
            <form @submit.prevent="submitContact" class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 sm:p-8 backdrop-blur space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Your Name</label>
                        <input
                            v-model="form.name"
                            type="text"
                            required
                            placeholder="John Doe"
                            class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                        />
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                        <input
                            v-model="form.email"
                            type="email"
                            required
                            placeholder="john@example.com"
                            class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                        />
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Subject</label>
                    <input
                        v-model="form.subject"
                        type="text"
                        required
                        placeholder="Inquiry regarding bare-metal servers..."
                        class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                    />
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Message</label>
                    <textarea
                        v-model="form.message"
                        rows="5"
                        required
                        placeholder="Tell us what you need help with..."
                        class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-xl text-sm shadow-lg shadow-indigo-600/20 transition-all disabled:opacity-50"
                >
                    {{ form.processing ? 'Sending...' : 'Send Message' }}
                </button>
            </form>
        </main>
    </div>
</template>
