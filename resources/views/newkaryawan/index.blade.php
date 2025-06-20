@extends('template')

@section('content')
<h4 class="mb-4">New karyawan</h4>

<a href="{{ route('newkaryawan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $item)
        <tr>
            <td>{{ $item->NIP }}</td>
            <td>{{ strtoupper($item->nama) }}</td>
            <td>{{ $item->pangkat }}</td>
            <td>{{ number_format($item->gaji, 0, ',', '.') }}</td>
            <td>
                <form action="{{ route('newkaryawan.destroy', $item->NIP) }}" method="POST" onsubmit="return confirm('Hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
