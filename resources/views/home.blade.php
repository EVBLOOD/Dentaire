@extends('layouts.app')

@section('content')
    <div class="body">
        @include('header')
        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="font-weight-bold text-dark">{{ __('TABLEAU DE BORD') }}</h1>
                        </div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb d-block text-center">
                                <li><a href="{{ '/' }}">{{ __('Accueil') }}</a></li>
                                <li class="active">{{ __('Tableau de bord') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container-fluid">
                <nav class="navbar navbar-light bg-light justify-content-between">
                    <a class="navbar-brand"></a>
                    {{-- <form target="contact" action="{{ '/contact' }}" class="form-inline" method="GET"> --}}
                    <form class="form-inline" method="GET">
                        <input type="text" value="" data-msg-required="Veuillez sélectionner une date." maxlength="100"
                            class="form-control mr-sm-2 custom-datepicker" name="firstDate" id="firstDate" required
                            placeholder="Date rendez-vous">
                        <button class="btn btn-outline-primary my-2 my-sm-0" style="border-radius: 10% !important;"
                            type="submit">Rechercher</button>
                    </form>
                </nav>
                {{-- <iframe src="contact" width="100%" height="100%" style="border:0;"></iframe> --}}

                {{-- <?php $data = [
                'firstDate' => $_GET['firstDate'],
                ]; ?> --}}

                {{-- @include('details-rdv', $data) --}}
                
                @include('details-rdv')
                
            </div>

        </div>

        @include('footer')
    </div>
@endsection
