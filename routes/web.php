<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);

Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

Route::put('/listings/{listing}', [ListingController::class, 'update']);