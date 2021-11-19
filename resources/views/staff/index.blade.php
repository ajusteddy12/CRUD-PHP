@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3>Staff</h3><hr>

<div class="row ml-1">

<a href=" {{ route('staff.create') }}" class="btn 
btn-primary">Tambah Staff</a>


<table class="table table-striped">
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Bidang</th>
<th>No Telepon</th>
<th>Email</th>
<th>Dibuat Pada</th>
<th>Diedit Pada</th>
<th colspan="3" style="text-align:

center;">Aksi</th>

</tr>
</thead>
<tbody>
@foreach ($staff as $i => $s)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $s->nama }}</td>
<td>{{ $s->bidang }}</td>
<td>{{ $s->no }}</td>
<td>{{ $s->email }}</td>
<td>{{ $s->created_at }}</td>
<td>{{ $s->updated_at }}</td>
<td><a href=" {{

route('staff.show',$s->id) }} " class="btn btn-warning"> Detail</a></td>

<td><a class="btn btn-success"

href="{{ route('staff.edit',$s->id) }}"> Edit</a></td>
<td>
<form method="post"

action="{{ route('staff.destroy',$s->id) }} ">

{{ csrf_field() }}
<input

type="hidden" name="_method" value="DELETE">

<button class="btn

btn-danger" type="submit">Hapus</button>

</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection