<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScoreController;

use App\Livewire\SettingPage;
use App\Livewire\UpdateApp;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/setting', SettingPage::class)->name('setting.index');
    Route::get('/setting/update-aplikasi', UpdateApp::class)->name('update.show');
});

require __DIR__.'/auth.php';
