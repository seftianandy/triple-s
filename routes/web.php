<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScoreController;
use App\Livewire\PilihArena;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/pilih-arena', PilihArena::class)
    ->middleware(['auth'])
    ->name('pilih-arena');


require __DIR__.'/auth.php';
