@extends('layouts.principalWeb')

@section('banner')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/historiadelaescuela.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Historia del Carnaval de<br> <b>São Paulo</b></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')


<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg/st-2.png') }});">
		<div class="container text-justify">
			  <div class="row" >
				<div class="col-md-6  animate-box"  ><br><br><br>
					<img class="img-responsive img-thumbnail- bounce-in " src="{{url('Carnaval1/img/pag/historia_escuela/img_600x400.png')}}">
				</div>
				<div class="col-md-6 animate-box">

					 <h2 class="text-center"><img src="{{url('Carnaval1/img/text-img/historiasao.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h2>
					 <div class="mb-4"></div>
					<p>Unidos de Vila María es una de las escuelas de samba más importantes y prestigiosas de Brasil, coronada cuatro veces campeona del Carnaval de São Paulo.</p>
					<p>
					Sus inusitadas alegorías y diversidad temática, que representan las costumbres, la religión, la belleza de paisajes y las culturas de diversos países en el mundo, son parte de su esencia.
					</p>
					<p>
					Sus inicios se remontan a 1954 cuando un grupo de amigos deciden darle alegría y color a una ciudad que buscaba el progreso, la modernidad, y un cambio en la calidad de vida de sus habitantes. De esta manera, empezaron desfilando por las calles del propio barrio, extendiendo su recorrido en otras ciudades aledañas.
					</p>
					<p>
					En 1971, la escuela cambia su nombre a Gremio Recreativo Cultural Social Escuela de Samba Unidos de Vila Maria, y continúa su caminata de glorias, dificultades y superaciones para ostentar su pabellón y la tradición de un pueblo apasionado.
					</p>
					<p>
					A lo largo de 60 años, Unidos de Vila Maria ha puesto en escena las culturas de países como Japón, Brasil, Corea, México y ahora Perú.
					</p>
					<p>Actualmente, la presidencia de la Escuela Unidos de Vila Maria está a cargo de Adilson José de Sousa.
					</p>
				</div>
			</div>


		</div>
	</div>
	<div id="fh5co-register bg-t-color"  style="background-color: #efefef" >
		<div class="owl-carousel owl-carousel-fullwidth">
           <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/historia_escuela/1.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/historia_escuela/1.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/historia_escuela/2.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/historia_escuela/2.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
         <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/historia_escuela/3.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/historia_escuela/3.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
           <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/historia_escuela/4.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/historia_escuela/4.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
           <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/historia_escuela/5.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/historia_escuela/5.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/historia_escuela/6.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/historia_escuela/6.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
           <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/historia_escuela/7.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/historia_escuela/7.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
        </div>
	</div>

@endsection