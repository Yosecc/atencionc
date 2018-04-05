@extends ('modules.cabecera')
@section ('content')			

<div class="container mt-5 mb-5 ">
	<div class="col">
		<div class="row justify-content-center mb-3">
			<h2>Registro</h2>
		</div>
<form name="form1" role="form" action="{{ route('registro.store') }}" method="POST">
    {{ csrf_field() }}
    		<div class="container_form">
				<div class="col-12">
					<div class="row justify-content-cent">
						<div class="form-group col-12 col-md-3">
							<label for="">Cédula</label>
							<input type="text" name="cedula" id="cedula" maxlength="10" class="form-control" placeholder="..." required="">
							
						</div>
						<div class="form-group col-12 col-md-2">
							<label for="">F. Nac</label>
							<input type="text" name="fecha_nac" id="fecha_nac" class="form-control" placeholder="..." readonly="">
						</div>
						<div class="form-group col-6 col-md-1">
							<label for="">Edad</label>
							<input type="text" name="edad" id="edad" class="form-control" placeholder="..." readonly>
						</div>
						<div class="form-group col-6 col-md-1">
							<label for="">Sexo</label>
							<input type="text" name="sexo" id="sexo" class="form-control" placeholder="..." readonly=>
						</div>
						<div class="form-group col-12 col-md-5">
							<label for="">Correo Electrónico</label>
							<input type="email" name="email" id="email" maxlength="200" class="form-control" placeholder="..." required="">
						</div>
						
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="form-group col-12 col-md-6">
							<label for="">Nombres</label>
							<input name="nombre" id="nombre" type="text" class="form-control" placeholder="..." readonly="">
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="">Apellidos</label>
							<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="..." readonly="">
						</div>
					</div>
				</div>
				<div class="col-12 ">
					<div class="row">
						<div class="form-group col-12 col-md-6">
							<label for="">Profesión</label>
							<input type="text" name="profesion" id="profesion" class="form-control" placeholder="..." required="">
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Estado de Procedencia</label>
							<select name="id_estado" id="id_estado" class="form-control" required="">
								<option value="">Seleccione</option>
								@foreach ($estados as $estado)
									<option value="{{ $estado->id_estado }}">{{ $estado->estado }}</option>
								@endforeach
								
							</select>
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Municipio de Procedencia</label>
							<select name="id_municipio" id="id_municipio" class="form-control" required="">
								<option value="">Seleccione</option>
								<option value="">Municipio</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row pl-4 mt-4">
					<div class="checkbox  col-12 col-md-4">

						<p class="mb-1">Carga Familiar en Venezuela</p>
						<div class="row">
							<div class="col" >
								<input class="form-check-input" type="checkbox" value="1" name="hijos" id="hijos">
								<label class="form-check-label" for="hijos">
									Hijos
								</label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="1" name="padres" id="padres">
								<label class="form-check-label" for="padres">
									Padres
								</label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="1" name="abuelos" id="abuelos" readonly="">
								<label class="form-check-label" for="abuelos">
									Abuelos
								</label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="1" id="pareja" readonly="">
								<label class="form-check-label" for="pareja">
									Pareja
								</label>
							</div>
							<div class="col">
								<input class="form-check-input" type="checkbox" value="1" id="otros" readonly="">
								<label class="form-check-label" for="otros">
									Otros
								</label>
							</div>
						</div>

					</div>

					<div class="radio   col-12 col-md-4">
						<p class="mb-1">¿Está inscrito en el Registro Electoral? CNE</p>
						<div class=" col" >
							<input class="form-check-input" type="radio" name="cne" id="cne1" value="1">
							<label class="form-check-label" for="cne1">
								Si 
							</label>
						</div>
						<div class=" col" >
							<input class="form-check-input" type="radio" name="cne" id="cne2" value="0" >
							<label class="form-check-label" for="cne2">
								No
							</label>
						</div>
					</div>

					<div class="radio col-12 col-md-4">
						<p class="mb-1">¿Está inscrito en el Seguro Social? IVSS</p>
						<div class="col" >
							<input class="form-check-input" type="radio" name="sso" id="sso1" value="1">
							<label class="form-check-label" for="sso1">
								Si 
							</label>
						</div>
						<div class="col" >
							<input class="form-check-input" type="radio" name="sso" id="sso2" value="0">
							<label class="form-check-label" for="sso2">
								No
							</label>
						</div>
					</div>

				</div>		

			</div>
			<div class="container_form mt-2">

				<div class="col-12">
					<div class="row justify-content-between">
						<div class="form-group col-12 col-md-6">
							<label for="">País donde reside actualmente</label>
							<select name="id_pais" id="id_pais" class="form-control" required="">
								<option value="">Seleccione</option>
						        @foreach ($paises as $pais)
									<option value="{{ $pais->codigo }}">{{ $pais->descripcion }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-12 col-md-6">
							<label for="">Localidad</label>
							<select name="id_estado_pais" id="id_estado_pais" class="form-control" required="">
								
							</select>
						</div>

						<div class="form-group col-12 col-md-4">
							<label for="">Tiempo de Residencia</label>
							<select name="tiempo" id="tiempo" class="form-control">
								<option value="">Seleccione</option>
								<option value="De 0 a 6 meses">De 0 a 6 meses</option>
								<option value="De 6 meses a 1 año">De 6 meses a 1 año</option>
								<option value="De 1 a 2 años">De 1 a 2 años</option>
								<option value="De 2 a 3 años">De 2 a 3 años</option>
								<option value="De 3 años a más">De 3 años a más</option>
							</select>
						</div>
					<div class="radio   col-12 col-md-4">
						<p class="mb-1">¿Ha asistido a su consulado?</p>
						<div class=" col" >
							<input class="form-check-input" type="radio" name="asiste" id="asistio1" value="1" onclick="habilita();">
							<label class="form-check-label" for="asistio1">
								Si 
							</label>
						</div>
						<div class=" col" >
							<input class="form-check-input" type="radio" name="asiste" id="asistio2" value="0" onclick="deshabilita();">
							<label class="form-check-label" for="asistio2">
								No
							</label>
						</div>
					</div>
						<div class="form-group col-12 col-md-4">
							<label for="">¿Cómo es el servicio en su consulado?</label>
							<select name="consulado" id="consulado" class="form-control" disabled="">
								<option value="">Seleccione</option>
								
								<option value="1">Bueno</option>
								<option value="2">Regular</option>
								<option value="3">Deficiente</option>
								
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<input type="submit" id="boton" name="boton" value="Registrar" class="btn btn-primary m-3 " disabled>
				<a href="{{ route('home') }}" class="btn btn-default m-3" style="color: grey">Regresar</a>
				<input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
				<input type="hidden" name="vista" value="emails.notificacion">				
		        <input type="hidden" name="tipo" value="1">
						
			</div>
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
		        	if(data.status == 'Ok'){
		        		console.log(data);
		        		$('#nombre').val(data.result.primernombre+' '+data.result.segundonombre);
						$('#apellidos').val(data.result.primerapellido+' '+data.result.segundoapellido);
						$('#fecha_nac').val(data.result.fechanac);
						$('#sexo').val(data.result.sexo);
						$('#edad').val(data.edad);
		        		//alert(data.result.primernombre);
		        	}
		        	if(data.status == 'No'){
		        			alert('Venezolano No Cedulado');
		        	}
		        	if(data.status == 'Reg'){
		        			alert('Venezolano Ya Registrado');
		        			document.form1.cedula.value="";
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
			$("select#id_estado").bind('change', function (event) {

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

					}

				});
				$.ajax({
					type: "GET",
					url: '{{ url('carga') }}',
					data: { idestado: $(this).val() , _token: '{{csrf_token()}}' },
					success: function (resp){
						console.log(resp);
						$('#id_municipio').html(resp);
					}
				});

			});

			$("select#id_pais").bind('change', function (event) {

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

					}

				});
				$.ajax({
					type: "GET",
					url: '{{ url('ciudad') }}',
					data: { idpais: $(this).val() , _token: '{{csrf_token()}}' },
					success: function (resp){
						console.log(resp);
						$('#id_estado_pais').html(resp);
					}
				});

			});
});

$("select#tiempo").bind('click', function (event) {
	   document.form1.boton.disabled = false;
       
       
});		

		});
	</script>


	<script>
		function habilita(){
			document.form1.consulado.disabled = false;
			
		}

		function deshabilita(){
			document.form1.consulado.disabled = true;
			document.form1.consulado.value = "";
			
		}
	</script>
	@endpush 
	@stop