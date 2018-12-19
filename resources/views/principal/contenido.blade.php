@extends('layouts.principalWeb')
@section('banner')

<section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg/noticias.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white"> @php
                   print_r($array[0]);
				@endphp</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('content')
<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg/st-2.png') }});">
	<div class="container animate-box">
		 <div class="row d-flex justify-content-center wow swing">

              	<img src="@php
                   print_r($array[1]);
				@endphp" class="img-responsive">



		</div>
	</div>


</div>

@endsection
