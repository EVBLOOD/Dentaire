{{-- @extends('layout') --}}
@extends('layouts.app')

@section('content')

    <div class="body">

        @include('header')

        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn"
                                data-appear-animation-delay="100">Contactez-nous</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb d-block text-md-right appear-animation" data-appear-animation="fadeIn"
                                data-appear-animation-delay="300">
                                <li><a href="file:///C:/Users/Abdellah/Desktop/Medical/demo-medical-2.html">Accueil</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
            <div id="googlemaps" class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.880372589333!2d-9.735189985309061!3d29.694247782011104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb47b9d5b53cfc1%3A0x69c7b126f40fe639!2sCentre%20Dentaire%20LARGOU!5e0!3m2!1sfr!2sma!4v1619049237187!5m2!1sfr!2sma"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="container py-5">
                <div class="row">
                    <div class="col pt-3">

                        <h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2">Coordonnées de contact
                        </h3>
                        <p class="mb-4">La cabinet dentaire situé à Tiznit une ville du région sous Massa, elle a
                            commencé sont travaille en 2009, des le jour
                            jusqu'à maintenant elle a obtenue une bonne répétition, et sans exagération elle est une des
                            meilleurs au sud du Maroc.
                        </p>

                        <div class="row text-center pb-3 pt-4">
                            <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                                <img width="60" src="img/icons/icon-location.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">Addresse</h4>
                                <p class="m-0">Complexe Comerciale Wadi Ljana, Tiznit 85000</p>
                            </div>
                            <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                                <img width="60" src="img/icons/icon-phone.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">Téléphone</h4>
                                <p class="m-0"><a href="tel:+212528866732"
                                        class="text-color-default text-color-hover-primary">+(212) 528-866-732</a></p>
                            </div>
                            <div class="col-lg-3 col-md-6 pb-4 pb-md-0">
                                <img width="60" src="img/icons/icon-envelope.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">Email</h4>
                                <p class="m-0"><a href="mailto:Largou@dentaire.com"
                                        class="text-default text-hover-primary">Largou@dentaire.com</a></p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <img width="60" src="img/icons/icon-calendar.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">Horaires D'ouvertures</h4>
                                <p class="m-0">Du lundi au Vendredi 8h30 à 18h30 et Samedi 8h30 à 15h
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="te" class="col">
                        <hr class="my-5">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <iframe name="contact" width="100%" height="12%" style="border:0;"></iframe>
                        <h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2">Envoyer nous un
                            message</h3>
                        <form id="form-contact" class="contact-form custom-form-style-1 appear-animation"
                            data-appear-animation="fadeIn" data-appear-animation-delay="100" action="php/email-script.php"
                            method="POST" target="contact">
                            <div id="form-success" class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Succès!</strong> Votre message a été envoyé avec succès.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Erreur!</strong> Nous avons rencontré une erreur lors de l'envoi de votre
                                message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" placeholder="Votre nom" value=""
                                        data-msg-required="S'il vous plaît entrez votre nom." maxlength="100"
                                        class="form-control" name="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" placeholder="Votre E-mail" value=""
                                        data-msg-required="S'il vous plaît entrez votre addresse."
                                        data-msg-email="S'il vous plaît, mettez une adresse email valide." maxlength="100"
                                        class="form-control" name="email" id="ema" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input placeholder="Sujet" type="text" value=""
                                        data-msg-required="Veuillez saisir le sujet." maxlength="100" class="form-control"
                                        name="subject" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <textarea id="mes" placeholder="Votre Message..." maxlength="5000"
                                        data-msg-required="S'il vous plaît entrez votre message." rows="10"
                                        class="form-control" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="Envoyer le message" name="sendMailBtn" id="form-submit"
                                        class="btn btn-primary px-4 py-3 text-center text-uppercase font-weight-semibold">
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
