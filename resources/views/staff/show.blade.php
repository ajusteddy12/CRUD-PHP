@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> Detail Data Staff</h3><hr>

<div class="row">
<div class="form-horizontal">

{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<div class="form-group">
<label class="col-sm-2">Nama</label>

<div class="col">
<p>{{ $staff->nama }}</p>

</div>
</div>
<div class="form-group">
<label class=" col-sm-2">Bidang</label>

<div class="col">
<p>{{ $staff->bidang}}</p>
</div>
</div>
<div class="form-group">
<label class=" col">No Telepon</label>

<div class="col">
<p>{{ $staff->no }}</p>

</div>
</div>
<div class="form-group">
<label class="col-sm-2">Email</label>

<div class="col">
<p>{{ $staff->email }}</p>

</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

<a href="{{ route('staff.index') }}"class="btn btn-warning">Data Staff</a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection