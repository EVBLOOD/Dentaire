@extends('layouts.app')

@section('content')

    <div class="body">

        @include('header')

        <div role="main" class="main">
            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="text-color-dark font-weight-bold">Rendez-vous</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                                <li><a href="{{ '/' }}"
                                        class="text-color-default text-color-hover-primary text-decoration-none">Accueil</a>
                                </li>
                                <li class="active">Rendez-vous</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container my-5 pt-4 pb-5">
                <div class="row">
                    <div class="col">
                        <iframe name="contact" width="100%" height="12%" style="border:0;"></iframe>
                        <form class="contact-form custom-form-style-1" action="php/rendez_vous.php" target="contact"
                            method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Votre rendez-vous nous a été envoyé.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> Une erreur s'est produite lors de l'envoi de votre rendez-vous.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <h2 class="text-color-dark font-weight-bold text-4-5 mb-3">Informations personnelles:
                                    </h2>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" value="" data-msg-required="Entrez votre prénom s'il vous plait."
                                        maxlength="100" class="form-control" name="firstName" id="firstName" required
                                        placeholder="Prénom">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" value="" data-msg-required="Entrez votre nom s'il vous plait."
                                        maxlength="100" class="form-control" name="lastName" id="lastName" required
                                        placeholder="Nom">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6 mb-3">
                                    <input type="email" value=""
                                        data-msg-email="S'il vous plaît, mettez une adresse email valide." maxlength="100"
                                        class="form-control" name="email" id="email" placeholder="Adresse électronique">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input type="tel" value="" data-msg-required="Entrez votre Téléphone s'il vous plait."
                                        maxlength="100" class="form-control" name="phone" id="phone" required
                                        placeholder="Téléphone">
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" value="" data-msg-required="Veuillez sélectionner une date."
                                        maxlength="100" class="form-control custom-datepicker" name="firstDate"
                                        id="firstDate" required placeholder="Date rendez-vous">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" value="" data-msg-required="Veuillez sélectionner une heure."
                                        maxlength="100" class="form-control custom-timepicker" name="firstTime"
                                        id="firstTime" required placeholder="Heure rendez-vous">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col">
                                    <textarea maxlength="5000" data-msg-required="Veuillez entrer votre raison." rows="5"
                                        class="form-control" name="reason" id="reason" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="form-row pb-2 mb-4">
                                <div class="col">
                                    <div class="alert alert-warning custom-alert-bg-color-1">
                                        <p class="text-2 mb-0"><i class="fas fa-info-circle mr-1"></i> Veuillez noter que la
                                            date et l'heure que vous avez demandées peuvent ne pas être disponibles. Nous
                                            vous contacterons pour confirmer les détails de votre rendez-vous. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-0">
                                    <input type="submit"
                                        class="btn btn-primary btn-modern font-weight-bold custom-btn-border-radius custom-btn-arrow-effect-1 text-3 px-5 py-3"
                                        value="ENVOYER">
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
