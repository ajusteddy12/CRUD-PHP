@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> Detail Data Dosen</h3><hr>

<div class="row">
<div class="form-horizontal">

{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<div class="form-group">
<label class="col-sm-2">Nidn</label>

<div class="col">
<p>{{ $dosen->nidn }}</p>

</div>
</div>
<div class="form-group">
<label class="col-sm-2">Nama</label>

<div class="col">
<p>{{ $dosen->nama }}</p>

</div>
</div>
<div class="form-group">
<label class=" col-sm-2">Jabatan</label>

<div class="col">
<p>{{ $dosen->jabatan}}</p>
</div>
</div>
<div class="form-group">
<label class=" col">No Telepon</label>

<div class="col">
<p>{{ $dosen->no }}</p>

</div>
</div>
<div class="form-group">
<label class="col-sm-2">Email</label>

<div class="col">
<p>{{ $dosen->email }}</p>

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

<a href="{{ route('dosen.index') }}"class="btn btn-warning">Data Dosen</a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection