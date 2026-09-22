<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, type PropType } from 'vue';
import SiteHeader from '@/components/SiteHeader.vue';

interface DockerContainer {
    id: number;
    status: 'running' | 'stopped' | 'provisioning' | 'error' | 'paused';
    memory_limit_mb: number;
    cpu_limit_cores: number;
    container_port: number;
    host_port: number;
    is_paused: boolean;
}

interface Dockerfile {
    id: number;
    name: string;
    image_tag: string;
    build_status: 'pending' | 'building' | 'ready' | 'failed';
    build_log: string | null;
    user_containers: DockerContainer[];
}

const props = defineProps({
    activeSubscriptions: {
        type: Array,
        default: () => [],
    },
    monthlySpend: {
        type: Number,
        default: 0,
    },
    subscriptionHistory: {
        type: Array,
        default: () => [],
    },
    dockerfiles: {
        type: Array as PropType<Dockerfile[]>,
        default: () => [],
    },
    flash: Object,
});

const processingPowerId = ref(null);
const processingCancelId = ref(null);
const isDockerModalOpen = ref(false);
const dockerName = ref('');
const dockerArchive = ref<File | null>(null);
const dockerMemory = ref(512);
const dockerCpu = ref(1);
const dockerPort = ref(80);
const dockerArchiveInput = ref<HTMLInputElement | null>(null);
const dockerUploadError = ref('');
const processingDockerContainerId = ref<number | null>(null);

const openDockerModal = () => {
    dockerUploadError.value = '';
    isDockerModalOpen.value = true;
};

const closeDockerModal = () => {
    isDockerModalOpen.value = false;
    dockerUploadError.value = '';
};

const selectDockerArchive = (event: Event) => {
    const input = event.target as HTMLInputElement;
    dockerArchive.value = input.files?.[0] ?? null;
};

const uploadDockerArchive = () => {
    dockerUploadError.value = '';

    if (!dockerName.value || !dockerArchive.value) {
        dockerUploadError.value = 'Enter a name and choose a .zip archive.';
        return;
    }

    const formData = new FormData();
    formData.append('name', dockerName.value);
    formData.append('archive', dockerArchive.value);
    formData.append('memory_limit_mb', String(dockerMemory.value));
    formData.append('cpu_limit_cores', String(dockerCpu.value));
    formData.append('container_port', String(dockerPort.value));

    router.post('/dockerfiles', formData, {
        forceFormData: true,
        preserveScroll: true,
        onSuccess: () => {
            closeDockerModal();
            dockerName.value = '';
            dockerArchive.value = null;
            if (dockerArchiveInput.value) dockerArchiveInput.value.value = '';
        },
        onError: (errors) => {
            dockerUploadError.value =
                errors.archive ?? errors.name ?? 'The archive could not be deployed.';
        },
    });
};

const isDockerDeleteModalOpen = ref(false);
const selectedDockerfile = ref<Dockerfile | null>(null);
const isRemovingDockerfile = ref(false);

const openDockerDeleteModal = (dockerfile: Dockerfile) => {
    selectedDockerfile.value = dockerfile;
    isDockerDeleteModalOpen.value = true;
};

const closeDockerDeleteModal = () => {
    if (isRemovingDockerfile.value) return;

    selectedDockerfile.value = null;
    isDockerDeleteModalOpen.value = false;
};

const confirmRemoveDockerfile = () => {
    if (!selectedDockerfile.value) return;

    isRemovingDockerfile.value = true;
    router.delete(`/dockerfiles/${selectedDockerfile.value.id}`, {
        preserveScroll: true,
        onSuccess: () => {
            selectedDockerfile.value = null;
            isDockerDeleteModalOpen.value = false;
        },
        onFinish: () => {
            isRemovingDockerfile.value = false;
        },
    });
};

const toggleDockerContainerPause = (container: DockerContainer) => {
    processingDockerContainerId.value = container.id;
    const shouldPause = !container.is_paused;

    router.post(
        `/docker-containers/${container.id}/${shouldPause ? 'pause' : 'unpause'}`,
        {},
        {
            preserveScroll: true,
            onSuccess: () => {
                container.is_paused = shouldPause;
                container.status = shouldPause ? 'paused' : 'running';
            },
            onFinish: () => {
                processingDockerContainerId.value = null;
            },
        },
    );
};

// Modal state
const isCancelModalOpen = ref(false);
const selectedSubForCancel = ref<any>(null);

