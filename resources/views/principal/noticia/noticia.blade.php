@extends('layouts.principalWeb')

@section('banner')
<section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/noticias.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Noticias</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('content')
 <div id="fh5co-course" class="bg-pastel">

              <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center ">
                    <h2><img src="{{url('Carnaval1/img/text/noticias.png')}}" class="img-responsive shake-slow" width="300px" height="305px"></h2>

                    <br>
                  </div>


                  @foreach ($template_comunicado as $value)

                  @php
                     $change = str_replace("\\", "/", $value->imagenDepotTitle_link->path);
                    $url2 = url($change);

                    if ($value->url_image_id != 0) {
                        $hre = route('contenido', [$value->slug]);
                    } else {
                        $hre = $value->url_string;
                    }
                  @endphp
                  <div class="col-md-4 col-sm-6 col-xs-12 " >
                    <div class="blog-sec box" id="noticia">
                      <div class="blog-img">
                        <a href="">
                          <img src='{{ $url2  }}' width="100%" height="100px" class="img-responsive">
                        </a>
                      </div>
                      <div class="blog-info">
                        <h4> {{ $value->title }}</h4>

                       <p> {!! trim($value->description)  !!} </p>
                        <a href='{{ $hre }}'>Leer m&aacute;s →</a>
                      </div>
                      <br><br><br>
                    </div>

                  </div>

                  @endforeach
                </div>
              </div>
            <br><br>

    </div>

@endsection