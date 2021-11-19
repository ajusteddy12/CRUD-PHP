@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> Tambah Data Staff</h3><hr>

<div class="row">

<form class="form-horizontal" action="{{ route('staff.store')

}}" method="post">

{{ csrf_field() }}
<div class="form-group">
<label class="control-label col-sm-2">Nama</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="nama">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Bidang</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="bidang">
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