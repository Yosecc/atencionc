@extends ('modules.cabecera')
@section ('content')
	<div class="container mt-5">
		<h4 class="pb-3"><b>Ingresa tu información personal</b></h4>

		<form action="" id="form" name="form">
		<div class="container_form">
				<div class="col-12">

					<div class="row justify-content-cent">
						<div class="form-group col-md-1">
							<label for="nac">Nac.</label>
							<select class="form-control" name="nac" id"nac" required>
								<option value="V">V</option>
								<option value="E">E</option>
							</select>	
						</div>
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
						<div class="form-group col-12 col-md-4">
							<label for="">Correo Electrónico</label>
							<input type="email" name="email" id="email" maxlength="200" class="form-control" placeholder="..." required="">
						</div> 
						<div class="col-6">
							<label for="cod">Número Celular</label>
								<div class="form-inline">
									<div class="form-group col-md-4 pl-0">
										<select class="form-control  w-100" name="cod">
											<option value="">Selecicone</option>
											<option value="0414">0414</option>
											<option value="0424">0424</option>
											<option value="0416">0416</option>
											<option value="0426">0426</option>
											<option value="0412">0412</option>
										</select>
									</div>
									<div class="form-group col-md-8 pr-0">
										<input type="text" name="cel" id="cel" maxlength="7" class=" w-100 form-control" placeholder="..." required="">
									</div>
								</div>
						</div>

						<div class="col-6">
							<label for="cod">Teléfono</label>
								<div class="form-inline">
									<div class="form-group col-md-4 pl-0">
										<input type="text" name="cod-local" id="cod-local" maxlength="4" class="form-control w-100" placeholder="..." required="">
									</div>
									<div class="form-group col-md-8 pr-0">
										<input type="text" name="local" id="local" maxlength="7" class="form-control w-100" placeholder="..." required="">
									</div>
								</div>
						</div>
						
					</div>
				</div>
				<div class="col-12 pt-4">
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
							<label for="">Profesión u Oficio</label>
							<input type="text" name="profesion" id="profesion" class="form-control" placeholder="..." required="">
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Estado</label>
							<select name="id_estado" id="id_estado" class="form-control" required="">
								<option value="">Seleccione</option>
								{{-- @foreach ($estados as $estado) --}}
									<option value="{{-- {{ $estado->id_estado }} --}}">Estados{{-- {{ $estado->estado }} --}}</option>
								{{-- @endforeach --}}
								
							</select>
						</div>
						<div class="form-group col-12 col-md-3">
							<label for="">Municipio</label>
							<select name="id_municipio" id="id_municipio" class="form-control" required="">
								<option value="">Seleccione</option>
								<option value="">Municipio</option>
							</select>
						</div>
						<div class="form-group col-12 col-md-12">
							<label for="">Dirección</label>
							<input type="text" name="profesion" id="profesion" class="form-control" placeholder="..." required="">
						</div>


						<div class="radio col-md-3 ">
							<p class="mb-1">Hijos</p>
							<div class="row">
								<div class=" col-6" >
									<input class="form-check-input" type="radio" name="hijos" id="hijosSi" value="1" onclick="habilita();" required="">
									<label class="form-check-label" for="hijosSi">
										Si 
									</label>
								</div>
								<div class=" col-6" >
									<input class="form-check-input" type="radio" name="hijos" id="hijosNo" value="0" onclick="deshabilita();" required="" >
									<label class="form-check-label" for="hijosNo">
										No
									</label>
								</div>
							</div>	
						</div>
						<div class="col-md-3">
							<label for="">Número de Hijos</label>
							<input type="text" name="num_hijos" id="num_hijos" class="form-control" disabled placeholder="...">
						</div>

					</div>
				</div>		
			</div>
			<h4 class="pt-5 pb-3"><b>Tipo de Peticiónes</b></h4>
			<div class="container_form ">

				<div class="radio col-md-12 ">
					<p class="mb-4">Selecciona el tipo de solicitud, carga el archivo segun sea el caso y expon tu motivo</p>
					<div class="row justify-content-center">
						<div class=" col-4 text-center" >
							<input class="form-check-input" type="radio" name="tipoSolicitud" id="tipoSalud" value="1" onclick="" required>
							<label class="form-check-label" for="tipoSalud">
								Salud
							</label>
						</div>
						<div class=" col-4 text-center" >
							<input class="form-check-input" type="radio" name="tipoSolicitud" id="tipoSocial" value="2" onclick=""  required>
							<label class="form-check-label" for="tipoSocial">
								Social
							</label>
						</div>
						<div class=" col-4 text-center" >
							<input class="form-check-input" type="radio" name="tipoSolicitud" id="tipoLegal" value="3" onclick=""  required>
							<label class="form-check-label" for="tipoLegal">
								Legal
							</label>
						</div>
					</div>	
				</div>
		
		<div class="col-md-12 pt-4 pl-5 displayNone" id="textoInstruc">
			Porfavor adjunta los siguientes requistios para procesar tu socilitud.
			<ul class="pl-5">
				<li>Los archivos no deben superar el máximo de <b>2MB</b> y ser de tipo <b>.pdf</b></li>
			</ul>
		</div>

				<div class="row justify-content-around">

					<div class="col text-center pt-5 displayNone " id="archivo1">
						<span class="inputFile">
							<input type="file" name="inputFile" id="inputFile">
						</span>
						<label for="inputFile" class="bien icn_input" id="label">
							<span id="labelText"></span>
						</label>
					</div> 

					<div class="col text-center pt-5 displayNone " id="archivo2">
						<span class="inputFile2">
							<input type="file" name="inputFile2" id="inputFile2">
						</span>
						<label for="inputFile2" class="bien2 icn_input" id="label2">
							<span id="labelText"></span>
						</label>
					</div> 

					{{-- <div class="col text-center pt-5 displayNone" id="archivo3">
						<span class="inputFile3">
							<input type="file" name="inputFile3" id="inputFile3">
						</span>
						<label for="inputFile3">
							<span id="labelText"></span>
						</label>
					</div>  --}}
				</div>
				<div class="container">
					<div class="col-md-12" id="mensaje"></div>
				</div>
				
		
				

				<div class="col-12 mt-5 exposicion">
					<label for="">Exposición de Motivos</label>
					<textarea id="motivos" name=""  rows="10" class="form-control" placeholder="Describe tu petición" disabled></textarea>
				</div>

				<div class="col-md-12 text-center mt-4">
					<input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="Enviar">
				</div>
				
			</div>
		</form>
	</div>
@endsection
