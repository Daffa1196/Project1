<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\CampaignController;

/*
|--------------------------------------------------------------------------
| Artisan Commands
|--------------------------------------------------------------------------
*/
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


/*
|--------------------------------------------------------------------------
| Web Routes - DONASIKU
|--------------------------------------------------------------------------
*/

// Halaman Utama / Landing Page
Route::get('/', function () {
    return view('home');
});

// Halaman Statis
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/kontak', function () {
    return view('kontak');
});

// Fitur Tambahan Donasi (Manual)
Route::get('/campaign/{id}/donate', [CampaignController::class, 'donate']);
Route::post('/campaign/{id}/donate', [CampaignController::class, 'processDonate']);

// Fitur Utama CRUD Campaign (Menggunakan Resource)
Route::resource('campaign', CampaignController::class);