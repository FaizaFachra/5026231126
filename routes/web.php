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


Route::get('/4', function () {
    return view('pertemuan.4');
});

Route::get('/flex', function () {
    return view('pertemuan.flex');
});

Route::get('/index', function () {
    return view('pertemuan.index');
});

Route::get('/js2', function () {
    return view('pertemuan.js2');
});

Route::get('/learn', function () {
    return view('pertemuan.learn');
});

Route::get('/new', function () {
    return view('pertemuan.new');
});

Route::get('/pertama', function () {
    return view('pertemuan.pertama');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan.PERTEMUAN4'); // jika nama file-nya "PERTEMUAN 4.html" dan sudah diubah jadi PERTEMUAN4.blade.php
});

Route::get('/sibling', function () {
    return view('pertemuan.Sibling');
});

Route::get('/tes', function () {
    return view('pertemuan.tes');
});

Route::get('/testing2', function () {
    return view('pertemuan.testing2');
});

Route::get('/tugaslinktree', function () {
    return view('pertemuan.TugasLinktree'); 
});



Route::get('/frontend', function () {
    return view('pertemuan.frontend');
});

