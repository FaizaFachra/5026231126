<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    // Menampilkan data karyawan
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('karyawan.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kodepegawai' => 'required|unique:karyawans,kodepegawai|max:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|max:5',
            'departemen' => 'required|max:10',
        ]);

        Karyawan::create($validated);
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Menghapus data
    public function destroy($kodepegawai)
    {
        Karyawan::where('kodepegawai', $kodepegawai)->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus.');
    }
}
