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

           <h2>Edit Post - {{ $post->title }}</h2>
           <form action="{{ url('update',$post->id) }}" method="POST">
            @csrf
           <div class="form-group mt-4">
            <label class="text-size12 color9eb2cb mb-3">Enter New Title</label>
            <input type="text" class="form-control transition-none background-color-transparent border1-solid-none border-buttom-color4caf50 padding0 border-radius-none" name="title" value="{{ $post->title }} - Edited" placeholder="{{ $post->title }} - Edited">
           </div>
           <div class="form-group mt-3">
            <label class="text-size12 color9eb2cb mb-3">Enter New Body</label>
            <textarea class="form-control transition-none background-color-transparent border1-solid-none border-buttom-color4caf50 padding0 border-radius-none" name="body" placeholder="{{ $post->body }} - Edited" rows="3" style="resize: none !important">{{ old('body', $post->body ?? null) }}</textarea>
           </div>
           <div class="form-group mt-5">
           <button type="submit" class="btn btn background-color26a69a text-white border-radius0-1rem btn-sm padding-left-percent3 padding-right-percent3">SAVE</button>
           </div>
           </form>
        </div>
    </div>
</div>
@endsection