@extends('template')

@section('content')
<h4>Tambah Data New karyawan</h4>

<form action="{{ route('newkaryawan.store') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">NIP</label>
        <div class="col-sm-10">
            <input type="text" name="NIP" class="form-control" maxlength="9" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" maxlength="50" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pangkat</label>
        <div class="col-sm-10">
            <input type="text" name="pangkat" class="form-control" maxlength="15" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Gaji</label>
        <div class="col-sm-10">
            <input type="number" name="gaji" class="form-control" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
