@extends('layouts.app')

@section('content')

    <div class="body">

        @include('header')
        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="font-weight-bold text-dark">Register</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="#">Home</a></li>
                                <li class="active">Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <form action="/" id="frmSignUp" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark text-3">Username <span
                                            class="text-color-danger">*</span></label>
                                    <input type="text" value="" class="form-control form-control-lg text-4" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark text-3">E-Mail Address <span
                                            class="text-color-danger">*</span></label>
                                    <input type="text" value="" class="form-control form-control-lg text-4" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark text-3">Password <span
                                            class="text-color-danger">*</span></label>
                                    <input type="password" value="" class="form-control form-control-lg text-4" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-dark text-3">Confirm Password <span
                                            class="text-color-danger">*</span></label>
                                    <input type="password" value="" class="form-control form-control-lg text-4" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <p class="text-2 mb-2">Your personal data will be used to support your experience
                                        throughout this website, to manage access to your account, and for other purposes
                                        described in our <a href="#" class="text-decoration-none">privacy policy.</a></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <button type="submit"
                                        class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3"
                                        data-loading-text="Loading...">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
        @include('footer')
    </div>
@endsection
