<?php

use App\Http\Controllers\ExchangeRateController;
use Illuminate\Support\Facades\Route;

/**
 * Routes for ExchangeRateController
 *
 */

Route::get('/', [ExchangeRateController::class, 'find']);

Route::get('/create', [ExchangeRateController::class, 'createView']);

Route::post('/create', [ExchangeRateController::class, 'create'])->name('create-post');

Route::get('/{startDate}', [ExchangeRateController::class, 'findByDate']);

Route::get('/{startDate}/{endDate}', [ExchangeRateController::class, 'findByDateRange']);
