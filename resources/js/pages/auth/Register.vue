<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';

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
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Sign Up - VelocityRig" />

    <div class="min-h-screen bg-slate-900 text-slate-100 flex flex-col justify-center items-center p-4 py-12">
        <div class="w-full max-w-lg space-y-8 bg-slate-800/80 border border-slate-700/80 p-8 rounded-2xl shadow-2xl backdrop-blur">
            <!-- Header -->
            <div class="text-center space-y-2">
                <div class="inline-flex w-12 h-12 rounded-xl bg-indigo-600 items-center justify-center font-extrabold text-white text-xl shadow-lg shadow-indigo-500/30">
                    VR
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-white">Create your account</h1>
                <p class="text-sm text-slate-400">Deploy high-performance VPS servers in seconds</p>
            </div>

            <!-- Form -->
            <form @submit.prevent="submit" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">First Name</label>
                        <input
                            v-model="form.first_name"
                            type="text"
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                            placeholder="John"
                        />
                        <p v-if="form.errors.first_name" class="mt-1 text-xs text-rose-400">{{ form.errors.first_name }}</p>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Last Name</label>
                        <input
                            v-model="form.last_name"
                            type="text"
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                            placeholder="Doe"
                        />
                        <p v-if="form.errors.last_name" class="mt-1 text-xs text-rose-400">{{ form.errors.last_name }}</p>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Email Address</label>
                    <input
                        v-model="form.email"
                        type="email"
                        required
                        class="w-full px-4 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                        placeholder="john@example.com"
                    />
                    <p v-if="form.errors.email" class="mt-1 text-xs text-rose-400">{{ form.errors.email }}</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Phone Number</label>
                        <input
                            v-model="form.phone_number"
                            type="text"
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                            placeholder="+1 (555) 000-0000"
                        />
                        <p v-if="form.errors.phone_number" class="mt-1 text-xs text-rose-400">{{ form.errors.phone_number }}</p>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Living Address</label>
                        <input
                            v-model="form.living_address"
                            type="text"
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                            placeholder="123 Tech St, Suite 100"
                        />
                        <p v-if="form.errors.living_address" class="mt-1 text-xs text-rose-400">{{ form.errors.living_address }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Password</label>
                        <input
                            v-model="form.password"
                            type="password"
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                            placeholder="••••••••"
                        />
                        <p v-if="form.errors.password" class="mt-1 text-xs text-rose-400">{{ form.errors.password }}</p>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-1.5">Confirm Password</label>
                        <input
                            v-model="form.password_confirmation"
                            type="password"
                            required
                            class="w-full px-4 py-2.5 rounded-xl bg-slate-900/80 border border-slate-700 text-slate-100 text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                            placeholder="••••••••"
                        />
                        <p v-if="form.errors.password_confirmation" class="mt-1 text-xs text-rose-400">{{ form.errors.password_confirmation }}</p>
                    </div>
                </div>

                <button
                    type="submit"
                    :disabled="form.processing"
                    class="w-full py-3 px-4 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm rounded-xl shadow-lg shadow-indigo-600/30 transition-all disabled:opacity-50 mt-4"
                >
                    {{ form.processing ? 'Creating Account...' : 'Create Account' }}
                </button>
            </form>

            <p class="text-center text-xs text-slate-400">
                Already registered?
                <Link :href="route('login')" class="text-indigo-400 font-semibold hover:underline">
                    Sign in here
                </Link>
            </p>
        </div>
    </div>
</template>
