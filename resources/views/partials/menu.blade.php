<div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
<header class="header-area">
        <!-- Navbar Area -->
        <div class="pixel-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="pixelNav">

                        <!-- Nav brand -->
                        <a href="{{ url('/') }}" class="nav-brand" data-wow-delay="0.3s"><img src="{{ url('Carnaval1/img/logo-img/logo.png') }}" width="160px" height="90px" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                             <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{ url('/') }}">Inicio &nbsp; &nbsp;</a></li>
                                    <li><a href="{{url('/') }}">Carnaval de São Paulo</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('carnaval.historiaSaoPaolo') }}">Historia</a></li>
                                            <li><a href="{{ route('carnaval.SanBodromo') }}">El Sambódromo</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="portfolio.html">Escuela Unidos de Vila Maria</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('escuela.historiaSamba') }}">Historia</a></li>
                                            <li><a href="{{ url('escuela.LogrosReconocimiento') }}">Logros</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Perú en el Carnaval</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('peru.resenaCarnaval') }}">Reseña</a></li>
                                            <li><a href="{{ route('peru.puestaEscena') }}" >Puesta en escena</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ route('peru.puestaEscena.tramas') }}"  >Trama</a></li>
                                                    <li><a href="{{ route('peru.puestaEscena.vestuario') }}" >Vestuario</a></li>
                                                    <li><a href="{{ route('peru.puestaEscena.carnavalesco') }}" >Carnavalescos</a></li>
                                                    <li><a href="{{ route('peru.puestaEscena.carros') }}" >Carros Alegóricos
                                                </a></li>
                                                    <li><a href="{{ route('peru.puestaEscena.musica') }}">Música</a></li>
                                                    <li><a href="elements.html">Coreógrafia</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Prensa</a>
                                        <ul class="dropdown">
                                             <li><a href="about.html">Comunicados</a></li>
                                            <li><a href="index.html">Fotografías</a></li>
                                            <li><a href="about.html">Noticias</a></li>
                                            <li><a href="about.html">Videos</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="index.html">Fechas &nbsp;</a></li>
                                    <li><a href="contact.html">Contacto</a></li>
                                </ul>


                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    {{ url('Carnaval1/style.css') }}