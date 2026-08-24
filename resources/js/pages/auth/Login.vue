<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Sign In - VelocityRig" />

    <div class="min-h-screen bg-slate-900 text-slate-100 flex flex-col justify-center items-center p-4">
        <div class="w-full max-w-md space-y-8 bg-slate-800/80 border border-slate-700/80 p-8 rounded-2xl shadow-2xl backdrop-blur">
            <!-- Header -->
            <div class="text-center space-y-2">
                <div class="inline-flex w-12 h-12 rounded-xl bg-indigo-600 items-center justify-center font-extrabold text-white text-xl shadow-lg shadow-indigo-500/30">
                    VR
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-white">Welcome back</h1>
                <p class="text-sm text-slate-400">Sign in to manage your high-performance VPS fleet</p>
            </div>

            <!-- Session Status -->
            <div v-if="status" class="p-3 text-sm rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400">
                {{ status }}
            </div>

            <!-- Form -->
            <form @submit.prevent="submit" class="space-y-5">
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Email Address</label>
                    <input
                        v-model="form.email"
                        type="email"
                        required
                        autofocus
                        autocomplete="username"
                        class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition"
                        placeholder="admin@example.com"
                    />
                    <p v-if="form.errors.email" class="mt-1.5 text-xs text-rose-400">{{ form.errors.email }}</p>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Password</label>
                    <input
                        v-model="form.password"
                        type="password"
                        required
                        autocomplete="current-password"
                        class="w-full px-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 placeholder-slate-500 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition"
                        placeholder="••••••••"
                    />
                    <p v-if="form.errors.password" class="mt-1.5 text-xs text-rose-400">{{ form.errors.password }}</p>
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input
                            type="checkbox"
                            v-model="form.remember"
                            class="rounded border-slate-700 bg-slate-900 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900"
                        />
                        <span class="text-xs text-slate-400">Remember me</span>
                    </label>
                </div>

                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full py-3 px-4 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm rounded-xl shadow-lg shadow-indigo-600/30 transition-all disabled:opacity-50"
                >
                    {{ form.processing ? 'Signing in...' : 'Sign In' }}
                </button>
            </form>

            <p class="text-center text-xs text-slate-400 pt-2">
                Don't have an account?
                <Link :href="route('register')" class="text-indigo-400 font-semibold hover:underline">
                    Create account
                </Link>
            </p>
        </div>
    </div>
</template>
