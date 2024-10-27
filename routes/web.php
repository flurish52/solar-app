<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuoteRequestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/products', [ProductController::class, 'index'])->name('product.display');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/messages', [QuoteRequestController::class, 'index'])->name('messages.display');
    Route::patch('/quote-requests/{id}', [QuoteRequestController::class, 'updateReadStatus']);
});

    Route::post('/quotation/send', [QuoteRequestController::class, 'sendQuotation'])->name('quotation.send'); // To handle form submission and send email
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/about', [AboutUsController::class, 'index'])->name('projects');
Route::get('/contact', [ContactUsController::class, 'index'])->name('projects');
    Route::post('/sent-message', [QuoteRequestController::class, 'sentRequest'])->name('messages.send');
    Route::get('/alert', [QuoteRequestController::class, 'returnAlert'])->name('messages.alert');




require __DIR__.'/auth.php';
