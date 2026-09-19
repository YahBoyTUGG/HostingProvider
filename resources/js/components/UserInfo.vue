<script setup lang="ts">
import { computed } from 'vue';
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { useInitials } from '@/composables/useInitials';
import type { User } from '@/types';

type Props = {
    user: User;
    showEmail?: boolean;
    emailLabel?: string;
};

const props = withDefaults(defineProps<Props>(), {
    showEmail: false,
    emailLabel: undefined,
});

const { getInitials } = useInitials();

const displayName = computed(() => {
    const firstName =
        typeof props.user.first_name === 'string' ? props.user.first_name : '';
    const lastName =
        typeof props.user.last_name === 'string' ? props.user.last_name : '';

    return `${firstName} ${lastName}`.trim() || props.user.name;
});

// Compute whether we should show the avatar image
const showAvatar = computed(
    () => props.user.avatar && props.user.avatar !== '',
);
</script>

<template>
    <Avatar class="h-8 w-8 overflow-hidden rounded-lg">
        <AvatarImage v-if="showAvatar" :src="user.avatar!" :alt="displayName" />
        <AvatarFallback class="rounded-lg text-black dark:text-white">
            {{ getInitials(displayName) }}
        </AvatarFallback>
    </Avatar>

    <div class="grid flex-1 text-left text-sm leading-tight">
        <span class="truncate font-medium">{{ displayName }}</span>
        <span v-if="showEmail" class="truncate text-xs text-muted-foreground">{{
            emailLabel ?? user.email
        }}</span>
    </div>
</template>
