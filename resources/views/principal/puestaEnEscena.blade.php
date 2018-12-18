@extends('layouts.principalWeb')

@section('banner')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{ url('carnaval/images/bg/puestaenescena.png') }});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Puesta en Escena</h1>

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
	.demo{ background: #e2e2e2; }
		.serviceBox{
		    color: #606060;
		    padding: 0 10px 60px;
		    background-color: #b774248a;
		    border: 1px solid transparent;
		    border-radius: 20px;
		    margin: 80px 0 30px;
		    position: relative;
		 }
		 .serviceBox .service-content{
		   text-align: center;
		    padding: 15px 20px 30px;
		    margin-top: -80px;
		    border-radius: 25px;
		    background-color: #fff;
		    position: relative;
		    transition:all 0.3s;
		 }
		 .serviceBox .service-content:hover{
		   box-shadow: 0 0 20px -5px #000;
		 }
		 .serviceBox .service-content:after{
		    content: '';
		    height: 50px;
		    width: 50px;
		    border: 25px solid transparent;
		    border-top: 25px solid #fff;
		    transform:translateX(-50%);
		    position: absolute;
		    bottom: -50px;
		    left: 50%;
		}
		.serviceBox .service-icon{
		    display: inline-block;
		    color: #F9A11C;
		    font-size: 90px;
		    margin-bottom: 10px;
		    transition: all 0.3s ease 0s;
		}
		.serviceBox:hover .service-icon{
		    transform:rotateX(360deg);
		}
		.serviceBox .title{
		    font-size: 18px;
		    font-weight: 600;
		    text-transform: uppercase;
		    margin:0 0 10px;
		}
		.serviceBox .description{
		    font-size: 15px;
		    line-height: 25px;
		    margin: 0;
		}
		.serviceBox .read-more{
		    display: block;
		    width: 60%;
		    font-size: 15px;
		    font-weight: 600;
		    text-transform: uppercase;
		    text-align: center;
		    color: #fff;
		    padding: 10px 0;
		    background-color: #6D4D42;
		    border-radius: 15px;
		    transform:translateX(-50%);
		    transition:all 0.3s ease 0s;
		    position: absolute;
		    left: 50%;
		    bottom: -20px;
		}
		.serviceBox .read-more:hover{
		    text-decoration: none;
		    letter-spacing: 2px;
		    box-shadow: 0 0 10px #000;
		}
		.serviceBox.green{background-color: #44BB85;}
		.serviceBox.green .service-icon{color: #44BB85;}
		.serviceBox.green .read-more{background-color: #007A6D;}
		.serviceBox.blue{background-color: #36BFC5;}
		.serviceBox.blue .service-icon{color: #36BFC5;}
		.serviceBox.blue .read-more{background-color: #015F65;}
		.serviceBox.red{background-color: #f23d3a;}
		.serviceBox.red .service-icon{color: #f23d3a;}
		.serviceBox.red .read-more{background-color: #ad0e0c;}
		@media only screen and (max-width:990px){
		    .serviceBox{ margin-bottom: 60px; }
		    .serviceBox .service-content{padding: 20px 15px 30px;}
		}
		@media only screen and (max-width:767px){
		    .serviceBox{ margin-bottom: 130px; }
		}
</style>
<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg/st-2.png') }});">
		<div class="container text-justify">
			  <div class="row" >

				<div class="col-md-4 col-sm-6">
		          <div class="serviceBox animate-box">
		              <div class="service-content animate-box">
		                <div class="service-icon animate-box">
		                    <img class="img-responsive bounce-in" src="{{ url('carnaval/images/pag/puesta/1-P.png') }}" alt="" width="">
		                </div>
		                  <h3 class="title animate-box">Trama</h3>
		                  <p class="description animate-box">
		                      La escuela de samba Unidos de Vila María homenajeará al Perú con el tema "En las alas del gran pájaro, el vuelo de Vila María al imperio del Sol".
		                  </p>
		              </div>
		              <a class="read-more" href="{{ route('peru.puestaEscena.tramas') }}">Leer Más</a>
		          </div>
		      </div>

		      <div class="col-md-4 col-sm-6">
		          <div class="serviceBox animate-box">
		              <div class="service-content animate-box">
		                <div class="service-icon animate-box">
		                    <img class="img-responsive bounce-in" src="{{ url('carnaval/images/pag/puesta/3-P.png') }}" alt="" width="">
		                </div>
		                  <h3 class="title animate-box">Vestuario</h3>
		                  <p class="description animate-box">
		                      Más de 3 mil artistas desplegados en batallones de baile vestirán los atuendos más representativos de la cultura peruana...
		                  </p>
		              </div>
		              <a class="read-more" href="{{ route('peru.puestaEscena.vestuario') }}">Leer Más</a>
		          </div>
		      </div>
		      <div class="col-md-4 col-sm-6">
		          <div class="serviceBox animate-box">
		              <div class="service-content animate-box">
		                <div class="service-icon animate-box">
		                    <img class="img-responsive bounce-in" src="{{ url('carnaval/images/pag/puesta/2-P.png') }}" alt="" width="">
		                </div>
		                  <h3 class="title animate-box">Carnavalescos</h3>
		                  <p class="description animate-box">
		                     Para el desarrollo de la historia la escuela trajo de vuelta al carnavalesco Alexandre Louzada, y a Cristiano Bara...
		                  </p>
		              </div>
		              <a class="read-more" href="{{ route('peru.puestaEscena.carnavalesco') }}">Leer Más</a>
		          </div>
		      </div>
		  </div>
		  <div class="row">
		      <div class="col-md-4 col-sm-6">
		          <div class="serviceBox animate-box ">
		              <div class="service-content animate-box">
		                <div class="service-icon animate-box">
		                    <img class="img-responsive bounce-in" src="{{ url('carnaval/images/pag/puesta/5-P.png') }}" alt="" width="">
		                </div>
		                  <h3 class="title animate-box">Carros Alegóricos</h3>
		                  <p class="description animate-box">
		                     Seis gigantescos carros alegóricos, exhibirán con espectacularidad la historia ancestral del país, atractivos indiscutibles que deslumbrará a locales y extranjeros....
		                  </p>
		              </div>
		              <a class="read-more" href="{{ route('peru.puestaEscena.carros') }}">Leer Más</a>
		          </div>
		      </div>
		      <div class="col-md-4 col-sm-6">
		          <div class="serviceBox animate-box">
		              <div class="service-content animate-box">
		                <div class="service-icon animate-box">
		                    <img class="img-responsive bounce-in" src="{{ url('carnaval/images/pag/puesta/6-P.png') }}" alt="" width="">
		                </div>
		                  <h3 class="title animate-box">Música</h3>
		                  <p class="description animate-box">
		                      Para esta edición, la escuela Unidos de Vila Maria ha creado un cántico creado especialmente para el desfile...
		                  </p>
		              </div>
		              <a class="read-more" href="{{ route('peru.puestaEscena.musica') }}">Leer Más</a>
		          </div>
		      </div>
		      <div class="col-md-4 col-sm-6">
		          <div class="serviceBox animate-box">
		              <div class="service-content animate-box">
		                <div class="service-icon animate-box">
		                    <img class="img-responsive bounce-in" src="{{ url('carnaval/images/pag/puesta/p-7.jpg') }}" alt="" width="">
		                </div>
		                  <h3 class="title animate-box">Coreógrafia</h3>
		                  <p class="description animate-box">
		                     Renav Banov es un estacado bailarín y coreógrafo, ganador de varios premios internacionales de danza y coreografía....
		                  </p>
		              </div>
		              <a class="read-more" href="{{ route('peru.puestaEscena.coreografo') }}">Leer Más</a>
		          </div>
		      </div>





			</div>

		</div>

	</div>
@endsection