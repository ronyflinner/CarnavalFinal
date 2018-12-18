@extends('layouts.principalWeb')

@section('banner')

	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/bg/fechasyrutas.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Fechas y Rutas</h1>

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

<style type="text/css">
	 	.text-colo-3{color: #fff; padding-top: 20px;}
		.text-font-01{
			font-size:20px;
		}

</style>

	<div id="fh5co-contact" style="background-image: url({{url('carnaval/images/bg/st-4.png')}})">
		<div class="container text-justify">

			<div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                	 <h2><img src="{{url('carnaval/images/text/fechas.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h2>
                    <p class="text-justify ">
					Els Carnaval de São Paulo es una de las fiestas más famosas del mundo y la viva expresión de diversas culturas que cautivan a millones de personas de los cinco continentes. El sambódromo de Anhembi será el espacio que albergará el desfile de la escuela Unidos Vila Maria.<p>
                </div>
            </div>

			  <div class="row animate-box text-center">
				<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
					<a href="{{ url('carnaval/images/ruta.jpg') }}" data-toggle="lightbox" >
					 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/ruta.jpg') }}" alt="" width="95%" height="800px">
				</a>
				</div>
			  </div>
			<br><br>
			<div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                	 <h2><img src="{{url('carnaval/images/text/rutas.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h2>
					<p class="text-justify ">
					Muy pronto el Perú estará antes los ojos del mundo.
					Conoce aqui próximamente las fechas en las que exhibirá
					lo mejor de su historia ancestral. <p>
                </div>
            </div>


		</div>
	</div>



@endsection