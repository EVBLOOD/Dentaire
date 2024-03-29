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
                                                        class="far fa-envelope text-4"></i> <a
                                                        class="text-color-default"
                                                        href="mailto:Largou@dentaire.com">Largou@dentaire.com</a></span>
                                                <span
                                                    class="header-top-opening-hours px-0 font-weight-normal d-flex align-items-center"><i
                                                        class="far fa-clock text-4"></i>Du lundi au Vendredi 8h30 à
                                                    18h30 et Samedi 8h30 à 15h</span>
                                            </li>
                                            <li
                                                class="nav-item nav-item-header-top-socials d-flex justify-content-between">
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
                                    <ul class="nav-login nav nav-pills" id="mainNav"
                                        style="display: -webkit-inline-box;">
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
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left"
                                                    aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" style="text-transform: capitalize;" href="{{ route('home') }}">
                                                        {{ __('Liste Rendez-Vous') }}
                                                    </a>
                                                    <a class="dropdown-item" style="text-transform: capitalize;" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                                                    <a id="acc" class="nav-link active" href="{{ url('/') }}"
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
                                                    <a id="ser" class="nav-link" href="{{ '/#services' }}"
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
                                                    <a id="con" class="nav-link" href="{{ '/contact' }}"
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
