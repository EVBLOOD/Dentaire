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
                    <form class="form-inline" method="GET">
                        <input type="tel" value="" class="form-control mr-sm-2" name="phone" id="phone"
                            placeholder="Téléphone">
                        <input type="text" value="" class="form-control mr-sm-2" name="nomComplet" id="nomComplet"
                            placeholder="Nom ou Prénom">
                        <input type="date" value="" class="form-control mr-sm-2" name="firstDate"
                            id="firstDate" placeholder="Date rendez-vous">
                        <button onclick="RDV()" name="sendRdv" class="btn btn-outline-primary my-2 my-sm-0" type="submit"
                            style="border-radius: 10% !important;">Rechercher</button>
                    </form>
                </nav>
                <div id="detailsRdv">
                    @include('details-rdv')
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection
