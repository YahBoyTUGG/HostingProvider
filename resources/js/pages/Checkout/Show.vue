<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import { store } from '@/actions/App/Http/Controllers/CheckoutController';
import SiteHeader from '@/components/SiteHeader.vue';

interface Offer {
    id: number;
    name: string;
    type: 'vps' | 'dedicated';
    ram_gb: number;
    cpu_cores: number;
    price_monthly: number | string;
    price_6_months: number | string | null;
    price_1_year: number | string;
    price_2_years: number | string | null;
}

interface OperatingSystem {
    id: number;
    name: string;
    version: string;
    type: 'vps' | 'dedicated' | 'both';
}

interface AvailableApp {
    id: number;
    name: string;
}

const props = defineProps<{
    offer: Offer;
    operatingSystems: OperatingSystem[];
    availableApps: AvailableApp[];
}>();

type BillingCycle = 'monthly' | '6_months' | '1_year' | '2_years';

const billingOptions = computed(() =>
    [
        { value: 'monthly' as BillingCycle, label: 'Monthly', months: 1, price: props.offer.price_monthly },
        { value: '6_months' as BillingCycle, label: '6 months', months: 6, price: props.offer.price_6_months },
        { value: '1_year' as BillingCycle, label: '1 year', months: 12, price: props.offer.price_1_year },
        { value: '2_years' as BillingCycle, label: '2 years', months: 24, price: props.offer.price_2_years },
    ].filter((option) => option.price !== null && option.price !== undefined),
);

const form = useForm({
    operating_system_id: props.operatingSystems[0]?.id ?? '',
    machine_name: '',
    billing_cycle: 'monthly' as BillingCycle,
    apps: [] as number[],
    cardholder_name: '',
    card_number: '',
    card_expiry: '',
    card_cvc: '',
});
const isConfirmationOpen = ref(false);

const selectedBilling = computed(
    () => billingOptions.value.find((option) => option.value === form.billing_cycle) ?? billingOptions.value[0],
);
const selectedOperatingSystem = computed(
    () => props.operatingSystems.find((os) => os.id === Number(form.operating_system_id)),
);
const totalPrice = computed(() => Number(selectedBilling.value?.price ?? 0).toFixed(2));
const monthlyPrice = computed(
    () => (Number(selectedBilling.value?.price ?? 0) / (selectedBilling.value?.months ?? 1)).toFixed(2),
);
const dateFormatter = new Intl.DateTimeFormat(undefined, { day: 'numeric', month: 'short', year: 'numeric' });
const startDate = new Date();
const endDate = computed(() => {
    const date = new Date(startDate);
    date.setMonth(date.getMonth() + (selectedBilling.value?.months ?? 1));

    return dateFormatter.format(date);
});

const formatCardNumber = () => {
    form.card_number = form.card_number.replace(/\D/g, '').slice(0, 16).replace(/(.{4})/g, '$1 ').trim();
};

const submit = () => {
    isConfirmationOpen.value = true;
};

const confirmSubmit = () => {
    isConfirmationOpen.value = false;
    form.post(store( { offer: props.offer.id }).url);
};
</script>

