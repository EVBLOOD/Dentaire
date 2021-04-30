@extends('layouts.app')

@section('content')


    <div class="body">

        @include('header')
        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="font-weight-bold text-dark">Se Connecter</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="{{ '/' }}">Accueil</a></li>
                                <li class="active">Se Connecter</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="container py-4">

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                        <form method="POST" action="{{ route('login') }}" id="frmSignIn" class="needs-validation">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="email"
                                        class="text-color-dark text-3">{{ __('Adresse électronique') }}<span
                                            class="text-color-danger">*</span></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{-- <strong>{{ $message }}</strong> --}}
                                            <strong>{{ __("Vous avez entré un nom d'utilisateur ou un mot de passe invalide") }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="password" class="text-color-dark text-3">{{ __('Mode de passe') }}<span
                                            class="text-color-danger">*</span></label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="current-password">
                                    @error('password')
                                        {{-- <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            <strong>{{ __("Vous avez entré un nom d'utilisateur ou un mot de passe invalide") }}</strong>
                                        </span> --}}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-auto">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label cur-pointer text-2" for="remember">
                                            {{ __('Souviens-toi de moi') }}</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-auto">
                                    @if (Route::has('password.request'))
                                        <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2"
                                            href="{{ route('password.request') }}">
                                            {{ __('Mode de passe oublié?') }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <button type="submit"
                                        class="btn btn-dark btn-modern btn-block text-uppercase rounded-0 font-weight-bold text-3 py-3"
                                        style="background-color: #007bff;border-color: #007bff;"
                                        data-loading-text="Loading...">{{ __('Se Connecter') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')
    </div>

@endsection
