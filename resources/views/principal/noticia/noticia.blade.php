@extends('layouts.principalWeb')

@section('banner')
<section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/noticias.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Noticias</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
	<section id="fh5co-blog">
		<div class="container">
			<div class="row wow fadeInUp d-flex justify-content-center">

						<h2><img src="{{url('Carnaval1/img/text-img/noticias.png')}}" class="img-responsive shake-slow" width="300px" height="305px"></h2>


			</div>
			{!! $template_comunicado !!}
			<br>
		</div>
	</section>
@endsection