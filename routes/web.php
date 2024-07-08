<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

Route::get('/', [ViewController::class, 'index']);

Route::get('/profile', [ViewController::class, 'profile']);
Route::get('/profile-detail-{id}', [ViewController::class, 'profileDetail']);

Route::get('/artikel', [ViewController::class, 'artikel']);
Route::get('/artikel-detail-{slug}', [ViewController::class, 'artikelDetail']);
Route::get('/category-{slug}', [ViewController::class, 'categories']);

Route::get('/galeri', [ViewController::class, 'galeri']);
Route::get('/video', [ViewController::class, 'video']);

Route::get('/berita', [ViewController::class, 'berita']);
Route::get('/berita-detail', [ViewController::class, 'beritaDetail']);

Route::get('/kontak', [ViewController::class, 'kontak']);
