@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
             <h5 class="text-center">Registration</h5>
            <div class="card">
                <div class="card-header background-colorffffff pt-3 pb-3 text-size20">{{ __('See The Register Rules') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mt-3">
                            <input id="name" type="text" class="form-control padding0 transition-none background-color-transparent border1-solid-ffff border-buttom-color9e9e9e @error('name') is-invalid @enderror border-radius-none" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Username">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-5">
                            <input id="email" type="email" class="form-control padding0 transition-none background-color-transparent border1-solid-ffff border-buttom-color9e9e9e @error('email') is-invalid @enderror border-radius-none" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-5">
                            <input id="password" type="password" class="form-control padding0 transition-none background-color-transparent border1-solid-ffff border-buttom-color9e9e9e @error('password') is-invalid @enderror border-radius-none" name="password" required autocomplete="new-password" placeholder="Enter Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-5 mb-4">
                            <input id="password-confirm" type="password" class="form-control padding0 transition-none background-color-transparent border1-solid-ffff border-buttom-color9e9e9e @error('password_confirmation') is-invalid @enderror border-radius-none" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confirm Password">
                        </div>

                        <div class="form-group mt-3 mb-2">
                            <button type="submit" class="btn background-color26a69a text-white border-radius0-1rem btn-sm padding-left-percent3 padding-right-percent3">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <small>Return to the <a class="colorffab40" href="{{ url('/login') }}">LOGIN PAGE</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
