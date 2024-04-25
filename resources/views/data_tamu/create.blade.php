@extends('layout.main')
<title>Form Input Data</title>
@section('content')
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Form Input List Tamu
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('data_tamu.index') }}">List Tamu</a></li>
                <li class="breadcrumb-item"><a href="{{ route('data_tamu.create') }}">Input Data</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Input List Tamu</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-validation">
                            <form action="{{ route('data_tamu.store') }}" method="post" class="needs-validation" novalidate="">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Nama
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="validationCustom01" name="nama" placeholder="Enter a name.." required="" >
                                                <div class="invalid-feedback">
                                                    Isi Kolom Nama.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom02">Jenis Kelamin
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control @error('jk') is-invalid @enderror" name="jk" id="validationCustom05">
                                                    <option data-display="Select">--pilih--</option>
                                                    <option value="perempuan">Perempuan</option>
                                                    <option value="laki-laki">Laki-laki</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Pilih Jenis Kelamin.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom03">Tempat Lahir <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="validationCustom02" placeholder="Enter Your Tempat, Tanggal (DD-MM-YYYY).." required="">
                                                <div class="invalid-feedback">
                                                    Isi Tempat Lahir.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom04">Tanggal Lahir <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="validationCustom02" placeholder="Enter Your Tempat, Tanggal (DD-MM-YYYY).." required="">
                                                <div class="invalid-feedback">
                                                    Isi Tanggal lahir.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom05">Jabatan
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control @error('jabatan') is-invalid @enderror" name="jabatan" id="validationCustom05">
                                                    <option data-display="Select">--pilih--</option>
                                                    <option value="pp">PP</option>
                                                    <option value="cgp">CGP</option>
                                                    <option value="fasilitator">Fasilitator</option>
                                                    <option value="bbgp">BBGP</option>
                                                    <option value="disdik">DISDIK</option>
                                                    <option value="pengunjung">Pengunjung</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom06">Angakatan
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select wide form-control @error('angkatan') is-invalid @enderror" name="angkatan" id="validationCustom05">
                                                    <option data-display="Select">--PILIH--</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a one.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom07">Alamat <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="validationCustom06" rows="5" placeholder="Masukan alamat anda.." required=""></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a Alamat.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom08">No Telepon
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="nummber" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" id="validationCustom07" placeholder="Enter Your No Telp.." required="">
                                                <div class="invalid-feedback">
                                                    No tlp max 13 .
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection