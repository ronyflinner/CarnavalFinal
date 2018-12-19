@extends('layouts.principalWeb')

@section('banner')
<section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/fnoticias.jpg') }});">
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
<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2><img src="{{url('carnaval/images/text/noticias.png')}}" class="img-responsive shake-slow" width="300px" height="305px"></h2>

				</div>
			</div>
			{!! $template_comunicado !!}

		</div>
	</div>
@endsection