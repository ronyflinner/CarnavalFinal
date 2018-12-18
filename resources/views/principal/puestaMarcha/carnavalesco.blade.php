@extends('layouts.principalWeb')
@section('banner')
<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
	   	<li style="background-image: url({{ url('carnaval/images/bg/carnavalescos.jpg') }});">
	   		<div class="overlay-gradient"></div>
	   		<div class="container">
	   			<div class="row">
		   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
		   				<div class="slider-text-inner">
		   					<h1 class="heading-section">Puesta en Escena <br> <b>Carnavalescos</b></h1>

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
                <div class="col-md-8 col-md-offset-2 text-center h5co-heading">
					<img src="{{url('carnaval/images/text/carnavalescos.png')}}" class="img-responsive shake-slow" width="300px" height="305px"><br>
                    <p class=" ">
					La puesta en escena de Perú en el Carnaval estará a cargo de dos destacados Carnavalescos, Cristiano Bara y Alexandre Louzada, especialistas en desarrollo de montaje de desfile en Brasil.<p>
                </div>
            </div><br><br>

			<div class="row">
				<div class="col-md-6 animate-box"  >



					<p><b>Cristiano Bara</b><br><small>46 años (San Cristóbal/RJ)</small> <br></p>


					<p>Trabaja desde 1989 en las escuelas más importantes de Río de Janeiro como Unión de la Isla, Salgueiro e Inocentes de Belford Roxo, donde tuvo su primera experiencia como carnavalesco.</p>

					<p>Su brillante trabajo en los Inocentes de Belford Roxo lo llevó a Beija Flor, donde consiguió los títulos del grupo especial de 2011 y 2015, como integrante de la comisión de carnavalescos.</p>

					<p>Cristiano es considerado como un genio del carnaval, por su especialidad en el desarrollo del montaje del desfile. Ingresó a Unidos de Vila María en 2017, como director de carnaval, y para la edición 2019, asumirá el cargo de carnavalesco junto con Alexandre Louzada.</p>
					<p>

				</div>
				<div class="col-md-6 animate-box">
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/p2.jpeg') }}">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"></div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('carnaval/images/pag/puesta/p1.jpeg') }}">
				</div>
				<div class="col-md-6 animate-box">
					<b>Títulos</b>
						<p>
					2011 -
					La simplicidad de un Rey (Beija Flor/Rio). Enredo en torno a la vida del cantante más famoso de Brasil, Roberto Carlos.
					</p>
					<p>
					2015 -
					Un giro cuenta la historia: Una mirada a África y al despuntar de Guinea Ecuatorial. Caminamos sobre la senda de nuestra felicidad. (Beija Flor/Rio) Enredo sobre Guinea Ecuatorial.
					</p>

					<p><b>Alexandre Louzada</b><br><small>60 (Niterói/RJ)</small></p>

					<p>
					Trabaja como carnavalesco desde 1985, ha pasado por las más importantes escuelas de samba de Río y Sao Paulo, su especialidad es coleccionar records en el Carnaval.</p>

					<p>Louzada es el campeón más grande del Sambódromo de Río y el carnavalesco con más títulos obtenidos por diferentes escuelas de Río. Es el único en la historia del carnaval que ganó en el mismo año en Río y Sao Paulo.<p>

					<p>Alexandre tiene hoy 6 títulos en Río y Sao Paulo. Pasó por las escuelas como Portela, Unión de la Isla, Cabuçu, Cubango, Caprichosos, Estados Puente, Grand Río, Estacio de Sá, Mangueira, Inocentes de Belford Roxo, Puerto de la Piedra, Vila Isabel, Beija Flor, San Clemente, Viradouro; y en Sao Paulo, en Vai Vai, Imperio de Casa Verde y Vila Unidos donde trabajó en 2016 y regresa a la feria 2019.</p>

					<b>Títulos</b>
					<p>1998 -
					Chico Buarque de Mangueira (Mangueira/Río) Enredo sobre uno de los cantantes más populares de Brasil.
					</p>
					<p>2006 -
					Soy loco por ti, América: La Villa canta latinidad trama (Vila Isabel/Rio) Enredo sobre los pueblos latinos.
					</p>
					<p>
					2007 -
					Áfricas: la cuna real para cortar Brasiliana (Beija Flor/Rio) Enredo sobre reyes y reinas.
					</p>
					<p>
					2008 -
					Macapá: Equinoccio solar, viejos fantásticos al medio mundo (Beija Flor/ Rio) Enredo sobre una ciudad brasileña.
					</p>
					<p>
					2011 -
					La simplicidad de un Rey (Beija Flor/Rio) Enredo sobre la vida de la cantante más famosa de Brasil, Roberto Carlos.
					</p>
					<p>
					2011 -
					La música venció (Vai Vai/Sao Paulo) Enredo sobre la música.
					</p>
					<p>
					2015 -
					Simplemente Elis - La fábrica de una voz en la transversal del tiempo (Vai Vai/Sao Paulo) Enredo sobre la cantante más famosa de Brasil.
					</p>
					<p>
					2017 -
					Las mil y una noches de una moza más allá de Marrakech (Mocidade/Río Juvenil) Enredo sobre Marruecos.
					</p>
				</div>
			</div>

		</div>

	</div>

@endsection


