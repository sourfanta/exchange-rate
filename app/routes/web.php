<?php

use App\Http\Controllers\ExchangeRateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExchangeRateController::class, 'find']);

Route::get('/{startDate}/{endDate}', [ExchangeRateController::class, 'findByDateRange']);

Route::get('/create', [ExchangeRateController::class, 'createView']);

Route::post('/create', [ExchangeRateController::class, 'create']);
