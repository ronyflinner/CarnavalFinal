@extends('layouts.principalWeb')
@section('banner')
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{ url('carnaval/images/bg/musica.jpg') }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1 class="heading-section">Puesta en Escena <br> <b>Música</b></h1>

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

				<div class="row animate-box">
				<div class="col-md-6 "><img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/musica.png') }}"></div>

					<br>
					<h3><img src="{{url('carnaval/images/text/musica_2.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h3>
					<p>Para esta edición, la escuela Unidos de Vila Maria ha creado un cántico dedicado especialmente para el desfile, que destaca todo el esplendor de la cultura peruana. Cantantes y músicos irán acompañados de cerca de 300 profesionales que integran la banda que dará ritmo y comparsa a la alegoría.
 					</p>
				</div>




		</div>

	</div>

@endsection
