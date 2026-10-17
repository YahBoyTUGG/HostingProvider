<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
import SiteHeader from '@/components/SiteHeader.vue';

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone_number: '',
    living_address: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post('/register', {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Sign Up - VelocityRig" />

    <div class="flex min-h-screen flex-col bg-slate-900 text-slate-100">
        <SiteHeader />
        <main class="flex flex-1 items-center justify-center p-4 py-12">
            <div
                class="w-full max-w-lg space-y-8 rounded-2xl border border-slate-700/80 bg-slate-800/80 p-8 shadow-2xl backdrop-blur"
            >
                <!-- Header -->
                <div class="space-y-2 text-center">
                    <div
                        class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-xl font-extrabold text-white shadow-lg shadow-indigo-500/30"
                    >
                        VR
                    </div>
                    <h1 class="text-2xl font-bold tracking-tight text-white">
                        Create your account
                    </h1>
                    <p class="text-sm text-slate-400">
                        Deploy high-performance VPS servers in seconds
                    </p>
                </div>

                <!-- Form -->
                <form @submit.prevent="submit" class="space-y-4">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label
                                class="mb-1.5 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                                >First Name</label
                            >
                            <input
                                v-model="form.first_name"
                                type="text"
                                required
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-2.5 text-sm text-slate-100 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                                placeholder="John"
                            />
                            <p
                                v-if="form.errors.first_name"
                                class="mt-1 text-xs text-rose-400"
                            >
                                {{ form.errors.first_name }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                                >Last Name</label
                            >
                            <input
                                v-model="form.last_name"
                                type="text"
                                required
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-2.5 text-sm text-slate-100 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                                placeholder="Doe"
                            />
                            <p
                                v-if="form.errors.last_name"
                                class="mt-1 text-xs text-rose-400"
                            >
                                {{ form.errors.last_name }}
                            </p>
                        </div>
                    </div>

                    <div>
                        <label
                            class="mb-1.5 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                            >Email Address</label
                        >
                        <input
                            v-model="form.email"
                            type="email"
                            required
                            class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-2.5 text-sm text-slate-100 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                            placeholder="john@example.com"
                        />
                        <p
                            v-if="form.errors.email"
                            class="mt-1 text-xs text-rose-400"
                        >
                            {{ form.errors.email }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label
                                class="mb-1.5 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                                >Phone Number</label
                            >
                            <input
                                v-model="form.phone_number"
                                type="text"
                                required
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-2.5 text-sm text-slate-100 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                                placeholder="+1 (555) 000-0000"
                            />
                            <p
                                v-if="form.errors.phone_number"
                                class="mt-1 text-xs text-rose-400"
                            >
                                {{ form.errors.phone_number }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                                >Living Address</label
                            >
                            <input
                                v-model="form.living_address"
                                type="text"
                                required
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-2.5 text-sm text-slate-100 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                                placeholder="123 Tech St, Suite 100"
                            />
                            <p
                                v-if="form.errors.living_address"
                                class="mt-1 text-xs text-rose-400"
                            >
                                {{ form.errors.living_address }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label
                                class="mb-1.5 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                                >Password</label
                            >
                            <input
                                v-model="form.password"
                                type="password"
                                required
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-2.5 text-sm text-slate-100 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                                placeholder="••••••••"
                            />
                            <p
                                v-if="form.errors.password"
                                class="mt-1 text-xs text-rose-400"
                            >
                                {{ form.errors.password }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="mb-1.5 block text-xs font-semibold tracking-wider text-slate-300 uppercase"
                                >Confirm Password</label
                            >
                            <input
                                v-model="form.password_confirmation"
                                type="password"
                                required
                                class="w-full rounded-xl border border-slate-700 bg-slate-900/80 px-4 py-2.5 text-sm text-slate-100 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 focus:outline-none"
                                placeholder="••••••••"
                            />
                            <p
                                v-if="form.errors.password_confirmation"
                                class="mt-1 text-xs text-rose-400"
                            >
                                {{ form.errors.password_confirmation }}
                            </p>
                        </div>
                    </div>

                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="mt-4 w-full rounded-xl bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/30 transition-all hover:bg-indigo-500 disabled:opacity-50"
                    >
                        {{
                            form.processing
                                ? 'Creating Account...'
                                : 'Create Account'
                        }}
                    </button>
                </form>

                <p class="text-center text-xs text-slate-400">
                    Already registered?
                    <Link
                        :href="route('login')"
                        class="font-semibold text-indigo-400 hover:underline"
                    >
                        Sign in here
                    </Link>
                </p>
            </div>
        </main>
    </div>
</template>
