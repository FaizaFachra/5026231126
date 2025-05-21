<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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
    return view('frontend');
});


Route::get('/flex', function () {
    return view('flex');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/indexdanantara', function () {
    return view('indexdanantara');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/descendantselector', function () {
    return view('descendantselector');
});

Route::get('/pertama', function () {
    return view('pertama');
});

Route::get('/PERTEMUAN4', function () {
    return view('PERTEMUAN4'); // jika nama file-nya "PERTEMUAN 4.html" dan sudah diubah jadi PERTEMUAN4.blade.php
});

Route::get('/Sibling', function () {
    return view('Sibling');
});

Route::get('/TugasLinktree', function () {
    return view('TugasLinktree'); 
});

Route::get('/dosen', [Link::class,'index']);
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);



