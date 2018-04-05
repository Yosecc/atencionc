@extends ('modules.cabecera')
@section ('content')			

<div class="container mt-4 mb-5 ">
	<div class="col">
		<div class="alert alert-success" role="alert">
	  		<?php if(isset($mensaje)) echo $mensaje;?>
		</div>
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

	<div class="mt-5 clearfix">
  		<a href="http://www.asambleanacional.gob.ve/" class="btn btn-info float-right">Salir</a>
	</div>

</div>

@stop