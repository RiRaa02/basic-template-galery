<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\KomentarFotoController;
use App\Http\Controllers\LikeFotoController;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Album;
use App\Models\Foto;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class,'login'])->name('login');
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::resource('/index', \App\Http\Controllers\HomeController::class);

Route::resource('/users', \App\Http\Controllers\UserController::class);

Route::resource('/albums', \App\Http\Controllers\AlbumController::class);
Route::get('/albums/create', [AlbumController::class, 'create'])->name('albums.create')->middleware('auth');
Route::post('/albums/store', [AlbumController::class, 'store'])->middleware('auth');

Route::resource('/fotos', \App\Http\Controllers\FotoController::class);

Route::resource('/komentarfoto', \App\Http\Controllers\KomentarFotoController::class);
Route::get('komentarfoto/{komentarfoto}', [KomentarFotoController::class, 'show'])->name('komentarfoto.show');

Route::resource('/like_fotos', \App\Http\Controllers\LikeFotoController::class);

Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/albums.pdf', function () {
    $albums = Album::all(); // Ambil semua data
    
    $pdf = Pdf::loadView('albums.pdf', compact('albums'));
    return $pdf->download('albums-data.pdf');
})->name('albums.pdf');

Route::get('/fotos.pdf', function () {
    $fotos = Foto::all(); // Ambil semua data
    
    $pdf = Pdf::loadView('fotos.pdf', compact('fotos'));
    return $pdf->download('fotos-data.pdf');
})->name('fotos.pdf');