const togglePower = (subscriptionId: number) => {
    processingPowerId.value = subscriptionId;
    router.post(
        `/subscriptions/${subscriptionId}/toggle-power`,
        {},
        {
            preserveScroll: true,
            onFinish: () => (processingPowerId.value = null),
        },
    );
};

// Open the custom cancellation modal
const openCancelModal = (sub: any) => {
    selectedSubForCancel.value = sub;
    isCancelModalOpen.value = true;
};

// Close modal & reset selection
const closeCancelModal = () => {
    if (processingCancelId.value) return; // Prevent closing while request is in flight
    isCancelModalOpen.value = false;
    selectedSubForCancel.value = null;
};

// Confirm cancellation request
const confirmCancelSubscription = () => {
    if (!selectedSubForCancel.value) return;

    const subscriptionId = selectedSubForCancel.value.id;
    processingCancelId.value = subscriptionId;

    router.post(
        `/subscriptions/${subscriptionId}/cancel`,
        {},
        {
            preserveScroll: true,
            onSuccess: () => {
                processingCancelId.value = null;
                isCancelModalOpen.value = false;
                selectedSubForCancel.value = null;
                // closeCancelModal();
            },
            onError: () => {
                processingCancelId.value = null;
            },
            onFinish: () => {
                processingCancelId.value = null;
            },
        },
    );
};
</script>

<template>
    <Head title="User Dashboard - Server Management" />

    <div class="min-h-screen bg-slate-900 font-sans text-slate-100">
        <SiteHeader />
        <span>{{ $page.props.flash?.success }}</span>

        <main class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <!-- Dashboard Overview Stats -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 backdrop-blur"
                >
                    <p
                        class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                    >
                        Active Instances
                    </p>
                    <div class="mt-2 flex items-baseline justify-between">
                        <span class="text-3xl font-extrabold text-white">{{
                            activeSubscriptions.length
                        }}</span>
                        <span
                            class="rounded-md border border-emerald-500/20 bg-emerald-500/10 px-2 py-0.5 text-xs font-medium text-emerald-400"
                        >
                            Operational
                        </span>
                    </div>
                </div>

                <div
                    class="rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 backdrop-blur"
                >
                    <p
                        class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                    >
                        Estimated Monthly Spend
                    </p>
                    <div class="mt-2 flex items-baseline justify-between">
                        <span class="text-3xl font-extrabold text-white"
                            >${{
                                monthlySpend ? monthlySpend.toFixed(2) : '0.00'
                            }}</span
                        >
                        <span class="text-xs text-slate-400">USD / mo</span>
                    </div>
                </div>

                <div
                    class="flex items-center justify-between rounded-2xl border border-slate-700/60 bg-slate-800/60 p-6 backdrop-blur"
                >
                    <div>
                        <p
                            class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                        >
                            Expand Fleet
                        </p>
                        <p class="mt-1 text-sm text-slate-300">
                            Deploy high-performance VPS or Bare Metal servers.
                        </p>
                    </div>
                    <Link
                        :href="route('catalog')"
                        class="shrink-0 rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-600/30 transition-all hover:bg-indigo-500"
                    >
                        + New Server
                    </Link>
                </div>
            </div>

            <!-- Active Virtual Machines Section -->
            <section class="mt-12 space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-white">
                        Provisioned Servers
                    </h2>
                    <span class="text-sm text-slate-400"
                        >{{ activeSubscriptions.length }} Servers Running</span
                    >
                </div>

                <div
                    v-if="activeSubscriptions.length === 0"
                    class="space-y-3 rounded-2xl border border-dashed border-slate-700 bg-slate-800/40 p-12 text-center"
                >
                    <p class="text-base text-slate-400">
                        You have no active servers provisioned.
                    </p>
                    <Link
                        :href="route('catalog')"
                        class="inline-block rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-medium text-white"
                    >
                        Browse Server Plans
                    </Link>
                </div>

                <div v-else class="grid grid-cols-1 gap-6">
                    <div
                        v-for="sub in activeSubscriptions"
                        :key="sub.id"
                        class="space-y-6 rounded-2xl border border-slate-700 bg-slate-800/80 p-6 shadow-xl"
                    >
                        <!-- Server Card Header -->
                        <div
                            class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-700/60 pb-4"
                        >
                            <div class="space-y-1">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-lg font-bold text-white">
                                        {{ sub.server_offer?.name }}
                                    </h3>
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full px-2.5 py-0.5 text-xs font-semibold tracking-wider uppercase"
                                        :class="
                                            sub.virtual_machine?.status ===
                                            'running'
                                                ? 'border border-emerald-500/30 bg-emerald-500/10 text-emerald-400'
                                                : 'border border-rose-500/30 bg-rose-500/10 text-rose-400'
                                        "
                                    >
                                        <span
                                            class="h-1.5 w-1.5 rounded-full"
                                            :class="
                                                sub.virtual_machine?.status ===
                                                'running'
                                                    ? 'animate-pulse bg-emerald-400'
                                                    : 'bg-rose-400'
                                            "
                                        ></span>
                                        {{
                                            sub.virtual_machine?.status ||
                                            'provisioning'
                                        }}
                                    </span>
                                </div>
                                <p class="font-mono text-xs text-slate-400">
                                    Hostname: {{ sub.virtual_machine?.name }}
                                </p>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center gap-3">
                                <button
                                    @click="togglePower(sub.id)"
                                    :disabled="processingPowerId === sub.id"
                                    class="flex items-center gap-2 rounded-xl border px-4 py-2 text-xs font-semibold shadow-sm transition-all"
                                    :class="
                                        sub.virtual_machine?.status ===
                                        'running'
                                            ? 'border-amber-500/30 bg-amber-500/10 text-amber-400 hover:bg-amber-500/20'
                                            : 'border-emerald-500/30 bg-emerald-500/10 text-emerald-400 hover:bg-emerald-500/20'
                                    "
                                >
                                    <span
                                        v-if="processingPowerId === sub.id"
                                        class="animate-spin"
                                        >...</span
                                    >
                                    <span>{{
                                        sub.virtual_machine?.status ===
                                        'running'
                                            ? 'Stop Instance'
                                            : 'Start Instance'
                                    }}</span>
                                </button>

                                <button
                                    @click="openCancelModal(sub)"
                                    class="rounded-xl border border-rose-500/20 bg-rose-500/10 px-3 py-2 text-xs font-semibold text-rose-400 transition-all hover:bg-rose-500/20"
                                >
                                    Cancel Plan
                                </button>
                            </div>
                        </div>

                        <!-- Technical Specs Grid -->
                        <div
                            class="grid grid-cols-2 gap-4 text-sm md:grid-cols-4"
                        >
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >IP Address</span
                                >
                                <span
                                    class="font-mono font-medium text-slate-200"
                                    >{{ sub.virtual_machine?.ip_address }}</span
                                >
                            </div>
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >Operating System</span
                                >
                                <span class="font-medium text-slate-200">{{
                                    sub.virtual_machine?.operating_system
                                        ?.full_name
                                }}</span>
                            </div>
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >SSH Connection</span
                                >
                                <span class="font-mono text-xs text-slate-300"
                                    >ssh {{ sub.virtual_machine?.ssh_user }}@{{
                                        sub.virtual_machine?.ip_address
                                    }}</span
                                >
                            </div>
                            <div
                                class="rounded-xl border border-slate-800 bg-slate-900/60 p-3"
                            >
                                <span class="block text-xs text-slate-500"
                                    >Billing Term</span
                                >
                                <span
                                    class="font-medium text-slate-200 capitalize"
                                    >{{
                                        sub.billing_cycle?.replace('_', ' ')
                                    }}
                                    (${{ sub.cost }})</span
                                >
                            </div>
                        </div>

                        <!-- Installed Apps -->
                        <div
                            v-if="
                                sub.virtual_machine?.preinstalled_apps?.length
                            "
                            class="flex items-center gap-2 pt-2"
                        >
                            <span
                                class="text-xs font-semibold tracking-wider text-slate-400 uppercase"
                                >Installed Addons:</span
                            >
                            <div class="flex flex-wrap gap-1.5">
                                <span
                                    v-for="app in sub.virtual_machine
                                        .preinstalled_apps"
                                    :key="app.id"
                                    class="rounded-md border border-slate-600/50 bg-slate-700/60 px-2 py-0.5 text-xs text-slate-300"
                                >
                                    {{ app.name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Subscription History Table -->
            <section class="mt-12 space-y-4">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <h2 class="text-xl font-bold text-white">
                            Docker Containers
                        </h2>
                        <p class="mt-1 text-sm text-slate-400">
                            Build and run applications from your own Docker context.
                        </p>
                    </div>
                    <button
                        type="button"
                        @click="openDockerModal"
                        class="rounded-xl bg-cyan-500 px-4 py-2.5 text-sm font-semibold text-slate-950 shadow-lg shadow-cyan-500/20 transition hover:bg-cyan-400"
                    >
                        Upload .zip Archive
                    </button>
                </div>

                <div
                    v-if="!dockerfiles.length"
                    class="rounded-2xl border border-dashed border-slate-700 bg-slate-800/40 p-8 text-center"
                >
                    <p class="text-sm text-slate-400">
                        No Docker images or containers have been deployed yet.
                    </p>
                </div>

                <div v-else class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                    <article
                        v-for="dockerfile in dockerfiles"
                        :key="dockerfile.id"
                        class="rounded-2xl border border-slate-700 bg-slate-800/80 p-5 shadow-xl"
                    >
                        <div class="flex items-start justify-between gap-4">
                            <div class="min-w-0">
                                <h3 class="font-bold text-white">{{ dockerfile.name }}</h3>
                                <p class="mt-1 font-mono text-xs text-slate-400">
                                    {{ dockerfile.image_tag }}
                                </p>
                            </div>
                            <div class="flex shrink-0 items-center gap-2">
                                <span
                                    class="rounded-full px-2.5 py-1 text-xs font-semibold capitalize"
                                    :class="dockerfile.user_containers?.[0]?.is_paused
                                        ? 'bg-amber-500/10 text-amber-400'
                                        : dockerfile.user_containers?.[0]?.status === 'running'
                                        ? 'bg-emerald-500/10 text-emerald-400'
                                        : dockerfile.user_containers?.[0]?.status === 'error' || dockerfile.build_status === 'failed'
                                            ? 'bg-rose-500/10 text-rose-400'
                                            : 'bg-amber-500/10 text-amber-400'"
                                >
                                    {{ dockerfile.user_containers?.[0]?.status ?? 'not started' }}
                                </span>
                                <button
                                    v-if="dockerfile.user_containers?.[0] && (dockerfile.user_containers[0].status === 'running' || dockerfile.user_containers[0].is_paused)"
                                    type="button"
                                    :disabled="processingDockerContainerId === dockerfile.user_containers[0].id"
                                    @click="toggleDockerContainerPause(dockerfile.user_containers[0])"
                                    class="rounded-lg border border-amber-500/30 bg-amber-500/10 px-3 py-1.5 text-xs font-semibold text-amber-300 transition hover:bg-amber-500/20 disabled:opacity-50"
                                    :aria-label="dockerfile.user_containers[0].is_paused ? 'Resume container' : 'Pause container'"
                                >
                                    <span v-if="processingDockerContainerId === dockerfile.user_containers[0].id">...</span>
                                    <span v-else>{{ dockerfile.user_containers[0].is_paused ? 'Resume' : 'Pause' }}</span>
                                </button>
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-3 text-xs">
                            <div class="rounded-lg border border-slate-700 bg-slate-900/60 p-3">
                                <span class="block text-slate-500">Container</span>
                                <span class="mt-1 block font-medium capitalize text-slate-200">
                                    {{ dockerfile.user_containers?.[0]?.status ?? 'not started' }}
                                </span>
                            </div>
                            <div class="rounded-lg border border-slate-700 bg-slate-900/60 p-3">
                                <span class="block text-slate-500">Resources</span>
                                <span class="mt-1 block font-medium text-slate-200">
                                    {{ dockerfile.user_containers?.[0]?.memory_limit_mb ?? '-' }} MB ·
                                    {{ dockerfile.user_containers?.[0]?.cpu_limit_cores ?? '-' }} CPU
                                </span>
                            </div>
                        </div>
                        <div class="mt-4 flex flex-wrap items-center justify-between gap-3">
                            <div class="flex flex-wrap items-center gap-3">
                                <a
                                    :href="route('dockerfiles.download', dockerfile.id)"
                                    class="text-sm font-semibold text-cyan-400 hover:text-cyan-300"
                                >
                                    Download source archive
                                </a>
                                <button
                                    type="button"
                                    @click="openDockerDeleteModal(dockerfile)"
                                    class="text-sm font-semibold text-rose-400 hover:text-rose-300"
                                >
                                    Remove
                                </button>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <span v-if="dockerfile.user_containers?.[0]" class="text-xs text-slate-500">
                                    {{ dockerfile.user_containers[0].container_port }} → :{{ dockerfile.user_containers[0].host_port }}
                                </span>
                            </div>
                        </div>
                        <details
                            v-if="dockerfile.build_log"
                            class="mt-4 min-w-0 rounded-xl border border-slate-700 bg-slate-950/70"
                        >
                            <summary
                                class="cursor-pointer list-inside px-4 py-3 text-left text-xs font-semibold text-slate-400 transition hover:text-white"
                            >
                                View build log
                            </summary>
                            <div class="border-t border-slate-800 px-4 py-3">
                                <pre class="max-h-64 overflow-x-auto overflow-y-auto whitespace-pre-wrap break-words font-mono text-left text-xs leading-5 text-slate-400">{{ dockerfile.build_log }}</pre>
                            </div>
                        </details>
                    </article>
                </div>
            </section>

            <!-- Subscription History Table -->
            <section class="mt-12 space-y-4 pt-4">
                <h2 class="text-xl font-bold text-white">
                    Billing & Subscription History
                </h2>

                <div
                    class="overflow-hidden rounded-2xl border border-slate-700/60 bg-slate-800/60 shadow-xl"
                >
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead
                            class="border-b border-slate-700 bg-slate-900/80 text-xs font-semibold text-slate-400 uppercase"
                        >
                            <tr>
                                <th class="px-6 py-4">Server Offer</th>
                                <th class="px-6 py-4">Cycle</th>
                                <th class="px-6 py-4">Cost</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Renews / Expiration</th>
                            </tr>
                        </thead>
                        <tbody
                            v-if="subscriptionHistory.length === 0"
                            class="divide-y divide-slate-700/50"
                        >
                            <tr>
                                <td
                                    colspan="5"
                                    class="px-6 py-10 text-center text-sm text-slate-400"
                                >
                                    You have no billing or subscription history yet.
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else class="divide-y divide-slate-700/50">
                            <tr
                                v-for="item in subscriptionHistory"
                                :key="item.id"
                                class="transition-colors hover:bg-slate-700/20"
                            >
                                <td class="px-6 py-4 font-medium text-white">
                                    {{ item.server_offer?.name }}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    {{ item.billing_cycle?.replace('_', ' ') }}
                                </td>
                                <td class="px-6 py-4 font-mono">
                                    ${{ item.cost }}
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="rounded-md px-2 py-1 text-xs font-semibold capitalize"
                                        :class="
                                            item.status === 'active'
                                                ? 'bg-emerald-500/10 text-emerald-400'
                                                : 'bg-slate-700 text-slate-400'
                                        "
                                    >
                                        {{ item.status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-xs text-slate-400">
                                    {{
                                        item.ends_at
                                            ? new Date(
                                                  item.ends_at,
                                              ).toLocaleDateString('en-GB', {
                                                  day: '2-digit',
                                                  month: '2-digit',
                                                  year: 'numeric',
                                              })
                                            : 'N/A'
                                    }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <!-- Docker Upload Modal -->
        <Teleport to="body">
            <Transition
                enter-active-class="transition duration-200 ease-out"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition duration-150 ease-in"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    v-if="isDockerModalOpen"
                    class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto p-4"
                >
                    <div
                        class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm"
                        @click="closeDockerModal"
                    ></div>
                    <div class="relative w-full max-w-lg rounded-2xl border border-slate-700/80 bg-slate-900 p-6 shadow-2xl">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-bold text-white">Deploy Docker application</h3>
                                <p class="mt-1 text-sm text-slate-400">Upload a complete build context and we will build its image and start a container.</p>
                            </div>
                            <button
                                type="button"
                                @click="closeDockerModal"
                                class="rounded-lg p-1 text-slate-400 hover:bg-slate-800 hover:text-white"
                                aria-label="Close upload dialog"
                            >
                                &#x2715;
                            </button>
                        </div>

                        <div class="mt-5 space-y-4">
                            <label class="block text-sm text-slate-300">
                                Application name
                                <input
                                    v-model="dockerName"
                                    type="text"
                                    maxlength="120"
                                    placeholder="Custom Python API"
                                    class="mt-1.5 w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-white outline-none focus:border-cyan-400"
                                />
                            </label>
                            <label class="block text-sm text-slate-300">
                                Source archive
                                <input
                                    ref="dockerArchiveInput"
                                    type="file"
                                    accept=".zip,application/zip"
                                    class="mt-1.5 block w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-slate-300 file:mr-3 file:rounded-lg file:border-0 file:bg-cyan-500 file:px-3 file:py-1.5 file:text-xs file:font-semibold file:text-slate-950"
                                    @change="selectDockerArchive"
                                />
                            </label>

                            <div class="rounded-xl border border-cyan-500/20 bg-cyan-500/5 p-4 text-sm text-slate-300">
                                <p class="font-semibold text-cyan-300">Archive organization</p>
                                <ul class="mt-2 list-disc space-y-1 pl-5 text-xs text-slate-400">
                                    <li>Put <code class="text-slate-200">Dockerfile</code> at the archive root.</li>
                                    <li>Keep application source, dependency files, and assets beside it.</li>
                                    <li>Use relative paths in <code class="text-slate-200">COPY</code> and <code class="text-slate-200">ADD</code>.</li>
                                    <li>Do not include secrets; use environment variables at runtime.</li>
                                </ul>
                            </div>

                            <div class="grid grid-cols-2 gap-3">
                                <label class="text-sm text-slate-300">
                                    Memory (MB)
                                    <input v-model.number="dockerMemory" type="number" min="64" max="32768" step="64" class="mt-1.5 w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-white outline-none focus:border-cyan-400" />
                                </label>
                                <label class="text-sm text-slate-300">
                                    CPU cores
                                    <input v-model.number="dockerCpu" type="number" min="0.1" max="64" step="0.1" class="mt-1.5 w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-white outline-none focus:border-cyan-400" />
                                </label>
                                <label class="text-sm text-slate-300">
                                    Application port
                                    <input v-model.number="dockerPort" type="number" min="1" max="65535" class="mt-1.5 w-full rounded-xl border border-slate-700 bg-slate-950 px-3 py-2.5 text-sm text-white outline-none focus:border-cyan-400" />
                                </label>
                            </div>
                            <p v-if="dockerUploadError" class="rounded-lg border border-rose-500/30 bg-rose-500/10 p-3 text-sm text-rose-300">
                                {{ dockerUploadError }}
                            </p>
                        </div>

                        <div class="mt-6 flex justify-end gap-3">
                            <button type="button" @click="closeDockerModal" class="rounded-xl border border-slate-700 bg-slate-800 px-4 py-2 text-sm font-semibold text-slate-300 hover:bg-slate-700 hover:text-white">
                                Cancel
                            </button>
                            <button type="button" @click="uploadDockerArchive" class="rounded-xl bg-cyan-500 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-cyan-400">
                                Build and run
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>
        </Teleport>

        <!-- Docker Delete Confirmation Modal -->
        <Teleport to="body">
            <Transition
                enter-active-class="transition duration-200 ease-out"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition duration-150 ease-in"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    v-if="isDockerDeleteModalOpen"
                    class="fixed inset-0 z-50 flex items-center justify-center p-4"
                >
                    <div
                        class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm"
                        @click="closeDockerDeleteModal"
                    ></div>

                    <div
                        class="relative w-full max-w-md rounded-2xl border border-slate-700/80 bg-slate-900 p-6 shadow-2xl"
                    >
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-rose-500/30 bg-rose-500/10 text-rose-400"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                        />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-white">
                                    Remove Docker deployment?
                                </h3>
                            </div>
                            <button
                                type="button"
                                @click="closeDockerDeleteModal"
                                :disabled="isRemovingDockerfile"
                                class="rounded-lg p-1 text-slate-400 hover:bg-slate-800 hover:text-white disabled:opacity-50"
                                aria-label="Close delete confirmation"
                            >
                                &#x2715;
                            </button>
                        </div>

                        <div class="mt-4 space-y-3 text-sm text-slate-300">
                            <p>
                                This will stop and remove the Docker container, image, uploaded source archive, and deployment record.
                            </p>
                            <div
                                v-if="selectedDockerfile"
                                class="rounded-xl border border-slate-800 bg-slate-950/60 p-4"
                            >
                                <p class="text-xs text-slate-400">Deployment</p>
                                <p class="mt-1 font-semibold text-white">
                                    {{ selectedDockerfile.name }}
                                </p>
                                <p class="mt-1 font-mono text-xs text-slate-500">
                                    {{ selectedDockerfile.image_tag }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-3">
                            <button
                                type="button"
                                @click="closeDockerDeleteModal"
                                :disabled="isRemovingDockerfile"
                                class="rounded-xl border border-slate-700 bg-slate-800 px-4 py-2 text-sm font-semibold text-slate-300 transition hover:bg-slate-700 hover:text-white disabled:opacity-50"
                            >
                                Keep deployment
                            </button>
                            <button
                                type="button"
                                @click="confirmRemoveDockerfile"
                                :disabled="isRemovingDockerfile"
                                class="flex items-center gap-2 rounded-xl bg-rose-600 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-rose-600/20 transition hover:bg-rose-500 disabled:opacity-50"
                            >
                                <span v-if="isRemovingDockerfile" class="animate-spin">...</span>
                                Remove deployment
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>
        </Teleport>

        <!-- Custom Cancellation Modal -->
        <Teleport to="body">
            <Transition
                enter-active-class="transition duration-200 ease-out"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition duration-150 ease-in"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    v-if="isCancelModalOpen"
                    class="fixed inset-0 z-50 flex items-center justify-center p-4"
                >
                    <!-- Backdrop -->
                    <div
                        class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm"
                        @click="closeCancelModal"
                    ></div>

                    <!-- Modal Box -->
                    <div
                        class="relative w-full max-w-md rounded-2xl border border-slate-700/80 bg-slate-900 p-6 shadow-2xl transition-all"
                    >
                        <!-- Modal Header -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-rose-500/30 bg-rose-500/10 text-rose-400"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                                        />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-white">
                                    Cancel Subscription
                                </h3>
                            </div>
                            <button
                                @click="closeCancelModal"
                                class="rounded-lg p-1 text-slate-400 hover:bg-slate-800 hover:text-slate-200"
                            >
                                &#x2715;
                            </button>
                        </div>

                        <!-- Modal Body Details -->
                        <div class="mt-4 space-y-4 text-sm text-slate-300">
                            <p>
                                Are you sure you want to cancel this plan? The server instance will be terminated immediately.
                            </p>

                            <div
                                v-if="selectedSubForCancel"
                                class="space-y-2 rounded-xl border border-slate-800 bg-slate-950/60 p-4"
                            >
                                <div class="flex justify-between border-b border-slate-800/80 pb-2">
                                    <span class="text-xs text-slate-400">Hostname:</span>
                                    <span class="font-mono text-xs font-semibold text-white">
                                        {{ selectedSubForCancel.virtual_machine?.name ?? 'N/A' }}
                                    </span>
                                </div>
                                <div class="flex justify-between border-b border-slate-800/80 pb-2">
                                    <span class="text-xs text-slate-400">Plan Offer:</span>
                                    <span class="font-medium text-white">
                                        {{ selectedSubForCancel.server_offer?.name }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-xs text-slate-400">Current Status:</span>
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full px-2 py-0.5 text-xs font-semibold capitalize"
                                        :class="
                                            selectedSubForCancel.virtual_machine?.status === 'running'
                                                ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20'
                                                : 'bg-rose-500/10 text-rose-400 border border-rose-500/20'
                                        "
                                    >
                                        <span
                                            class="h-1.5 w-1.5 rounded-full"
                                            :class="
                                                selectedSubForCancel.virtual_machine?.status === 'running'
                                                    ? 'bg-emerald-400 animate-pulse'
                                                    : 'bg-rose-400'
                                            "
                                        ></span>
                                        {{ selectedSubForCancel.virtual_machine?.status || 'provisioning' }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Actions -->
                        <div class="mt-6 flex items-center justify-end gap-3">
                            <button
                                @click="closeCancelModal"
                                :disabled="!!processingCancelId"
                                class="rounded-xl border border-slate-700 bg-slate-800 px-4 py-2 text-xs font-semibold text-slate-300 transition-all hover:bg-slate-700 hover:text-white disabled:opacity-50"
                            >
                                Keep Plan
                            </button>
                            <button
                                @click="confirmCancelSubscription"
                                :disabled="!!processingCancelId"
                                class="flex items-center gap-2 rounded-xl bg-rose-600 px-4 py-2 text-xs font-semibold text-white shadow-lg shadow-rose-600/30 transition-all hover:bg-rose-500 disabled:opacity-50"
                            >
                                <span
                                    v-if="processingCancelId === selectedSubForCancel?.id"
                                    class="animate-spin"
                                    >...</span
                                >
                                <span>Confirm Cancellation</span>
                            </button>
                        </div>
                    </div>
                </div>
            </Transition>
        </Teleport>
    </div>
</template>
