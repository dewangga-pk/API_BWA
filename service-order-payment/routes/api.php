<?php
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WebhookController;

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

Route::controller(OrderController::class)->group(function () {
    Route::post('/orders', 'create');
    Route::get('/orders', 'index');
});

Route::controller(WebhookController::class)->group(function () {
    Route::post('/webhook', 'midtransHandler');
});
