<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController2 extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        // Mengambil data karyawan dengan pagination
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('karyawan2/indexkaryawan', ['karyawan' => $karyawan]);
    }

    // Menampilkan halaman form untuk menambah karyawan baru
    public function tambah()
    {
        return view('karyawan2/tambahkaryawan');
    }

    // Menyimpan data karyawan baru ke database
    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/karyawan2');
    }

    // Menghapus data karyawan berdasarkan kodepegawai
    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan2');
    }

    // Menangani pencarian data karyawan
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate();
        return view('karyawan.index', ['karyawan' => $karyawan, 'cari' => $cari]);
    }
}