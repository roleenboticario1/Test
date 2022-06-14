@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-2">
            @if ($errors->any())
                <div class="alert alert-danger fade-out">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           <h2>Create a Post!</h2>
           <form action="{{ url('store') }}" method="POST">
            @csrf
           <div class="form-group mt-4">
            <input type="text" class="form-control padding0 transition-none background-color-transparent border1-solid-none border-buttom-color9e9e9e border-radius-none" name="title" placeholder="Enter Title">
           <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
           </div>
           <div class="form-group mt-4">
            <textarea class="form-control padding0 transition-none background-color-transparent border1-solid-none border-buttom-color9e9e9e border-radius-none" name="body" placeholder="Enter Content" rows="3" style="resize: none"></textarea>
           </div>
           <div class="form-group mt-4">
           <button type="submit" class="btn btn background-color26a69a text-white border-radius0-1rem btn-sm padding-left-percent3 padding-right-percent3">POST</button>
           </div>
           </form>
        </div>
    </div>
</div>
@endsection