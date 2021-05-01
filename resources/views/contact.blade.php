@extends('layouts.app')

@section('content')

    <div class="body">

        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
                <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
                    <div class="container h-100">
                        <div class="header-row h-100">
                            <div class="header-column justify-content-between">
                                <div class="header-row">
                                    <nav class="header-nav-top w-100">
                                        <ul class="nav nav-pills justify-content-between w-100 h-100">
                                            <li class="nav-item py-2 d-none d-xl-inline-flex">
                                                <span
                                                    class="header-top-phone py-2 d-flex align-items-center text-color-primary font-weight-semibold text-uppercase">
                                                    <i class="icon-phone icons text-5 mr-2"></i> <a
                                                        href="tel:+212-528-866-732">+(212) 528-866-732</a>
                                                </span>
                                                <span
                                                    class="header-top-email px-0 font-weight-normal d-flex align-items-center"><i
                                                        class="far fa-envelope text-4"></i> <a class="text-color-default"
                                                        href="mailto:Largou@dentaire.com">Largou@dentaire.com</a></span>
                                                <span
                                                    class="header-top-opening-hours px-0 font-weight-normal d-flex align-items-center"><i
                                                        class="far fa-clock text-4"></i>Du lundi au Vendredi 8h30 à
                                                    18h30 et Samedi 8h30 à 15h</span>
                                            </li>
                                            <li class="nav-item nav-item-header-top-socials d-flex justify-content-between">
                                                <span class="header-top-socials p-0 h-100">
                                                    <ul class="d-flex align-items-center h-100 p-0">
                                                        <li class="list-unstyled">
                                                            <a href="https://www.instagram.com" target="_blank"><i
                                                                    class="fab fa-instagram text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                        <li class="list-unstyled">
                                                            <a href="https://www.facebook.com/centrelargou/"
                                                                target="_blank"><i
                                                                    class="fab fa-facebook-f text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                        <li class="list-unstyled">
                                                            <a href="https://www.twitter.com" target="_blank"><i
                                                                    class="fab fa-twitter text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                    </ul>
                                                </span>
                                            </li>
                                        </ul>
                                    </nav>
                                    <ul class="nav-login nav nav-pills" id="mainNav" style="display: -webkit-inline-box;">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="dropdown-secondary" style="width: max-content;">
                                                    <a class=" nav-link" href="{{ route('login') }}">
                                                        <img src="img/icons/login.png" alt="login">
                                                        {{ __('Se connecter') }}
                                                    </a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                {{-- <li class="dropdown-secondary">
                                                    <a class="nav-link" href="{{ route('register') }}">
                                                        <img src="img/icons/register.png" alt="register">
                                                        {{ __('S’inscrire') }}
                                                    </a>
                                                </li> --}}
                                            @endif
                                        @else
                                            <li class="dropdown-secondary">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" style="text-transform: capitalize;"
                                                        href="{{ route('home') }}">
                                                        {{ __('Liste Rendez-Vous') }}
                                                    </a>
                                                    <a class="dropdown-item" style="text-transform: capitalize;"
                                                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        {{ __('Déconnecter ') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container bg-color-light">
                    <div class="header-row">
                        <div class="header-column header-column-logo">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="{{ '/' }}">
                                        <img alt="Dentaire" width="180" height="60" src="img/logos/Logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column header-column-nav-menu justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown-secondary">
                                                    <a id="acc" class="nav-link" href="{{ url('/') }}"
                                                        onclick="click_('acc')">
                                                        Accueil
                                                    </a>
                                                </li>
                                                <li class="dropdown-secondary">
                                                    <a id="spe" class="nav-link" href="{{ '/#specialite' }}"
                                                        onclick="click_('spe')">
                                                        Spécialités
                                                    </a>
                                                </li>
                                                <li class="dropdown-secondary">
                                                    <a id="ser" class="nav-link" href="{{ '/#service' }}"
                                                        onclick="click_('ser')">
                                                        Service Médical
                                                    </a>
                                                </li>
                                                <li class="dropdown-secondary">
                                                    <a id="apr" class="nav-link" href="{{ '/#about-us' }}"
                                                        onclick="click_('apr')">
                                                        A propos
                                                    </a>
                                                </li>

                                                <li class="dropdown-secondary">
                                                    <a id="con" class="nav-link active" href="{{ '/contact' }}"
                                                        onclick="click_('con')">
                                                        Contact
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

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
                                <li><a href="{{ '/' }}">Accueil</a></li>
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
                    <div id="block_contact" class="col">
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
