@extends('layouts.principalWeb')
@section('banner')
<section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg/musica.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Puesta en Escena <br> <b>Música</b></h1>
                    </div>
                </div>
            </div>
        </div>
 </section>

@endsection

@section('content')
<div id="fh5co-contact" style="background-image: url({{ url('Carnaval1/img/bg/st-2.png') }});">
		<div class="container text-justify">

				<div class="row animate-box">
				<div class="col-md-6 "><img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/musica.png') }}"></div>

					<br>
					<h3><img src="{{url('Carnaval1/img/text/musica_2.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h3>
					<p>Para esta edición, la escuela Unidos de Vila Maria ha creado un cántico dedicado especialmente para el desfile, que destaca todo el esplendor de la cultura peruana. Cantantes y músicos irán acompañados de cerca de 300 profesionales que integran la banda que dará ritmo y comparsa a la alegoría.
 					</p>
				</div>




		</div>

	</div>

@endsection
