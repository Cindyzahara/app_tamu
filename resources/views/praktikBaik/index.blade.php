@extends('layout.main')

@section('content')

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Data Tugas CGP
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Tugas CGP</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Praktik Baik</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h5 class="card-title">SOLEHUDIN</h5> 
                    </div>
                    <div class="card-header border-0 pb-0">
                    <h5 class="card-title">Program : KAMSIHAT</h5>
                </div>
                    {{-- <div class="card-body">
                        <p class="card-text"><a href="https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link" style="color: blue">https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link</a>
                        </p>
                    </div> --}}
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#r1" title="Klik untuk melihat Link Praktik Baik">Link Tugas</button>
                      </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h5 class="card-title">DIKA AHMAD FADILAH</h5> 
                    </div>
                    <div class="card-header border-0 pb-0">
                    <h5 class="card-title">Program : BERTAPA (Berani Tampil Aktif)</h5>
                </div>
                    {{-- <div class="card-body">
                        <p class="card-text"><a href="https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link" style="color: blue">https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link</a>
                        </p>
                    </div> --}}
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#r2" title="Klik untuk melihat Link Praktik Baik">Link Tugas</button>
                        @include('praktikBaik.modal2')
                      </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h5 class="card-title">AI SUMIATI</h5> 
                    </div>
                    <div class="card-header border-0 pb-0">
                    <h5 class="card-title">Program : Religious Culture</h5>
                </div>
                    {{-- <div class="card-body">
                        <p class="card-text"><a href="https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link" style="color: blue">https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link</a>
                        </p>
                    </div> --}}
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#r3" title="Klik untuk melihat Link Praktik Baik">Link Tugas</button>
                        @include('praktikBaik.modal3')
                      </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h5 class="card-title">NUR KHOT AZIZAH</h5> 
                    </div>
                    <div class="card-header border-0 pb-0">
                    <h5 class="card-title">Program : Satu Jam Membaca di Luar Kelas</h5>
                </div>
                    {{-- <div class="card-body">
                        <p class="card-text"><a href="https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link" style="color: blue">https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link</a>
                        </p>
                    </div> --}}
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#r4" title="Klik untuk melihat Link Praktik Baik">Link Tugas</button>
                        @include('praktikBaik.modal4')
                      </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h5 class="card-title">IMAS ROHAYATI</h5> 
                    </div>
                    <div class="card-header border-0 pb-0">
                    <h5 class="card-title">IT EXCELERATE</h5>
                </div>
                    {{-- <div class="card-body">
                        <p class="card-text"><a href="https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link" style="color: blue">https://drive.google.com/file/d/1iPbDGjZVUPR0rRCygEXJiqPOkqxjeKxc/view?usp=drive_link</a>
                        </p>
                    </div> --}}
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#r5" title="Klik untuk melihat Link Praktik Baik">Link Tugas</button>
                        @include('praktikBaik.modal5')
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('praktikBaik.modal1')
@endsection