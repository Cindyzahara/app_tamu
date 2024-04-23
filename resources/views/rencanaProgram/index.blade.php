@extends('layout.main')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Tugas CGP</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Rencana Program</a></li>
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
                        <button type="button" class="btn btn-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#r1" title="Klik untuk melihat Link Rencana Program">Link</button>
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
                        <button type="button" class="btn btn-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#r2" title="Klik untuk melihat Link Rencana Program">Link</button>
                        @include('rencanaProgram.modal2')
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('rencanaProgram.modal1')
@endsection