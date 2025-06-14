<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\KatController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('kat')->group(function () {
    Route::get('/', [KatController::class, 'index'])->name('kat.index');
    Route::get('/kat/createkomp', [KatController::class, 'createkomp'])->middleware('auth')->name('kat.createkomp');
    Route::post('/kat/storekomp', [KatController::class, 'storekomp'])->middleware('auth')->name('kat.storekomp');

    Route::get('/kat/createBrand', [KatController::class, 'createBrand'])->middleware('auth')->name('kat.createBrand');
    Route::post('/kat/storeBrand', [KatController::class, 'storeBrand'])->middleware('auth')->name('kat.storeBrand');

    Route::get('/kat/createTipas', [KatController::class, 'createTipas'])->middleware('auth')->name('kat.createTipas');
    Route::post('/kat/storeTipas', [KatController::class, 'storeTipas'])->middleware('auth')->name('kat.storeTipas');

    Route::get('/kat/createKateg', [KatController::class, 'createKateg'])->middleware('auth')->name('kat.createKateg');
    Route::post('/kat/storeKateg', [KatController::class, 'storeKateg'])->middleware('auth')->name('kat.storeKateg');

    Route::get('/kat/createSandelys', [KatController::class, 'createSandelys'])->middleware('auth')->name('kat.createSandelys');
    Route::post('/kat/storeSandelys', [KatController::class, 'storeSandelys'])->middleware('auth')->name('kat.storeSandelys');

    Route::get('/kat/openSarasas', [KatController::class, 'openSarasas'])->middleware('auth')->name('kat.openSarasas');
    Route::get('/kat/createSarasas', [KatController::class, 'createSarasas'])->middleware('auth')->name('kat.createSarasas');
    Route::post('/kat/storeSarasas', [KatController::class, 'storeSarasas'])->middleware('auth')->name('kat.storeSarasas');
});

require __DIR__.'/auth.php';
