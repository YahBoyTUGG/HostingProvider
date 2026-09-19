<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import SiteHeader from '@/components/SiteHeader.vue';

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
    form.post('contact', {
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Contact Us - VelocityRig" />

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />

        <main class="mx-auto max-w-3xl space-y-8 px-4 py-12 sm:px-6 lg:px-8">
            <div>
                <h1 class="text-3xl font-extrabold tracking-tight text-white">
                    Get in Touch
                </h1>
                <p class="mt-1 text-slate-400">
                    Have pre-sales questions or general inquiries? Send us a
                    message below.
                </p>
            </div>

            <!-- Public Contact Form -->
            <form
                @submit.prevent="submitContact"
                class="space-y-5 rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 backdrop-blur sm:p-8"
            >
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Your Name</label
                        >
                        <input
                            v-model="form.name"
                            type="text"
                            required
                            placeholder="John Doe"
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                        />
                    </div>
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Email Address</label
                        >
                        <input
                            v-model="form.email"
                            type="email"
                            required
                            placeholder="john@example.com"
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                        />
                    </div>
                </div>

                <div>
                    <label
                        class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                        >Subject</label
                    >
                    <input
                        v-model="form.subject"
                        type="text"
                        required
                        placeholder="Inquiry regarding bare-metal servers..."
                        class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                    />
                </div>

                <div>
                    <label
                        class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                        >Message</label
                    >
                    <textarea
                        v-model="form.message"
                        rows="5"
                        required
                        placeholder="Tell us what you need help with..."
                        class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full rounded-xl bg-indigo-600 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition-all hover:bg-indigo-500 disabled:opacity-50"
                >
                    {{ form.processing ? 'Sending...' : 'Send Message' }}
                </button>
            </form>
        </main>
    </div>
</template>
