<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\KategoriController;

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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard.kategori');
});

Route::get('/peminjaman', function () {
    return view('peminjaman');
});
// Route::get('/kategori/{id}',[KategoriController::class, 'edit'] );

Route::get('/koleksi', function (){
    return view('koleksi');
});

Route::get('/edit', function (){
    return view('edit.edit-kategori');
});

Route::get('/buku', function () {
    return view('buku');
});

Route::resource('kategori', KategoriController::class);

Route::controller(LoginRegisterController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    
});
