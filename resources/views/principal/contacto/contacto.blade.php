@extends('layouts.principalWeb')

@section('banner')
	 <section class="breadcrumb-area jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/contactanos.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Contáctanos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
<section>
	<br>
	<br>
	<br>
	<br>
	<br>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 wow bounceInLeft">

					<div class="fh5co-contact-info">
						<h3>Información de Contacto</h3>
						<ul>
							<li class="address">Av. Petit Thouars<br> 4653 Oficina 202,- Lima 18, Perú.</li>
							<li class="phone"><a href="tel://(511) 731 4529">(511) 731 4529</a></li>
							<li class="email"><a href="mailto:info@peruenelcarnaval.com">info@peruenelcarnaval.com</a></li>

						</ul>
					</div>

				</div>
				<div class="col-md-6 wow bounceInRight">
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
	</section>

	<script type="text/javascript">
		$( "#form" ).submit(function( event ) {
		event.preventDefault();
		$(this)[0].reset();

	 	 console.warn( "Handler for .submit() called." );

	});
	</script>
@endsection