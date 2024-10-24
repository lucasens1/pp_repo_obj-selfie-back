<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MailTestController;
use App\Http\Controllers\ProfileController;
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
/* User atterra -> subito redirect a login */
Route::get('/', function () {
    return redirect()->route('login'); // Reindirizza alla rotta con name('login') 
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/send-test-email', [MailTestController::class, 'sendTestEmail']);

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('messages', MessageController::class);
    });

require __DIR__ . '/auth.php';
