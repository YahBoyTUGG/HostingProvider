<script setup lang="ts">
import { Head, router, useForm, usePage } from '@inertiajs/vue3';
import { computed, reactive, ref } from 'vue';
import SiteHeader from '@/components/SiteHeader.vue';
import { containerAccessUrl } from '@/lib/containerAccessUrl';

type Tab =
    | 'users'
    | 'offers'
    | 'featured'
    | 'subscriptions'
    | 'virtual-machines'
    | 'docker'
    | 'contacts'
    | 'tickets';
type ViewMode = 'list' | 'create';

interface User {
    id: number;
    first_name: string;
    last_name: string;
    email: string;
    living_address: string | null;
    phone_number: string | null;
    role: 'user' | 'admin';
}

interface Offer {
    id: number;
    name: string;
    type: 'vps' | 'dedicated';
    ram_gb: number;
    cpu_cores: number;
    storage_amount_gb: number;
    storage_type: string;
    bandwidth_tb: number;
    gpu_model: string | null;
    gpu_count: number;
    price_monthly: number;
    price_6_months: number | null;
    price_1_year: number;
    price_2_years: number | null;
    country: string;
    city: string;
    is_active: boolean;
}

interface FeaturedOffer {
    id: number;
    server_offer_id: number;
    badge: string | null;
    button_text: string;
    sort_order: number;
    is_highlighted: boolean;
    server_offer: Offer;
}

interface Contact {
    id: number;
    name: string;
    email: string;
    subject: string;
    message: string;
    is_read: boolean;
    created_at: string;
}

interface Message {
    id: number;
    message: string;
    created_at: string;
    user?: User | null;
}

interface Ticket {
    id: number;
    subject: string;
    affected_service?: string | null;
    priority: 'low' | 'normal' | 'high';
    status: string;
    created_at: string;
    user?: User | null;
    subscription?: {
        server_offer?: { name: string } | null;
    } | null;
    messages: Message[];
}

interface Subscription {
    id: number;
    billing_cycle: string;
    cost: number | string;
    status: 'active' | 'cancelled' | 'expired';
    starts_at: string;
    ends_at: string;
    user?: User | null;
    server_offer?: { name: string } | null;
}

interface OperatingSystem {
    id: number;
    name: string;
    version: string;
}

interface VirtualMachine {
    id: number;
    name: string;
    ip_address: string;
    status: 'running' | 'stopped' | 'provisioning';
    operating_system?: OperatingSystem | null;
    subscription?: {
        user?: User | null;
        server_offer?: { name: string } | null;
    } | null;
}

interface DockerContainer {
    id: number;
    container_id: string | null;
    status: 'running' | 'stopped' | 'provisioning' | 'error' | 'paused';
    is_paused: boolean;
    memory_limit_mb: number;
    cpu_limit_cores: number;
    container_port: number;
    host_port: number;
}

interface Dockerfile {
    id: number;
    name: string;
    file_path: string;
    image_tag: string;
    build_status: 'pending' | 'building' | 'ready' | 'failed';
    build_log: string | null;
    user?: User | null;
    user_containers: DockerContainer[];
}

const props = defineProps<{
    users: User[];
    offers: Offer[];
    featuredOffers: FeaturedOffer[];
    contacts: Contact[];
    tickets: Ticket[];
    subscriptions: Subscription[];
    virtualMachines: VirtualMachine[];
    operatingSystems: OperatingSystem[];
    dockerfiles: Dockerfile[];
}>();

const page = usePage();
const activeTab = ref<Tab>('users');
const activeView = ref<ViewMode>('list');
const selectedUser = ref<User | null>(null);
const isSelfDemotionModalOpen = ref(false);
const userPendingDelete = ref<User | null>(null);
const userPendingRoleChange = ref<{
    user: User;
    action: 'promote' | 'demote';
} | null>(null);
const expandedTicketIds = ref<Set<number>>(new Set());
const ticketPendingClose = ref<Ticket | null>(null);
const contactPendingDelete = ref<Contact | null>(null);
const virtualMachinePendingDelete = ref<VirtualMachine | null>(null);
const search = reactive<Record<Tab, string>>({
    users: '',
    offers: '',
    featured: '',
    subscriptions: '',
    'virtual-machines': '',
    docker: '',
    contacts: '',
    tickets: '',
});
const userRoleFilter = ref<'all' | 'user' | 'admin'>('all');
const offerTypeFilter = ref<'all' | 'vps' | 'dedicated'>('all');
const featuredHighlightFilter = ref<'all' | 'highlighted' | 'standard'>('all');
const featuredSortOrderFilter = ref<number | ''>('');
const editingFeatureId = ref<number | null>(null);
const isFeatureModalOpen = ref(false);
const availableFeatureSearch = ref('');
const availableFeatureTypeFilter = ref<'all' | 'vps' | 'dedicated'>('all');
const contactReadFilter = ref<'all' | 'unread' | 'read'>('all');
const ticketStatusFilter = ref<'all' | 'open' | 'answered' | 'closed'>('all');
const ticketPriorityFilter = ref<'all' | 'low' | 'normal' | 'high'>('all');
const ticketServiceFilter = ref('all');
const subscriptionStatusFilter = ref<'all' | Subscription['status']>('all');
const virtualMachineStatusFilter = ref<'all' | VirtualMachine['status']>('all');
const virtualMachineOperatingSystemFilter = ref<number | 'all'>('all');
const dockerNameFilter = ref('');
const dockerUserFilter = ref('');
const processingDockerContainerId = ref<number | null>(null);

const toDateValue = new Date();
const fromDateValue = new Date(toDateValue);
fromDateValue.setMonth(fromDateValue.getMonth() - 1);
const toDateString = (date: Date) => {
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');

    return `${date.getFullYear()}-${month}-${day}`;
};

const ticketCreatedFrom = ref(toDateString(fromDateValue));
const ticketCreatedTo = ref(toDateString(toDateValue));
const fromDateInput = ref<HTMLInputElement | null>(null);
const toDateInput = ref<HTMLInputElement | null>(null);

const openDatePicker = (input: HTMLInputElement | null) => {
    input?.showPicker?.();
};

const formatFilterDate = (value: string) => {
    if (!value) {
        return '';
    }

    const [year, month, day] = value.split('-').map(Number);

    return new Intl.DateTimeFormat(undefined, {
        day: 'numeric',
        month: 'short',
        year: 'numeric',
    }).format(new Date(year, month - 1, day));
};

const filteredUsers = computed(() =>
    props.users.filter((user) => {
        const query = search.users.toLowerCase();

        return (
            (userRoleFilter.value === 'all' ||
                user.role === userRoleFilter.value) &&
            `${user.first_name} ${user.last_name} ${user.email}`
                .toLowerCase()
                .includes(query)
        );
    }),
);
const filteredOffers = computed(() =>
    props.offers.filter((offer) => {
        const query = search.offers.toLowerCase();

        return (
            (offerTypeFilter.value === 'all' ||
                offer.type === offerTypeFilter.value) &&
            `${offer.name} ${offer.city} ${offer.country}`
                .toLowerCase()
                .includes(query)
        );
    }),
);
const filteredFeaturedOffers = computed(() =>
    props.featuredOffers.filter((feature) => {
        const query = search.featured.toLowerCase();

        return (
            feature.server_offer.name.toLowerCase().includes(query) &&
            (featuredSortOrderFilter.value === '' ||
                feature.sort_order === Number(featuredSortOrderFilter.value)) &&
            (featuredHighlightFilter.value === 'all' ||
                (featuredHighlightFilter.value === 'highlighted' &&
                    feature.is_highlighted) ||
                (featuredHighlightFilter.value === 'standard' &&
                    !feature.is_highlighted))
        );
    }),
);
const availableFeaturedOffers = computed(() => {
    const featuredIds = new Set(
        props.featuredOffers.map((feature) => feature.server_offer_id),
    );
    const query = availableFeatureSearch.value.toLowerCase();

    return props.offers.filter(
        (offer) =>
            !featuredIds.has(offer.id) &&
            (availableFeatureTypeFilter.value === 'all' ||
                offer.type === availableFeatureTypeFilter.value) &&
            offer.name.toLowerCase().includes(query),
    );
});
const filteredContacts = computed(() =>
    props.contacts.filter((contact) => {
        const query = search.contacts.toLowerCase();

        return (
            (contactReadFilter.value === 'all' ||
                (contactReadFilter.value === 'read' && contact.is_read) ||
                (contactReadFilter.value === 'unread' && !contact.is_read)) &&
            `${contact.name} ${contact.email} ${contact.subject} ${contact.message}`
                .toLowerCase()
                .includes(query)
        );
    }),
);
const filteredTickets = computed(() =>
    props.tickets.filter((ticket) => {
        const query = search.tickets.toLowerCase();
        const createdDate = ticket.created_at.slice(0, 10);
        const serviceName = getTicketServiceName(ticket);

        return (
            (ticketStatusFilter.value === 'all' ||
                ticket.status === ticketStatusFilter.value) &&
            (ticketPriorityFilter.value === 'all' ||
                ticket.priority === ticketPriorityFilter.value) &&
            (ticketServiceFilter.value === 'all' ||
                serviceName === ticketServiceFilter.value) &&
            (!ticketCreatedFrom.value ||
                createdDate >= ticketCreatedFrom.value) &&
            (!ticketCreatedTo.value || createdDate <= ticketCreatedTo.value) &&
            `${ticket.subject} ${ticket.user?.email ?? ''} ${serviceName}`
                .toLowerCase()
                .includes(query)
        );
    }),
);
const filteredSubscriptions = computed(() =>
    props.subscriptions.filter((subscription) => {
        const query = search.subscriptions.toLowerCase();
        const userEmail = subscription.user?.email ?? '';

        return (
            (subscriptionStatusFilter.value === 'all' ||
                subscription.status === subscriptionStatusFilter.value) &&
            userEmail.toLowerCase().includes(query)
        );
    }),
);
const filteredVirtualMachines = computed(() =>
    props.virtualMachines.filter((virtualMachine) => {
        const query = search['virtual-machines'].toLowerCase();
        const userEmail = virtualMachine.subscription?.user?.email ?? '';

        return (
            (virtualMachineStatusFilter.value === 'all' ||
                virtualMachine.status === virtualMachineStatusFilter.value) &&
            (virtualMachineOperatingSystemFilter.value === 'all' ||
                virtualMachine.operating_system?.id ===
                    virtualMachineOperatingSystemFilter.value) &&
            `${virtualMachine.name} ${virtualMachine.ip_address} ${userEmail}`
                .toLowerCase()
                .includes(query)
        );
    }),
);
const filteredDockerfiles = computed(() =>
    props.dockerfiles.filter((dockerfile) => {
        const nameQuery = dockerNameFilter.value.toLowerCase();
        const userQuery = dockerUserFilter.value.toLowerCase();
        const userEmail = dockerfile.user?.email ?? '';

        return (
            `${dockerfile.name} ${dockerfile.image_tag}`
                .toLowerCase()
                .includes(nameQuery) &&
            userEmail.toLowerCase().includes(userQuery)
        );
    }),
);

