@extends ('modules.cabecera')
@section ('content')			
<?php 
 $url=URL::to('/')."/img/FondoEmailRive.png";
?>
<div class="row justify-content-center mb-3 mt-3">
			<h2>Contáctanos</h2>
</div>
<div class="row justify-content-around align-items-center no-gutters mensaje ">
	<div class="container_form p-3">
	<form  name="form1" role="form" action="{{ route('envio') }}" method="POST">
		<div class="row">
			<div class="form-group col-12 col-md-5">
				<label for="">Cédula</label>
				<input type="text" name="cedula" id="cedula" class="form-control" placeholder="..." required="">
			</div>
					<div class="form-group col-12 col-md-7">
				<label for="">Correo Electrónico</label>
				<input type="email" id="email" name="email" class="form-control" placeholder="..." required="">
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-12 col-md-6">
				<label for="">Nombres</label>
				<input type="text" name="nombres" id="nombres" class="form-control" placeholder="..." readonly="" required="">
			</div>
			<div class="form-group col-12 col-md-6">
				<label for="">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="..." readonly="" required="">
			</div>
		</div>


		<textarea name="mensaje" id="mensaje" cols="100" rows="10" class="form-control" placeholder="Mensaje" required=""></textarea>

		<div class="row justify-content-center">
			<input type="submit" value="Enviar" class="btn btn-primary m-3 ">
			<a href="{{ route('home') }}" class="btn btn-default m-3">Regresar</a>
			<input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
		</div>
        <input type="hidden" name="vista" value="emails.mensaje">
        <input type="hidden" name="tipo" value="2">
        <input type="hidden" name="imagen" value="{{ $url}}">
	</form>
</div>

</div>

@push ('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript">
	$ = jQuery;
	jQuery(document).ready(function () {
		$("input#cedula").bind('keydown', function (event) {

			if(event.shiftKey)
			{
				event.preventDefault();
			}
			if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 241 )    {
			}
			else {
				if (event.keyCode < 95) {
					if (event.keyCode < 48 || event.keyCode > 57) {
						event.preventDefault();
					}
				} 
				else {
					if (event.keyCode < 96 || event.keyCode > 105) {
						event.preventDefault();
					}
				}
			}        
			;
		});

		$("input#cedula").bind('change', function (event) {

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

				}

			});
			$.ajax({
				type: "GET",
				url: '{{ url('buscar') }}',
				dataType: "json",
				data: { cedula: $(this).val() , _token: '{{csrf_token()}}' },
				success: function (data){
		        	//var dataJson = eval(data);
		        	if(data.status == 'Ok' || data.status =='Reg'){
		        		console.log(data);
		        		$('#nombres').val(data.result.primernombre+' '+data.result.segundonombre);
						$('#apellidos').val(data.result.primerapellido+' '+data.result.segundoapellido);
		        		//alert(data.result.primernombre);
		        	}
		        	if(data.status == 'No'){
		        			alert('Venezolano No Cedulado');
		        	}

		        	 //alert(data.result.primernombre);
		        	
		        	}
		        });

		});
		jQuery(document).ready(function () {
			$("input#email").bind('change', function () {
				var email = $(this).val();
				expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				if (!expr.test(email)) {
					alert("Error: La dirección de correo " + email + " es incorrecta.");
                //document.form1.email.value = "";
            }
            ;
        });
});
	});

</script>


	<script>
		function habilita(){
			document.form1.consulado.disabled = false;
			document.form1.boton.disabled = false;
		}

		function deshabilita(){
			document.form1.consulado.disabled = true;
			document.form1.consulado.value = "";
			document.form1.boton.disabled = false;
		}
	</script>
	@endpush 
	 
@stop