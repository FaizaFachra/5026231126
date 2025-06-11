@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Judul dan Tombol Kembali --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Tambah Data Sepeda</h3>
        <a href="{{ route('speda.index') }}" class="btn btn-secondary">← Kembali</a>
    </div>

    {{-- Tampilkan pesan error --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Ada kesalahan saat input data:<br><br>
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Tambah Data --}}
    <form action="{{ route('speda.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="merksepeda" class="form-label">Merk Sepeda</label>
            <input type="text" name="merksepeda" class="form-control" id="merksepeda" value="{{ old('merksepeda') }}" required>
        </div>

        <div class="mb-3">
            <label for="hargasepeda" class="form-label">Harga Sepeda</label>
            <input type="number" name="hargasepeda" class="form-control" id="hargasepeda" value="{{ old('hargasepeda') }}" required>
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg)</label>
            <input type="number" step="0.1" name="berat" class="form-control" id="berat" value="{{ old('berat') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tersedia</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia1" value="1" {{ old('tersedia') == '1' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="tersedia1">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia0" value="0" {{ old('tersedia') == '0' ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia0">Tidak</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
