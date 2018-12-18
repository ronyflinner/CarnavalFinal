@extends('layouts.principalWeb')

@section('banner')
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{ url('carnaval/images/bg/bg-22.png') }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1 class="heading-section">Puesta en Escena <br><b>Alegoría</b></h1>

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
				<div class="col-md-6  animate-box"  >
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="http://placehold.it/600x400">
				</div>
				<div class="col-md-6 animate-box">
					<br>
					<h3>Alegoría</h3>
					<p>Para el desarrollo de la historia la escuela trajo de vuelta al carnavalesco Alexandre Louzada, y a Cristiano Bara, su experiencia y profesionalismo harán brillar la historia del Perú ante los ojos del mundo.</p>
				</div>
			</div>


		</div>

	</div>

@endsection
