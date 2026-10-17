<script setup lang="ts">
import { Moon, Sun } from '@lucide/vue';
import { useAppearance } from '@/composables/useAppearance';

const { resolvedAppearance, updateAppearance } = useAppearance();
</script>

<template>
    <button
        type="button"
        class="flex h-9 w-9 items-center justify-center rounded-lg text-slate-300 transition-colors hover:bg-slate-800 hover:text-white focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:outline-none"
        :aria-label="
            resolvedAppearance === 'dark'
                ? 'Switch to light theme'
                : 'Switch to dark theme'
        "
        :title="
            resolvedAppearance === 'dark'
                ? 'Switch to light theme'
                : 'Switch to dark theme'
        "
        @click="
            updateAppearance(
                resolvedAppearance === 'dark' ? 'light' : 'dark',
            )
        "
    >
        <Sun
            v-if="resolvedAppearance === 'dark'"
            class="h-4 w-4"
            aria-hidden="true"
        />
        <Moon v-else class="h-4 w-4" aria-hidden="true" />
    </button>
</template>
