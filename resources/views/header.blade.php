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
                                                            <a href="#"><i
                                                                    class="fab fa-instagram text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                        <li class="list-unstyled">
                                                            <a href="#"><i
                                                                    class="fab fa-facebook-f text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                        <li class="list-unstyled">
                                                            <a href="#"><i
                                                                    class="fab fa-twitter text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                    </ul>
                                                </span>
                                                {{-- <span
                                                    class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
                                                    <a href="#"
                                                        class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">PRENDRE
                                                        RENDEZ-VOUS</a>
                                                </span> --}}

                                                <span
                                                    {{-- class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
                                                    <a href="#"
                                                        class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">PRENDRE
                                                        RENDEZ-VOUS</a> --}}

                                                    {{-- <!-- Right Side Of Navbar --> --}}
                                                    <ul class="navbar-nav ml-auto">
                                                        <!-- Authentication Links -->
                                                        @guest
                                                            @if (Route::has('login'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                </li>
                                                            @endif

                                                            @if (Route::has('register'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                </li>
                                                            @endif
                                                        @else
                                                            <li class="nav-item dropdown">
                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                                                    href="#" role="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                                                    {{ Auth::user()->name }}
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="navbarDropdown">
                                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                                        {{ __('Logout') }}
                                                                    </a>

                                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                                        method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        @endguest
                                                    </ul>
                                                </span>

                                                {{-- <span
                                                    class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
                                                    @if (Route::has('login'))
                                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                            @auth
                                                                <a href="{{ url('/home') }}"
                                                                    class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">Home</a>
                                                            @else
                                                                <a href="{{ route('login') }}"
                                                                    class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">Log
                                                                    in</a>

                                                                @if (Route::has('register'))
                                                                    <a href="{{ route('register') }}"
                                                                        class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">Register</a>
                                                                @endif
                                                            @endauth
                                                        </div>
                                                    @endif
                                                </span> --}}
                                            </li>
                                        </ul>
                                    </nav>
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
                                        <img alt="Porto" width="180" height="60" src="img/logos/Logo.png">
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
