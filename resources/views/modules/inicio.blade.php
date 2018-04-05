@extends ('modules.cabecera')
@section ('content')			
<div class="container mt-4 mb-5 ">
	<div class="texto-inicio">
		<p>En los últimos dieciocho años de forma recurrente los venezolanos han buscado emigrar del país en procura de un futuro tanto personal como para la familia, debido a distintos motivos, personales, inseguridad, políticos, económicos, entre otros. Recientemente debido a la crítica situación se ha incrementado de forma alarmante una crisis económica reflejada en la hiperinflación que existe en Venezuela y nuestra población no puede alcanzar ni siquiera a cubrir sus necesidades básicas, como son alimentación y salud.</p>
		<p>Éste fenómeno es una realidad, pero se habla de cifras no oficiales acerca de millones de connacionales que están fuera de nuestras fronteras, debido a que el Estado no cuenta con registros que reflejen este fenómeno y menos sobre nuestros coterráneos que se encuentran dispersos en los diferentes países del planeta desconociendo exactamente ni cuántos son ni donde están.</p>
		<p>La Asamblea Nacional de la República Bolivariana de Venezuela, como Poder del Estado, legítimo y reconocido, por la importante e inédita situación, ha decidido crear herramientas que permitan conocer donde se encuentran cada uno de los venezolanos que han debido emigrar para establecer un vínculo entre este importante grupo y sus familiares en el país, para así generar de forma concertada iniciativas que permitan mejorar sus condiciones económicas y sociales alcanzando el desarrollo integral de la familia como base de la nueva sociedad que aspiramos para lograr nuestro cambio.</p>
		<p>Con el objeto de poder tener cifras reales sobre este fenómeno, la Asamblea Nacional ha creado el <b>RIVE</b>, Registro Internacional de Venezolanos en el Exterior, e invitamos a todos aquellos quienes a través de este portal web nos permitan llegar la información requerida para, con la ayuda del mundo virtual, acortar la distancia entre nuestros seres queridos y así facilitar y generar condiciones para que, el Estado venezolano garantice los derechos de los venezolanos en el exterior, y así obligarlo a que se mejore la calidad de vida de cada uno de los interesados tanto en el país como en el exterior</p>
		</div>
	<div class="row justify-content-around align-items-center no-gutters ">

		<div class="col-md-4 btn-max bg1 img-bg2 m-3 border-radius-10" >
			<a href="{{ route('registro.index') }}" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Registro</b></h3>
				</div>
			</a>
		</div>

		<div class="col-md-4 btn-max bg1 img-bg1 m-3 border-radius-10" >
			<a href="{{ route('contacto') }}" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Contáctanos</b></h3>
				</div>
			</a>
		</div>
	</div>
	<div class="row justify-content-center mt-4">
		<div class="col">
			<div class="row justify-content-center redes-rive">
				<div class="col col-md-2 txcenter">
					<a href="https://www.instagram.com/r.i.v.e.an/" target="_blank" class=""> 
						<img src="{{ asset('img/instagram_b.png') }}" class="img-hor">
						@rive_ancf
					</a>
				</div>
				<div class="col col-md-2 txcenter"> 
					<a href="https://twitter.com/RIVE_ANCF" target="_blank">
						<img src="{{ asset('img/twitter_b.png') }}" class="img-hor">
						@RIVE_ANCF
					</a>
				</div>
				<div class="col col-md-2 txcenter">
					<a href="https://facebook.com/rive.an.79" target="_blank">
						<img src="{{ asset('img/facebook_b.png')}}" class="img-hor">
						Rive
					</a>
				</div>
			</div>
		</div>
	</div>		</div>


</div>

@stop