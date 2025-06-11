@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Edit Sepeda</h2>

    <form action="{{ route('speda.update', $speda->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="merksepeda" class="form-label">Merk Sepeda</label>
            <input type="text" name="merksepeda" class="form-control @error('merksepeda') is-invalid @enderror" value="{{ old('merksepeda', $speda->merksepeda) }}" required>
            @error('merksepeda')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="hargasepeda" class="form-label">Harga Sepeda</label>
            <input type="number" name="hargasepeda" class="form-control @error('hargasepeda') is-invalid @enderror" value="{{ old('hargasepeda', $speda->hargasepeda) }}" required>
            @error('hargasepeda')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg)</label>
            <input type="number" step="0.1" name="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat', $speda->berat) }}" required>
            @error('berat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="hidden" name="tersedia" value="0">
            <input type="checkbox" name="tersedia" class="form-check-input" value="1" {{ $speda->tersedia ? 'checked' : '' }}>
            <label class="form-check-label">Tersedia</label>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('speda.index') }}" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>
@endsection
