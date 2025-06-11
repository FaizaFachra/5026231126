@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Heading dan Tombol Tambah --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Sepeda</h3>
        <a href="{{ route('speda.create') }}" class="btn btn-success">+ Tambah Sepeda</a>
    </div>

    {{-- Form Search --}}
    <form action="{{ route('speda.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari merk sepeda..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    {{-- Notifikasi --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel Data --}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Merk Sepeda</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat (kg)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $i => $item)
                    <tr>
                        <td>{{ $data->firstItem() + $i }}</td>
                        <td>{{ $item->merksepeda }}</td>
                        <td>Rp {{ number_format($item->hargasepeda, 0, ',', '.') }}</td>
                        <td>
                            @if ($item->tersedia)
                                <span class="badge bg-success">Ya</span>
                            @else
                                <span class="badge bg-danger">Tidak</span>
                            @endif
                        </td>
                        <td>{{ $item->berat }}</td>
                        <td>
                            <a href="{{ route('speda.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('speda.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data sepeda.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $data->withQueryString()->links() }}
    </div>
</div>
@endsection
