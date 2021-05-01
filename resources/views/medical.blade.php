@extends('layouts.app')

@section('content')
    <div class="body">

        @include('header')

        <div role="main" class="main">
            <section class="section section-funnel border-0 m-0 p-0">
                <div class="owl-carousel-wrapper" style="height: 991px;">
                    <div class="owl-carousel dots-inside dots-horizontal-center custom-dots-style-1 show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
                        data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1, 'dots': true}, '768': {'items': 1, 'dots': true}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-250px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': false, 'autoplayTimeout': 7000, 'autoplayHoverPause': true, 'rewind': true}">

                        <!-- Carousel Slide 1 -->
                        <div class="position-relative overflow-hidden pb-5 accueil"
                            data-dynamic-height="['991px','991px','991px','650px','650px']" style="height: 991px;">
                            <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                                data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                                data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                                style="background-image: url(img/back.jpg); background-size: cover; background-position: center;">
                            </div>
                            <div class="container position-relative z-index-3 pb-5 h-100">
                                <div class="row align-items-center pb-5 h-100">
                                    <div class="col-md-10 col-lg-6 text-center text-md-right pb-5 ml-auto">
                                        <h1 id="textAcc"
                                            class="text-color-dark font-weight-extra-bold text-10 line-height-2 mb-3 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                                            data-plugin-options="{'minWindowWidth': 0}"></h1>
                                        <h2 id="textDescr"
                                            class="text-color-default font-weight-normal text-4-5 line-height-2 mb-4 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                                            data-plugin-options="{'minWindowWidth': 0}"></h2>
                                        <a href="{{ '/rendez-vous' }}"
                                            class="btn btn-primary btn-modern font-weight-semibold text-3 btn-py-3 px-5 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                                            data-plugin-options="{'minWindowWidth': 0}">PRENDRE RENDEZ-VOUS</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Slide 2 -->
                        <div class="position-relative overflow-hidden pb-5 accueil"
                            data-dynamic-height="['991px','991px','991px','650px','650px']" style="height: 991px;">
                            <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                                data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s"
                                data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                                style="background-image: url(img/back2.jpg); background-size: cover; background-position: center;">
                            </div>
                            <div class="container position-relative z-index-3 pb-5 h-100">
                                <div class="row align-items-center pb-5 h-100">
                                    <div class="col-md-10 col-lg-6 text-center text-md-left pb-5">
                                        <h1 id="textAcc2"
                                            class="text-color-dark font-weight-extra-bold text-10 line-height-2 mb-3 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                                            data-plugin-options="{'minWindowWidth': 0}"></h1>
                                        <h2 id="textDescr2"
                                            class="text-color-default font-weight-normal text-4-5 line-height-2 mb-4 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                                            data-plugin-options="{'minWindowWidth': 0}"></h2>
                                        <a href="{{ '/rendez-vous' }}"
                                            class="btn btn-primary btn-modern font-weight-semibold text-3 btn-py-3 px-5 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                                            data-plugin-options="{'minWindowWidth': 0}">PRENDRE RENDEZ-VOUS</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="section-funnel-layer-bottom d-none d-xl-block z-index-1" id="specialite">
                    <div class="section-funnel-layer bg-light"></div>
                    <div class="section-funnel-layer bg-light"></div>
                </div>
            </section>

            <div id="specialite" class="cards custom-cards container z-index-2">
                <div class="cards-container row justify-content-center justify-content-xl-between w-100 my-5 mt-xl-0 mx-0">
                    <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                        <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <img src="img/blanchiment.png" alt="Healthcare Center">
                                <h4 class="card-title mb-1 font-weight-bold">Blanchiment des dents</h4>
                                <p class="card-text text-center">Le blanchiment dentaire est une technique relativement
                                    récente en dentisterie esthétique<span id="dots1">...</span><span
                                        class="card-text text-center" id="more1">
                                        et aussi un procédé de décoloration : l’agent décolorant pénètre dans la couche
                                        superficielle de la dent et dégrade les pigments de couleur. La dent paraît
                                        ainsi plus claire. L’effet dépend essentiellement de la durée de l’application
                                        de l’agent actif.
                                        Lorsque les dents sont fortement colorées, plusieurs traitements peuvent être
                                        nécessaires pour obtenir le degré de blancheur désiré.
                                    </span>
                                </p>
                                <a onclick="myFunction('more1')" id="myBtn1"
                                    class="font-weight-bolder text-uppercase text-decoration-none">Lire la suite
                                    +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                        <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation"
                            data-appear-animation="zoomIn" data-appear-animation-delay="100">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <img src="img/Orthodontique.png" alt="Immediate Center">
                                <h4 class="card-title mb-1 font-weight-bold">Orthodontique</h4>
                                <p class="card-text text-center">L’orthodontie, encore appelée orthopédie Dento-Faciale
                                    (ODF) est une spécialité vouée à la correction des mauvaises positions des dentsspan
                                    <span id="dots2">...</span><span class="card-text text-center" id="more2">
                                        aussi une spécialité dentaire vouée à la correction des mauvaises postures des
                                        mâchoires (orthopédie dento-faciale, ou ODF) et des dents (orthodontie) afin
                                        d'optimiser l'équilibre postural entre les structures osseuses (phases de repos
                                        physiologique des muscles), l'occlusion (engrènement dentaire
                                        réflexe), ainsi que le développement des bases osseuses dans un but fonctionnel
                                        et esthétique.
                                    </span>
                                </p>
                                <a onclick="myFunction('more2')" id="myBtn2"
                                    class="font-weight-bolder text-uppercase text-decoration-none">Lire la suite
                                    +</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-6 col-xl-4 mb-4 mb-xl-0 pb-2 pb-xl-0">
                        <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            <div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
                                <img src="img/scanner.png" alt="Diagnostic Center">
                                <h4 class="card-title mb-1 font-weight-bold">Radio Panoramique</h4>
                                <p class="card-text text-center">
                                    Elle est utile pour dévoiler des pathologies comme des
                                    infections, des fractures, des dents incluses et des maladies des tissusspan
                                    <span id="dots3">...</span><span class="card-text text-center" id="more3">
                                        Cette radio permet de voir la totalité de la mâchoire, elle est utile pour
                                        dévoiler des pathologies comme des
                                        infections, des fractures, des dents incluses et des maladies des tissus.
                                        Grâce à une radio panoramique, le dentiste a une vue d’ensemble, cela lui permet
                                        de voir ce qui se trouve en dessous des
                                        dents, les kystes et les foyers infectieux. Elle permet de découvrir un problème
                                        qui évolue sans douleur et sans
                                        symptôme.
                                    </span>
                                </p>
                                <a onclick="myFunction('more3')" id="myBtn3"
                                    class="font-weight-bolder text-uppercase text-decoration-none">Lire la suite
                                    +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="about-me mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-4 mb-4 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                            <h3 class="text-color-quaternary mb-3 font-weight-semibold text-capitalize pr-5">L'une des
                                meilleures cliniques dentaires de Tiznit</h3>
                            <p class="text-uppercase mb-3"> Dr. ABDELLAH LARGOU</p>
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"
                                style="animation-delay: 100ms;">
                                <svg width="242" height="120" viewBox="0 0 242 120" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="h1n"
                                        d="M25 41.9047C26.4624 42.5509 28.3155 51.7049 35.5356 53.2533C38.0571 55.3163 41.3727 55.8454 44.4892 56.5015C47.1089 57.053 53.8036 57.6469 56.5242 57.5836M56.5242 57.5836C57.0615 57.5711 57.5947 57.5618 58.1216 57.5618C60.7328 57.5618 63.2599 57.4976 65.6615 56.3332C73.8414 52.3671 81.4206 47.4833 86.0595 39.3516C89.7839 32.823 94.0092 17.9614 86.1941 12.4909C85.1516 11.7611 83.4853 10 82.2559 10H78.9909C70.0216 10 66.7976 20.6614 63.9111 27.5033C60.4863 35.6214 59.2354 43.9493 57.3474 52.4454C56.962 54.1798 56.6633 55.8572 56.5242 57.5836ZM56.5242 57.5836C56.4687 58.2731 56.4386 58.9705 56.4386 59.6824C56.4386 61.621 56.631 63.536 55.9673 65.3709C54.8364 68.4978 53.9392 71.9188 52.5201 75.0288M52.5201 75.0288C51.5842 77.0798 50.4213 78.9954 48.8146 80.6022C46.0263 83.3904 41.9007 85.5428 38.0265 86.4422C37.0892 86.6598 33.1195 87.5589 32.1864 86.8125C31.0626 85.9133 30.1861 83.3545 29.6619 82.0327C28.8709 80.038 28.8709 77.8495 28.8709 75.735V75.7214C28.8709 74.9772 31.7025 72.8199 32.1865 72.2039C33.8459 70.092 34.469 70.5883 36.7642 70.5883C40.919 70.5883 44.6028 70.6069 48.5621 72.2039C50.1592 72.8482 51.4281 73.8436 52.5201 75.0288ZM52.5201 75.0288C55.9201 78.719 55.5015 83.5756 60.0402 86.0719C64.8106 88.6956 67.2454 91.6128 72.6964 92.703C76.0858 93.3808 80.3612 95.2185 83.6696 93.4098C85.557 92.3781 86.4971 91.8635 86.4971 89.6904C86.4971 89.0298 86.8151 87.1229 86.1941 86.8124"
                                        stroke="black" stroke-width="3.19947" />
                                    <path id="h2n"
                                        d="M93.4647 51.6713C91.3129 50.1172 90.0147 49.8342 87.7762 50.6951C84.3822 52.0005 80.8445 54.2797 78.6206 57.2588C77.2632 59.0773 76.1738 61.3451 75.9278 63.6206C75.8596 64.2509 75.451 67.5068 76.1971 67.9628C77.4402 68.7225 76.1971 72.2997 80.9137 72.2997C87.7762 72.2997 86.5489 72.5126 87.7762 70.6892C89.6769 67.8653 89.8677 57.6705 91.5124 54.768C92.0188 53.8744 92.1351 52.7317 92.7242 51.8059C92.8834 51.5558 93.1462 50.7357 93.1618 51.0317C93.3362 54.3454 93.1194 57.8156 93.9023 61.0624C94.3263 62.8205 94.9895 64.7368 95.7368 66.3807C96.231 67.4681 97.9544 69.6692 98.5108 70.6892C99.0138 71.6115 98.9398 72.5835 100.111 72.2997C102.026 71.8353 102.141 67.6372 103.159 66.2124"
                                        stroke="black" stroke-width="3.19947" stroke-miterlimit="0"
                                        stroke-linejoin="bevel" />
                                    <path id="h3n"
                                        d="M102.962 51.4095C103.943 49.9798 104.902 50.18 106.621 50.2379C108.4 50.298 109.517 53.1291 110.036 54.3384C111.217 57.0887 111.888 60.2315 111.965 63.177C112.005 64.7152 111.847 66.2707 112.094 67.7981C112.23 68.6407 111.984 69.6879 112.237 70.4927C112.453 71.1813 112.945 69.1962 112.98 69.0868C113.332 67.963 112.48 66.758 112.48 65.6503C112.48 63.0121 112.48 60.374 112.48 57.7358C112.48 55.4426 109.825 53.0044 111.965 51.4095C113.572 50.2116 111.965 50.2379 115.83 47.244C119.694 44.25 121.365 44.5787 123.297 44.0287C124.153 43.785 125.099 44.0724 125.912 43.6773C126.345 43.4669 127.083 43.2589 127.527 43.5731C128.8 44.4749 128.998 45.859 128.942 47.244C128.846 49.5851 125.615 50.5815 123.797 51.4095"
                                        stroke="black" stroke-width="3.19947" stroke-miterlimit="0"
                                        stroke-linejoin="bevel" />
                                    <path id="h4n"
                                        d="M148.218 60.0078C149.328 57.1986 149.268 54.8973 148.066 52.0303C147.122 49.7779 146.53 49.1597 143.842 49.8929C141.776 50.4564 140.152 51.7404 138.658 53.2084C135.746 56.0708 132.903 58.7587 132.532 63.0708C132.449 64.0402 132.562 66.4624 133.676 66.9081C135.019 67.4451 137.315 66.9754 138.742 66.9754C142.441 66.9754 144.022 65.7324 146.484 62.953C148.007 61.2336 149.563 58.555 149.715 56.1873C149.771 55.3196 151.525 49.0233 151.525 49.8929C151.525 52.0191 149.732 57.8311 149.732 59.9573C149.732 67.9164 149.629 75.9647 149.429 83.9401C149.294 89.3363 146.83 93.6407 144.549 98.3298C142.977 101.561 139.593 102.654 136.857 104.557C134.795 105.992 132.665 107.205 130.243 108.007C127.444 108.934 124.9 109.18 121.963 109.067C118.598 108.938 116.297 104.601 115.702 101.713C115.148 99.0206 114.819 95.2788 117.856 94.1055C119.879 93.3238 121.872 93.3313 123.982 93.3313"
                                        stroke="black" stroke-width="3.19947" stroke-miterlimit="0"
                                        stroke-linejoin="bevel" />
                                    <path id="h5n"
                                        d="M173.799 54.3414C171.656 53.7683 169.477 52.9044 167.214 53.0463C163.331 53.2897 160.407 58.3456 158.951 60.7811C157.684 62.8978 156.909 65.7384 157.788 68.0841C159.478 72.5924 167.276 71.8256 171.819 71.8256C174.45 71.8256 177.391 69.2488 177.866 67.2207C178.528 64.3926 178.447 61.5944 178.447 58.7305C178.447 54.1296 173.676 54.5623 170.7 52.075"
                                        stroke="black" stroke-width="3.19947" stroke-miterlimit="0"
                                        stroke-linejoin="bevel" />
                                    <path id="h6n"
                                        d="M184.637 50.5167C185.717 50.1949 189.908 48.4243 190.09 50.887C190.189 52.2212 190.696 53.3002 190.696 54.7411C190.696 56.8396 190.839 58.8673 190.982 60.9514C191.111 62.8174 190.403 68.9238 193.776 68.6427C195.725 68.4803 197.485 66.3898 198.808 65.1252C200.057 63.9322 201.612 62.6821 202.141 60.9514C202.986 58.1847 203.043 55.1648 203.655 52.3344C203.727 52.0049 204.026 49.8324 204.026 50.8701C204.026 52.4894 203.723 54.0754 203.723 55.7004C203.723 59.6886 204.867 64.7995 206.921 68.222C208.244 70.4272 209.937 71.1167 212.441 71.1167C213.101 71.1167 216.171 68.8601 216.491 68.222"
                                        stroke="black" stroke-width="3.19947" stroke-miterlimit="0"
                                        stroke-linejoin="bevel" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-8 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="200">
                            <p class="p-relative bottom-6">Chirurgien de formation, le dentiste effectue certaines
                                opérations comme les extractions de dents ou la pose de pivots.
                                Pour les problèmes d’implantation dentaire ou de malformation, il dirige ses patients
                                vers l’orthodontiste, spécialiste
                                de la correction dentaire.
                            </p>
                            <p>
                                Le chirurgien-dentiste est un expert de l’hygiène buccale. Son métier le conduit à
                                contrôler les dents, est aussi
                                procéder à des opérations chirurgicales plus complexes, notamment l’arrachage de dents
                                de sagesses. Il possède une
                                grande habileté manuelle et un sang froid à toute épreuve.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about-us" class="more-about lazyload" data-bg-src="img/about_back.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6 p-relative overflow-hidden col-cuttin-more-about"></div>
                        <div class="col-xs-12 col-lg-6 p-relative py-5 bg-color-light z-index-1 pl-lg-5 pl-xl-0">
                            <p class="text-uppercase mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="100">Qui sommes-nous</p>
                            <h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">À Propros De
                                Nous
                            </h3>
                            <p class="font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="300">La cabinet dentaire LARGOU est un univers de
                                dentisterie moderne. C’est aussi un staff soignant hautement qualifié.
                            </p>
                            <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="400">La cabinet dentaire situé à Tiznit une ville du région
                                sous Massa, elle a commencé sont travaille en 2009, des le jour
                                jusqu'à maintenant elle a obtenue une bonne répétition, et sans exagération elle est une
                                des meilleurs au sud du Maroc.</p>
                            <div class="row counters mb-4 flex-nowrap flex-sm-wrap">
                                <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex">
                                    <div class="counter counter-primary appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                                        <strong class="number-counter text-10" data-to="10" data-append="+">0</strong>
                                        <label
                                            class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Année
                                            commerciale</label>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex">
                                    <div class="counter counter-primary appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750">
                                        <strong class="number-counter text-10" data-to="6" data-append="+">0</strong>
                                        <label
                                            class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Médecins
                                            spécialistes</label>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-lg-4 mb-0 d-flex justify-content-center">
                                    <div class="counter counter-primary appear-animation"
                                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
                                        <strong class="number-counter text-10" data-to="4" data-append="+">0</strong>
                                        <label
                                            class="number-counter-text text-4 text-color-primary font-weight-semibold negative-ls-1">Chambres</label>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="100">L'importance de la santé dentaire repose sur le fait
                                indéniable qu'elle contribue à une bonne qualité de vie.</p>
                            <div class="d-flex justify-content-start flex-column flex-xl-row">
                                <ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons mb-1 mb-xl-3">
                                    <li class="text-color-quaternary font-weight-bolder mb-2 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100"><i
                                            class="fas fa-check text-color-quaternary"></i>Chirurgie Buccale
                                    </li>
                                    <li class="text-color-quaternary font-weight-bolder mb-2 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><i
                                            class="fas fa-check text-color-quaternary"></i>Parodontie</li>
                                    <li class="text-color-quaternary font-weight-bolder appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><i
                                            class="fas fa-check text-color-quaternary"></i>Pédodontie
                                    </li>
                                </ul>
                                <ul class="list list-icons list-icons-style-2 list-icons-sm custom-list-icons">
                                    <li class="text-color-quaternary font-weight-bolder mb-2 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400"><i
                                            class="fas fa-check text-color-quaternary"></i>Réhabilitation orale &#038;
                                        Implantologie</li>
                                    <li class="text-color-quaternary font-weight-bolder mb-2 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"><i
                                            class="fas fa-check text-color-quaternary"></i>Orthodontie
                                    </li>
                                    <li class="text-color-quaternary font-weight-bolder appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"><i
                                            class="fas fa-check text-color-quaternary"></i>Endodontie</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="medical-services py-5 p-relative overflow-hidden lazyload" data-bg-src="img/specialite_back.jpg"
                id="service">
                <div class="container">
                    <div class="row">
                        <div class="col pt-4">
                            <p class="text-uppercase mb-0 text-color-light appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Spécialité
                            </p>
                            <h3 class="text-color-quaternary mb-2 text-color-light font-weight-bolder text-capitalize appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Nos services
                                médicaux</h3>
                            <p class="mb-5 text-color-light appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="300">Un plan de traitement optimal se limite rarement à une
                                seule spécialité de l'art dentaire.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="cards-medical-services row flex-wrap justify-content-center">
                                <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                    <div
                                        class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                        <img src="img/oral_surgery.png" class="img-fluid mb-5" alt="Chirurgie Buccale">
                                        <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                            Chirurgie Buccale</h4>
                                        <p class="card-text mb-2 text-center">Le chirurgien buccal et maxillo-facial
                                            évalue et traite les troubles, maladies, blessures et anomalies de la bouche
                                            (buccal), des mâchoires (maxillo) et de la face (facial).</p>
                                    </div>
                                </div>
                                <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                    <div
                                        class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                        <img src="img/periodontal-desease.png" class="img-fluid mb-5"
                                            alt="parodontite traitement">
                                        <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                            Parodontite</h4>
                                        <p class="card-text mb-2 text-center">La parodontie est spécialisée dans les
                                            traitements du parondonte, c’est à dire les tissus de soutien de la dent :
                                            gencive, os, cément (qui entoure la racine) et ligaments (qui relient la
                                            dent et l’os).</p>
                                    </div>
                                </div>
                                <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                    <div
                                        class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                        <img src="img/Pedodontie.png" class="img-fluid mb-5" alt="Parodontie">
                                        <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                            Pédodontie</h4>
                                        <p class="card-text mb-2 text-center">Pédodontie ou dentisterie pédiatrique :
                                            soins de l&rsquo;enfant, depuis son plus jeune âge. Le dentiste pédiatrique
                                            est
                                            concerné par la prévention, la détection précoce et le traitement des caries
                                            dentaires de l&rsquo;enfant.</p>
                                    </div>
                                </div>
                                <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                                    <div
                                        class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                        <img src="img/endodontie.png" class="img-fluid mb-5" alt="Endodontie">
                                        <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                            Endodontie</h4>
                                        <p class="card-text mb-2 text-center">Spécialiste de la médecine dentaire,
                                            l&rsquo;endodontiste traite principalement les inflammations et infections
                                            du
                                            système canalaire interne de la dentition, notamment de la pulpe dentaire
                                            et des tissus périradiculaires.</p>
                                    </div>
                                </div>
                                <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
                                    <div
                                        class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                        <img src="img/orthodontie.png" class="img-fluid mb-5" alt="Orthodontie">
                                        <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                            Orthodontie</h4>
                                        <p class="card-text mb-2 text-center">L’orthodontie vous offre un alignement
                                            dentaire non seulement esthétique, mais surtout fonctionnel, ce qui signifie
                                            que
                                            vos dents du haut s’adapteront idéalement à vos dents du bas.</p>
                                    </div>
                                </div>
                                <div class="card border-0 border-radius-0 col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 bg-transparent appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                                    <div
                                        class="card-body py-5 d-flex flex-column justify-content-center align-items-center bg-color-light hover-effect-1">
                                        <img src="img/Implantologie.png" class="img-fluid mb-5" alt="Réhabilitation">
                                        <h4 class="card-title mb-2 text-5 font-weight-bold text-color-quaternary">
                                            Réhabilitation orale &#038; Implantologie</h4>
                                        <p class="card-text mb-2 text-center">l&rsquo;implantologie a connu une
                                            évolution fulgurante. Parmi les innovations récentes, la redécouverte des
                                            protocoles
                                            de mise en charge immédiate peut-être considérée comme une révolution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col text-center pb-lg-5 mb-lg-5">
                            <p class="text-uppercase text-color-light d-block text-center mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Besoin d'un
                                spécialiste?</p>
                            <h3 class="text-color-quaternary mb-4 text-color-light d-block text-center font-weight-semibold text-capitalize appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Améliorez-vous
                                maintenant! Prenez simplement rendez-vous</h3>
                            <a href="{{ '/rendez-vous' }}"
                                class="btn btn-outline btn-light bg-hover-light text-hover-dark text-color-light border-color-light text-uppercase rounded-0 px-5 py-3 mb-2 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">PRENDRE
                                RENDEZ-VOUS</a>
                        </div>
                    </div>
                </div>

                <div class="section-funnel-layer-bottom">
                    <div class="section-funnel-layer bg-color-light"></div>
                    <div class="section-funnel-layer bg-color-light"></div>
                </div>
            </section>

        </div>

        @include('footer')

    </div>
@endsection
