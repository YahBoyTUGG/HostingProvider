<script setup lang="ts">
import { Head, Link, router, useForm } from '@inertiajs/vue3';
import { computed, reactive, ref } from 'vue';

type Tab = 'users' | 'offers' | 'contacts' | 'tickets';
type ViewMode = 'list' | 'create';

interface User {
    id: number;
    first_name: string;
    last_name: string;
    email: string;
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
    priority: 'low' | 'normal' | 'high';
    status: string;
    created_at: string;
    user?: User | null;
    subscription?: {
        server_offer?: { name: string } | null;
    } | null;
    messages: Message[];
}

const props = defineProps<{
    users: User[];
    offers: Offer[];
    contacts: Contact[];
    tickets: Ticket[];
}>();

const activeTab = ref<Tab>('users');
const activeView = ref<ViewMode>('list');
const search = reactive<Record<Tab, string>>({ users: '', offers: '', contacts: '', tickets: '' });
const userRoleFilter = ref<'all' | 'user' | 'admin'>('all');
const offerTypeFilter = ref<'all' | 'vps' | 'dedicated'>('all');
const contactReadFilter = ref<'all' | 'unread' | 'read'>('all');
const ticketStatusFilter = ref<'all' | 'open' | 'answered' | 'closed'>('all');
const ticketPriorityFilter = ref<'all' | 'low' | 'normal' | 'high'>('all');
const ticketServiceFilter = ref('all');

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

const filteredUsers = computed(() => props.users.filter((user) => {
    const query = search.users.toLowerCase();
    return (userRoleFilter.value === 'all' || user.role === userRoleFilter.value)
        && `${user.first_name} ${user.last_name} ${user.email}`.toLowerCase().includes(query);
}));
const filteredOffers = computed(() => props.offers.filter((offer) => {
    const query = search.offers.toLowerCase();
    return (offerTypeFilter.value === 'all' || offer.type === offerTypeFilter.value)
        && `${offer.name} ${offer.city} ${offer.country}`.toLowerCase().includes(query);
}));
const filteredContacts = computed(() => props.contacts.filter((contact) => {
    const query = search.contacts.toLowerCase();
    return (contactReadFilter.value === 'all'
        || (contactReadFilter.value === 'read' && contact.is_read)
        || (contactReadFilter.value === 'unread' && !contact.is_read))
        && `${contact.name} ${contact.email} ${contact.subject} ${contact.message}`.toLowerCase().includes(query);
}));
const filteredTickets = computed(() => props.tickets.filter((ticket) => {
    const query = search.tickets.toLowerCase();
    const createdDate = ticket.created_at.slice(0, 10);
    const serviceName = ticket.subscription?.server_offer?.name ?? 'General account inquiry';

    return (ticketStatusFilter.value === 'all' || ticket.status === ticketStatusFilter.value)
        && (ticketPriorityFilter.value === 'all' || ticket.priority === ticketPriorityFilter.value)
        && (ticketServiceFilter.value === 'all' || serviceName === ticketServiceFilter.value)
        && (!ticketCreatedFrom.value || createdDate >= ticketCreatedFrom.value)
        && (!ticketCreatedTo.value || createdDate <= ticketCreatedTo.value)
        && `${ticket.subject} ${ticket.user?.email ?? ''} ${serviceName}`.toLowerCase().includes(query);
}));

const ticketServices = computed(() => [...new Set(props.tickets.map((ticket) => ticket.subscription?.server_offer?.name ?? 'General account inquiry'))].sort());

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
    name: '', type: 'vps', ram_gb: 1, cpu_cores: 1, storage_amount_gb: 20, storage_type: 'NVMe SSD',
    bandwidth_tb: 1, gpu_model: '', gpu_count: 0, price_monthly: 0, price_6_months: '',
    price_1_year: 0, price_2_years: '', country: '', city: '', is_active: true,
});
const offerForm = reactive(emptyOffer());
const editingOfferId = ref<number | null>(null);
const responseForms = reactive<Record<number, string>>({});

const submitUser = () => {
    createUserForm.post('/admin/users', { onSuccess: () => createUserForm.reset() });
};

const promote = (user: User) => router.post(`/admin/users/${user.id}/promote`);
const demote = (user: User) => router.post(`/admin/users/${user.id}/demote`);
const deleteUser = (user: User) => {
    if (window.confirm(`Delete ${user.first_name} ${user.last_name}?`)) router.delete(`/admin/users/${user.id}`);
};

