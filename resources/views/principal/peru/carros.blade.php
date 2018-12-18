@extends('layouts.principalWeb')
@section('banner')


 <section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg/carrosalegóricos.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Puesta en Escena <br><b>Tramas</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection


@section('content')
<div id="fh5co-contact" style="background-image: url({{ url('Carnaval1/img/bg/st-2.png') }});">
		<div class="container text-justify">
			<div class="row">
				<div class="col-md-6 animate-box">
					<br>
					<h3><img src="{{url('Carnaval1/img/text/carros-alegóricos.png')}}" class="img-responsive shake-slow" width="300px" height="305px"></h3><p>
					Seis gigantescos carros alegóricos, exhibirán con espectacularidad la historia ancestral del país, atractivos indiscutibles que deslumbrará a locales y extranjeros.</p><p>
					Las dimensiones del carro alegórico principal serán de 40M de largo, 11M de ancho y 15M de altura, producción que estuvo a cargo de 50 personas entre artistas, escultores, pintores y electricistas.
					Los carros acompañantes medirán de 10 a 30 M de largo, 11M de ancho y 15M de altura.</p>

				</div>
				<div class="col-md-6 animate-box"><img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('Carnaval1/img/pag/puesta/carrosalegóricos.png') }}"></div>

			</div>

		</div>

	</div>

@endsection

