<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speda;

class SpedaController extends Controller
{
    // Tampilkan daftar sepeda dengan pencarian dan pagination
    public function index(Request $request)
{
    $search = $request->input('search');

    $data = Speda::when($search, function ($query, $search) {
        return $query->where('merksepeda', 'like', "%{$search}%");
    })->paginate(5); // <-- penting: gunakan paginate

    return view('speda.index', compact('data', 'search'));
}


    // Tampilkan form input sepeda
    public function create()
    {
        return view('speda.create');
    }

    // Simpan data sepeda baru
    public function store(Request $request)
{
    $validated = $request->validate([
        'merksepeda' => 'required|string|max:100',
        'hargasepeda' => 'required|numeric|min:1000',
        'berat' => 'required|numeric|min:1',
        'tersedia' => 'required|boolean',
    ]);

    Speda::create($validated);

    return redirect()->route('speda.index')->with('success', 'Data sepeda berhasil ditambahkan!');
}
    // Tampilkan form edit sepeda
    public function edit($id)
    {
        $speda = Speda::findOrFail($id);
        return view('speda.edit', compact('speda'));
    }

    // Simpan perubahan data sepeda
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'merksepeda' => 'required|string|max:100',
        'hargasepeda' => 'required|numeric|min:1000',
        'berat' => 'required|numeric|min:1',
        'tersedia' => 'required|boolean',
    ]);

    $speda = Speda::findOrFail($id);
    $speda->update($validated);

    return redirect()->route('speda.index')->with('success', 'Data sepeda berhasil diperbarui!');
}
    // Hapus data sepeda
    public function destroy($id)
    {
        $speda = Speda::findOrFail($id);
        $speda->delete();

        return redirect()->route('speda.index')->with('success', 'Data sepeda berhasil dihapus.');
    }

    
}

