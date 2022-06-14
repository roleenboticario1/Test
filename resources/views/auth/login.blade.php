@extends('layouts.app')

@section('content')
<div class="container margin-top-15">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header background-colorffffff pt-3 pb-3 text-size20">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf
                            <div class="form-group mt-4">
                                <input  type="email" class="form-control padding0 transition-none background-color-transparent border1-solid-ffff border-buttom-color9e9e9e @error('email') is-invalid @enderror border-radius-none" name="email" required placeholder="Enter Email"  autocomplete="off">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-5">
                                <input type="password" class="form-control padding0 transition-none background-color-transparent border1-solid-ffff border-buttom-color9e9e9e @error('password') is-invalid @enderror border-radius-none" required name="password" placeholder="Enter Password" autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-5 mb-2">
                                <button type="submit" class="btn background-color26a69a text-white border-radius0-1rem btn-sm padding-left-percent3 padding-right-percent3">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn background-color26a69a text-white border-radius0-1rem btn-sm padding-left-percent3 padding-right-percent3" href="{{ url('/register')}}">Register</a>
                            </div>
                            <small>Currently Logged out.</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
