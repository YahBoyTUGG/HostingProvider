<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { ChevronDown, Menu, X } from '@lucide/vue';
import { computed, ref } from 'vue';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import UserMenuContent from '@/components/UserMenuContent.vue';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import { getInitials } from '@/composables/useInitials';
import ThemeToggle from '@/components/ThemeToggle.vue';
import type { User } from '@/types';

const page = usePage();
const mobileMenuOpen = ref(false);
const user = computed(() => page.props.auth?.user as User | null);
const { isCurrentOrParentUrl } = useCurrentUrl();
const activeNavClasses = 'font-semibold text-indigo-300';
const displayName = computed(() => {
    if (!user.value) {
        return '';
    }

    const firstName =
        typeof user.value.first_name === 'string' ? user.value.first_name : '';
    const lastName =
        typeof user.value.last_name === 'string' ? user.value.last_name : '';

    return `${firstName} ${lastName}`.trim() || user.value.name;
});
const closeMobileMenu = () => {
    mobileMenuOpen.value = false;
};
</script>

<template>
    <header
        class="sticky top-0 z-50 border-b border-slate-800 bg-[#0f172a]/95 text-slate-100 backdrop-blur"
    >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <Link
                    href="/"
                    class="flex min-w-0 items-center gap-2.5 sm:gap-3"
                    @click="closeMobileMenu"
                >
                    <span
                        class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-indigo-600 text-sm font-bold text-white shadow-lg shadow-indigo-500/20"
                    >
                        VR
                    </span>
                    <span class="truncate text-base font-semibold tracking-tight sm:text-lg"
                        >VelocityRig</span
                    >
                </Link>

                <nav
                    class="hidden items-center gap-3 text-sm font-medium xl:flex xl:gap-5"
                >
                <Link
                    href="/catalog"
                    :class="[
                        'transition-colors hover:text-slate-100',
                        isCurrentOrParentUrl('/catalog')
                            ? activeNavClasses
                            : 'text-slate-400',
                    ]"
                >
                    Catalog
                </Link>
                <Link
                    v-if="user"
                    href="/tickets"
                    :class="[
                        'transition-colors hover:text-slate-100',
                        isCurrentOrParentUrl('/tickets')
                            ? activeNavClasses
                            : 'text-slate-400',
                    ]"
                >
                    Support Tickets
                </Link>

                <Link
                    v-if="user"
                    href="/dashboard"
                    :class="[
                        'transition-colors hover:text-slate-100',
                        isCurrentOrParentUrl('/dashboard')
                            ? activeNavClasses
                            : 'text-slate-400',
                    ]"
                >
                    Dashboard
                </Link>

                <Link
                    v-if="user?.role === 'admin'"
                    href="/admin/dashboard"
                    :class="[
                        'transition-colors hover:text-slate-100',
                        isCurrentOrParentUrl('/admin/dashboard')
                            ? activeNavClasses
                            : 'text-slate-400',
                    ]"
                >
                    Admin Dashboard
                </Link>

                <span
                    v-if="user"
                    class="h-6 border-l border-slate-700"
                    aria-hidden="true"
                ></span>

                <DropdownMenu v-if="user">
                    <DropdownMenuTrigger as-child>
                        <button
                            type="button"
                            class="flex items-center gap-3 rounded-lg p-1.5 transition-colors hover:bg-slate-800 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                        >
                            <span
                                class="flex h-8 w-8 items-center justify-center rounded-lg border border-indigo-500/30 bg-indigo-500/20 text-xs font-semibold text-indigo-300 uppercase"
                            >
                                {{ getInitials(displayName) }}
                            </span>
                            <span class="hidden text-left sm:block">
                                <span class="block leading-none text-slate-200">
                                    {{ displayName }}
                                </span>
                                <span
                                    class="mt-1 block max-w-32 truncate text-xs leading-none text-slate-400"
                                >
                                    {{ user.email }}
                                </span>
                            </span>
                            <ChevronDown
                                class="h-4 w-4 text-slate-400"
                                aria-hidden="true"
                            />
                        </button>
                    </DropdownMenuTrigger>
                    <DropdownMenuContent
                        align="end"
                        class="w-60 border-slate-700 bg-[#0b0f19] p-1 text-slate-100 shadow-2xl shadow-black/40"
                    >
                        <UserMenuContent :user="user" />
                    </DropdownMenuContent>
                </DropdownMenu>
                <Link
                    v-else
                    href="/login"
                    class="text-slate-300 transition-colors hover:text-white"
                >
                    Sign In
                </Link>
                <ThemeToggle />
                </nav>

                <button
                    type="button"
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-700 text-slate-200 transition hover:border-indigo-400 hover:bg-slate-800 focus-visible:ring-2 focus-visible:ring-indigo-400 focus-visible:outline-none xl:hidden"
                    :aria-expanded="mobileMenuOpen"
                    aria-controls="site-mobile-menu"
                    :aria-label="mobileMenuOpen ? 'Close navigation menu' : 'Open navigation menu'"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                >
                    <X v-if="mobileMenuOpen" class="h-5 w-5" aria-hidden="true" />
                    <Menu v-else class="h-5 w-5" aria-hidden="true" />
                </button>
            </div>

            <Transition
                enter-active-class="transition duration-150 ease-out"
                enter-from-class="-translate-y-2 opacity-0"
                enter-to-class="translate-y-0 opacity-100"
                leave-active-class="transition duration-100 ease-in"
                leave-from-class="translate-y-0 opacity-100"
                leave-to-class="-translate-y-2 opacity-0"
            >
                <nav
                    v-if="mobileMenuOpen"
                    id="site-mobile-menu"
                    class="border-t border-slate-800 py-3 xl:hidden"
                    aria-label="Mobile navigation"
                    @keydown.esc="closeMobileMenu"
                >
                    <div class="flex flex-col gap-1 text-sm font-medium">
                        <Link
                            href="/catalog"
                            :class="[
                                'rounded-lg px-3 py-2.5 transition-colors hover:bg-slate-800 hover:text-slate-100',
                                isCurrentOrParentUrl('/catalog')
                                    ? 'bg-indigo-500/10 font-semibold text-indigo-300'
                                    : 'text-slate-300',
                            ]"
                            @click="closeMobileMenu"
                        >
                            Catalog
                        </Link>
                        <Link
                            v-if="user"
                            href="/tickets"
                            :class="[
                                'rounded-lg px-3 py-2.5 transition-colors hover:bg-slate-800 hover:text-slate-100',
                                isCurrentOrParentUrl('/tickets')
                                    ? 'bg-indigo-500/10 font-semibold text-indigo-300'
                                    : 'text-slate-300',
                            ]"
                            @click="closeMobileMenu"
                        >
                            Support Tickets
                        </Link>
                        <Link
                            v-if="user"
                            href="/dashboard"
                            :class="[
                                'rounded-lg px-3 py-2.5 transition-colors hover:bg-slate-800 hover:text-slate-100',
                                isCurrentOrParentUrl('/dashboard')
                                    ? 'bg-indigo-500/10 font-semibold text-indigo-300'
                                    : 'text-slate-300',
                            ]"
                            @click="closeMobileMenu"
                        >
                            Dashboard
                        </Link>
                        <Link
                            v-if="user?.role === 'admin'"
                            href="/admin/dashboard"
                            :class="[
                                'rounded-lg px-3 py-2.5 transition-colors hover:bg-slate-800 hover:text-slate-100',
                                isCurrentOrParentUrl('/admin/dashboard')
                                    ? 'bg-indigo-500/10 font-semibold text-indigo-300'
                                    : 'text-slate-300',
                            ]"
                            @click="closeMobileMenu"
                        >
                            Admin Dashboard
                        </Link>

                        <div
                            class="mt-2 flex items-center justify-between border-t border-slate-800 px-3 pt-3"
                        >
                            <DropdownMenu v-if="user">
                                <DropdownMenuTrigger as-child>
                                    <button
                                        type="button"
                                        class="flex min-w-0 items-center gap-3 rounded-lg p-1.5 text-left transition-colors hover:bg-slate-800 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                    >
                                        <span
                                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg border border-indigo-500/30 bg-indigo-500/20 text-xs font-semibold text-indigo-300 uppercase"
                                        >
                                            {{ getInitials(displayName) }}
                                        </span>
                                        <span class="min-w-0">
                                            <span class="block truncate text-slate-200">
                                                {{ displayName }}
                                            </span>
                                            <span class="block max-w-48 truncate text-xs text-slate-400">
                                                {{ user.email }}
                                            </span>
                                        </span>
                                        <ChevronDown class="h-4 w-4 shrink-0 text-slate-400" aria-hidden="true" />
                                    </button>
                                </DropdownMenuTrigger>
                                <DropdownMenuContent
                                    align="start"
                                    class="w-60 border-slate-700 bg-[#0b0f19] p-1 text-slate-100 shadow-2xl shadow-black/40"
                                >
                                    <UserMenuContent :user="user" />
                                </DropdownMenuContent>
                            </DropdownMenu>
                            <Link
                                v-else
                                href="/login"
                                class="rounded-lg px-3 py-2 text-slate-300 transition-colors hover:bg-slate-800 hover:text-white"
                                @click="closeMobileMenu"
                            >
                                Sign In
                            </Link>
                            <ThemeToggle />
                        </div>
                    </div>
                </nav>
            </Transition>
        </div>
    </header>
</template>
