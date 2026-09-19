<script setup lang="ts">
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const page = usePage();
const isProfileEditorOpen = ref(false);
const user = computed(() => page.props.auth.user as {
    first_name: string;
    last_name: string;
    email: string;
    phone_number: string;
    living_address: string;
});

const profileForm = useForm({
    first_name: user.value.first_name,
    last_name: user.value.last_name,
    email: user.value.email,
    phone_number: user.value.phone_number,
    living_address: user.value.living_address,
});

const passwordForm = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updateProfile = () => {
    profileForm.patch('/settings/profile', {
        preserveScroll: true,
        onSuccess: () => { isProfileEditorOpen.value = false; },
    });
};

const updatePassword = () => {
    passwordForm.put('/settings/password', {
        preserveScroll: true,
        onSuccess: () => passwordForm.reset(),
    });
};
</script>

<template>
    <Head title="Profile settings - VelocityRig" />

    <div class="min-h-screen bg-slate-950 text-slate-100">
        <header class="sticky top-0 z-20 border-b border-slate-800 bg-slate-950/90 backdrop-blur">
            <div class="mx-auto flex h-16 max-w-5xl items-center justify-between px-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-3">
                    <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-600 font-bold">VR</div>
                    <div>
                        <p class="font-semibold">VelocityRig</p>
                        <p class="text-[11px] uppercase tracking-wider text-indigo-300">Account settings</p>
                    </div>
                </div>
                <Link href="/dashboard" class="text-sm text-slate-400 transition hover:text-white">Back to dashboard</Link>
            </div>
        </header>

        <main class="mx-auto max-w-5xl space-y-8 px-4 py-10 sm:px-6 lg:px-8">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-indigo-400">Your account</p>
                <h1 class="mt-2 text-3xl font-bold text-white">Profile settings</h1>
                <p class="mt-1 text-slate-400">Manage your contact details and account password.</p>
            </div>

            <section class="rounded-xl border border-slate-800 bg-slate-900 p-6 shadow-xl shadow-black/10">
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-white">Personal information</h2>
                    <p class="mt-1 text-sm text-slate-400">Your current account identity and contact information.</p>
                </div>

                <dl class="grid gap-5 sm:grid-cols-2">
                    <div class="profile-detail"><dt class="profile-label">First name</dt><dd>{{ user.first_name }}</dd></div>
                    <div class="profile-detail"><dt class="profile-label">Last name</dt><dd>{{ user.last_name }}</dd></div>
                    <div class="profile-detail sm:col-span-2"><dt class="profile-label">Email address</dt><dd>{{ user.email }}</dd></div>
                    <div class="profile-detail"><dt class="profile-label">Phone number</dt><dd>{{ user.phone_number }}</dd></div>
                    <div class="profile-detail"><dt class="profile-label">Living address</dt><dd>{{ user.living_address }}</dd></div>
                </dl>

                <button type="button" class="profile-button mt-6" @click="isProfileEditorOpen = true">Edit information</button>
            </section>

            <section class="rounded-xl border border-slate-800 bg-slate-900 p-6 shadow-xl shadow-black/10">
                <div class="mb-6">
                    <h2 class="text-lg font-semibold text-white">Change password</h2>
                    <p class="mt-1 text-sm text-slate-400">Use a strong password that you do not reuse elsewhere.</p>
                </div>

                <form class="max-w-xl space-y-5" @submit.prevent="updatePassword">
                    <div><label for="current-password" class="profile-label">Current password</label><input id="current-password" v-model="passwordForm.current_password" type="password" required autocomplete="current-password" class="profile-input"><p v-if="passwordForm.errors.current_password" class="profile-error">{{ passwordForm.errors.current_password }}</p></div>
                    <div><label for="new-password" class="profile-label">New password</label><input id="new-password" v-model="passwordForm.password" type="password" required autocomplete="new-password" class="profile-input"><p v-if="passwordForm.errors.password" class="profile-error">{{ passwordForm.errors.password }}</p></div>
                    <div><label for="password-confirmation" class="profile-label">Confirm new password</label><input id="password-confirmation" v-model="passwordForm.password_confirmation" type="password" required autocomplete="new-password" class="profile-input"><p v-if="passwordForm.errors.password_confirmation" class="profile-error">{{ passwordForm.errors.password_confirmation }}</p></div>
                    <button type="submit" class="profile-button" :disabled="passwordForm.processing">{{ passwordForm.processing ? 'Updating...' : 'Change password' }}</button>
                </form>
            </section>

        </main>

        <div v-if="isProfileEditorOpen" class="fixed inset-0 z-40 flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="edit-profile-title">
            <div class="w-full max-w-2xl rounded-xl border border-slate-700 bg-slate-900 p-6 shadow-2xl shadow-black/40">
                <div class="flex items-start justify-between gap-4">
                    <div>
                        <h2 id="edit-profile-title" class="text-lg font-semibold text-white">Edit information</h2>
                        <p class="mt-1 text-sm text-slate-400">Update your email address, phone number, or living address.</p>
                    </div>
                    <button type="button" class="profile-close" aria-label="Close edit information dialog" @click="isProfileEditorOpen = false">&times;</button>
                </div>

                <form class="mt-6 space-y-5" @submit.prevent="updateProfile">
                    <div><label for="edit-email" class="profile-label">Email address</label><input id="edit-email" v-model="profileForm.email" type="email" required autocomplete="email" class="profile-input"><p v-if="profileForm.errors.email" class="profile-error">{{ profileForm.errors.email }}</p></div>
                    <div><label for="edit-phone-number" class="profile-label">Phone number</label><input id="edit-phone-number" v-model="profileForm.phone_number" required autocomplete="tel" class="profile-input"><p v-if="profileForm.errors.phone_number" class="profile-error">{{ profileForm.errors.phone_number }}</p></div>
                    <div><label for="edit-living-address" class="profile-label">Living address</label><input id="edit-living-address" v-model="profileForm.living_address" required autocomplete="street-address" class="profile-input"><p v-if="profileForm.errors.living_address" class="profile-error">{{ profileForm.errors.living_address }}</p></div>
                    <div class="flex justify-end gap-3"><button type="button" class="profile-secondary" @click="isProfileEditorOpen = false">Cancel</button><button type="submit" class="profile-button" :disabled="profileForm.processing">{{ profileForm.processing ? 'Saving...' : 'Save changes' }}</button></div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
@reference "../../../css/app.css";

.profile-label { @apply mb-1.5 block text-xs font-semibold uppercase tracking-wider text-slate-300; }
.profile-detail { @apply rounded-lg border border-slate-800 bg-slate-950/50 p-4; }
.profile-detail dd { @apply text-sm text-slate-100; }
.profile-input { @apply w-full rounded-lg border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-slate-200 placeholder:text-slate-600 focus:border-indigo-400 focus:outline-none focus:ring-1 focus:ring-indigo-400; }
.profile-button { @apply rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-indigo-500 disabled:cursor-not-allowed disabled:opacity-50; }
.profile-secondary { @apply rounded-lg border border-slate-700 px-4 py-2.5 text-sm font-semibold text-slate-300 transition hover:border-slate-600 hover:bg-slate-800; }
.profile-close { @apply text-2xl leading-none text-slate-400 transition hover:text-white; }
.profile-error { @apply mt-1 text-xs text-rose-400; }
</style>
