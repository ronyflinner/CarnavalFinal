@extends('layouts.principalWeb')

@section('banner')
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{ url('carnaval/images/bg/contactanos.jpg') }});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Contáctanos</h1>

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
<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>Información de Contacto</h3>
						<ul>
							<li class="address">Av. Petit Thouars<br> 4653 Oficina 202,- Lima 18, Perú.</li>
							<li class="phone"><a href="tel://(511) 731 4529">(511) 731 4529</a></li>
							<li class="email"><a href="mailto:info@peruenelcarnaval.com">info@peruenelcarnaval.com</a></li>

						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Escr&iacute;benos</h3>
					<form action="#" id="form">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Su nombre" required="">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Su Apellido" required="">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" id="email" class="form-control" placeholder="Su correo" required="">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Su mensaje" required="">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Dinos algo!!!" required=""></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Enviar" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	<script type="text/javascript">
		$( "#form" ).submit(function( event ) {
		event.preventDefault();
		$(this)[0].reset();

	 	 console.warn( "Handler for .submit() called." );

	});
	</script>
@endsection