@extends('layout.main')
<title>Gallery</title>
@section('content')
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Gallery
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Galleri Kegiatan</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Galleri Kegiatan Pelatihan Guru Penggerak</h4>
                        <button type="button" class="btn btn-rounded btn-success mb-2" data-bs-toggle="modal" data-bs-target="#basicModal"><span class="btn-icon-start text-success"><i class="fa fa-upload color-success"></i></span>Upload Image</button>
                    </div>
                    @include('_component.message')
                    <div class="card-body pb-1">
                        <div id="lightgallery" class="row">
                            @foreach ($data as $dt)
                            <a href="{{ asset('assets/img/'. $dt->foto) }}" data-exthumbimage="" data-src="" class="col-lg-3 col-md-6 mb-4">
                                <img src="{{ asset('assets/img/'. $dt->foto) }}" alt="" style="width:100%;">
                                <form action="{{ route('gallery.destroy', $dt->id) }}" method="post" onsubmit="return confirm('Apakah adna yakin akan mengahpus foto ini')" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </a>
                            @endforeach
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>

@include('gallery.create')
@endsection