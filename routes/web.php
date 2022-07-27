<?php


use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/save', [BukuController::class, 'save']);
Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
Route::post('/buku/{id}', [BukuController::class, 'update']);
Route::post('/buku/{id}', [BukuController::class, 'destroy']);
