<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('kat')->group(function () {
    Route::get('/', [KatController::class, 'index'])->name('kat.index');
    Route::get('/kat/createkomp', [KatController::class, 'createkomp'])->middleware('auth')->name('kat.createkomp');
    Route::post('/kat/storekomp', [KatController::class, 'storekomp'])->middleware('auth')->name('kat.storekomp');
    Route::get('/kat/createBrand', [KatController::class, 'createBrand'])->middleware('auth')->name('kat.createBrand');
    Route::post('/kat/storeBrand', [KatController::class, 'storeBrand'])->middleware('auth')->name('kat.storeBrand');
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