const submitOffer = () => {
    const url = editingOfferId.value ? `/admin/offers/${editingOfferId.value}` : '/admin/offers';
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
};

const deleteOffer = (offer: Offer) => {
    if (window.confirm(`Delete the ${offer.name} offer?`)) router.delete(`/admin/offers/${offer.id}`);
};

const markRead = (contact: Contact) => router.post(`/admin/contacts/${contact.id}/read`);
const sendReply = (ticket: Ticket) => {
    const message = responseForms[ticket.id]?.trim();
    if (!message) return;

    router.post(`/admin/tickets/${ticket.id}/reply`, { message }, {
        onSuccess: () => { responseForms[ticket.id] = ''; },
    });
};

const closeTicket = (ticket: Ticket) => {
    if (window.confirm(`Close ticket #${ticket.id}?`)) router.post(`/admin/tickets/${ticket.id}/close`);
};
</script>

<template>
    <Head title="Admin Dashboard - VelocityRig" />

    <div class="min-h-screen bg-slate-950 text-slate-100">
        <header class="border-b border-slate-800 bg-slate-950/90 sticky top-0 z-20 backdrop-blur">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-indigo-600 flex items-center justify-center font-bold">VR</div>
                    <div><p class="font-semibold">VelocityRig</p><p class="text-[11px] text-indigo-300 uppercase tracking-wider">Admin Console</p></div>
                </div>
                <Link href="/dashboard" class="text-sm text-slate-400 hover:text-white">Back to app</Link>
            </div>
        </header>

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white">Operations dashboard</h1>
                <p class="text-slate-400 mt-1">Manage people, infrastructure, customer messages, and support.</p>
            </div>

            <nav class="flex flex-wrap gap-2 border-b border-slate-800 mb-8">
                <button v-for="tab in (['users', 'offers', 'contacts', 'tickets'] as Tab[])" :key="tab" type="button" class="px-4 py-3 text-sm font-semibold capitalize border-b-2" :class="activeTab === tab ? 'border-indigo-400 text-indigo-300' : 'border-transparent text-slate-500 hover:text-slate-200'" @click="setTab(tab)">{{ tab }}</button>
            </nav>

            <div class="flex flex-wrap items-center gap-2 mb-6">
                <button type="button" class="admin-secondary" :class="activeView === 'list' ? 'border-indigo-400 bg-indigo-500/15 text-indigo-200 shadow-sm shadow-indigo-500/20' : ''" :aria-pressed="activeView === 'list'" @click="activeView = 'list'">List &amp; filter</button>
                <button v-if="activeTab === 'users' || activeTab === 'offers'" type="button" class="admin-secondary" :class="activeView === 'create' ? 'border-indigo-400 bg-indigo-500/15 text-indigo-200 shadow-sm shadow-indigo-500/20' : ''" :aria-pressed="activeView === 'create'" @click="activeView = 'create'">Create</button>
            </div>

            <section v-if="activeTab === 'users'" class="space-y-4">
                <div v-if="activeView === 'list'" class="space-y-4">
                    <div class="flex flex-wrap gap-3">
                        <input v-model="search.users" placeholder="Search users..." class="admin-input flex-1 min-w-64">
                        <select v-model="userRoleFilter" class="admin-input w-40"><option value="all">All roles</option><option value="user">Users</option><option value="admin">Admins</option></select>
                    </div>
                    <p class="text-xs text-slate-500">{{ filteredUsers.length }} users found</p>
                    <article v-for="user in filteredUsers" :key="user.id" class="bg-slate-900 border border-slate-800 rounded-xl p-5 flex flex-wrap items-center justify-between gap-4">
                        <div><p class="font-semibold text-white">{{ user.first_name }} {{ user.last_name }}</p><p class="text-sm text-slate-400">{{ user.email }}</p></div>
                        <div class="flex items-center gap-2"><span class="px-2.5 py-1 rounded-full text-xs font-semibold" :class="user.role === 'admin' ? 'bg-indigo-400/10 text-indigo-300' : 'bg-slate-800 text-slate-400'">{{ user.role }}</span><button v-if="user.role === 'user'" type="button" class="text-xs text-emerald-300 hover:text-emerald-200" @click="promote(user)">Promote</button><button v-else type="button" class="text-xs text-amber-300 hover:text-amber-200" @click="demote(user)">Demote</button><button type="button" class="text-xs text-rose-300 hover:text-rose-200" @click="deleteUser(user)">Delete</button></div>
                    </article>
                </div>
                <form v-else class="max-w-xl bg-slate-900 border border-slate-800 rounded-xl p-5 space-y-3" @submit.prevent="submitUser">
                    <h2 class="font-semibold text-white">Create user</h2>
                    <div><label for="user-first-name" class="admin-label">First name</label><input id="user-first-name" v-model="createUserForm.first_name" required placeholder="First name" class="admin-input w-full"></div>
                    <div><label for="user-last-name" class="admin-label">Last name</label><input id="user-last-name" v-model="createUserForm.last_name" required placeholder="Last name" class="admin-input w-full"></div>
                    <div><label for="user-email" class="admin-label">Email</label><input id="user-email" v-model="createUserForm.email" required type="email" placeholder="Email" class="admin-input w-full"></div>
                    <div><label for="user-address" class="admin-label">Address</label><input id="user-address" v-model="createUserForm.living_address" required placeholder="Address" class="admin-input w-full"></div>
                    <div><label for="user-phone" class="admin-label">Phone</label><input id="user-phone" v-model="createUserForm.phone_number" required placeholder="Phone" class="admin-input w-full"></div>
                    <div><label for="user-password" class="admin-label">Password</label><input id="user-password" v-model="createUserForm.password" required type="password" minlength="8" placeholder="Password" class="admin-input w-full"></div>
                    <div><label for="user-role" class="admin-label">Role</label><select id="user-role" v-model="createUserForm.role" class="admin-input w-full"><option value="user">User</option><option value="admin">Admin</option></select></div>
                    <button class="admin-button w-full" :disabled="createUserForm.processing">Create user</button>
                </form>
            </section>

            <section v-else-if="activeTab === 'offers'" class="space-y-4">
                <div v-if="activeView === 'list'" class="space-y-4"><div class="flex flex-wrap gap-3"><input v-model="search.offers" placeholder="Search offers, cities..." class="admin-input flex-1 min-w-64"><select v-model="offerTypeFilter" class="admin-input w-40"><option value="all">All types</option><option value="vps">VPS</option><option value="dedicated">Dedicated</option></select></div><p class="text-xs text-slate-500">{{ filteredOffers.length }} offers found</p><div class="space-y-3"><article v-for="offer in filteredOffers" :key="offer.id" class="bg-slate-900 border border-slate-800 rounded-xl p-5"><div class="flex justify-between gap-3"><div><h2 class="font-semibold text-white">{{ offer.name }}</h2><p class="text-sm text-slate-400">{{ offer.type }} · {{ offer.ram_gb }} GB RAM · {{ offer.cpu_cores }} cores · ${{ offer.price_monthly }}/month</p></div><span class="text-xs" :class="offer.is_active ? 'text-emerald-300' : 'text-slate-500'">{{ offer.is_active ? 'Active' : 'Inactive' }}</span></div><div class="mt-4 flex gap-3"><button type="button" class="text-sm text-indigo-300" @click="editOffer(offer); activeView = 'create'">Edit</button><button type="button" class="text-sm text-rose-300" @click="deleteOffer(offer)">Delete</button></div></article></div></div>
                <form v-else class="max-w-3xl bg-slate-900 border border-slate-800 rounded-xl p-5 grid grid-cols-2 gap-3" @submit.prevent="submitOffer">
                    <h2 class="col-span-2 font-semibold text-white">{{ editingOfferId ? 'Edit offer' : 'Create offer' }}</h2>
                    <div class="col-span-2"><label for="offer-name" class="admin-label">Name</label><input id="offer-name" v-model="offerForm.name" required placeholder="Name" class="admin-input w-full"></div>
                    <div><label for="offer-type" class="admin-label">Type</label><select id="offer-type" v-model="offerForm.type" class="admin-input w-full"><option value="vps">VPS</option><option value="dedicated">Dedicated</option></select></div>
                    <div><label for="offer-storage-type" class="admin-label">Storage type</label><input id="offer-storage-type" v-model="offerForm.storage_type" required placeholder="Storage type" class="admin-input w-full"></div>
                    <div><label for="offer-ram" class="admin-label">RAM (GB)</label><input id="offer-ram" v-model="offerForm.ram_gb" required type="number" min="1" placeholder="RAM GB" class="admin-input w-full"></div>
                    <div><label for="offer-cpu" class="admin-label">CPU cores</label><input id="offer-cpu" v-model="offerForm.cpu_cores" required type="number" min="1" placeholder="CPU cores" class="admin-input w-full"></div>
                    <div><label for="offer-storage-amount" class="admin-label">Storage (GB)</label><input id="offer-storage-amount" v-model="offerForm.storage_amount_gb" required type="number" min="1" placeholder="Storage GB" class="admin-input w-full"></div>
                    <div><label for="offer-bandwidth" class="admin-label">Bandwidth (TB)</label><input id="offer-bandwidth" v-model="offerForm.bandwidth_tb" required type="number" min="1" placeholder="Bandwidth TB" class="admin-input w-full"></div>
                    <div><label for="offer-gpu-model" class="admin-label">GPU model</label><input id="offer-gpu-model" v-model="offerForm.gpu_model" placeholder="GPU model" class="admin-input w-full"></div>
                    <div><label for="offer-gpu-count" class="admin-label">GPU count</label><input id="offer-gpu-count" v-model="offerForm.gpu_count" required type="number" min="0" placeholder="GPU count" class="admin-input w-full"></div>
                    <div><label for="offer-monthly-price" class="admin-label">Monthly price</label><input id="offer-monthly-price" v-model="offerForm.price_monthly" required type="number" min="0" step="0.01" placeholder="Monthly price" class="admin-input w-full"></div>
                    <div><label for="offer-yearly-price" class="admin-label">Yearly price</label><input id="offer-yearly-price" v-model="offerForm.price_1_year" required type="number" min="0" step="0.01" placeholder="Yearly price" class="admin-input w-full"></div>
                    <div><label for="offer-six-month-price" class="admin-label">6-month price</label><input id="offer-six-month-price" v-model="offerForm.price_6_months" type="number" min="0" step="0.01" placeholder="6-month price" class="admin-input w-full"></div>
                    <div><label for="offer-two-year-price" class="admin-label">2-year price</label><input id="offer-two-year-price" v-model="offerForm.price_2_years" type="number" min="0" step="0.01" placeholder="2-year price" class="admin-input w-full"></div>
                    <div><label for="offer-country" class="admin-label">Country</label><input id="offer-country" v-model="offerForm.country" required placeholder="Country" class="admin-input w-full"></div>
                    <div><label for="offer-city" class="admin-label">City</label><input id="offer-city" v-model="offerForm.city" required placeholder="City" class="admin-input w-full"></div>
                    <label for="offer-active" class="col-span-2 flex items-center gap-2 text-sm text-slate-300"><input id="offer-active" v-model="offerForm.is_active" type="checkbox"> Active offer</label>
                    <div class="col-span-2 flex gap-3"><button class="admin-button">{{ editingOfferId ? 'Save changes' : 'Create offer' }}</button><button v-if="editingOfferId" type="button" class="admin-secondary" @click="resetOffer">Cancel</button></div>
                </form>
            </section>

            <section v-else-if="activeTab === 'contacts'" class="space-y-3"><div class="flex flex-wrap gap-3"><input v-model="search.contacts" placeholder="Search contacts..." class="admin-input flex-1 min-w-64"><select v-model="contactReadFilter" class="admin-input w-40"><option value="all">All messages</option><option value="unread">Unread</option><option value="read">Read</option></select></div><p class="text-xs text-slate-500">{{ filteredContacts.length }} contacts found</p><article v-for="contact in filteredContacts" :key="contact.id" class="bg-slate-900 border rounded-xl p-5" :class="contact.is_read ? 'border-slate-800' : 'border-indigo-400/40'"><div class="flex flex-wrap justify-between gap-3"><div><h2 class="font-semibold text-white">{{ contact.subject }}</h2><p class="text-sm text-slate-400">{{ contact.name }} · {{ contact.email }}</p></div><button v-if="!contact.is_read" type="button" class="text-xs text-indigo-300" @click="markRead(contact)">Mark read</button></div><p class="text-sm text-slate-300 whitespace-pre-wrap mt-4">{{ contact.message }}</p><p class="text-xs text-slate-500 mt-4">{{ new Date(contact.created_at).toLocaleString() }}</p></article><p v-if="!filteredContacts.length" class="text-slate-400">No contacts match the current filter.</p></section>

            <section v-else class="space-y-4">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    <input v-model="search.tickets" placeholder="Search tickets..." class="admin-input">
                    <select v-model="ticketStatusFilter" class="admin-input"><option value="all">All statuses</option><option value="open">Open</option><option value="answered">Answered</option><option value="closed">Closed</option></select>
                    <select v-model="ticketPriorityFilter" class="admin-input"><option value="all">All priorities</option><option value="low">Low priority</option><option value="normal">Normal priority</option><option value="high">High priority</option></select>
                    <select v-model="ticketServiceFilter" class="admin-input"><option value="all">All affected services</option><option v-for="service in ticketServices" :key="service" :value="service">{{ service }}</option></select>
                    <label class="admin-input relative flex cursor-pointer items-center gap-2" @click.prevent="openDatePicker(fromDateInput)">
                        <svg class="pointer-events-none h-4 w-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="17" rx="2" />
                            <path d="M16 2v4M8 2v4M3 10h18" />
                        </svg>
                        <span class="pointer-events-none text-xs text-slate-300">{{ formatFilterDate(ticketCreatedFrom) || 'From date' }}</span>
                        <input ref="fromDateInput" v-model="ticketCreatedFrom" type="date" aria-label="Filter tickets from date" class="pointer-events-none absolute inset-0 h-full w-full cursor-pointer opacity-0">
                    </label>
                    <label class="admin-input relative flex cursor-pointer items-center gap-2" @click.prevent="openDatePicker(toDateInput)">
                        <svg class="pointer-events-none h-4 w-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="17" rx="2" />
                            <path d="M16 2v4M8 2v4M3 10h18" />
                        </svg>
                        <span class="pointer-events-none text-xs text-slate-300">{{ formatFilterDate(ticketCreatedTo) || 'To date' }}</span>
                        <input ref="toDateInput" v-model="ticketCreatedTo" type="date" aria-label="Filter tickets to date" class="pointer-events-none absolute inset-0 h-full w-full cursor-pointer opacity-0">
                    </label>
                </div>
                <p class="text-xs text-slate-500">{{ filteredTickets.length }} tickets found</p>
                <article v-for="ticket in filteredTickets" :key="ticket.id" class="bg-slate-900 border border-slate-800 rounded-xl p-5"><div class="flex flex-wrap justify-between gap-3"><div><p class="text-xs text-slate-500">Ticket #{{ ticket.id }} · {{ ticket.user?.email }}</p><h2 class="font-semibold text-white mt-1">{{ ticket.subject }}</h2><p class="text-xs text-slate-500 mt-1">{{ ticket.subscription?.server_offer?.name ?? 'General account inquiry' }} · {{ ticket.priority }} priority · {{ new Date(ticket.created_at).toLocaleDateString() }}</p></div><span class="text-xs capitalize text-indigo-300">{{ ticket.status }}</span></div><div class="mt-4 space-y-3"><div v-for="message in ticket.messages" :key="message.id" class="border-l-2 border-slate-700 pl-3"><p class="text-xs text-slate-500">{{ message.user?.role === 'admin' ? 'Support team' : 'Customer' }} · {{ new Date(message.created_at).toLocaleString() }}</p><p class="text-sm text-slate-300 whitespace-pre-wrap mt-1">{{ message.message }}</p></div></div><div v-if="ticket.status !== 'closed'" class="mt-5 flex flex-wrap items-end gap-3"><form class="flex min-w-0 flex-1 gap-3" @submit.prevent="sendReply(ticket)"><textarea v-model="responseForms[ticket.id]" required maxlength="2000" rows="2" placeholder="Write a response..." class="admin-input flex-1"></textarea><button class="admin-button self-end">Reply</button></form><button type="button" class="admin-secondary text-rose-300 hover:border-rose-400 hover:text-rose-200" @click="closeTicket(ticket)">Close ticket</button></div></article><p v-if="!filteredTickets.length" class="text-slate-400">No tickets match the current filter.</p>
            </section>
        </main>
    </div>
</template>

<style scoped>
@reference "../../../css/app.css";

.admin-input { @apply rounded-lg border border-slate-700 bg-slate-950 px-3 py-2 text-sm text-slate-200 placeholder:text-slate-600 focus:border-indigo-400 focus:outline-none; }
.admin-label { @apply mb-1 block text-xs font-semibold uppercase tracking-wide text-slate-400; }
.admin-button { @apply rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500 disabled:opacity-50; }
.admin-secondary { @apply rounded-lg border border-slate-700 px-4 py-2 text-sm font-semibold text-slate-300 hover:bg-slate-800; }
</style>
