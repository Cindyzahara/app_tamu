@extends('layout.main')

@section('content')


<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row page-titles">
            <div  class="d-flex my-auto btn-list justify-content-end">
                <a href="/dashboard/create" class="btn btn-rounded btn-info"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i></span> Tambah</a>
            </div>
        </div>
        @if(session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
      </div>
      @endif
           <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/dashboard">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-info" type="submit">Search..</button>
                    </div>
                </form>
            </div>
           </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Postingan</h4>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form action="/dahboard" method="post">
                                    @method('delete')
                                    @csrf
                                    <a class="dropdown-item" onclick="return confirm('Are you sure?')">Delete</a>
                                </form>
                                <a href="/dashboard/edit" class="dropdown-item">Edit</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="card-body">
                        @foreach ($posts as $post)
                        <article class="mb-5 border-bottom pb-4">
                        <h1 class="mb-5">{{ $post->title }}</h1>
                        <h5>{!!  $post->body  !!}</h5>
                        </article>
                        @endforeach
                    </div> --}}
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Card image cap">
                    <article class="mb-4 pb-3">
                            <div class="card-header">
                                <h1 class="card-title">{{ $post->title }}</h1>
                            </div>
                            <div class="card-body">
                                <h5 class="card-text">{!! $post->body !!}
                                </h5>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
    </div>

@endsection


{{-- 
<div class="carousel-item">
    <img src="https://source.unsplash.com/1200x200/?nature.water" alt="Third slide">
</div>
    <div class="card-header border-0 pb-0">
        <h3 class="card-title">{{ $post->title }}</h3>
    </div>
    <div class="card-body">
        <p class="card-text">{!! $post->body !!}
        </p>
    </div>
    <div class="card-footer border-0 pt-0">
        <p class="card-text d-inline">{{ $post->created_at->diffForHumans() }}</p>
    </div> --}}