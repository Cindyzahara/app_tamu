@extends('layout.main')

@section('content')
<div class="header">
  <div class="header-content">
      <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                  <div class="dashboard_bar" style="text-align: center">
                      Profile
                  </div>
              </div>
          </div>
      </nav>
  </div>
</div>
<div class="content-body">
    <div class="container-fluid">
        <div class="card mb-3">
            <img src="{{ asset('assets') }}/images/profil/pp.jpg" style="width: 80%; display:block; margin:0 auto" class="card-img-top mt-4" alt="...">
            <div class="card-body">
              <h1 class="card-title" style="text-align: center"><b>KELOMPOK PP-398</b></h1>
              <h4 class="card-text" style="text-align: center"><b> CGP ANGKATAN 9</b></h4>
              <h4 class="card-text" style="text-align: center"><small class="text-body-secondary"><b>KABUPATEN SUBANG</b></small></h4>
            </div>
          </div>
          <div class="row">
            @foreach ($profil as $p)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile</h4>
                    </div>
                        <img src="{{ asset('assets/images/gambar/' . $p->image) }}" alt="Card image cap">
                            <div class="card-body">
                              <table style="font-size: 15px;color:black">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $p->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Sekolah</td>
                                    <td>:</td>
                                    <td>{{ $p->sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Motto</td>
                                    <td>:</td>
                                    <td>{{ $p->motto }}</td>
                                </tr>
                                <tr>
                                    <td>Program</td>
                                    <td>:</td>
                                    <td> {{ $p->program }}</td>
                                </tr>
                              </table>
                            </div>
                            <div class="card-footer">
                              <button type="button" class="btn btn-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="{{ $p->link }}">Link</button>
                            </div>
                      </div>
                </div>
                

                @endforeach
                @include('profil.modal2')
                
            </div>
            @include('profil.modal3')
            
        </div>
        @include('profil.modal4')
          {{-- <div class="col-md-4">

        <div class="row">
          <div class="col-xl-3">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Profil</h4>
                </div>
                <img class="card-img-top img-fluid" src="{{ asset('assets') }}/images/profil/1org.jpg" alt="Card image cap">
                <div class="card-body">
                  <table style="font-size: 15px;color:black">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>SOLEHUDIN</td>
                    </tr>
                    <tr>
                        <td>Sekolah</td>
                        <td>:</td>
                        <td>SMPN 3 Kalijati</td>
                    </tr>
                    <tr>
                        <td>Motto</td>
                        <td>:</td>
                        <td>Khoirunnas Anfa'uhum Linnas</td>
                    </tr>
                    <tr>
                        <td>Program</td>
                        <td>:</td>
                        <td>KAMSIHAT</td>
                    </tr>
                  </table>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Link</button>
                </div>
            </div>

        </div> --}}

        </div>
      </div>


          {{-- <div class="card mb-3">
            <div class="card-body">
              <h1 class="card-title" style="text-align: center">MOTO</h1>
              <p class="card-text" style="text-align: center">CGP ANGKATAN 9</p>
              <p class="card-text" style="text-align: center"><small class="text-body-secondary">.....</small></p>
            </div>
          </div> --}}

    </div>

    @include('profil.modal5') 
</div> 
@include('profil.modal1') 
  
</div>  

@endsection