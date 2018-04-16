@extends ('modules.cabecera')
@section ('content')			
<div class="container mt-4 mb-5 ">
	<div class="texto-inicio">
		La Dirección de Atención al Ciudadano de la Asamblea Nacional tiene como objetivo promover la participación ciudadana; suministrando y aportando de forma oportuna, adecuada y efectiva, la información requerida; apoyando, orientando, recibiendo y tramitando las denuncias, quejas, reclamos, sugerencias y peticiones; resolviendo las solicitudes formuladas por los ciudadanos.
	</div>
	<div class="row justify-content-around align-items-center no-gutters ">

		<div class="col-md-4 btn-max bg1 img-bg2 m-3 border-radius-10" >
			<a href="{{ route('modules.peticiones') }}" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Peticiones</b></h3>
				</div>
			</a>
		</div>

		<div class="col-md-4 btn-max bg1 img-bg3 m-3 border-radius-10" >
			<a href="{{ route('contacto') }}" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Denuncias</b></h3>
				</div>
			</a>
		</div>

		<div class="col-md-4 btn-max bg1 img-bg1 m-3 border-radius-10" >
			<a href="{{ route('contacto') }}" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Reclamos</b></h3>
				</div>
			</a>
		</div>

		<div class="col-md-4 btn-max bg1 img-bg4 m-3 border-radius-10" >
			<a href="{{ route('contacto') }}" >
				<div class="content-text border-radius-10 color-white align-items-center no-gutters justify-content-center row">
					<h3 class="color-white"><b>Sugerencias</b></h3>
				</div>
			</a>
		</div>
	</div>
	{{-- <div class="row justify-content-center mt-4">
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
	</div> --}}		
</div>


</div>

@stop