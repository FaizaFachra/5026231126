@extends('template')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Sepeda</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('speda.create') }}" class="btn btn-primary mb-3">Tambah Sepeda</a>

    <form method="GET" action="{{ route('speda.index') }}" class="form-inline mb-3">
        <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control mr-2" placeholder="Cari merk sepeda...">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Merk</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($spedas as $speda)
            <tr>
                <td>{{ $speda->merksepeda }}</td>
                <td>{{ number_format($speda->hargasepeda) }}</td>
                <td>{{ $speda->berat }} kg</td>
                <td>{{ $speda->tersedia ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="{{ route('speda.edit', $speda->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('speda.destroy', $speda->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $spedas->withQueryString()->links() }}
</div>
@endsection
