@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> Tambah Data Dosen</h3><hr>

<div class="row">

<form class="form-horizontal" action="{{ route('dosen.store')

}}" method="post">

{{ csrf_field() }}
<div class="form-group">
<label class="control-label col-sm-2">Nidn</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="nidn">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Nama</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="nama">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Jabatan</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="jabatan">
</div>
</div>
<div class="form-group">
<label class="control-label col">No Telepon</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="no">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Email</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="email">

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

<button type="submit" class="btn btn-primary">Simpan</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection