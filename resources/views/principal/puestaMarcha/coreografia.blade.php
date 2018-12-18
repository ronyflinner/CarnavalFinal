@extends('layouts.principalWeb')
@section('banner')
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{ url('carnaval/images/bg/coreografia.jpg') }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1 class="heading-section">Puesta en Escena <br><b>Coreógrafo</b></h1>
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
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/coreografia.png') }}">
				</div>
				<div class="col-md-6 animate-box">


					<p>
					<b>Renan Banov</b><br><small>30 años (São Paulo/SP)</small> <br>
					Renav Banov es un estacado bailarín y coreógrafo, ganador de varios premios internacionales de danza y coreografía.
					</p>

					<p>
					Ingresó en el 2008 al carnaval, como integrante de la comisión de frente, en la escuela de samba Unidos do Peruche; y pasó por la escuela de samba la X-9 Paulistana.
					En el 2013 fue responsable de la coreografía de la comisión de frente de la escuela Barroca Zona Sul; y en el 2014 de la escuela Imperio de la Casa Verde.
					</p>
					<p>
					En Vila Maria, fue el responsable de los carnavales en sus ediciones 2015, 2016 y 2018. Para el 2019, Banov volverá a impresionar y promete una danza emocionante inspirada en la cultura peruana.
					</p>
					<p>
					<small>* Comisión de frente: Conjunto de bailarines que se posicionan al inicio de los carros alegóricos, es lo primero que se aprecia cuando la Escuela hace su ingreso a la avenida. El conjunto de bailarines, tiene la misión de hacer un baile que resume toda la trama, a lo largo de todos los carros alegóricos. Esta presentación es analizada por el jurado y tiene puntaje durante la competencia.</small>
					</p>
				</div>
			</div>
		</div>
	</div>

@endsection