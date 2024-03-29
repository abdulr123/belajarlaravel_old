<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/buku/create', [BukuController::class, 'create']);
    Route::post('/buku/save', [BukuController::class, 'save']);
    Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
    Route::put('/buku/{id}', [BukuController::class, 'update']);
    Route::post('/buku/{id}', [BukuController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
