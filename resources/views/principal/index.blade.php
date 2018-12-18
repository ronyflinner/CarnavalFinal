@extends('layouts.principalWeb')
@section('banner')
    <section class="hero-area">
        <div class="hero-slideshow owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <!-- Background Image-->
                <div class="slide-bg-img bg-img" style="background-image: url({{ url('Carnaval1/img/bg-img/desfile2018-49.jpg') }});"></div>

                <!-- Welcome Text -->
                <div class="container h-100">

                    <div class="row h-100 align-items-center ">
                        <div class="col-12 col-lg-12">
                            <div class="welcome-text d-flex justify-content-center" >
                                <h2 data-animation="fadeInUp" data-delay="300ms"><span>
                                    <img src="{{ url('Carnaval1/img/text-img/titulo_principal.png') }}" style="height: 130px; width:500px;" alt="">
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')


  <!-- Seccion video -->
      <section class="pixel-feature-area d-flex flex-wrap">

         <!-- Feature Content -->
        <div class="feature-content " style="background-image: url({{ url('Carnaval1/img/bg-img/st-2.png') }});">


              <div class="jumbotron jumbotron-fluid" >
                <div class="container">
                    <p> Seducida por su arte, danzas, trajes típicos, fiestas locales y religiosas, la Escuela de Samba Unidos de Vila María eligió representar al Perú en el Carnaval São Paulo 2019.<p>
                <p>
                   Se trata de la primera vez que el Perú estará ante los ojos del mundo y tendrá presencia en la fiesta más famosa del planeta.
                </p>
                <p>
                  Lo más memorable de la identidad, cultura y tradición del Perú se presentará en el Carnaval de São Paulo, y cautivará a millones de personas. Más de 800 millones de personas en más de 140 países de los cinco continentes quedarán rendidos ante la majestuosidad de la cultura peruana.
                </p>
                </div>
                </div>

        </div>
        <!-- Feature Thumbnail -->
        <div class="feature-thumbnail bg-img jarallax text-center" style="background-image: url({{ url('Carnaval1/img/bg-img/carrosalegóricos.jpg') }});">


            <a href="#">

                <img class="img-responsive" id="play" src="{{ url('Carnaval1/img/logo-img/icono.png') }}" alt="" >
            </a>

        </div>


    </section>





@endsection
    @section('seccion_b')
    <style type="text/css">
                .secN {
                    padding-top:  65px;
                }
            </style>

         <div style="background-image: url({{ url('Carnaval1/img/bg-img/st-2.png') }});" class="secN">
        <br>
         <h2 align="center">
         <img src="{{ url('Carnaval1/img/text-img/txn-2.png') }}" class="img-responsive wow fadeInUp" data-wow-delay="0.4s" >
         </h2>
        <br>

        <!-- Seccion Contenido -->
        <div class="pixel-portfolio" style="background-image: url({{ url('Carnaval1/img/bg-img/st-2.png') }});">

            <!-- Single gallery Item -->
            <div class="single_gallery_item visual wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ url('Carnaval1/img/puesta/1-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="#" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>

                        <h4>Trama</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item add wow fadeInUp" data-wow-delay="0.4s">
                <img src="{{ url('Carnaval1/img/puesta/3-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ url('Carnaval1/img/bg-img/5.jpg') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Vestuario</h4>
                    </div>
                </div>
            </div>


            <div class="single_gallery_item web wow fadeInUp" data-wow-delay="0.6s">
                <img src="{{ url('Carnaval1/img/puesta/2-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ url('Carnaval1/img/bg-img/5.jpg') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Carnavalescos</h4>
                    </div>
                </div>
            </div>

            <div class="single_gallery_item visual wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ url('Carnaval1/img/puesta/5-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ url('Carnaval1/img/bg-img/5.jpg') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Carros Alegóricos</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item add wow fadeInUp" data-wow-delay="0.4s">
                <img src="{{ url('Carnaval1/img/puesta/6-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ url('Carnaval1/img/bg-img/5.jpg') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Música</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item web wow fadeInUp" data-wow-delay="0.6s">
                <img src="{{ url('Carnaval1/img/puesta/2-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ url('Carnaval1/img/bg-img/5.jpg') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Coreógrafo</h4>
                    </div>
                </div>
            </div>

        </div>

        </div>

    @endsection

    @section('seccion_c')
<section >
    <div style="background-image: url({{ url('Carnaval1/img/bg-img/st-2.png') }});" class="secN">
        <br>
         <h2 align="center">
         <img src="{{ url('Carnaval1/img/text-img/noticias.png') }}" class="img-responsive wow fadeInUp" data-wow-delay="0.4s" width="200px" height="305px">
     </h2>

<div class="container-fluid" >
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <div class="post-slide visual wow fadeInUp" data-wow-delay="0.4s" id="noticiasp">
                    <div class="post-img">
                        <a href="#">
                            <img src="{{ url('Carnaval1/img/puesta/3-P.png') }}" class="img-responsive" alt="Cinque Terre">
                            <div class="post-date">
                                <span class="date">13</span>
                                <span class="month">jan</span>
                            </div>
                        </a>
                    </div>
                    <div class="post-review " id="noticiasp">
                        <h3 class="post-title"><a href="#">jhkjhkj</a></h3>

                        <p class="post-description">La Escuela Unidos de Vila María, una de las escuelas de samba más importantes de Brasil, se complace en anunciar la elección del Perú como la temática principal de sus alegorías para el Carnaval de São Paulo 2019</p>
                    </div>

                </div>

                <div class="post-slide wow fadeInUp" data-wow-delay="0.4s" id="noticiasp">
                    <div class="post-img ">
                        <a href="#">
                            <img src="{{ url('Carnaval1/img/puesta/3-P.png') }}" class="img-responsive" alt="Cinque Terre">
                            <div class="post-date">
                                <span class="date">13</span>
                                <span class="month">jan</span>
                            </div>
                        </a>
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">jhkjhkj</a></h3>

                        <p class="post-description">La Escuela Unidos de Vila María, una de las escuelas de samba más importantes de Brasil, se complace en anunciar la elección del Perú como la temática principal de sus alegorías para el Carnaval de São Paulo 2019</p>
                    </div>

                </div>

                <div class="post-slide visual wow fadeInUp" id="noticiasp">
                    <div class="post-img">
                        <a href="#">
                            <img src="img/puesta/3-P.png" class="img-responsive" alt="Cinque Terre">
                            <div class="post-date">
                                <span class="date">13</span>
                                <span class="month">jan</span>
                            </div>
                        </a>
                    </div>
                    <div class="post-review">
                        <h3 class="post-title"><a href="#">jhkjhkj</a></h3>

                        <p class="post-description">La Escuela Unidos de Vila María, una de las escuelas de samba más importantes de Brasil, se complace en anunciar la elección del Perú como la temática principal de sus alegorías para el Carnaval de São Paulo 2019</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection


