<?php

use App\Http\Controllers\NewkaryawanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SpedaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangController ;
use App\Http\Controllers\KaryawanController2; //ini importjuga
use App\Http\Controllers\Pegawai2Controller;



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
Route::get('/', function () { // internal controller atau inline controller ini boleh tanpa nama
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog'); // tidak ada garis bawah karena filenya tidak punya
});

Route::get('hello', [Link::class,'helloword'] );

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

Route::get('/newkaryawan', function () {
    return view('newkaryawan');
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

Route::get('/pegawai', function () {
    return view('pegawai'); 
});

Route::get('/speda', function () {
    return view('speda'); 
});

Route::get('/keranjangbelanja', function () {
    return view('keranjangbelanja'); 
});

Route::get('/karyawan2', function () {
    return view('karyawan2'); 
});

Route::get('/karyawan', function () {
    return view('karyawan'); 
});

Route::get('/dosen', [Link::class,'index']);
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah'] );
Route::post('/pegawai/store', [PegawaiController::class,'store'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit'] );
Route::post('/pegawai/update', [PegawaiController::class,'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'hapus'] );
Route::get('/pegawai/cari', [PegawaiController::class,'cari'] );

Route::get('/speda/create', [SpedaController::class, 'create']);
Route::post('/speda/store', [SpedaController::class, 'store'])->name('speda.store');
Route::get('/speda', [SpedaController::class, 'index'])->name('speda.index');
Route::resource('speda', SpedaController::class);
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/{kodepegawai}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{kodepegawai}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{kodepegawai}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
Route::get('/keranjangbelanja', [KeranjangController::class,'index'] );
Route::get('/keranjangbelanja/tambah', [KeranjangController::class,'tambah'] );
Route::post('/keranjangbelanja/beli', [KeranjangController::class,'store'] );
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangController::class,'hapus'] );
//CRUD Karyawan
Route::get('/karyawan2', [KaryawanController2::class, 'index']);
Route::get('/karyawan2/tambah', [KaryawanController2::class,'tambah']);
Route::post('/karyawan2/store', [KaryawanController2::class,'store']);
Route::get('/karyawan2/hapus/{kodepegawai}', [KaryawanController2::class,'hapus']);
Route::get('/newkaryawan', [NewkaryawanController::class, 'index'])->name('newkaryawan.index');
Route::get('/newkaryawan/create', [NewkaryawanController::class, 'create'])->name('newkaryawan.create');
Route::post('/newkaryawan', [NewkaryawanController::class, 'store'])->name('newkaryawan.store');
Route::delete('/newkaryawan/{id}', [NewkaryawanController::class, 'destroy'])->name('newkaryawan.destroy');
