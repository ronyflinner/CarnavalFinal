@extends('layouts.principalWeb')

@section('banner')

<style type="text/css">


</style>


 <section class="breadcrumb-area  jarallax " id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/historiaSao.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Historia del Carnaval de<br> <b>São Paulo</b></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')
	<style type="text/css">
			.img-2{
				margin-left: -28px;
				margin-top:10px;
			}

	</style>
	<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg-img/st-2.png') }});">
		<br><br>
		<div class="container text-justify">
			  <div class="row" >
				<div class="col-md-6  animate-box wow bounceInLeft" data-wow-delay="0.4s" >


							<img class="img-responsive img-thumbnail- bounce-in" src="{{ url('Carnaval1/img/pag/sambodromo/historia_sao1.png') }}"  >




				</div>
				<div class="col-md-6 animate-box wow bounceInRight" data-wow-delay="0.4s">
					 <h2><img src="{{url('Carnaval1/img/text-img/historiasao.png')}}" class="img-responsive shake-slow" width="200px" height="205px"></h2>

					<p>
					El Carnaval de São Paulo es una de las fiestas más famosas del mundo y la viva expresión de diversas culturas que cautivan a millones de personas de los cinco continentes.<p>

					<p>Bailarines, diosas de la samba, tamboreros y músicos forman parte de un conglomerado de ritmos, colores y sabores que invaden el Sambódromo de Anhembi con un desfile versátil de carrozas, disfraces y bailes populares.
					</p>

					<p>Todos los años la fiebre del Carnaval de São Paulo se desarrolla en el mes de marzo, y es considerado una expresión artística contagiosa que trasciende fronteras, reuniendo a más de 90 mil personas en los 3 días del evento y más de 800 mil espectadores durante toda la transmisión. </p>
					<p>
					Este 2019 el Carnaval de São Paulo exhibirá las alegorías temáticas de 21 escuelas de samba del país.
					</p>

				</div>
			</div>

		</div>
        <br><br>
	</div>

@endsection