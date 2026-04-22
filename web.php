<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Show the form page
Route::get('/test', [PostController::class, 'create']);

// Handle form submission
Route::post('/send', [PostController::class, 'store']);
