<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { store } from '@/routes/tickets';

defineOptions({
    layout: null,
});

interface SubscriptionOption {
    id: number;
    name: string;
    ip_address: string;
}

const props = defineProps<{
    subscriptions?: SubscriptionOption[];
}>();

const form = useForm({
    subscription_id: props.subscriptions?.[0]?.id || '',
    priority: 'normal',
    subject: '',
    message: '',
});

const submitTicket = () => {
    form.post(store.url(), {
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <Head title="Create Support Ticket - VelocityRig" />

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
                    <Link :href="route('tickets.index')" class="text-slate-400 hover:text-slate-200 transition-colors">My Tickets</Link>
                    <Link :href="route('dashboard')" class="text-indigo-400 hover:text-indigo-300 font-semibold">Dashboard</Link>
                </div>
            </div>
        </header>

        <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-extrabold text-white tracking-tight">Open a Support Ticket</h1>
                    <p class="text-slate-400 mt-1">Submit a direct inquiry to our systems engineers regarding your infrastructure.</p>
                </div>
                <Link
                    :href="route('tickets.index')"
                    class="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-xl text-xs font-semibold border border-slate-700 transition-all"
                >
                    ← Back to Tickets
                </Link>
            </div>

            <!-- Ticket Submission Form -->
            <form @submit.prevent="submitTicket" class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 sm:p-8 backdrop-blur space-y-6 shadow-xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <!-- Related Service Selection -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Affected Service</label>
                        <select
                            v-model="form.subscription_id"
                            class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                        >
                            <option value="">General Account Inquiry</option>
                            <option v-for="sub in props.subscriptions" :key="sub.id" :value="sub.id">
                                {{ sub.name }} ({{ sub.ip_address }})
                            </option>
                        </select>
                        <span v-if="form.errors.subscription_id" class="text-xs text-rose-400 mt-1 block">{{ form.errors.subscription_id }}</span>
                    </div>

                    <!-- Priority Level -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Priority Level</label>
                        <select
                            v-model="form.priority"
                            class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                        >
                            <option value="low">Low (General question)</option>
                            <option value="normal">Normal (Performance / Setup issue)</option>
                            <option value="high">High (Service outage / Critical)</option>
                        </select>
                        <span v-if="form.errors.priority" class="text-xs text-rose-400 mt-1 block">{{ form.errors.priority }}</span>
                    </div>
                </div>

                <!-- Subject -->
                <div>
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Subject</label>
                    <input
                        v-model="form.subject"
                        type="text"
                        required
                        placeholder="e.g. Network packet loss on VPS node #4"
                        class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                    />
                    <span v-if="form.errors.subject" class="text-xs text-rose-400 mt-1 block">{{ form.errors.subject }}</span>
                </div>

                <!-- Message (Max 2,000 Chars) -->
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Detailed Description</label>
                        <span class="text-[11px] text-slate-500">{{ form.message.length }} / 2000</span>
                    </div>
                    <textarea
                        v-model="form.message"
                        rows="6"
                        required
                        maxlength="2000"
                        placeholder="Provide logs, steps to reproduce, or relevant configurations..."
                        class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-slate-200 focus:outline-none focus:border-indigo-500"
                    ></textarea>
                    <span v-if="form.errors.message" class="text-xs text-rose-400 mt-1 block">{{ form.errors.message }}</span>
                </div>

                <!-- Action Button -->
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-xl text-sm shadow-lg shadow-indigo-600/20 transition-all disabled:opacity-50 flex items-center justify-center gap-2"
                >
                    <span v-if="form.processing" class="w-4 h-4 border-2 border-white/20 border-t-white rounded-full animate-spin"></span>
                    {{ form.processing ? 'Submitting Ticket...' : 'Submit Support Ticket' }}
                </button>
            </form>
        </main>
    </div>
</template>
