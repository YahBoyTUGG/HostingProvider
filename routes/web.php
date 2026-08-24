<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\SupportTicketController;
use App\Models\Features;

// Guest Authentication Routes (Inertia Pages)
Route::middleware('guest')->group(function () {
    Route::inertia('/login', 'auth/Login')->name('login');
    Route::inertia('/register', 'auth/Register')->name('register');
});

// Home Page with Dynamic Featured Offers
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'featured_offers' => Features::with('server_offer')
            ->whereHas('server_offer', fn ($query) => $query->where('is_active', true))
            ->orderBy('sort_order')
            ->get(),
    ]);
})->name('home');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // User Dashboard
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::post('/subscriptions/{subscription}/toggle-power', [UserDashboardController::class, 'togglePower'])->name('subscriptions.toggle-power');
    Route::post('/subscriptions/{subscription}/cancel', [UserDashboardController::class, 'cancel'])->name('subscriptions.cancel');

    // Checkout
    Route::get('/checkout/{offer}', [CheckoutController::class, 'show'])->name('checkout.show');
    Route::post('/checkout/{offer}', [CheckoutController::class, 'store'])->name('checkout.store');

    // Tickets
    Route::get('/tickets', [SupportTicketController::class, 'index'])->name('tickets.index');
    Route::post('/tickets', [SupportTicketController::class, 'store'])->name('tickets.store');
    Route::post('/tickets/{ticket}/reply', [SupportTicketController::class, 'reply'])->name('tickets.reply');
});

// Admin Routes
Route::middleware(['auth', 'can:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('/users/{user}/promote', [AdminDashboardController::class, 'promoteUser'])->name('users.promote');
    Route::put('/users/{user}', [AdminDashboardController::class, 'updateUser'])->name('users.update');
    Route::post('/offers', [AdminDashboardController::class, 'storeOffer'])->name('offers.store');
    Route::delete('/offers/{offer}', [AdminDashboardController::class, 'destroyOffer'])->name('offers.destroy');
});

require __DIR__.'/settings.php';
