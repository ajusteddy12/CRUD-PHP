@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3>Dosen</h3><hr>

<div class="row ml-1">

<a href=" {{ route('dosen.create') }}" class="btn 
btn-primary">Tambah Dosen</a>


<table class="table table-striped">
<thead>
<tr>
<th>No</th>
<th>Nidn</th>
<th>Nama</th>
<th>Jabatan</th>
<th>No Telepon</th>
<th>Email</th>
<th>Dibuat Pada</th>
<th>Diedit Pada</th>
<th colspan="3" style="text-align:

center;">Aksi</th>

</tr>
</thead>
<tbody>
@foreach ($dosen as $i => $d)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $d->nidn }}</td>
<td>{{ $d->nama }}</td>

<td>{{ $d->jabatan }}</td>
<td>{{ $d->no }}</td>
<td>{{ $d->email }}</td>
<td>{{ $d->created_at }}</td>
<td>{{ $d->updated_at }}</td>
<td><a href=" {{

route('dosen.show',$d->id) }} " class="btn btn-warning"> Detail</a></td>

<td><a class="btn btn-success"

href="{{ route('dosen.edit',$d->id) }}"> Edit</a></td>
<td>
<form method="post"

action="{{ route('dosen.destroy',$d->id) }} ">

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