const ticketServices = computed(() =>
    [
        ...new Set(props.tickets.map((ticket) => getTicketServiceName(ticket))),
    ].sort(),
);

const getTicketServiceName = (ticket: Ticket) =>
    ticket.subscription?.server_offer?.name ??
    ticket.affected_service ??
    'General account inquiry';

const toggleTicketDetails = (ticketId: number) => {
    const expandedIds = new Set(expandedTicketIds.value);

    if (expandedIds.has(ticketId)) {
        expandedIds.delete(ticketId);
    } else {
        expandedIds.add(ticketId);
    }

    expandedTicketIds.value = expandedIds;
};

const ticketStatusClass = (status: string) => {
    if (status === 'closed') {
        return 'bg-slate-800 text-slate-300';
    }

    if (status === 'answered') {
        return 'bg-emerald-400/10 text-emerald-300';
    }

    return 'bg-amber-400/10 text-amber-300';
};

const setTab = (tab: Tab) => {
    activeTab.value = tab;
    activeView.value = 'list';
};
const createUserForm = useForm({
    first_name: '',
    last_name: '',
    email: '',
    living_address: '',
    phone_number: '',
    password: '',
    role: 'user',
});

const emptyOffer = (): Record<string, string | number | boolean | null> => ({
    name: '',
    type: 'vps',
    ram_gb: 1,
    cpu_cores: 1,
    storage_amount_gb: 20,
    storage_type: 'NVMe SSD',
    bandwidth_tb: 1,
    gpu_model: '',
    gpu_count: 0,
    price_monthly: 0,
    price_6_months: '',
    price_1_year: 0,
    price_2_years: '',
    country: '',
    city: '',
    is_active: true,
});
const offerForm = reactive(emptyOffer());
const editingOfferId = ref<number | null>(null);
const responseForms = reactive<Record<number, string>>({});
const featureForm = reactive({
    server_offer_id: 0,
    badge: '',
    button_text: 'Deploy Rig',
    sort_order: 0,
    is_highlighted: false,
});
const newFeatureForm = reactive({
    server_offer_id: 0,
    badge: '',
    button_text: 'Deploy Rig',
    sort_order: 0,
    is_highlighted: false,
});

const submitUser = () => {
    createUserForm.post('/admin/users', {
        onSuccess: () => createUserForm.reset(),
    });
};

const promote = (user: User) => {
    userPendingRoleChange.value = { user, action: 'promote' };
};

const demote = (user: User) => {
    if (page.props.auth.user.id === user.id) {
        isSelfDemotionModalOpen.value = true;

        return;
    }

    userPendingRoleChange.value = { user, action: 'demote' };
};

const confirmUserRoleChange = () => {
    if (!userPendingRoleChange.value) {
        return;
    }

    const { user, action } = userPendingRoleChange.value;
    router.post(
        `/admin/users/${user.id}/${action}`,
        {},
        {
            onSuccess: () => {
                userPendingRoleChange.value = null;
            },
        },
    );
};
const deleteUser = (user: User) => {
    userPendingDelete.value = user;
};

const confirmDeleteUser = () => {
    if (!userPendingDelete.value) {
        return;
    }

    const user = userPendingDelete.value;
    router.delete(`/admin/users/${user.id}`, {
        onSuccess: () => {
            userPendingDelete.value = null;
        },
    });
};

const submitOffer = () => {
    const url = editingOfferId.value
        ? `/admin/offers/${editingOfferId.value}`
        : '/admin/offers';
    const data = editingOfferId.value
        ? { ...offerForm, _method: 'put' }
        : offerForm;

    router.post(url, data, { onSuccess: resetOffer });
};

const editOffer = (offer: Offer) => {
    editingOfferId.value = offer.id;
    Object.assign(offerForm, offer);
};

const resetOffer = () => {
    editingOfferId.value = null;
    Object.assign(offerForm, emptyOffer());
    activeView.value = 'list';
};

const deleteOffer = (offer: Offer) => {
    if (window.confirm(`Delete the ${offer.name} offer?`)) {
        router.delete(`/admin/offers/${offer.id}`);
    }
};

const editFeaturedOffer = (feature: FeaturedOffer) => {
    editingFeatureId.value = feature.id;
    Object.assign(featureForm, {
        server_offer_id: feature.server_offer_id,
        badge: feature.badge ?? '',
        button_text: feature.button_text,
        sort_order: feature.sort_order,
        is_highlighted: feature.is_highlighted,
    });
};

const resetFeaturedOffer = () => {
    editingFeatureId.value = null;
    Object.assign(featureForm, {
        server_offer_id: 0,
        badge: '',
        button_text: 'Deploy Rig',
        sort_order: 0,
        is_highlighted: false,
    });
};

const updateFeaturedOffer = () => {
    if (!editingFeatureId.value) {
        return;
    }

    router.put(
        `/admin/featured-offers/${editingFeatureId.value}`,
        featureForm,
        { onSuccess: resetFeaturedOffer },
    );
};

const openFeatureModal = () => {
    availableFeatureSearch.value = '';
    availableFeatureTypeFilter.value = 'all';
    newFeatureForm.server_offer_id = 0;
    isFeatureModalOpen.value = true;
};

const closeFeatureModal = () => {
    isFeatureModalOpen.value = false;
};

const createFeaturedOffer = () => {
    if (!newFeatureForm.server_offer_id) {
        return;
    }

    router.post('/admin/featured-offers', newFeatureForm, {
        onSuccess: closeFeatureModal,
    });
};

const deleteFeaturedOffer = (feature: FeaturedOffer) => {
    if (
        window.confirm(
            `Remove ${feature.server_offer.name} from featured offers?`,
        )
    ) {
        router.delete(`/admin/featured-offers/${feature.id}`);
    }
};

const markRead = (contact: Contact) =>
    router.post(`/admin/contacts/${contact.id}/read`);
const deleteContact = (contact: Contact) => {
    contactPendingDelete.value = contact;
};

const confirmDeleteContact = () => {
    if (!contactPendingDelete.value) {
        return;
    }

    const contact = contactPendingDelete.value;
    router.delete(`/admin/contacts/${contact.id}`, {
        onSuccess: () => {
            contactPendingDelete.value = null;
        },
    });
};
const sendReply = (ticket: Ticket) => {
    const message = responseForms[ticket.id]?.trim();

    if (!message) {
        return;
    }

    router.post(
        `/admin/tickets/${ticket.id}/reply`,
        { message },
        {
            onSuccess: () => {
                responseForms[ticket.id] = '';
            },
        },
    );
};

const closeTicket = (ticket: Ticket) => {
    ticketPendingClose.value = ticket;
};

const confirmCloseTicket = () => {
    if (!ticketPendingClose.value) {
        return;
    }

    const ticket = ticketPendingClose.value;
    router.post(
        `/admin/tickets/${ticket.id}/close`,
        {},
        {
            onSuccess: () => {
                ticketPendingClose.value = null;
                const expandedIds = new Set(expandedTicketIds.value);
                expandedIds.delete(ticket.id);
                expandedTicketIds.value = expandedIds;
            },
        },
    );
};

const setSubscriptionStatus = (
    subscription: Subscription,
    status: Subscription['status'],
) => {
    if (subscription.status === status) {
        return;
    }

    subscription.status = status;
    router.put(`/admin/subscriptions/${subscription.id}/status`, { status });
};

const setVirtualMachineStatus = (
    virtualMachine: VirtualMachine,
    status: VirtualMachine['status'],
) => {
    if (virtualMachine.status === status) {
        return;
    }

    virtualMachine.status = status;
    router.put(`/admin/virtual-machines/${virtualMachine.id}/status`, {
        status,
    });
};

const toggleDockerContainerPause = (container: DockerContainer) => {
    processingDockerContainerId.value = container.id;
    const shouldPause = !container.is_paused;

    router.post(
        `/admin/docker-containers/${container.id}/${shouldPause ? 'pause' : 'unpause'}`,
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

const confirmDeleteVirtualMachine = () => {
    if (!virtualMachinePendingDelete.value) {
        return;
    }

    const virtualMachine = virtualMachinePendingDelete.value;
    router.delete(`/admin/virtual-machines/${virtualMachine.id}`, {
        onSuccess: () => {
            virtualMachinePendingDelete.value = null;
        },
    });
};

const removeDockerfile = (dockerfile: Dockerfile) => {
    if (
        !window.confirm(
            `Remove ${dockerfile.name}, its container, image, and source code?`,
        )
    ) {
        return;
    }

    router.delete(`/admin/dockerfiles/${dockerfile.id}`, {
        preserveScroll: true,
    });
};
</script>

<template>
    <Head title="Admin Dashboard - VelocityRig" />

    <div class="min-h-screen bg-slate-950 text-slate-100">
        <SiteHeader />

        <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white">Admin dashboard</h1>
                <p class="mt-1 text-slate-400">
                    Manage people, infrastructure, customer messages, and
                    support.
                </p>
            </div>

            <nav class="mb-8 flex flex-wrap gap-2 border-b border-slate-800">
                <button
                    v-for="tab in [
                        'users',
                        'offers',
                        'featured',
                        'subscriptions',
                        'virtual-machines',
                        'docker',
                        'contacts',
                        'tickets',
                    ] as Tab[]"
                    :key="tab"
                    type="button"
                    class="border-b-2 px-4 py-3 text-sm font-semibold capitalize"
                    :class="
                        activeTab === tab
                            ? 'border-indigo-400 text-indigo-300'
                            : 'border-transparent text-slate-500 hover:text-slate-200'
                    "
                    @click="setTab(tab)"
                >
                    {{ tab }}
                </button>
            </nav>

            <div class="mb-6 flex flex-wrap items-center gap-2">
                <button
                    type="button"
                    class="admin-secondary"
                    :class="
                        activeView === 'list'
                            ? 'border-indigo-400 bg-indigo-500/15 text-indigo-200 shadow-sm shadow-indigo-500/20'
                            : ''
                    "
                    :aria-pressed="activeView === 'list'"
                    @click="activeView = 'list'"
                >
                    List &amp; filter
                </button>
                <button
                    v-if="activeTab === 'users' || activeTab === 'offers'"
                    type="button"
                    class="admin-secondary"
                    :class="
                        activeView === 'create'
                            ? 'border-indigo-400 bg-indigo-500/15 text-indigo-200 shadow-sm shadow-indigo-500/20'
                            : ''
                    "
                    :aria-pressed="activeView === 'create'"
                    @click="activeView = 'create'"
                >
                    Create
                </button>
            </div>

            <section v-if="activeTab === 'users'" class="space-y-4">
                <div v-if="activeView === 'list'" class="space-y-4">
                    <div class="flex flex-wrap gap-3">
                        <input
                            v-model="search.users"
                            placeholder="Search users..."
                            class="admin-input min-w-64 flex-1"
                        />
                        <select
                            v-model="userRoleFilter"
                            class="admin-input w-40"
                        >
                            <option value="all">All roles</option>
                            <option value="user">Users</option>
                            <option value="admin">Admins</option>
                        </select>
                    </div>
                    <p class="text-xs text-slate-500">
                        {{ filteredUsers.length }} users found
                    </p>
                    <article
                        v-for="user in filteredUsers"
                        :key="user.id"
                        class="admin-card relative flex flex-wrap items-center justify-between gap-4 rounded-xl border border-slate-800 bg-slate-900 p-5"
                    >
                        <button
                            type="button"
                            class="absolute inset-0 z-0 rounded-xl focus-visible:ring-2 focus-visible:ring-indigo-400 focus-visible:outline-none"
                            :aria-label="`View details for ${user.first_name} ${user.last_name}`"
                            @click="selectedUser = user"
                        ></button>
                        <div class="pointer-events-none relative z-10 min-w-0">
                            <p class="font-semibold text-white">
                                {{ user.first_name }} {{ user.last_name }}
                            </p>
                            <p class="text-sm text-slate-400">
                                {{ user.email }}
                            </p>
                        </div>
                        <div class="relative z-10 flex items-center gap-2">
                            <span
                                class="relative z-10 cursor-pointer rounded-full px-2.5 py-1 text-xs font-semibold"
                                :class="
                                    user.role === 'admin'
                                        ? 'bg-indigo-400/10 text-indigo-300'
                                        : 'bg-slate-800 text-slate-400'
                                "
                                @click="selectedUser = user"
                                >{{ user.role }}</span
                            ><button
                                v-if="user.role === 'user'"
                                type="button"
                                class="text-xs text-emerald-300 hover:text-emerald-200"
                                @click="promote(user)"
                            >
                                Promote</button
                            ><button
                                v-else
                                type="button"
                                class="text-xs text-amber-300 hover:text-amber-200"
                                @click="demote(user)"
                            >
                                Demote</button
                            ><button
                                type="button"
                                class="text-xs text-rose-300 hover:text-rose-200"
                                @click="deleteUser(user)"
                            >
                                Delete
                            </button>
                        </div>
                    </article>
                </div>
                <form
                    v-else
                    class="max-w-xl space-y-3 rounded-xl border border-slate-800 bg-slate-900 p-5"
                    @submit.prevent="submitUser"
                >
                    <h2 class="font-semibold text-white">Create user</h2>
                    <div>
                        <label for="user-first-name" class="admin-label"
                            >First name</label
                        ><input
                            id="user-first-name"
                            v-model="createUserForm.first_name"
                            required
                            placeholder="First name"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="user-last-name" class="admin-label"
                            >Last name</label
                        ><input
                            id="user-last-name"
                            v-model="createUserForm.last_name"
                            required
                            placeholder="Last name"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="user-email" class="admin-label">Email</label
                        ><input
                            id="user-email"
                            v-model="createUserForm.email"
                            required
                            type="email"
                            placeholder="Email"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="user-address" class="admin-label"
                            >Address</label
                        ><input
                            id="user-address"
                            v-model="createUserForm.living_address"
                            required
                            placeholder="Address"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="user-phone" class="admin-label">Phone</label
                        ><input
                            id="user-phone"
                            v-model="createUserForm.phone_number"
                            required
                            placeholder="Phone"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="user-password" class="admin-label"
                            >Password</label
                        ><input
                            id="user-password"
                            v-model="createUserForm.password"
                            required
                            type="password"
                            minlength="8"
                            placeholder="Password"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="user-role" class="admin-label">Role</label
                        ><select
                            id="user-role"
                            v-model="createUserForm.role"
                            class="admin-input w-full"
                        >
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <button
                        class="admin-button w-full"
                        :disabled="createUserForm.processing"
                    >
                        Create user
                    </button>
                </form>
            </section>

            <section v-else-if="activeTab === 'offers'" class="space-y-4">
                <div v-if="activeView === 'list'" class="space-y-4">
                    <div class="flex flex-wrap gap-3">
                        <input
                            v-model="search.offers"
                            placeholder="Search offers..."
                            class="admin-input min-w-64 flex-1"
                        /><select
                            v-model="offerTypeFilter"
                            class="admin-input w-40"
                        >
                            <option value="all">All types</option>
                            <option value="vps">VPS</option>
                            <option value="dedicated">Dedicated</option>
                        </select>
                    </div>
                    <p class="text-xs text-slate-500">
                        {{ filteredOffers.length }} offers found
                    </p>
                    <div class="space-y-3">
                        <article
                            v-for="offer in filteredOffers"
                            :key="offer.id"
                            class="admin-card rounded-xl border border-slate-800 bg-slate-900 p-5"
                        >
                            <div class="flex justify-between gap-3">
                                <div>
                                    <h2 class="font-semibold text-white">
                                        {{ offer.name }}
                                    </h2>
                                    <p class="text-sm text-slate-400">
                                        {{ offer.type }} · {{ offer.ram_gb }} GB
                                        RAM · {{ offer.cpu_cores }} cores · ${{
                                            offer.price_monthly
                                        }}/month
                                    </p>
                                </div>
                                <span
                                    class="text-xs"
                                    :class="
                                        offer.is_active
                                            ? 'text-emerald-300'
                                            : 'text-slate-500'
                                    "
                                    >{{
                                        offer.is_active ? 'Active' : 'Inactive'
                                    }}</span
                                >
                            </div>
                            <div class="mt-4 flex gap-3">
                                <button
                                    type="button"
                                    class="text-sm text-indigo-300"
                                    @click="
                                        editOffer(offer);
                                        activeView = 'create';
                                    "
                                >
                                    Edit</button
                                ><button
                                    type="button"
                                    class="text-sm text-rose-300"
                                    @click="deleteOffer(offer)"
                                >
                                    Delete
                                </button>
                            </div>
                        </article>
                    </div>
                </div>
                <form
                    v-else
                    class="grid max-w-3xl grid-cols-2 gap-3 rounded-xl border border-slate-800 bg-slate-900 p-5"
                    @submit.prevent="submitOffer"
                >
                    <h2 class="col-span-2 font-semibold text-white">
                        {{ editingOfferId ? 'Edit offer' : 'Create offer' }}
                    </h2>
                    <div class="col-span-2">
                        <label for="offer-name" class="admin-label">Name</label
                        ><input
                            id="offer-name"
                            v-model="offerForm.name"
                            required
                            placeholder="Name"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-type" class="admin-label">Type</label
                        ><select
                            id="offer-type"
                            v-model="offerForm.type"
                            class="admin-input w-full"
                        >
                            <option value="vps">VPS</option>
                            <option value="dedicated">Dedicated</option>
                        </select>
                    </div>
                    <div>
                        <label for="offer-storage-type" class="admin-label"
                            >Storage type</label
                        ><input
                            id="offer-storage-type"
                            v-model="offerForm.storage_type"
                            required
                            placeholder="Storage type"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-ram" class="admin-label"
                            >RAM (GB)</label
                        ><input
                            id="offer-ram"
                            v-model="offerForm.ram_gb"
                            required
                            type="number"
                            min="1"
                            placeholder="RAM GB"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-cpu" class="admin-label"
                            >CPU cores</label
                        ><input
                            id="offer-cpu"
                            v-model="offerForm.cpu_cores"
                            required
                            type="number"
                            min="1"
                            placeholder="CPU cores"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-storage-amount" class="admin-label"
                            >Storage (GB)</label
                        ><input
                            id="offer-storage-amount"
                            v-model="offerForm.storage_amount_gb"
                            required
                            type="number"
                            min="1"
                            placeholder="Storage GB"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-bandwidth" class="admin-label"
                            >Bandwidth (TB)</label
                        ><input
                            id="offer-bandwidth"
                            v-model="offerForm.bandwidth_tb"
                            required
                            type="number"
                            min="1"
                            placeholder="Bandwidth TB"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-gpu-model" class="admin-label"
                            >GPU model</label
                        ><input
                            id="offer-gpu-model"
                            v-model="offerForm.gpu_model"
                            placeholder="GPU model"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-gpu-count" class="admin-label"
                            >GPU count</label
                        ><input
                            id="offer-gpu-count"
                            v-model="offerForm.gpu_count"
                            required
                            type="number"
                            min="0"
                            placeholder="GPU count"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-monthly-price" class="admin-label"
                            >Monthly price</label
                        ><input
                            id="offer-monthly-price"
                            v-model="offerForm.price_monthly"
                            required
                            type="number"
                            min="0"
                            step="0.01"
                            placeholder="Monthly price"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-yearly-price" class="admin-label"
                            >Yearly price</label
                        ><input
                            id="offer-yearly-price"
                            v-model="offerForm.price_1_year"
                            required
                            type="number"
                            min="0"
                            step="0.01"
                            placeholder="Yearly price"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-six-month-price" class="admin-label"
                            >6-month price</label
                        ><input
                            id="offer-six-month-price"
                            v-model="offerForm.price_6_months"
                            type="number"
                            min="0"
                            step="0.01"
                            placeholder="6-month price"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-two-year-price" class="admin-label"
                            >2-year price</label
                        ><input
                            id="offer-two-year-price"
                            v-model="offerForm.price_2_years"
                            type="number"
                            min="0"
                            step="0.01"
                            placeholder="2-year price"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-country" class="admin-label"
                            >Country</label
                        ><input
                            id="offer-country"
                            v-model="offerForm.country"
                            required
                            placeholder="Country"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="offer-city" class="admin-label">City</label
                        ><input
                            id="offer-city"
                            v-model="offerForm.city"
                            required
                            placeholder="City"
                            class="admin-input w-full"
                        />
                    </div>
                    <label
                        for="offer-active"
                        class="col-span-2 flex items-center gap-2 text-sm text-slate-300"
                        ><input
                            id="offer-active"
                            v-model="offerForm.is_active"
                            type="checkbox"
                        />
                        Active offer</label
                    >
                    <div class="col-span-2 flex gap-3">
                        <button class="admin-button">
                            {{
                                editingOfferId ? 'Save changes' : 'Create offer'
                            }}</button
                        ><button
                            v-if="editingOfferId"
                            type="button"
                            class="admin-secondary"
                            @click="resetOffer"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </section>

            <section v-else-if="activeTab === 'featured'" class="space-y-4">
                <div class="flex flex-wrap gap-3">
                    <input
                        v-model="search.featured"
                        placeholder="Search featured offer names..."
                        class="admin-input min-w-64 flex-1"
                    />
                    <select
                        v-model="featuredHighlightFilter"
                        class="admin-input w-44"
                    >
                        <option value="all">All highlight states</option>
                        <option value="highlighted">Highlighted</option>
                        <option value="standard">Not highlighted</option>
                    </select>
                    <input
                        v-model="featuredSortOrderFilter"
                        type="number"
                        min="0"
                        placeholder="Sort order"
                        class="admin-input w-36"
                    />
                </div>
                <p class="text-xs text-slate-500">
                    {{ filteredFeaturedOffers.length }} featured offers found
                </p>

                <div
                    v-if="isFeatureModalOpen"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="new-featured-offer-title"
                    @click.self="closeFeatureModal"
                >
                    <form
                        class="max-h-[90vh] w-full max-w-2xl overflow-y-auto rounded-2xl border border-slate-700 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                        @submit.prevent="createFeaturedOffer"
                    >
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h2
                                    id="new-featured-offer-title"
                                    class="text-xl font-semibold text-white"
                                >
                                    Add featured offer
                                </h2>
                                <p class="mt-1 text-sm text-slate-400">
                                    Choose an offer that is not featured yet.
                                </p>
                            </div>
                            <button
                                type="button"
                                class="text-2xl leading-none text-slate-400 hover:text-white"
                                aria-label="Close dialog"
                                @click="closeFeatureModal"
                            >
                                &times;
                            </button>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <input
                                v-model="availableFeatureSearch"
                                placeholder="Search regular offers by name..."
                                class="admin-input min-w-64 flex-1"
                            />
                            <select
                                v-model="availableFeatureTypeFilter"
                                class="admin-input w-40"
                            >
                                <option value="all">All types</option>
                                <option value="vps">VPS</option>
                                <option value="dedicated">Dedicated</option>
                            </select>
                        </div>

                        <div class="mt-4 space-y-2">
                            <button
                                v-for="offer in availableFeaturedOffers"
                                :key="offer.id"
                                type="button"
                                class="admin-option-card flex w-full items-center justify-between rounded-xl border px-4 py-3 text-left transition"
                                :class="
                                    newFeatureForm.server_offer_id === offer.id
                                        ? 'border-indigo-400 bg-indigo-500/15 text-white'
                                        : 'border-slate-800 bg-slate-950/60 text-slate-300 hover:border-slate-600'
                                "
                                @click="
                                    newFeatureForm.server_offer_id = offer.id
                                "
                            >
                                <span>
                                    <span class="block font-semibold">{{
                                        offer.name
                                    }}</span>
                                    <span
                                        class="mt-1 block text-xs text-slate-500"
                                    >
                                        {{ offer.type }} · {{ offer.city }},
                                        {{ offer.country }}
                                    </span>
                                </span>
                                <span class="text-xs text-slate-500">
                                    {{ offer.cpu_cores }} cores ·
                                    {{ offer.ram_gb }} GB RAM
                                </span>
                            </button>
                            <p
                                v-if="!availableFeaturedOffers.length"
                                class="rounded-xl border border-dashed border-slate-700 p-6 text-center text-sm text-slate-400"
                            >
                                No regular offers match these filters.
                            </p>
                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-3">
                            <div>
                                <label
                                    for="new-featured-badge"
                                    class="admin-label"
                                    >Badge</label
                                >
                                <input
                                    id="new-featured-badge"
                                    v-model="newFeatureForm.badge"
                                    placeholder="Most Popular"
                                    class="admin-input w-full"
                                />
                            </div>
                            <div>
                                <label
                                    for="new-featured-button"
                                    class="admin-label"
                                    >Button text</label
                                >
                                <input
                                    id="new-featured-button"
                                    v-model="newFeatureForm.button_text"
                                    required
                                    class="admin-input w-full"
                                />
                            </div>
                            <div>
                                <label
                                    for="new-featured-sort-order"
                                    class="admin-label"
                                    >Sort order</label
                                >
                                <input
                                    id="new-featured-sort-order"
                                    v-model="newFeatureForm.sort_order"
                                    required
                                    type="number"
                                    min="0"
                                    class="admin-input w-full"
                                />
                            </div>
                            <label
                                class="flex items-center gap-2 self-end pb-2 text-sm text-slate-300"
                            >
                                <input
                                    v-model="newFeatureForm.is_highlighted"
                                    type="checkbox"
                                />
                                Highlight this offer
                            </label>
                        </div>

                        <div class="mt-6 flex justify-end gap-3">
                            <button
                                type="button"
                                class="admin-secondary"
                                @click="closeFeatureModal"
                            >
                                Cancel
                            </button>
                            <button
                                type="submit"
                                class="admin-button"
                                :disabled="!newFeatureForm.server_offer_id"
                            >
                                Create featured offer
                            </button>
                        </div>
                    </form>
                </div>

                <form
                    v-if="editingFeatureId"
                    class="grid max-w-3xl grid-cols-2 gap-3 rounded-xl border border-indigo-400/30 bg-slate-900 p-5"
                    @submit.prevent="updateFeaturedOffer"
                >
                    <h2 class="col-span-2 font-semibold text-white">
                        Edit featured offer
                    </h2>
                    <div class="col-span-2">
                        <label for="featured-offer" class="admin-label"
                            >Offer</label
                        >
                        <select
                            id="featured-offer"
                            v-model="featureForm.server_offer_id"
                            class="admin-input w-full"
                            required
                        >
                            <option
                                v-for="offer in offers"
                                :key="offer.id"
                                :value="offer.id"
                            >
                                {{ offer.name }}
                            </option>
                        </select>
                    </div>
                    <div>
                        <label for="featured-badge" class="admin-label"
                            >Badge</label
                        >
                        <input
                            id="featured-badge"
                            v-model="featureForm.badge"
                            placeholder="Most Popular"
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="featured-button" class="admin-label"
                            >Button text</label
                        >
                        <input
                            id="featured-button"
                            v-model="featureForm.button_text"
                            required
                            class="admin-input w-full"
                        />
                    </div>
                    <div>
                        <label for="featured-sort-order" class="admin-label"
                            >Sort order</label
                        >
                        <input
                            id="featured-sort-order"
                            v-model="featureForm.sort_order"
                            required
                            type="number"
                            min="0"
                            class="admin-input w-full"
                        />
                    </div>
                    <label
                        for="featured-highlighted"
                        class="flex items-center gap-2 text-sm text-slate-300"
                    >
                        <input
                            id="featured-highlighted"
                            v-model="featureForm.is_highlighted"
                            type="checkbox"
                        />
                        Highlight this offer
                    </label>
                    <div class="col-span-2 flex gap-3">
                        <button class="admin-button">Save changes</button>
                        <button
                            type="button"
                            class="admin-secondary"
                            @click="resetFeaturedOffer"
                        >
                            Cancel
                        </button>
                    </div>
                </form>

                <div class="space-y-3">
                    <article
                        v-for="feature in filteredFeaturedOffers"
                        :key="feature.id"
                        class="admin-card rounded-xl border border-slate-800 bg-slate-900 p-5"
                    >
                        <div
                            class="flex flex-wrap items-start justify-between gap-4"
                        >
                            <div>
                                <h2 class="font-semibold text-white">
                                    {{ feature.server_offer.name }}
                                </h2>
                                <p class="mt-1 text-sm text-slate-400">
                                    {{ feature.server_offer.type }} ·
                                    {{ feature.server_offer.city }},
                                    {{ feature.server_offer.country }}
                                </p>
                            </div>
                            <div
                                class="flex flex-wrap items-center gap-2 text-xs"
                            >
                                <span
                                    class="rounded-full bg-slate-800 px-2.5 py-1 text-slate-300"
                                >
                                    Order {{ feature.sort_order }}
                                </span>
                                <span
                                    class="rounded-full px-2.5 py-1"
                                    :class="
                                        feature.is_highlighted
                                            ? 'bg-indigo-400/10 text-indigo-300'
                                            : 'bg-slate-800 text-slate-400'
                                    "
                                >
                                    {{
                                        feature.is_highlighted
                                            ? 'Highlighted'
                                            : 'Standard'
                                    }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="mt-4 flex flex-wrap items-center justify-between gap-3"
                        >
                            <p class="text-sm text-slate-400">
                                {{ feature.badge || 'No badge' }} ·
                                {{ feature.button_text }}
                            </p>
                            <div class="flex gap-3">
                                <button
                                    type="button"
                                    class="text-sm text-indigo-300 hover:text-indigo-200"
                                    @click="editFeaturedOffer(feature)"
                                >
                                    Edit
                                </button>
                                <button
                                    type="button"
                                    class="text-sm text-rose-300 hover:text-rose-200"
                                    @click="deleteFeaturedOffer(feature)"
                                >
                                    Delete
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
                <p v-if="!filteredFeaturedOffers.length" class="text-slate-400">
                    No featured offers match the current filter.
                </p>

                <button
                    type="button"
                    class="admin-button w-full py-4 text-base"
                    @click="openFeatureModal"
                >
                    New feature
                </button>
            </section>

            <section
                v-else-if="activeTab === 'subscriptions'"
                class="space-y-4"
            >
                <div class="flex flex-wrap gap-3">
                    <input
                        v-model="search.subscriptions"
                        placeholder="Filter by user email..."
                        type="email"
                        class="admin-input min-w-64 flex-1"
                    />
                    <select
                        v-model="subscriptionStatusFilter"
                        class="admin-input w-44"
                    >
                        <option value="all">All statuses</option>
                        <option value="active">Active</option>
                        <option value="cancelled">Cancelled</option>
                        <option value="expired">Expired</option>
                    </select>
                </div>
                <p class="text-xs text-slate-500">
                    {{ filteredSubscriptions.length }} subscriptions found
                </p>
                <div class="space-y-3">
                    <article
                        v-for="subscription in filteredSubscriptions"
                        :key="subscription.id"
                        class="admin-card rounded-xl border border-slate-800 bg-slate-900 p-5"
                    >
                        <div
                            class="flex flex-wrap items-center justify-between gap-4"
                        >
                            <div>
                                <p class="font-semibold text-white">
                                    {{
                                        subscription.server_offer?.name ??
                                        'Subscription'
                                    }}
                                </p>
                                <p class="text-sm text-slate-400">
                                    {{
                                        subscription.user?.email ??
                                        'Unknown user'
                                    }}
                                    · {{ subscription.billing_cycle }} · ${{
                                        subscription.cost
                                    }}
                                </p>
                                <p class="mt-1 text-xs text-slate-500">
                                    {{
                                        new Date(
                                            subscription.starts_at,
                                        ).toLocaleDateString()
                                    }}
                                    to
                                    {{
                                        new Date(
                                            subscription.ends_at,
                                        ).toLocaleDateString()
                                    }}
                                </p>
                            </div>
                            <div
                                class="inline-flex rounded-lg border border-slate-800 bg-slate-950 p-1"
                            >
                                <button
                                    type="button"
                                    class="rounded-md px-3 py-1.5 text-xs font-semibold transition"
                                    :class="
                                        subscription.status === 'active'
                                            ? 'border border-emerald-500/30 bg-emerald-500/20 text-emerald-300'
                                            : 'text-slate-400 hover:text-slate-200'
                                    "
                                    @click="
                                        setSubscriptionStatus(
                                            subscription,
                                            'active',
                                        )
                                    "
                                >
                                    Active
                                </button>
                                <button
                                    type="button"
                                    class="rounded-md px-3 py-1.5 text-xs font-semibold transition"
                                    :class="
                                        subscription.status === 'cancelled'
                                            ? 'border border-amber-500/30 bg-amber-500/20 text-amber-300'
                                            : 'text-slate-400 hover:text-slate-200'
                                    "
                                    @click="
                                        setSubscriptionStatus(
                                            subscription,
                                            'cancelled',
                                        )
                                    "
                                >
                                    Cancelled
                                </button>
                                <button
                                    type="button"
                                    class="rounded-md px-3 py-1.5 text-xs font-semibold transition"
                                    :class="
                                        subscription.status === 'expired'
                                            ? 'border border-rose-500/30 bg-rose-500/20 text-rose-300'
                                            : 'text-slate-400 hover:text-slate-200'
                                    "
                                    @click="
                                        setSubscriptionStatus(
                                            subscription,
                                            'expired',
                                        )
                                    "
                                >
                                    Expired
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
                <p v-if="!filteredSubscriptions.length" class="text-slate-400">
                    No subscriptions match the current filter.
                </p>
            </section>

            <section
                v-else-if="activeTab === 'virtual-machines'"
                class="space-y-4"
            >
                <div
                    class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4"
                >
                    <input
                        v-model="search['virtual-machines']"
                        placeholder="Search machines..."
                        class="admin-input"
                    />
                    <select
                        v-model="virtualMachineStatusFilter"
                        class="admin-input"
                    >
                        <option value="all">All statuses</option>
                        <option value="running">Running</option>
                        <option value="stopped">Stopped</option>
                        <option value="provisioning">Provisioning</option>
                    </select>
                    <select
                        v-model="virtualMachineOperatingSystemFilter"
                        class="admin-input"
                    >
                        <option value="all">All operating systems</option>
                        <option
                            v-for="operatingSystem in props.operatingSystems"
                            :key="operatingSystem.id"
                            :value="operatingSystem.id"
                        >
                            {{ operatingSystem.name }}
                            {{ operatingSystem.version }}
                        </option>
                    </select>
                    <!--
        <select v-model="virtualMachineUserFilter" class="admin-input">
            <option value="all">All users</option>
            <option v-for="email in virtualMachineUsers" :key="email" :value="email">
                {{ email }}
            </option>
        </select>
        -->
                </div>
                <p class="text-xs text-slate-500">
                    {{ filteredVirtualMachines.length }} virtual machines found
                </p>
                <div class="space-y-3">
                    <article
                        v-for="virtualMachine in filteredVirtualMachines"
                        :key="virtualMachine.id"
                        class="admin-card rounded-xl border border-slate-800 bg-slate-900 p-5"
                    >
                        <div
                            class="flex flex-wrap items-center justify-between gap-4"
                        >
                            <div>
                                <p class="font-semibold text-white">
                                    {{ virtualMachine.name }}
                                </p>
                                <p class="text-sm text-slate-400">
                                    {{ virtualMachine.ip_address }} ·
                                    {{ virtualMachine.operating_system?.name }}
                                    {{
                                        virtualMachine.operating_system?.version
                                    }}
                                </p>
                                <p class="mt-1 text-xs text-slate-500">
                                    {{
                                        virtualMachine.subscription?.user
                                            ?.email ?? 'Unknown user'
                                    }}
                                    ·
                                    {{
                                        virtualMachine.subscription
                                            ?.server_offer?.name ??
                                        'Unknown offer'
                                    }}
                                </p>
                            </div>
                            <div class="flex flex-wrap items-center gap-3">
                                <div
                                    class="inline-flex rounded-lg border border-slate-800 bg-slate-950 p-1"
                                >
                                    <button
                                        type="button"
                                        class="rounded-md px-3 py-1.5 text-xs font-semibold transition"
                                        :class="
                                            virtualMachine.status === 'running'
                                                ? 'border border-emerald-500/30 bg-emerald-500/20 text-emerald-300'
                                                : 'text-slate-400 hover:text-slate-200'
                                        "
                                        @click="
                                            setVirtualMachineStatus(
                                                virtualMachine,
                                                'running',
                                            )
                                        "
                                    >
                                        Running
                                    </button>
                                    <button
                                        type="button"
                                        class="rounded-md px-3 py-1.5 text-xs font-semibold transition"
                                        :class="
                                            virtualMachine.status === 'stopped'
                                                ? 'border border-rose-500/30 bg-rose-500/20 text-rose-300'
                                                : 'text-slate-400 hover:text-slate-200'
                                        "
                                        @click="
                                            setVirtualMachineStatus(
                                                virtualMachine,
                                                'stopped',
                                            )
                                        "
                                    >
                                        Stopped
                                    </button>
                                    <button
                                        type="button"
                                        class="rounded-md px-3 py-1.5 text-xs font-semibold transition"
                                        :class="
                                            virtualMachine.status ===
                                            'provisioning'
                                                ? 'border border-amber-500/30 bg-amber-500/20 text-amber-300'
                                                : 'text-slate-400 hover:text-slate-200'
                                        "
                                        @click="
                                            setVirtualMachineStatus(
                                                virtualMachine,
                                                'provisioning',
                                            )
                                        "
                                    >
                                        Provisioning
                                    </button>
                                </div>
                                <button
                                    type="button"
                                    class="rounded-lg bg-rose-600 px-3 py-2 text-xs font-semibold text-white hover:bg-rose-500"
                                    @click="
                                        virtualMachinePendingDelete =
                                            virtualMachine
                                    "
                                >
                                    Delete
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
                <p
                    v-if="!filteredVirtualMachines.length"
                    class="text-slate-400"
                >
                    No virtual machines match the current filter.
                </p>
            </section>

            <section v-else-if="activeTab === 'docker'" class="space-y-4">
                <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                    <input
                        v-model="dockerNameFilter"
                        placeholder="Filter by image or container name..."
                        class="admin-input"
                    />
                    <input
                        v-model="dockerUserFilter"
                        placeholder="Filter by uploader email..."
                        class="admin-input"
                    />
                </div>
                <p class="text-xs text-slate-500">
                    {{ filteredDockerfiles.length }} Docker deployments found
                </p>

                <div class="grid grid-cols-1 gap-4 xl:grid-cols-2">
                    <article
                        v-for="dockerfile in filteredDockerfiles"
                        :key="dockerfile.id"
                        class="admin-card rounded-xl border border-slate-800 bg-slate-900 p-5"
                    >
                        <div
                            class="flex flex-wrap items-start justify-between gap-4"
                        >
                            <div class="min-w-0">
                                <p class="font-semibold text-white">
                                    {{ dockerfile.name }}
                                </p>
                                <p
                                    class="mt-1 font-mono text-xs break-all text-slate-400"
                                >
                                    {{ dockerfile.image_tag }}
                                </p>
                                <p class="mt-2 text-xs text-slate-500">
                                    Uploaded by
                                    {{
                                        dockerfile.user?.email ?? 'Unknown user'
                                    }}
                                </p>
                            </div>
                            <span
                                class="rounded-full px-2.5 py-1 text-xs font-semibold capitalize"
                                :class="
                                    dockerfile.user_containers[0]?.is_paused
                                        ? 'bg-amber-500/10 text-amber-300'
                                        : dockerfile.user_containers[0]
                                                ?.status === 'running'
                                          ? 'bg-emerald-500/10 text-emerald-300'
                                          : dockerfile.build_status === 'failed'
                                            ? 'bg-rose-500/10 text-rose-300'
                                            : 'bg-slate-700 text-slate-300'
                                "
                            >
                                {{
                                    dockerfile.user_containers[0]?.status ??
                                    dockerfile.build_status
                                }}
                            </span>
                        </div>

                        <div class="mt-4 grid grid-cols-2 gap-3 text-xs">
                            <div
                                class="rounded-lg border border-slate-800 bg-slate-950 p-3"
                            >
                                <span class="block text-slate-500"
                                    >Container</span
                                >
                                <span
                                    class="mt-1 block font-mono break-all text-slate-300"
                                >
                                    {{
                                        dockerfile.user_containers[0]
                                            ?.container_id ?? 'Not created'
                                    }}
                                </span>
                            </div>
                            <div
                                class="rounded-lg border border-slate-800 bg-slate-950 p-3"
                            >
                                <span class="block text-slate-500"
                                    >Port mapping</span
                                >
                                <span class="mt-1 block text-slate-300">
                                    {{
                                        dockerfile.user_containers[0]
                                            ?.container_port ?? '-'
                                    }}
                                    → :{{
                                        dockerfile.user_containers[0]
                                            ?.host_port ?? '-'
                                    }}
                                </span>
                            </div>
                        </div>

                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <a
                                v-if="
                                    dockerfile.user_containers[0]?.status ===
                                    'running'
                                "
                                :href="
                                    containerAccessUrl(
                                        dockerfile.user_containers[0].host_port,
                                    )
                                "
                                target="_blank"
                                rel="noopener noreferrer"
                                class="admin-secondary text-emerald-300 hover:text-emerald-200"
                            >
                                View
                            </a>
                            <button
                                v-if="
                                    dockerfile.user_containers[0] &&
                                    (dockerfile.user_containers[0].status ===
                                        'running' ||
                                        dockerfile.user_containers[0].is_paused)
                                "
                                type="button"
                                :disabled="
                                    processingDockerContainerId ===
                                    dockerfile.user_containers[0].id
                                "
                                class="admin-secondary"
                                @click="
                                    toggleDockerContainerPause(
                                        dockerfile.user_containers[0],
                                    )
                                "
                            >
                                {{
                                    dockerfile.user_containers[0].is_paused
                                        ? 'Resume container'
                                        : 'Pause container'
                                }}
                            </button>
                            <button
                                type="button"
                                class="rounded-lg border border-rose-500/30 px-3 py-2 text-xs font-semibold text-rose-300 transition hover:bg-rose-500/10"
                                @click="removeDockerfile(dockerfile)"
                            >
                                Remove image, container &amp; source
                            </button>
                        </div>

                        <details
                            v-if="dockerfile.build_log"
                            class="mt-4 rounded-lg border border-slate-800 bg-slate-950"
                        >
                            <summary
                                class="cursor-pointer px-3 py-2 text-xs font-semibold text-slate-400 hover:text-white"
                            >
                                View build log
                            </summary>
                            <pre
                                class="max-h-48 overflow-auto border-t border-slate-800 p-3 font-mono text-xs leading-5 break-words whitespace-pre-wrap text-slate-400"
                                >{{ dockerfile.build_log }}</pre>
                        </details>
                    </article>
                </div>
                <p v-if="!filteredDockerfiles.length" class="text-slate-400">
                    No Docker deployments match the current filters.
                </p>
            </section>

            <section v-else-if="activeTab === 'contacts'" class="space-y-3">
                <div class="flex flex-wrap gap-3">
                    <input
                        v-model="search.contacts"
                        placeholder="Search contacts..."
                        class="admin-input min-w-64 flex-1"
                    /><select
                        v-model="contactReadFilter"
                        class="admin-input w-40"
                    >
                        <option value="all">All messages</option>
                        <option value="unread">Unread</option>
                        <option value="read">Read</option>
                    </select>
                </div>
                <p class="text-xs text-slate-500">
                    {{ filteredContacts.length }} contacts found
                </p>
                <article
                    v-for="contact in filteredContacts"
                    :key="contact.id"
                    class="admin-card rounded-xl border bg-slate-900 p-5"
                    :class="
                        contact.is_read
                            ? 'border-slate-800'
                            : 'border-indigo-400/40'
                    "
                >
                    <div class="flex flex-wrap justify-between gap-3">
                        <div>
                            <h2 class="font-semibold text-white">
                                {{ contact.subject }}
                            </h2>
                            <p class="text-sm text-slate-400">
                                {{ contact.name }} · {{ contact.email }}
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <button
                                v-if="!contact.is_read"
                                type="button"
                                class="text-xs text-indigo-300"
                                @click="markRead(contact)"
                            >
                                Mark read
                            </button>
                            <button
                                type="button"
                                class="text-xs text-rose-300 hover:text-rose-200"
                                @click="deleteContact(contact)"
                            >
                                Delete
                            </button>
                        </div>
                    </div>
                    <p class="mt-4 text-sm whitespace-pre-wrap text-slate-300">
                        {{ contact.message }}
                    </p>
                    <p class="mt-4 text-xs text-slate-500">
                        {{ new Date(contact.created_at).toLocaleString() }}
                    </p>
                </article>
                <p v-if="!filteredContacts.length" class="text-slate-400">
                    No contacts match the current filter.
                </p>
            </section>

            <section v-else class="space-y-4">
                <div
                    class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3"
                >
                    <input
                        v-model="search.tickets"
                        placeholder="Search tickets..."
                        class="admin-input"
                    />
                    <select v-model="ticketStatusFilter" class="admin-input">
                        <option value="all">All statuses</option>
                        <option value="open">Open</option>
                        <option value="answered">Answered</option>
                        <option value="closed">Closed</option>
                    </select>
                    <select v-model="ticketPriorityFilter" class="admin-input">
                        <option value="all">All priorities</option>
                        <option value="low">Low priority</option>
                        <option value="normal">Normal priority</option>
                        <option value="high">High priority</option>
                    </select>
                    <select v-model="ticketServiceFilter" class="admin-input">
                        <option value="all">All affected services</option>
                        <option
                            v-for="service in ticketServices"
                            :key="service"
                            :value="service"
                        >
                            {{ service }}
                        </option>
                    </select>
                    <label
                        class="admin-input relative flex cursor-pointer items-center gap-2"
                        @click.prevent="openDatePicker(fromDateInput)"
                    >
                        <svg
                            class="pointer-events-none h-4 w-4 text-white"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <rect x="3" y="4" width="18" height="17" rx="2" />
                            <path d="M16 2v4M8 2v4M3 10h18" />
                        </svg>
                        <span
                            class="pointer-events-none text-xs text-slate-300"
                            >{{
                                formatFilterDate(ticketCreatedFrom) ||
                                'From date'
                            }}</span
                        >
                        <input
                            ref="fromDateInput"
                            v-model="ticketCreatedFrom"
                            type="date"
                            aria-label="Filter tickets from date"
                            class="pointer-events-none absolute inset-0 h-full w-full cursor-pointer opacity-0"
                        />
                    </label>
                    <label
                        class="admin-input relative flex cursor-pointer items-center gap-2"
                        @click.prevent="openDatePicker(toDateInput)"
                    >
                        <svg
                            class="pointer-events-none h-4 w-4 text-white"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <rect x="3" y="4" width="18" height="17" rx="2" />
                            <path d="M16 2v4M8 2v4M3 10h18" />
                        </svg>
                        <span
                            class="pointer-events-none text-xs text-slate-300"
                            >{{
                                formatFilterDate(ticketCreatedTo) || 'To date'
                            }}</span
                        >
                        <input
                            ref="toDateInput"
                            v-model="ticketCreatedTo"
                            type="date"
                            aria-label="Filter tickets to date"
                            class="pointer-events-none absolute inset-0 h-full w-full cursor-pointer opacity-0"
                        />
                    </label>
                </div>
                <p class="text-xs text-slate-500">
                    {{ filteredTickets.length }} tickets found
                </p>
                <article
                    v-for="ticket in filteredTickets"
                    :key="ticket.id"
                    class="admin-card rounded-xl border border-slate-800 bg-slate-900"
                >
                    <button
                        type="button"
                        class="flex w-full flex-wrap items-center justify-between gap-3 rounded-xl p-5 text-left transition-colors hover:bg-slate-800/40 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400"
                        :aria-expanded="expandedTicketIds.has(ticket.id)"
                        :aria-controls="`ticket-details-${ticket.id}`"
                        @click="toggleTicketDetails(ticket.id)"
                    >
                        <div class="min-w-0">
                            <p class="text-xs text-slate-500">
                                {{ ticket.user?.email }}
                            </p>
                            <h2 class="mt-1 font-semibold text-white">
                                {{ ticket.subject }}
                            </h2>
                        </div>
                        <div class="flex shrink-0 items-center gap-3">
                            <span
                                class="rounded-full px-2.5 py-1 text-xs font-medium capitalize"
                                :class="ticketStatusClass(ticket.status)"
                            >
                                {{ ticket.status }}
                            </span>
                            <span class="text-xs text-indigo-300">
                                {{
                                    expandedTicketIds.has(ticket.id)
                                        ? 'Hide details'
                                        : 'View details'
                                }}
                            </span>
                            <span
                                class="text-xs text-slate-400 transition-transform duration-300"
                                :class="
                                    expandedTicketIds.has(ticket.id)
                                        ? 'rotate-180'
                                        : ''
                                "
                                aria-hidden="true"
                                >⌄</span
                            >
                        </div>
                    </button>
                    <div
                        :id="`ticket-details-${ticket.id}`"
                        class="grid transition-[grid-template-rows] duration-300 ease-in-out motion-reduce:transition-none"
                        :class="
                            expandedTicketIds.has(ticket.id)
                                ? 'grid-rows-[1fr]'
                                : 'grid-rows-[0fr]'
                        "
                        :aria-hidden="!expandedTicketIds.has(ticket.id)"
                        :inert="!expandedTicketIds.has(ticket.id)"
                    >
                        <div class="min-h-0 overflow-hidden">
                            <div class="border-t border-slate-800 p-5">
                                <div
                                    class="flex flex-wrap justify-between gap-3"
                                >
                                    <p class="text-xs text-slate-500">
                                        Ticket #{{ ticket.id }} ·
                                        {{ getTicketServiceName(ticket) }}
                                        · {{ ticket.priority }} priority ·
                                        {{
                                            new Date(
                                                ticket.created_at,
                                            ).toLocaleDateString()
                                        }}
                                    </p>
                                </div>
                                <div class="mt-4 space-y-3">
                                    <div
                                        v-for="message in ticket.messages"
                                        :key="message.id"
                                        class="border-l-2 border-slate-700 pl-3"
                                    >
                                        <p class="text-xs text-slate-500">
                                            {{
                                                message.user?.role === 'admin'
                                                    ? 'Support team'
                                                    : 'Customer'
                                            }}
                                            ·
                                            {{
                                                new Date(
                                                    message.created_at,
                                                ).toLocaleString()
                                            }}
                                        </p>
                                        <p
                                            class="mt-1 text-sm whitespace-pre-wrap text-slate-300"
                                        >
                                            {{ message.message }}
                                        </p>
                                    </div>
                                </div>
                                <div
                                    v-if="ticket.status !== 'closed'"
                                    class="mt-5 flex flex-wrap items-end gap-3"
                                >
                                    <form
                                        class="flex min-w-0 flex-1 gap-3"
                                        @submit.prevent="sendReply(ticket)"
                                    >
                                        <textarea
                                            v-model="responseForms[ticket.id]"
                                            required
                                            maxlength="2000"
                                            rows="2"
                                            placeholder="Write a response..."
                                            class="admin-input flex-1"
                                        ></textarea>
                                        <button class="admin-button self-end">
                                            Reply
                                        </button>
                                    </form>
                                    <button
                                        type="button"
                                        class="admin-secondary text-rose-300 hover:border-rose-400 hover:text-rose-200"
                                        @click="closeTicket(ticket)"
                                    >
                                        Close ticket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <p v-if="!filteredTickets.length" class="text-slate-400">
                    No tickets match the current filter.
                </p>
            </section>

            <div
                v-if="selectedUser"
                class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="dialog"
                aria-modal="true"
                aria-labelledby="user-details-title"
                @click.self="selectedUser = null"
                @keydown.esc="selectedUser = null"
            >
                <section
                    class="w-full max-w-lg rounded-2xl border border-slate-700 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                >
                    <div class="flex items-start justify-between gap-4">
                        <h2
                            id="user-details-title"
                            class="text-xl font-semibold text-white"
                        >
                            User details
                        </h2>
                        <button
                            type="button"
                            class="admin-secondary"
                            aria-label="Close user details"
                            @click="selectedUser = null"
                        >
                            Close
                        </button>
                    </div>
                    <dl class="mt-6 grid gap-4 sm:grid-cols-2">
                        <div>
                            <dt class="admin-label">First name</dt>
                            <dd class="text-sm break-words text-slate-200">
                                {{ selectedUser.first_name }}
                            </dd>
                        </div>
                        <div>
                            <dt class="admin-label">Last name</dt>
                            <dd class="text-sm break-words text-slate-200">
                                {{ selectedUser.last_name }}
                            </dd>
                        </div>
                        <div>
                            <dt class="admin-label">Email</dt>
                            <dd class="text-sm break-words text-slate-200">
                                {{ selectedUser.email }}
                            </dd>
                        </div>
                        <div>
                            <dt class="admin-label">Role</dt>
                            <dd class="text-sm text-slate-200 capitalize">
                                {{ selectedUser.role }}
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="admin-label">Address</dt>
                            <dd class="text-sm break-words text-slate-200">
                                {{
                                    selectedUser.living_address ||
                                    'Not provided'
                                }}
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="admin-label">Phone number</dt>
                            <dd class="text-sm break-words text-slate-200">
                                {{
                                    selectedUser.phone_number || 'Not provided'
                                }}
                            </dd>
                        </div>
                    </dl>
                </section>
            </div>

            <div
                v-if="isSelfDemotionModalOpen"
                class="fixed inset-0 z-[60] flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="alertdialog"
                aria-modal="true"
                aria-labelledby="self-demotion-title"
                aria-describedby="self-demotion-description"
                @click.self="isSelfDemotionModalOpen = false"
                @keydown.esc="isSelfDemotionModalOpen = false"
            >
                <section
                    class="w-full max-w-md rounded-2xl border border-amber-500/30 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                >
                    <div class="flex items-start gap-4">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-amber-500/10 text-lg font-bold text-amber-300"
                            aria-hidden="true"
                            >!</span
                        >
                        <div>
                            <h2
                                id="self-demotion-title"
                                class="text-lg font-semibold text-white"
                            >
                                Account role cannot be changed
                            </h2>
                            <p
                                id="self-demotion-description"
                                class="mt-2 text-sm text-slate-300"
                            >
                                You cannot demote your own account. Ask another
                                administrator to change your role.
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-end">
                        <button
                            type="button"
                            class="admin-button"
                            autofocus
                            @click="isSelfDemotionModalOpen = false"
                        >
                            Got it
                        </button>
                    </div>
                </section>
            </div>

            <div
                v-if="userPendingRoleChange"
                class="fixed inset-0 z-[80] flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="alertdialog"
                aria-modal="true"
                aria-labelledby="change-user-role-title"
                aria-describedby="change-user-role-description"
                @click.self="userPendingRoleChange = null"
                @keydown.esc="userPendingRoleChange = null"
            >
                <section
                    class="w-full max-w-md rounded-2xl border border-indigo-400/30 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                >
                    <h2
                        id="change-user-role-title"
                        class="text-lg font-semibold text-white"
                    >
                        {{
                            userPendingRoleChange.action === 'promote'
                                ? 'Promote user to admin?'
                                : 'Demote admin to user?'
                        }}
                    </h2>
                    <p
                        id="change-user-role-description"
                        class="mt-2 text-sm text-slate-300"
                    >
                        Confirm changing
                        {{ userPendingRoleChange.user.first_name }}
                        {{ userPendingRoleChange.user.last_name }}'s role
                        {{
                            userPendingRoleChange.action === 'promote'
                                ? 'to admin. They will have access to administrative features.'
                                : 'to user. They will lose access to administrative features.'
                        }}
                    </p>
                    <div class="mt-6 flex justify-end gap-3">
                        <button
                            type="button"
                            class="admin-secondary"
                            @click="userPendingRoleChange = null"
                        >
                            Cancel
                        </button>
                        <button
                            type="button"
                            class="admin-button"
                            @click="confirmUserRoleChange"
                        >
                            {{
                                userPendingRoleChange.action === 'promote'
                                    ? 'Promote user'
                                    : 'Demote user'
                            }}
                        </button>
                    </div>
                </section>
            </div>

            <div
                v-if="userPendingDelete"
                class="fixed inset-0 z-[70] flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="alertdialog"
                aria-modal="true"
                aria-labelledby="delete-user-title"
                aria-describedby="delete-user-description"
                @click.self="userPendingDelete = null"
                @keydown.esc="userPendingDelete = null"
            >
                <section
                    class="w-full max-w-md rounded-2xl border border-rose-500/30 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                >
                    <h2
                        id="delete-user-title"
                        class="text-lg font-semibold text-white"
                    >
                        Delete {{ userPendingDelete.first_name }}
                        {{ userPendingDelete.last_name }}?
                    </h2>
                    <p
                        id="delete-user-description"
                        class="mt-2 text-sm text-slate-300"
                    >
                        This will permanently delete the user account and its
                        associated data. This action cannot be undone.
                    </p>
                    <div class="mt-6 flex justify-end gap-3">
                        <button
                            type="button"
                            class="admin-secondary"
                            @click="userPendingDelete = null"
                        >
                            Cancel
                        </button>
                        <button
                            type="button"
                            class="rounded-lg bg-rose-600 px-4 py-2 text-sm font-semibold text-white hover:bg-rose-500"
                            @click="confirmDeleteUser"
                        >
                            Delete user
                        </button>
                    </div>
                </section>
            </div>

            <div
                v-if="contactPendingDelete"
                class="fixed inset-0 z-[70] flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="alertdialog"
                aria-modal="true"
                aria-labelledby="delete-contact-title"
                aria-describedby="delete-contact-description"
                @click.self="contactPendingDelete = null"
                @keydown.esc="contactPendingDelete = null"
            >
                <section
                    class="w-full max-w-md rounded-2xl border border-rose-500/30 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                >
                    <h2
                        id="delete-contact-title"
                        class="text-lg font-semibold text-white"
                    >
                        Delete this contact?
                    </h2>
                    <p
                        id="delete-contact-description"
                        class="mt-2 text-sm text-slate-300"
                    >
                        This will permanently delete the message "{{
                            contactPendingDelete.subject
                        }}" from {{ contactPendingDelete.name }}. This action
                        cannot be undone.
                    </p>
                    <div class="mt-6 flex justify-end gap-3">
                        <button
                            type="button"
                            class="admin-secondary"
                            @click="contactPendingDelete = null"
                        >
                            Cancel
                        </button>
                        <button
                            type="button"
                            class="rounded-lg bg-rose-600 px-4 py-2 text-sm font-semibold text-white hover:bg-rose-500"
                            @click="confirmDeleteContact"
                        >
                            Delete contact
                        </button>
                    </div>
                </section>
            </div>

            <div
                v-if="virtualMachinePendingDelete"
                class="fixed inset-0 z-[70] flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="alertdialog"
                aria-modal="true"
                aria-labelledby="delete-virtual-machine-title"
                aria-describedby="delete-virtual-machine-description"
                @click.self="virtualMachinePendingDelete = null"
                @keydown.esc="virtualMachinePendingDelete = null"
            >
                <section
                    class="w-full max-w-md rounded-2xl border border-rose-500/30 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                >
                    <h2
                        id="delete-virtual-machine-title"
                        class="text-lg font-semibold text-white"
                    >
                        Delete {{ virtualMachinePendingDelete.name }}?
                    </h2>
                    <p
                        id="delete-virtual-machine-description"
                        class="mt-2 text-sm text-slate-300"
                    >
                        This will permanently delete the virtual machine and
                        cancel its subscription. This action cannot be undone.
                    </p>
                    <div class="mt-6 flex justify-end gap-3">
                        <button
                            type="button"
                            class="admin-secondary"
                            @click="virtualMachinePendingDelete = null"
                        >
                            Cancel
                        </button>
                        <button
                            type="button"
                            class="rounded-lg bg-rose-600 px-4 py-2 text-sm font-semibold text-white hover:bg-rose-500"
                            @click="confirmDeleteVirtualMachine"
                        >
                            Delete VM and cancel subscription
                        </button>
                    </div>
                </section>
            </div>

            <div
                v-if="ticketPendingClose"
                class="fixed inset-0 z-[70] flex items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
                role="alertdialog"
                aria-modal="true"
                aria-labelledby="close-ticket-title"
                aria-describedby="close-ticket-description"
                @click.self="ticketPendingClose = null"
                @keydown.esc="ticketPendingClose = null"
            >
                <section
                    class="w-full max-w-md rounded-2xl border border-rose-500/30 bg-slate-900 p-6 shadow-2xl shadow-black/50"
                >
                    <h2
                        id="close-ticket-title"
                        class="text-lg font-semibold text-white"
                    >
                        Close ticket #{{ ticketPendingClose.id }}?
                    </h2>
                    <p
                        id="close-ticket-description"
                        class="mt-2 text-sm text-slate-300"
                    >
                        The ticket will be marked as closed. You can still view
                        its conversation, but it can no longer receive replies.
                    </p>
                    <div class="mt-6 flex justify-end gap-3">
                        <button
                            type="button"
                            class="admin-secondary"
                            @click="ticketPendingClose = null"
                        >
                            Cancel
                        </button>
                        <button
                            type="button"
                            class="rounded-lg bg-rose-600 px-4 py-2 text-sm font-semibold text-white hover:bg-rose-500"
                            @click="confirmCloseTicket"
                        >
                            Close ticket
                        </button>
                    </div>
                </section>
            </div>
        </main>
    </div>
</template>

<style scoped>
@reference "../../../css/app.css";

.admin-input {
    @apply rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-200 placeholder:text-slate-600 focus:border-indigo-400 focus:outline-none;
}
.admin-label {
    @apply mb-1 block text-xs font-semibold tracking-wide text-slate-400 uppercase;
}
.admin-button {
    @apply rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500 disabled:opacity-50;
}
.admin-secondary {
    @apply rounded-lg border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-300 hover:bg-slate-800;
}
</style>
