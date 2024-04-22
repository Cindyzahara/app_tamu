@extends('layout.main')

@section('content')

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Video Perjalanan CGP
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
    {{-- @foreach ($data as $row) --}}
    <div class="content-body">
        <div class="container-fluid">
            <video width="100%" controls>
                <source src="{{ asset('upload/'. $data->video) }}" type="video/mp4">
            </video>
        </div>
    </div>
    {{-- @endforeach --}}
@endsection     