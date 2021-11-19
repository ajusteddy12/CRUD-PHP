<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\homecontroller::class, 'index'])->name('home');

use App\Http\Controllers\mahasiswacontroller;
Route::resource('mahasiswa',mahasiswacontroller::class);

use App\Http\Controllers\dosencontroller;
Route::resource('dosen',dosencontroller::class);

use App\Http\Controllers\staffcontroller;
Route::resource('staff',staffcontroller::class);
