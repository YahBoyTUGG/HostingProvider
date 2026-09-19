<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import { LogOut, Settings } from '@lucide/vue';
import {
    DropdownMenuGroup,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
} from '@/components/ui/dropdown-menu';
import UserInfo from '@/components/UserInfo.vue';
import { logout } from '@/routes';
import { edit } from '@/routes/profile';
import type { User } from '@/types';

type Props = {
    user: User;
};

const handleLogout = () => {
    router.flushAll();
};

defineProps<Props>();
</script>

<template>
    <DropdownMenuLabel class="p-0 font-normal text-slate-100">
        <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
            <UserInfo :user="user" :show-email="true" email-label="Profile" />
        </div>
    </DropdownMenuLabel>
    <DropdownMenuSeparator class="bg-slate-800" />
    <DropdownMenuGroup>
        <DropdownMenuItem :as-child="true">
            <Link
                class="block w-full cursor-pointer text-slate-300 focus:bg-slate-800 focus:text-white"
                :href="edit()"
                prefetch
            >
                <Settings class="mr-2 h-4 w-4 text-slate-400" />
                Settings
            </Link>
        </DropdownMenuItem>
    </DropdownMenuGroup>
    <DropdownMenuSeparator class="bg-slate-800" />
    <DropdownMenuItem :as-child="true">
        <Link
            class="block w-full cursor-pointer text-rose-300 focus:bg-rose-500/10 focus:text-rose-200"
            :href="logout()"
            @click="handleLogout"
            as="button"
            data-test="logout-button"
        >
            <LogOut class="mr-2 h-4 w-4 text-rose-400" />
            Log out
        </Link>
    </DropdownMenuItem>
</template>
