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

    Route::get('/kat/createTipas', [KatController::class, 'createTipas'])->middleware('auth')->name('kat.createTipas');
    Route::post('/kat/storeTipas', [KatController::class, 'storeTipas'])->middleware('auth')->name('kat.storeTipas');

    Route::get('/kat/createKateg', [KatController::class, 'createKateg'])->middleware('auth')->name('kat.createKateg');
    Route::post('/kat/storeKateg', [KatController::class, 'storeKateg'])->middleware('auth')->name('kat.storeKateg');
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
