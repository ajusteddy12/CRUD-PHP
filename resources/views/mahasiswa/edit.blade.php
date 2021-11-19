@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> Edit Data Mahasiswa</h3><hr>

<div class="row">

<form class="form-horizontal" action="{{ route('mahasiswa.update',$mahasiswa->id)}}" method="post">

{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<div class="form-group">
<label class="control-label col-sm-2">Nim</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="nim" value="{{ $mahasiswa->nim }}">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Nama</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="nama" value="{{ $mahasiswa->nama }}">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Prodi</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="prodi" value="{{ $mahasiswa->prodi }}">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Alamat</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="alamat" value="{{ $mahasiswa->alamat }}">

</div>
</div>
<div class="form-group">
<label class="control-label col">Tempat Lahir</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="tempat" value="{{ $mahasiswa->tempat }}">

</div>
</div>
<div class="form-group">
<label class="control-label col">Tanggal Lahir</label>

<div class="col-sm-10">
<input type="date" class="form-control"

name="tanggal" value="{{ $mahasiswa->tanggal }}">

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

<button type="submit" class="btn btn-primary">Perbarui Data</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection