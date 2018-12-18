@extends('layouts.principalWeb')
@section('banner')
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{ url('carnaval/images/bg/carrosalegóricos.jpg') }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1 class="heading-section">Puesta en Escena <br><b>Carros Alegóricos</b></h1>

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

			<div class="row">
				<div class="col-md-6 animate-box">
					<br>
					<h3><img src="{{url('carnaval/images/text/carros-alegóricos.png')}}" class="img-responsive shake-slow" width="300px" height="305px"></h3><p>
					Seis gigantescos carros alegóricos, exhibirán con espectacularidad la historia ancestral del país, atractivos indiscutibles que deslumbrará a locales y extranjeros.</p><p>
					Las dimensiones del carro alegórico principal serán de 40M de largo, 11M de ancho y 15M de altura, producción que estuvo a cargo de 50 personas entre artistas, escultores, pintores y electricistas.
					Los carros acompañantes medirán de 10 a 30 M de largo, 11M de ancho y 15M de altura.</p>

				</div>
				<div class="col-md-6 animate-box"><img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/carrosalegóricos.png') }}"></div>

			</div>

		</div>

	</div>

@endsection

