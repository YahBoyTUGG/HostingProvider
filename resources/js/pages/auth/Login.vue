<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import SiteHeader from '@/components/SiteHeader.vue';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post('/login', {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Sign In - VelocityRig" />

    <div class="flex min-h-screen flex-col bg-slate-900 text-slate-100">
        <SiteHeader />
        <main class="flex flex-1 items-center justify-center p-4">
            <div
                class="w-full max-w-md space-y-8 rounded-2xl border border-slate-700/80 bg-slate-800/80 p-8 shadow-2xl backdrop-blur"
            >
                <!-- Header -->
                <div class="space-y-2 text-center">
                    <div
                        class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-xl font-extrabold text-white shadow-lg shadow-indigo-500/30"
                    >
                        VR
                    </div>
                    <h1 class="text-2xl font-bold tracking-tight text-white">
                        Welcome back
                    </h1>
                    <p class="text-sm text-slate-400">
                        Sign in to manage your high-performance VPS fleet
                    </p>
                </div>

                <!-- Session Status -->
                <div
                    v-if="status"
                    class="rounded-xl border border-emerald-500/30 bg-emerald-500/10 p-3 text-sm text-emerald-400"
                >
                    {{ status }}
                </div>

                <!-- Form -->
                <form @submit.prevent="submit" class="space-y-5">
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                            >Email Address</label
                        >
                        <input
                            v-model="form.email"
                            type="email"
                            required
                            autofocus
                            autocomplete="username"
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                            placeholder="admin@example.com"
                        />
                        <p
                            v-if="form.errors.email"
                            class="mt-1.5 text-xs text-rose-400"
                        >
                            {{ form.errors.email }}
                        </p>
                    </div>

                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                            >Password</label
                        >
                        <input
                            v-model="form.password"
                            type="password"
                            required
                            autocomplete="current-password"
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-3 text-sm text-slate-100 placeholder-slate-500 transition focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                            placeholder="••••••••"
                        />
                        <p
                            v-if="form.errors.password"
                            class="mt-1.5 text-xs text-rose-400"
                        >
                            {{ form.errors.password }}
                        </p>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex cursor-pointer items-center gap-2">
                            <input
                                type="checkbox"
                                v-model="form.remember"
                                class="rounded border-slate-700 bg-slate-900 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900"
                            />
                            <span class="text-xs text-slate-400"
                                >Remember me</span
                            >
                        </label>
                    </div>

                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="w-full rounded-xl bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/30 transition-all hover:bg-indigo-500 disabled:opacity-50"
                    >
                        {{ form.processing ? 'Signing in...' : 'Sign In' }}
                    </button>
                </form>

                <p class="pt-2 text-center text-xs text-slate-400">
                    Don't have an account?
                    <Link
                        :href="route('register')"
                        class="font-semibold text-indigo-400 hover:underline"
                    >
                        Create account
                    </Link>
                </p>
            </div>
        </main>
    </div>
</template>
