@extends('layouts.principalWeb')

@section('banner')
	<!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/fechasyrutas.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Fechas</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')

<style type="text/css">
	 	.text-colo-3{color: #fff; padding-top: 20px;}
		.text-font-01{
			font-size:20px;
		}

</style>

	<section style="background-image: url({{url('Carnaval1/img/bg-img/st-2.png')}})">
		<div class="container text-justify">

			<div class="row wow zoomInUp">
                <div class="col-md-12 text-center ">
                	 <h2><img src="{{url('Carnaval1/img/text-img/fechas.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h2>
                    <p class="text-justify ">
					El Carnaval de São Paulo es una de las fiestas más famosas del mundo y la viva expresión de diversas culturas que cautivan a millones de personas de los cinco continentes. El sambódromo de Anhembi será el espacio que albergará el desfile de la escuela Unidos Vila Maria.<p>
                </div>
            </div>

			  <div class="row wow zoomInUp text-center">
				<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
					<a href="{{ url('Carnaval1/img/ruta.jpg') }}" data-toggle="lightbox" >
					 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('Carnaval1/img/ruta.jpg') }}" alt="" width="95%" height="800px">
				</a>
				</div>
			  </div>
			<br><br>



		</div>
	</section>



@endsection