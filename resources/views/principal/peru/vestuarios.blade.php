@extends('layouts.principalWeb')
@section('banner')
 <section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg/vestuario.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Puesta en Escena <br> <b>Vestuario</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')
<br><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div>
<div id="fh5co-contact" style="background-image: url({{ url('Carnaval/img/bg/st-2.png') }});">
		<div class="container text-justify">
			  <div class="row animate-box" >
				<div class="col-md-6  ">
					<div class="mb-4"></div>
					<img src="{{url('Carnaval1/img/text/vestuario.png')}}" class="img-responsive shake-slow" width="200px" height="205px"><br>
					<div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div>
					<p>Más de 3 mil artistas desplegados en batallones de baile vestirán los atuendos más representativos de la cultura peruana, y cuya confección está a cargo de 200 especialistas. Desde Perú, el reconocido diseñador de modas y embajador de la marca Perú, José Miguel Valdivia, asesorará al equipo con la misión de enaltecer los trajes típicos de la cultura peruana.  </p>
				</div>
				<div class="col-md-6 animate-box">

						<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('Carnaval1/img/pag/puesta/vestuario.png') }}">
				</div>
			</div>



		</div>

	</div>
	<br><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div>

@endsection

