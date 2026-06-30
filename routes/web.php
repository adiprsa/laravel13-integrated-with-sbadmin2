<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', [DashboardController::class, 'index']);
Route::resource('posts', PostController::class);