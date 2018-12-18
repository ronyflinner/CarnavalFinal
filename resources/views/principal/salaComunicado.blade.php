@extends('layouts.principalWeb')
@section('banner')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{ url('carnaval/images/bg/comunicados.jpg') }});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Comunicados
			   					</h1>

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
<div id="fh5co-blog" style="width: 100%; height: 100%; background-color: #efefef">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2><img src="{{url('carnaval/images/text/comunicados.png')}}" class="img-responsive shake-slow" width="300px" height="305px"></h2>

				</div>
			</div>

				{!! $template_comunicado !!}

			</div>
		</div>
	</div>

@endsection