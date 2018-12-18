@extends('layouts.principalWeb')
@section('banner')
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{ url('carnaval/images/bg/trama.jpg') }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1 class="heading-section">Puesta en Escena <br><b>Trama </b></h1>

		   				</div>
		   			</div>
		   		</div>
	   		</div>
	   	</li>
	  	</ul>
  	</div>
</aside>
@endsection

@section('content')
<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg/st-2.png') }});">
		<div class="container text-justify">
			  <div class="row" >
				<div class="col-md-6  animate-box">
					<br>
					<img src="{{url('carnaval/images/text/trama.png')}}" class="img-responsive shake-slow" width="200px" height="205px">
					<p>La escuela de samba Unidos de Vila María homenajeará al Perú con el tema <b><i>"En las alas del gran pájaro, el vuelo de Vila María al imperio del Sol"</i></b>.

					</p>
					<p>
						El tema revive la historia ancestral del Perú, mediante un viaje en el tiempo, que contempla momentos y lugares representativos de la costa, sierra y selva, como los nevados de los Andes, el lago Titicaca, el nacimiento majestuoso de la vida como cuando emergieron de sus aguas Manco Capac y Mama Ocllo, bajo el resplandeciente dios sol (Inti).
					</p>
					<p>

						Los artistas representarán al inca guerrero y las riquezas que se esconden bajo las montañas peruanas, iluminados por el sol y protegido por el fiel cóndor, así como la fe en divinidades, y los altares sagrados alabados en danzas y procesiones.
					</p>
					<p>

						El gran pájaro representa el abrazo entre Perú y Brasil, calentadas por el astro rey y el calor humano en una misma celebración, que permite ser súbditos del inmenso imperio del sol.
					</p>
				</div>
				<div class="col-md-6 animate-box">
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/trama.png') }}">
				</div>
			</div>



		</div>

	</div>

@endsection