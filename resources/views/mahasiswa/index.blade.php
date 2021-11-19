@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3>Mahasiswa</h3><hr>

<div class="row ml-1">

<a href=" {{ route('mahasiswa.create') }}" class="btn 
btn-primary">Tambah Mahasiswa</a>


<table class="table table-striped">
<thead>
<tr>
<th>No</th>
<th>Nim</th>
<th>Nama</th>
<th>Prodi</th>
<th>Alamat</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Dibuat Pada</th>
<th>Diedit Pada</th>
<th colspan="3" style="text-align:

center;">Aksi</th>

</tr>
</thead>
<tbody>
@foreach ($mahasiswa as $i => $m)
<tr>
<td>{{ $i+1 }}</td>
<td>{{ $m->nim }}</td>
<td>{{ $m->nama }}</td>

<td>{{ $m->prodi }}</td>
<td>{{ $m->alamat }}</td>
<td>{{ $m->tempat }}</td>
<td>{{ $m->tanggal }}</td>
<td>{{ $m->created_at }}</td>
<td>{{ $m->updated_at }}</td>
<td><a href=" {{

route('mahasiswa.show',$m->id) }} " class="btn btn-warning"> Detail</a></td>

<td><a class="btn btn-success"

href="{{ route('mahasiswa.edit',$m->id) }}"> Edit</a></td>
<td>
<form method="post"

action="{{ route('mahasiswa.destroy',$m->id) }} ">

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