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
        <div class="feature-content ">
          <img src="{{ url('Carnaval1/img/bg/text.png') }}">
        </div>
        <!-- Feature Thumbnail -->
        <div class="feature-thumbnail bg-img jarallax text-center" style="background-image: url({{ url('Carnaval1/img/bg-img/img-video.png') }});">


            <a href="#">

                <img class="img-responsive js-video-button " data-video-id='ql01LRI4fxA' id="play" src="{{ url('Carnaval1/img/logo-img/icono.png') }}" alt="" >
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
                        <a href="{{ route('peru.puestaEscena.tramas') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>

                        <h4>Trama</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item add wow fadeInUp" data-wow-delay="0.4s">
                <img src="{{ url('Carnaval1/img/puesta/3-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ route('peru.puestaEscena.vestuario') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Vestuario</h4>
                    </div>
                </div>
            </div>


            <div class="single_gallery_item web wow fadeInUp" data-wow-delay="0.6s">
                <img src="{{ url('Carnaval1/img/puesta/2-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ route('peru.puestaEscena.carnavalesco') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Carnavalescos</h4>
                    </div>
                </div>
            </div>

            <div class="single_gallery_item visual wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ url('Carnaval1/img/puesta/5-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ route('peru.puestaEscena.carros') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Carros Alegóricos</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item add wow fadeInUp" data-wow-delay="0.4s">
                <img src="{{ url('Carnaval1/img/puesta/6-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ route('peru.puestaEscena.musica') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Música</h4>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item web wow fadeInUp" data-wow-delay="0.6s">
                <img src="{{ url('Carnaval1/img/puesta/2-P.png') }}" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="{{ route('peru.puestaEscena.coreografo') }}" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
            <div id="owl-carousel1" class="owl-carousel">


                 @foreach ($val as $value)

                  @php
                     $change = str_replace("\\", "/", $value->imagenDepotTitle_link->path);
                     $url2 = url($change);

                    if ($value->url_image_id != 0) {
                        $hre = route('contenido', [$value->slug]);
                    } else {
                        $hre = $value->url_string;
                    }
                  @endphp

                <div class="post-slide visual wow fadeInUp" data-wow-delay="0.4s" id="noticiasp">
                    <div class="post-img">
                        <a href='{{ $hre }}'>
                            <img src="{{ $url2 }}" class="img-responsive" alt="Cinque Terre" width="40px" height="60px">
                           <div class="post-date">
                                <span class="date">14</span>
                                <span class="month">Nov</span>
                            </div>
                        </a>
                    </div>
                    <div class="post-review " id="noticiasp">
                        <h3 class="post-title"><a href="#">{{ $value->title }}</a></h3>

                        <p class="post-description">{!! trim($value->description)  !!} </p>
                        <a align="center" href='{{ $hre }}'>Leer m&aacute;s →</a>
                    </div>

                </div>
               @endforeach



            </div>
        </div>
    </div>
</div>

</section>
@endsection


