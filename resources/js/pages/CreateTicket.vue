<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { store } from '@/routes/tickets';
import SiteHeader from '@/components/SiteHeader.vue';

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

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />

        <main class="mx-auto max-w-3xl space-y-8 px-4 py-12 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1
                        class="text-3xl font-extrabold tracking-tight text-white"
                    >
                        Open a Support Ticket
                    </h1>
                    <p class="mt-1 text-slate-400">
                        Submit a direct inquiry to our systems engineers
                        regarding your infrastructure.
                    </p>
                </div>
                <Link
                    :href="route('tickets.index')"
                    class="rounded-xl border border-slate-700 bg-slate-800 px-4 py-2 text-xs font-semibold text-slate-300 transition-all hover:bg-slate-700"
                >
                    ← Back to Tickets
                </Link>
            </div>

            <!-- Ticket Submission Form -->
            <form
                @submit.prevent="submitTicket"
                class="space-y-6 rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 shadow-xl backdrop-blur sm:p-8"
            >
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <!-- Related Service Selection -->
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Affected Service</label
                        >
                        <select
                            v-model="form.subscription_id"
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                        >
                            <option value="">General Account Inquiry</option>
                            <option
                                v-for="sub in props.subscriptions"
                                :key="sub.id"
                                :value="sub.id"
                            >
                                {{ sub.name }} ({{ sub.ip_address }})
                            </option>
                        </select>
                        <span
                            v-if="form.errors.subscription_id"
                            class="mt-1 block text-xs text-rose-400"
                            >{{ form.errors.subscription_id }}</span
                        >
                    </div>

                    <!-- Priority Level -->
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Priority Level</label
                        >
                        <select
                            v-model="form.priority"
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                        >
                            <option value="low">Low (General question)</option>
                            <option value="normal">
                                Normal (Performance / Setup issue)
                            </option>
                            <option value="high">
                                High (Service outage / Critical)
                            </option>
                        </select>
                        <span
                            v-if="form.errors.priority"
                            class="mt-1 block text-xs text-rose-400"
                            >{{ form.errors.priority }}</span
                        >
                    </div>
                </div>

                <!-- Subject -->
                <div>
                    <label
                        class="mb-2 block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                        >Subject</label
                    >
                    <input
                        v-model="form.subject"
                        type="text"
                        required
                        placeholder="e.g. Network packet loss on VPS node #4"
                        class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                    />
                    <span
                        v-if="form.errors.subject"
                        class="mt-1 block text-xs text-rose-400"
                        >{{ form.errors.subject }}</span
                    >
                </div>

                <!-- Message (Max 2,000 Chars) -->
                <div>
                    <div class="mb-2 flex items-center justify-between">
                        <label
                            class="block text-xs font-semibold tracking-wider text-slate-400 uppercase"
                            >Detailed Description</label
                        >
                        <span class="text-[11px] text-slate-500"
                            >{{ form.message.length }} / 2000</span
                        >
                    </div>
                    <textarea
                        v-model="form.message"
                        rows="6"
                        required
                        maxlength="2000"
                        placeholder="Provide logs, steps to reproduce, or relevant configurations..."
                        class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-3.5 py-2.5 text-sm text-slate-200 focus:border-indigo-500 focus:outline-none"
                    ></textarea>
                    <span
                        v-if="form.errors.message"
                        class="mt-1 block text-xs text-rose-400"
                        >{{ form.errors.message }}</span
                    >
                </div>

                <!-- Action Button -->
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition-all hover:bg-indigo-500 disabled:opacity-50"
                >
                    <span
                        v-if="form.processing"
                        class="h-4 w-4 animate-spin rounded-full border-2 border-white/20 border-t-white"
                    ></span>
                    {{
                        form.processing
                            ? 'Submitting Ticket...'
                            : 'Submit Support Ticket'
                    }}
                </button>
            </form>
        </main>
    </div>
</template>
