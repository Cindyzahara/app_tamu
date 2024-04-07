@extends('layout.main')

@section('content')
       <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
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