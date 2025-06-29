@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<table class="table table-striped align-middle">
		<thead class="table-light text-center">
			<tr>
				<th>Kode Pegawai</th>
				<th>Nama Lengkap</th>
				<th>Divisi</th>
				<th>Departemen</th>
				<th>Opsi</th>
			</tr>
		</thead>

		@foreach($karyawan as $k)
		<tr class="text-center">
			<td>{{ $k->kodepegawai }}</td>
			<td>{{ strtoupper($k->namalengkap) }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ strtolower($k->departemen) }}</td>
			<td>
				<a href="/karyawan2/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
        @endforeach
	</table>


   <a href="/karyawan2/tambah" class="btn btn-primary mb-3"> + Tambah Karyawan Baru</a>
{{  $karyawan->links()  }}
@endsection