@extends('layout.main')

@section('content')
<div class="container mt-3">
    <h3> DASHBOARD</h3><hr>

    <div class="row text-white">
      <div class="card bg-info ml-5" style="width: 18rem;">
     <div class="card-body">
      <h5 class="card-title" >JUMLAH MAHASISWA</h5>
      <div class="display-4">1.200</div>
      <a href="{{ ('mahasiswa') }}"><p class="card-text text-white">Lihat Detail</p></a>
    </div>
  </div>

  <div class="card bg-success ml-5" style="width: 18rem;">
     <div class="card-body">
      <h5 class="card-title">JUMLAH DOSEN</h5>
      <div class="display-4">100</div>
      <a href="{{ ('dosen') }}"><p class="card-text text-white">Lihat Detail</p></a>
    </div>
  </div>

  <div class="card bg-danger ml-5" style="width: 18rem;">
     <div class="card-body">
      <h5 class="card-title">JUMLAH STAFF</h5>
      <div class="display-4">50</div>
      <a href="{{ ('staff') }}"><p class="card-text text-white">Lihat Detail</p></a>
    </div>
  </div>

    </div>


  </div>
</div>
@endsection
