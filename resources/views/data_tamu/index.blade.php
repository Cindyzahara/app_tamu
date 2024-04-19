@extends('layout.main')
<title>Form Data Tamu</title>
@section('content')
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Data Tamu
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Dahboard </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Data Tamu</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Data Tamu</h4>
                                @include('_component.message')
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table border-top-0 table-bordered border-bottom" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>TTL</th>
                                                <th>Jabatan</th>
                                                <th>CGP Angkatan</th>
                                                <th>Alamat</th>
                                                <th>No Tlp</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dttamu as $dt)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $dt->nama??'' }}</td>
                                                    <td>{{ $dt->jk??'' }}</td>
                                                    <td>{{ $dt->ttl??'' }}</td>
                                                    <td>{{ $dt->jabatan??'' }}</td>
                                                    <td>{{ $dt->angkatan??'' }}</td>
                                                    <td>{{ $dt->alamat??'' }}</td>
                                                    <td>{{ $dt->no_tlp??'' }}</td>
                                                    <td>
                                                        <a href="{{ route('data_tamu.edit', $dt->id) }}" class="btn btn-outline-warning btn-sm" title="edit"><i class="fa fa-edit"></i></a>
                                                        <form action="{{ route('data_tamu.destroy', $dt->id) }}" method="post" onsubmit="return confirm('Apakah adna yakin akan mengahpus data ini')" class="d-inline">
                                                            @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
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
        </div>
@endsection