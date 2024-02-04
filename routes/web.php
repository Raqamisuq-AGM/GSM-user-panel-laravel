<?php

use App\Http\Controllers\Download\DownloadController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Invoice\InvoiceController;
use App\Http\Controllers\License\LicenseController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\SupportTicket\SupportTicketController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('index');
// Download Route
Route::prefix('download')->group(function () {
    Route::get('/all', [DownloadController::class, 'index'])->name('download');
    // Route::get('/pending', [LicenseController::class, 'pending'])->name('license.pending');
});
// License Route
Route::prefix('license')->group(function () {
    Route::get('/all', [LicenseController::class, 'all'])->name('license.all');
    Route::get('/pending', [LicenseController::class, 'pending'])->name('license.pending');
    Route::get('/active', [LicenseController::class, 'active'])->name('license.active');
    Route::get('/suspended', [LicenseController::class, 'suspended'])->name('license.suspended');
    Route::get('/view/{id}', [LicenseController::class, 'view'])->name('license.view');
    // Route::get('/create', [LicenseController::class, 'create'])->name('license.create');
    // Route::get('/edit/{id}', [LicenseController::class, 'edit'])->name('license.edit');
    // Route::post('/update', [LicenseController::class, 'update'])->name('license.update');
});
// Invoice Route
Route::prefix('invoice')->group(function () {
    Route::get('/all', [InvoiceController::class, 'all'])->name('invoice.all');
    Route::get('/paid', [InvoiceController::class, 'paid'])->name('invoice.paid');
    Route::get('/pending', [InvoiceController::class, 'pending'])->name('invoice.pending');
    Route::get('/view/{id}', [InvoiceController::class, 'view'])->name('invoice.view');
});
// Support ticket Route
Route::prefix('ticket')->group(function () {
    Route::get('/open', [SupportTicketController::class, 'open'])->name('ticket.open');
    Route::get('/all', [SupportTicketController::class, 'all'])->name('ticket.all');
    Route::get('/answered', [SupportTicketController::class, 'paid'])->name('ticket.answered');
    Route::get('/pending', [SupportTicketController::class, 'pending'])->name('ticket.pending');
    Route::get('/closed', [SupportTicketController::class, 'pending'])->name('ticket.closed');
    Route::get('/view/{id}', [SupportTicketController::class, 'ticketDetails'])->name('ticket.view');
    Route::post('/answer', [SupportTicketController::class, 'answerTicket'])->name('ticket.answer');
    Route::post('/update-ticket-status', [SupportTicketController::class, 'updateTicketStatus'])->name('ticket.update-status');
});
// Settings Route
Route::prefix('setting')->group(function () {
    Route::get('/profile', [SettingController::class, 'profile'])->name('setting.profile');
    Route::post('/update-company', [SettingController::class, 'updateCompany'])->name('setting.update-company');
    Route::get('/change-password', [SettingController::class, 'changePassword'])->name('setting.change-password');
    Route::post('/update-password', [SettingController::class, 'updatePassword'])->name('setting.update-password');
});
// Logout Route
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
