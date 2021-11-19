@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> Edit Data Staff</h3><hr>

<div class="row">

<form class="form-horizontal" action="{{ route('staff.update',$staff->id)}}" method="post">

{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<div class="form-group">
<label class="control-label col-sm-2">Nama</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="nama" value="{{ $staff->nama }}">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Bidang</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="bidang" value="{{ $staff->bidang }}">
</div>
</div>
<div class="form-group">
<label class="control-label col">No Telepon</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="no" value="{{ $staff->no }}">

</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2">Email</label>

<div class="col-sm-10">
<input type="text" class="form-control"

name="email" value="{{ $staff->email }}">

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