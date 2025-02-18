<!-- resources/views/auth/login.blade.php -->
@extends('layouts.auth')

@section('title', 'Password Reset')

@section('content')
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-4">
                    <a href="/" class="logo d-flex align-items-center w-auto">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        <span class="d-none d-lg-block">Srilanka Railway</span>
                    </a>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                                <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                                    <a href="/">
                                        <img src="{{ asset('assets/images/brand-logos/logo-color.png')}}" style="width: 100%;height:auto;" alt="logo" class="desktop-logo">
                                    </a>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <label for="signin-username" class="form-label text-default">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-12 d-grid mt-2">
                                        <button type="submit" class="btn btn-primary">{{ __('Send Password Reset Link') }}</button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>

            <div class="credits">
                Designed by MSCIT TEAM PROJECT GROUP 02
            </div>

        </div>
    </div>
</section>
@endsection