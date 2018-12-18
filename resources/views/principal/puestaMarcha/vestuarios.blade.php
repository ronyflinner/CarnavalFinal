@extends('layouts.principalWeb')
@section('banner')
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{ url('carnaval/images/bg/vestuario.jpg') }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1 class="heading-section">Puesta en Escena <br> <b>Vestuario</b></h1>

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
			  <div class="row animate-box" >
				<div class="col-md-6  ">
					<br>
					<img src="{{url('carnaval/images/text/vestuario.png')}}" class="img-responsive shake-slow" width="200px" height="205px"><br>
					<p>Más de 3 mil artistas desplegados en batallones de baile vestirán los atuendos más representativos de la cultura peruana, y cuya confección está a cargo de 200 especialistas. Desde Perú, el reconocido diseñador de modas y embajador de la marca Perú, José Miguel Valdivia, asesorará al equipo con la misión de enaltecer los trajes típicos de la cultura peruana.  </p>
				</div>
				<div class="col-md-6 animate-box">
						<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/vestuario.png') }}">
				</div>
			</div>



		</div>

	</div>

@endsection

