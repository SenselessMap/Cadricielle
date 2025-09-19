<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::post('/submit', [SiteController::class, 'submitForm']);
Route::get('/form', [SiteController::class, 'form']);
Route::get('/ytb', [SiteController::class, 'ytb']);
