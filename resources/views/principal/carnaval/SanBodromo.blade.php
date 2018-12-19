@extends('layouts.principalWeb')

@section('banner')

 <section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg/sambodromo.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Sambódromo</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('content')

<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg/st-2.png') }});">
		<div class="container text-justify">

			<div class="row" >
				<div class="col-md-6 animate-box wow bounceInLeft" data-wow-delay="0.4s">
					<img src="{{url('Carnaval1/img/text-img/elsambódromo.png')}}" class="img-responsive shake-slow" width="400px" height="205px"></h2>
					<p>Ubicado al norte del distrito central de São Paulo, el <b>Sambódromo Anhembi</b> es uno de los mayores espacios para realizar grandes eventos al aire libre en Brasil.</p>

					<p>Este gran lugar, considerado el hogar de las escuelas de samba, fue diseñado en 1991. La pista de Amhembi posee 14 metros (46 pies) de ancho y 530 metros de largo (1,740 pies).</p>


				</div>
				<div class="col-md-6  animate-box wow bounceInRight" data-wow-delay="0.4s">
					<img class="img-responsive img-thumbnail- bounce-in" src="{{ url('Carnaval1/img/pag/sambodromo/imag_600x400.png') }}">
				</div>

			</div>

		</div>

	</div>
	<div id="fh5co-register bg-t-color"  style="background-image: url({{ url('Carnaval1/img/bg/st-2.png') }});" >
		<br>
		<div class="owl-carousel owl-carousel-fullwidth">
            <div class="item animate-box">
                <div class="team-image">
            		<a href="{{ url('Carnaval1/img/pag/sambodromo/1.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('Carnaval1/img/pag/sambodromo/1.png') }}" alt="" width="">
		            </a>
                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
                   <a href="{{ url('Carnaval1/img/pag/sambodromo/2.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/sambodromo/2.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
                    <a href="{{ url('carnaval/images/pag/sambodromo/3.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/sambodromo/3.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
                    <a href="{{ url('carnaval/images/pag/sambodromo/4.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/sambodromo/4.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
                    <a href="{{ url('carnaval/images/pag/sambodromo/5.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/sambodromo/5.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
               		 <a href="{{ url('carnaval/images/pag/sambodromo/6.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/sambodromo/6.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
                    <a href="{{ url('carnaval/images/pag/sambodromo/7.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/sambodromo/7.png') }}" alt="" width="">
		            </a>

                </div>
            </div>
            <div class="item animate-box">
                <div class="team-image">
                    <a href="{{ url('carnaval/images/pag/sambodromo/8.png') }}" data-toggle="lightbox" data-gallery="example-gallery">
		                 <img class="img-responsive img-thumbnail bounce-in" src="{{ url('carnaval/images/pag/sambodromo/8.png') }}" alt="" width="">
		            </a>

                </div>
            </div>

        </div>
	</div>


@endsection