<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newkaryawan;

class NewkaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Newkaryawan::all();
        return view('newkaryawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('newkaryawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIP' => 'required|unique:newkaryawan,NIP|max:9',
            'nama' => 'required|max:50',
            'pangkat' => 'required|max:15',
            'gaji' => 'required|integer',
        ]);

        Newkaryawan::create($request->all());
        return redirect()->route('newkaryawan.index');
    }

    public function destroy($id)
    {
        Newkaryawan::where('NIP', $id)->delete();
        return redirect()->route('newkaryawan.index');
    }
}
