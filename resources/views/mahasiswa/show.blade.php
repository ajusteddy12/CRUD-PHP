@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> Detail Data Mahasiswa</h3><hr>

<div class="row">
<div class="form-horizontal">

{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<div class="form-group">
<label class="col-sm-2">Nim</label>

<div class="col">
<p>{{ $mahasiswa->nim }}</p>

</div>
</div>
<div class="form-group">
<label class="col">Nama</label>

<div class="col">
<p>{{ $mahasiswa->nama }}</p>

</div>
</div>
<div class="form-group">
<label class=" col-sm-2">Prodi</label>

<div class="col">
<p>{{ $mahasiswa->prodi }}</p>
</div>
</div>
<div class="form-group">
<label class=" col-sm-2">Alamat</label>

<div class="col">
<p>{{ $mahasiswa->alamat }}</p>

</div>
</div>
<div class="form-group">
<label class="col">Tempat Lahir</label>

<div class="col">
<p>{{ $mahasiswa->tempat }}</p>

</div>
</div>
<div class="form-group">
<label class=" col">Tanggal Lahir</label>

<div class="col">
<p>{{ $mahasiswa->tanggal }}</p>

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

<a href="{{ route('mahasiswa.index') }}"class="btn btn-warning">Data Mahasiswa</a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection