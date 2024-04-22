@extends('layout.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">

        <div class="card mb-3">
            <img src="{{ asset('assets') }}/images/profil/2.png" style="width: 100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title" style="text-align: center">KELOMPOK PP-391</h1>
              <p class="card-text" style="text-align: center">CGP ANGKATAN 9</p>
              <p class="card-text" style="text-align: center"><small class="text-body-secondary">KABUPATEN SUBANG</small></p>
            </div>
          </div>

          <div class="card mb-3">
            <div class="card-body">
              <h1 class="card-title" style="text-align: center">MOTO</h1>
              {{-- <p class="card-text" style="text-align: center">CGP ANGKATAN 9</p> --}}
              <p class="card-text" style="text-align: center"><small class="text-body-secondary">.....</small></p>
            </div>
          </div>

    </div>
</div>    
@endsection