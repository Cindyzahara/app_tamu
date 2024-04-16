
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
                        <div class="col-xl-13">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Postingan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" action="/dashboard">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control input-default @error('title') is-invalid @enderror"  placeholder="input-default" id="title" name="title" required autofocus value="{{ old('title') }}">
                                                @error('title')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Body</label>
                                                @error('body')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                                <trix-editor input="body"></trix-editor>
                                            </div>
                                        <div  class="d-flex my-auto btn-list justify-content-end">
                                            <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i></span> Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


<script>
    document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
    })
</script>
@endsection





{{-- @extends('layout.main')

@section('content')

<div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Style</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control input-default " placeholder="input-default">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" placeholder="input-rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection --}}