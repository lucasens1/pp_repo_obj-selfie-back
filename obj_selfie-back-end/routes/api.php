<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
use App\Http\Controllers\Admin\MessageController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/messages', [MessageController::class, 'index']); // Mostra tutti i messaggi
Route::post('/messages', [MessageController::class, 'create']); // Crea un nuovo messaggio
Route::put('/messages/{id}', [MessageController::class, 'update']); // Aggiorna un messaggio
Route::delete('/messages/{id}', [MessageController::class, 'delete']); // Cancella un messaggio
