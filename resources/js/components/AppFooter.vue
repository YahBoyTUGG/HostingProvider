<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { show as contact } from '@/routes/contact';
</script>

<template>
    <footer
        class="border-t border-border/80 bg-background px-6 py-5 text-sm text-muted-foreground"
    >
        <div
            class="mx-auto flex max-w-7xl flex-col gap-2 sm:flex-row sm:items-center sm:justify-between"
        >
            <p>
                &copy; {{ new Date().getFullYear() }} VelocityRig. All rights
                reserved.
            </p>
            <nav class="flex items-center gap-4" aria-label="Footer navigation">
                <Link
                    :href="contact()"
                    class="transition-colors hover:text-foreground"
                >
                    Contact
                </Link>
                <Link
                    href="/about"
                    class="transition-colors hover:text-foreground"
                >
                    About Us
                </Link>
            </nav>
        </div>
    </footer>
</template>
