<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use GuzzleHttp\Middleware;
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
    return view('index', [
        'title' => 'Home'
    ]);
})->middleware('auth');

//route untuk masuk di Login controller pada function index untuk menampilkan view login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

//route untuk masuk di loginController pada function cekLogin untuk proses loginnya
Route::post('/login', [LoginController::class, 'cekLogin']);

//route untuk masuk di LoginController pada function logout
Route::delete('/logout', [LoginController::class, 'logout'])->middleware('auth');

//route untuk masuk di Registrasi controller pada function index untuk menampilkan view registrasi
Route::get('/registrasi', [RegistrasiController::class, 'index'])->middleware('guest');

//route untuk masuk di registrasicontroller pada function registrasi untuk menambahkan data registrasi
Route::post('/registrasi', [RegistrasiController::class, 'registrasi']);




