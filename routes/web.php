<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\UserDashboardController;
use App\Models\Features;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Guest Authentication Routes (Inertia Pages)
Route::middleware('guest')->group(function () {
    Route::inertia('/login', 'auth/Login')->name('login');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Home Page with Dynamic Featured Offers
$welcomePage = function () {
    return Inertia::render('Welcome', [
        'featured_offers' => Features::with('server_offer')
            ->whereHas('server_offer', fn ($query) => $query->where('is_active', true))
            ->orderBy('sort_order')
            ->get(),
    ]);
};

Route::get('/', $welcomePage)->name('home');
Route::get('/welcome', $welcomePage)->name('welcome');

// About Us Route
Route::get('/about', function () {
    return Inertia::render('AboutUs');
})->name('about');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');

// Base Public Contact Form
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // User Dashboard
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::post('/subscriptions/{subscription}/toggle-power', [UserDashboardController::class, 'toggle_power'])->name('subscriptions.toggle-power');
    Route::post('/subscriptions/{subscription}/cancel', [UserDashboardController::class, 'cancel'])->name('subscriptions.cancel');

    // Checkout
    Route::get('/checkout/{offer}', [CheckoutController::class, 'show'])->name('checkout.show');
    Route::post('/checkout/{offer}', [CheckoutController::class, 'store'])->name('checkout.store');

    // Tickets
    Route::get('/tickets', [SupportTicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [SupportTicketController::class, 'create'])->name('tickets.create');
    Route::get('/tickets/{ticket}', [SupportTicketController::class, 'show'])->name('tickets.show');
    Route::post('/tickets', [SupportTicketController::class, 'store'])->name('tickets.store');
    Route::post('/tickets/{ticket}/reply', [SupportTicketController::class, 'reply'])->name('tickets.reply');
});

// Admin Routes
Route::middleware(['auth', 'can:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('/users/{user}/promote', [AdminDashboardController::class, 'promote_user'])->name('users.promote');
    Route::post('/users/{user}/demote', [AdminDashboardController::class, 'demote_user'])->name('users.demote');
    Route::post('/users', [AdminDashboardController::class, 'store_user'])->name('users.store');
    Route::put('/users/{user}', [AdminDashboardController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [AdminDashboardController::class, 'destroy_user'])->name('users.destroy');
    Route::post('/offers', [AdminDashboardController::class, 'store_offer'])->name('offers.store');
    Route::put('/offers/{offer}', [AdminDashboardController::class, 'update_offer'])->name('offers.update');
    Route::delete('/offers/{offer}', [AdminDashboardController::class, 'destroy_offer'])->name('offers.destroy');
    Route::post('/featured-offers', [AdminDashboardController::class, 'store_feature'])->name('featured-offers.store');
    Route::put('/featured-offers/{feature}', [AdminDashboardController::class, 'update_feature'])->name('featured-offers.update');
    Route::delete('/featured-offers/{feature}', [AdminDashboardController::class, 'destroy_feature'])->name('featured-offers.destroy');
    Route::post('/contacts/{contact}/read', [AdminDashboardController::class, 'mark_contact_read'])->name('contacts.read');
    Route::post('/tickets/{ticket}/reply', [AdminDashboardController::class, 'reply_to_ticket'])->name('tickets.reply');
    Route::post('/tickets/{ticket}/close', [AdminDashboardController::class, 'close_ticket'])->name('tickets.close');
});

require __DIR__.'/settings.php';
