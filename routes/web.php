<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScoreController;
use App\Livewire\PilihArena;
use App\Livewire\HalamanOperator;
use App\Livewire\PapanSkorSolo1;
use App\Livewire\PapanSkorSolo2;
use App\Livewire\PapanSkorGanda1;
use App\Livewire\PenilaianDewanJuri;
use App\Livewire\PenilaianJuri;

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

Route::get('/pilih-arena', PilihArena::class)
    ->middleware(['auth'])
    ->name('pilih-arena');

Route::get('/papan-skor-solo1', PapanSkorSolo1::class)
    ->middleware(['auth'])
    ->name('papan-skor-solo1');

Route::get('/papan-skor-solo2', PapanSkorSolo2::class)
    ->middleware(['auth'])
    ->name('papan-skor-solo2');

Route::get('/papan-skor-ganda1', PapanSkorGanda1::class)
    ->middleware(['auth'])
    ->name('papan-skor-ganda1');

Route::get('/penilaian-dewan-juri', PenilaianDewanJuri::class)
    ->middleware(['auth'])
    ->name('penilaian-dewan-juri');

Route::get('/penilaian-juri', PenilaianJuri::class)
    ->middleware(['auth'])
    ->name('penilaian-juri');

require __DIR__.'/auth.php';