<template>
    <Head :title="`Checkout - ${offer.name}`" />

    <div class="min-h-screen bg-slate-950 text-slate-100">
        <SiteHeader />
        <main class="mx-auto max-w-6xl px-4 py-10 sm:px-6 lg:px-8">
            <div class="mb-8">
                <Link href="/catalog" class="text-sm text-indigo-300 hover:text-indigo-200">&larr; Back to catalog</Link>
                <h1 class="mt-4 text-3xl font-bold text-white">Configure {{ offer.name }}</h1>
                <p class="mt-2 text-slate-400">Choose your service term and simulated payment details to provision your server.</p>
            </div>

            <form class="grid gap-6 lg:grid-cols-[1fr_360px]" @submit.prevent="submit">
                <div class="space-y-6">
                    <section class="rounded-xl border border-slate-800 bg-slate-900 p-6">
                        <h2 class="text-lg font-semibold text-white">Service configuration</h2>
                        <div class="mt-5 grid gap-4 sm:grid-cols-2">
                            <label class="sm:col-span-2">
                                <span class="mb-2 block text-sm font-medium text-slate-200">Operating system</span>
                                <select v-model="form.operating_system_id" class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-3 text-sm text-slate-100 shadow-sm outline-none transition focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400/30" required>
                                    <option v-for="os in operatingSystems" :key="os.id" :value="os.id">{{ os.name }} {{ os.version }}</option>
                                </select>
                                <span v-if="form.errors.operating_system_id" class="mt-1 block text-sm text-rose-300">{{ form.errors.operating_system_id }}</span>
                            </label>
                            <label class="sm:col-span-2">
                                <span class="mb-2 block text-sm font-medium text-slate-200">Machine name</span>
                                <input v-model="form.machine_name" required maxlength="255" placeholder="e.g. production-web-01" class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-3 text-sm text-slate-100 shadow-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400/30" />
                                <span class="mt-1 block text-xs text-slate-500">Up to 255 characters.</span>
                                <span v-if="form.errors.machine_name" class="mt-1 block text-sm text-rose-300">{{ form.errors.machine_name }}</span>
                            </label>
                            <div class="sm:col-span-2">
                                <span class="mb-2 block text-sm font-medium text-slate-200">Billing term</span>
                                <div class="grid gap-3 sm:grid-cols-2">
                                    <label v-for="option in billingOptions" :key="option.value" class="cursor-pointer rounded-lg border p-4 transition" :class="form.billing_cycle === option.value ? 'border-indigo-400 bg-indigo-500/15' : 'border-slate-700 bg-slate-950/60 hover:border-slate-600'">
                                        <input v-model="form.billing_cycle" class="sr-only" type="radio" :value="option.value" />
                                        <span class="block font-semibold text-white">{{ option.label }}</span>
                                        <span class="mt-1 block text-sm text-slate-400">${{ Number(option.price).toFixed(2) }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="rounded-xl border border-slate-800 bg-slate-900 p-6">
                        <h2 class="text-lg font-semibold text-white">Simulated payment</h2>
                        <p class="mt-1 text-sm text-slate-400">Use any Visa-style details. This demo does not contact a payment provider or store card data.</p>
                        <div class="mt-5 grid gap-4 sm:grid-cols-2">
                            <label class="sm:col-span-2"><span class="mb-2 block text-sm font-medium text-slate-200">Cardholder name</span><input v-model="form.cardholder_name" required class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-3 text-sm text-slate-100 shadow-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400/30" autocomplete="cc-name" /></label>
                            <label class="sm:col-span-2"><span class="mb-2 block text-sm font-medium text-slate-200">Card number</span><input v-model="form.card_number" required inputmode="numeric" autocomplete="cc-number" placeholder="4242 4242 4242 4242" class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-3 text-sm tracking-wider text-slate-100 shadow-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400/30" @input="formatCardNumber" /><span v-if="form.errors.card_number" class="mt-1 block text-sm text-rose-300">{{ form.errors.card_number }}</span></label>
                            <label><span class="mb-2 block text-sm font-medium text-slate-200">Expiry</span><input v-model="form.card_expiry" required type="text" inputmode="numeric" placeholder="MM/YY" autocomplete="cc-exp" class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-3 text-sm text-slate-100 shadow-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400/30" /></label>
                            <label><span class="mb-2 block text-sm font-medium text-slate-200">CVC</span><input v-model="form.card_cvc" required type="password" inputmode="numeric" maxlength="4" autocomplete="cc-csc" placeholder="123" class="w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-3 text-sm text-slate-100 shadow-sm outline-none transition placeholder:text-slate-600 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400/30" /></label>
                        </div>
                    </section>
                </div>

                <aside class="h-fit rounded-xl border border-indigo-400/30 bg-slate-900 p-6 lg:sticky lg:top-24">
                    <p class="text-sm font-semibold uppercase tracking-wider text-indigo-300">Order summary</p>
                    <h2 class="mt-3 text-xl font-semibold text-white">{{ offer.name }}</h2>
                    <p class="mt-1 text-sm text-slate-400">{{ offer.type }} · {{ offer.cpu_cores }} cores · {{ offer.ram_gb }} GB RAM</p>
                    <dl class="mt-6 space-y-3 border-y border-slate-800 py-5 text-sm">
                        <div class="flex justify-between gap-4"><dt class="text-slate-400">Term</dt><dd class="font-medium text-slate-200">{{ selectedBilling?.label }}</dd></div>
                        <div class="flex justify-between gap-4"><dt class="text-slate-400">Starts</dt><dd class="font-medium text-slate-200">{{ dateFormatter.format(startDate) }}</dd></div>
                        <div class="flex justify-between gap-4"><dt class="text-slate-400">Ends</dt><dd class="font-medium text-slate-200">{{ endDate }}</dd></div>
                        <div class="flex justify-between gap-4"><dt class="text-slate-400">Price per month</dt><dd class="font-medium text-slate-200">${{ monthlyPrice }}</dd></div>
                    </dl>
                    <div class="mt-5 flex items-baseline justify-between"><span class="text-slate-400">Total</span><span class="text-2xl font-bold text-white">${{ totalPrice }}</span></div>
                    <p v-if="form.errors.billing_cycle" class="mt-3 text-sm text-rose-300">{{ form.errors.billing_cycle }}</p>
                    <button class="mt-6 w-full rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:ring-offset-slate-900 disabled:cursor-not-allowed disabled:opacity-60" type="submit" :disabled="form.processing">{{ form.processing ? 'Provisioning...' : 'Confirm and deploy' }}</button>
                </aside>
            </form>

            <div
                v-if="isConfirmationOpen"
                class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="dialog"
                aria-modal="true"
                aria-labelledby="checkout-confirmation-title"
                @click.self="isConfirmationOpen = false"
            >
                <div class="w-full max-w-lg rounded-2xl border border-slate-700 bg-slate-900 p-6 shadow-2xl shadow-black/50">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-300">Final review</p>
                            <h2 id="checkout-confirmation-title" class="mt-2 text-2xl font-semibold text-white">Confirm deployment?</h2>
                            <p class="mt-2 text-sm text-slate-400">Please review your configuration before creating the subscription.</p>
                        </div>
                        <button type="button" class="rounded-md px-2 py-1 text-2xl leading-none text-slate-400 hover:bg-slate-800 hover:text-white" aria-label="Close confirmation" @click="isConfirmationOpen = false">&times;</button>
                    </div>

                    <dl class="mt-6 space-y-4 rounded-xl border border-slate-800 bg-slate-950/60 p-4 text-sm">
                        <div class="flex justify-between gap-6"><dt class="text-slate-400">Server offer</dt><dd class="text-right font-semibold text-white">{{ offer.name }}</dd></div>
                        <div class="flex justify-between gap-6"><dt class="text-slate-400">Billing term</dt><dd class="text-right font-semibold text-white">{{ selectedBilling?.label }}</dd></div>
                        <div class="flex justify-between gap-6"><dt class="text-slate-400">Machine name</dt><dd class="max-w-[60%] break-words text-right font-semibold text-white">{{ form.machine_name }}</dd></div>
                        <div class="flex justify-between gap-6"><dt class="text-slate-400">Operating system</dt><dd class="text-right font-semibold text-white">{{ selectedOperatingSystem ? `${selectedOperatingSystem.name} ${selectedOperatingSystem.version}` : 'Not selected' }}</dd></div>
                        <div class="flex justify-between gap-6 border-t border-slate-800 pt-4"><dt class="text-slate-400">Price per month</dt><dd class="text-right text-lg font-bold text-white">${{ monthlyPrice }}</dd></div>
                    </dl>

                    <div class="mt-6 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                        <button type="button" class="rounded-lg border border-slate-700 px-4 py-3 text-sm font-semibold text-slate-200 transition hover:border-slate-500 hover:bg-slate-800" @click="isConfirmationOpen = false">Go back</button>
                        <button type="button" class="rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition hover:bg-indigo-500 disabled:cursor-not-allowed disabled:opacity-60" :disabled="form.processing" @click="confirmSubmit">{{ form.processing ? 'Provisioning...' : 'Yes, confirm and deploy' }}</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>
