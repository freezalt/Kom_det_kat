<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('kat')->group(function () {
    Route::get('/', [KatController::class, 'index'])->name('kat.index');
    Route::get('/kat/create', [KatController::class, 'create'])->middleware('auth')->name('kat.create');
    Route::post('/kat', [KatController::class, 'store'])->middleware('auth')->name('kat.store');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
