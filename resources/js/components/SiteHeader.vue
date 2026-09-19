<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { ChevronDown } from '@lucide/vue';
import { computed } from 'vue';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import UserMenuContent from '@/components/UserMenuContent.vue';
import { useCurrentUrl } from '@/composables/useCurrentUrl';
import { getInitials } from '@/composables/useInitials';
import type { User } from '@/types';

const page = usePage();
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
</script>

<template>
    <header
        class="sticky top-0 z-50 border-b border-slate-800 bg-[#0f172a]/95 text-slate-100 backdrop-blur"
    >
        <div
            class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8"
        >
            <Link href="/" class="flex items-center gap-3">
                <span
                    class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-600 text-sm font-bold text-white shadow-lg shadow-indigo-500/20"
                >
                    VR
                </span>
                <span class="text-lg font-semibold tracking-tight"
                    >VelocityRig</span
                >
            </Link>

            <nav class="flex items-center gap-5 text-sm font-medium">
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
            </nav>
        </div>
    </header>
</template>
