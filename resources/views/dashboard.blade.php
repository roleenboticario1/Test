@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('success'))
                <div class="alert alert-success fade-out">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
            @forelse($blogs as $blog)
            <div class="card mt-3">
                <div class="card-body">
                    <h3>{{ $blog->title }}</h3>
                    <p>{{ $blog->body }} <br />
                       Date : {{ $blog->updated_at }}
                    </p>
                </div>
                <div class="card-footer background-colorffffff pt-3 pb-3">
                  <a class="btn background-colorc62828 text-white border-radius0-1rem btn-sm padding-left-percent3 padding-right-percent3" href="{{ url('delete',$blog->id) }}">DELETE</a>
                  <a class="btn ml-1 border-radius0-1rem text-white btn-sm padding-left-percent3 padding-right-percent3 background-color2e7d32" href="{{ url('edit',$blog->id) }}">EDIT</a>  
                </div>
            </div>
            @empty
            <div class="card mt-3">
                <div class="card-body">
                    <h2 class="text-center">No Records Found</h2>
                </div>
                <div class="card-footer background-colorffffff pt-3 pb-3">
                </div>
            </div>
            @endforelse
            <div class="card mt-4">
                <div class="card-body">
                    <a class="btn background-color2196f3 text-white border-radius0-1rem btn-sm padding-left-percent3 padding-right-percent3" href="{{ url('create') }}">CREATE NEW POST</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
