<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PageController;

Route::get('/profil', [PageController::class, 'profil']);
Route::get('/kontak', [PageController::class, 'kontak']);