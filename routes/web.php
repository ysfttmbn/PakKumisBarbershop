<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::resource('auth', AuthController::class);
Route::get('login', function () {
    return view('pages.login.index');
});
Route::get('register', function () {
    return view('pages.register.index');
});
Route::get('/', function () {
    return view('pages.beranda.index');
});
Route::get('layanan', function () {
    return view('pages.layanan.index');
});
Route::get('tambah-layanan', function () {
    return view('pages.layanan.tambah-layanan');
});
Route::get('produk', function () {
    return view('pages.produk.index');
});
Route::get('produk-detail', function () {
    return view('pages.produk.produk');
});
Route::get('tambah-produk', function () {
    return view('pages.produk.create');
});
Route::get('tabel-produk', function () {
    return view('pages.produk.table');
});
Route::get('form-janji-temu', function () {
    return view('pages.janji.index');
});
Route::get('data-janji', function () {
    return view('pages.janji.table');
});
Route::get('kupon', function () {
    return view('pages.coupon.index');
});
Route::get('tambah-kupon', function () {
    return view('pages.coupon.create');
});

