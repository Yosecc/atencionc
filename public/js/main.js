//VALIDO TAMAÑO Y TIPO DE ARCHIVO DEL INPUTFILE1
			$("#inputFile").change(function(){
				var archivo = this.files[0];
				archivoSize = archivo.size;
				archivoType = archivo.type;
				//console.log('archivo', archivo);
				//console.log('archivoSize', archivoSize);
				//console.log('archivoType', archivoType);

				if (Number(archivoSize) > 2000000) {
						
					$("#mensaje").before('<div class="alert alert-danger red color-white" role="alert">Archivo excede los 2MB</div>');
					$(".bien").addClass("error");
					$(".bien").removeClass("success");
					$("#label").removeClass("icn_input");
					$("#label").removeClass("icn_input_success");
					$("#label").addClass("icn_input_error");
					
					document.form.enviar.disabled = true;
					document.form.motivos.disabled = true;

				}else{
					$(".alert").remove();
					$(".bien").removeClass("error");						
					$(".bien").addClass("success");
					$("#label").removeClass("icn_input");
					$("#label").addClass("icn_input_success");
					document.form.enviar.disabled = false;
					document.form.motivos.disabled = false;
				}

				if (archivoType == "application/pdf") {

					$(".alert").remove();
					$(".bien").removeClass("error");						
					$(".bien").addClass("success");
					$("#label").removeClass("icn_input");
					$("#label").addClass("icn_input_success");
					document.form.enviar.disabled = false;
					document.form.motivos.disabled = false;

				}else{

					$("#mensaje").before('<div class="alert alert-danger red color-white" role="alert">El Archivo debe ser .PDF</div>');
					$(".bien").addClass("error");
					$(".bien").removeClass("success");
					$("#label").removeClass("icn_input");
					$("#label").removeClass("icn_input_success");
					$("#label").addClass("icn_input_error");
					document.form.enviar.disabled = true;
					document.form.motivos.disabled = true;


				}

			})	
//FIN VALIDACION 1

///////////////////////////////////////
		
// VALIDO TAMAÑO Y TIPO DE ARCHIVO DEL INPUT2
			$("#inputFile2").change(function(){
				var archivo = this.files[0];
				archivoSize = archivo.size;
				archivoType = archivo.type;
				//console.log('archivo', archivo);
				//console.log('archivoSize', archivoSize);
				//console.log('archivoType', archivoType);

				if (Number(archivoSize) > 2000000) {
						
					$("#mensaje").before('<div class="alert alert-danger red color-white" role="alert">Archivo excede los 2MB</div>');
					$(".bien2").addClass("error");
					$(".bien2").removeClass("success");
					$("#label2").removeClass("icn_input");
					$("#label2").removeClass("icn_input_success");
					$("#label2").addClass("icn_input_error");
					
					document.form.enviar.disabled = true;

				}else{
					$(".alert").remove();
					$(".bien2").removeClass("error");						
					$(".bien2").addClass("success");
					$("#label2").removeClass("icn_input");
					$("#label2").addClass("icn_input_success");
					document.form.enviar.disabled = false;
					document.form.motivos.disabled = false;
				}

				if (archivoType == "application/pdf") {

					$(".alert").remove();
					$(".bien2").removeClass("error");						
					$(".bien2").addClass("success");
					$("#label2").removeClass("icn_input");
					$("#label2").addClass("icn_input_success");
					document.form.enviar.disabled = false;
					document.form.motivos.disabled = false;

				}else{

					$("#mensaje").before('<div class="alert alert-danger red color-white" role="alert">El Archivo debe ser .PDF</div>');
					$(".bien2").addClass("error");
					$(".bien2").removeClass("success");
					$("#label2").removeClass("icn_input");
					$("#label2").removeClass("icn_input_success");
					$("#label2").addClass("icn_input_error");
					document.form.enviar.disabled = true;

				}

			})


// FIN VALIDACION2

// ////////////////////////////////////

// MUESTRO Y/O OCULTO INPUT SEGUN EL TIPO 
		
			$(document).ready(function(){

				$("#tipoSalud").click(function(){
					$("#archivo1").removeClass("displayNone");
					$("#archivo1").children().children("#labelText").html('Informe Médico');

					$("#archivo2").addClass("displayNone");
					$("#archivo3").addClass("displayNone");

					$("#textoInstruc").removeClass('displayNone');

					$(".alert").remove();

					$("#label").removeClass("icn_input_success");
					$("#label").removeClass("icn_input_error");
					$("#label").addClass("icn_input");

					$(".bien").removeClass("error");
					$(".bien").removeClass("success");
					$(".bien").addClass("bien");

					$("#label2").removeClass("icn_input_success");
					$("#label2").removeClass("icn_input_error");
					$("#label2").addClass("icn_input");

					$(".bien2").removeClass("error");
					$(".bien2").removeClass("success");
					$(".bien2").addClass("bien");

					document.form.motivos.disabled = true;
				});
				$("#tipoSocial").click(function(){
					$("#archivo1").addClass("displayNone");
					$("#archivo2").addClass("displayNone");
					$("#textoInstruc").addClass('displayNone');
					document.form.motivos.disabled = false;
					$(".alert").remove();

					$("#label").removeClass("icn_input_success");
					$("#label").removeClass("icn_input_error");
					$("#label").addClass("icn_input");

					$(".bien").removeClass("error");
					$(".bien").removeClass("success");
					$(".bien").addClass("bien");

					$("#label2").removeClass("icn_input_success");
					$("#label2").removeClass("icn_input_error");
					$("#label2").addClass("icn_input");

					$(".bien2").removeClass("error");
					$(".bien2").removeClass("success");
					$(".bien2").addClass("bien");

				});
				$("#tipoLegal").click(function(){
					$("#archivo1").removeClass("displayNone");
					$("#archivo1").children().children("#labelText").html('Cedula de Solicitante');

					$("#archivo2").removeClass("displayNone");
					$("#archivo2").children().children("#labelText").html('Cedula del Beneficiario');

					$("#textoInstruc").removeClass('displayNone');

					$(".alert").remove();

					$("#label").removeClass("icn_input_success");
					$("#label").removeClass("icn_input_error");
					$("#label").addClass("icn_input");

					$(".bien").removeClass("error");
					$(".bien").removeClass("success");
					$(".bien").addClass("bien");

					$("#label2").removeClass("icn_input_success");
					$("#label2").removeClass("icn_input_error");
					$("#label2").addClass("icn_input");

					$(".bien2").removeClass("error");
					$(".bien2").removeClass("success");
					$(".bien2").addClass("bien");

					document.form.motivos.disabled = true;

				});

			});
/////////////////////////////////////
///
///HABILITO O DESHABILITO INPUT DE NUMERO DE HIJOS
		
			function habilita(){
				document.form.num_hijos.disabled = false;
				
			}

			function deshabilita(){
				document.form.num_hijos.disabled = true;
				document.form.num_hijos.value = "";
				
			}
//////////////////////////////////////
///
/// IMPRIMO NOMBRE DEL ARCHIVO CARGADO SEGUN EL INPUT
/// 
			jQuery('input[type=file]').change(function(){
			 var filename = jQuery(this).val().split('\\').pop();
			 var idname = jQuery(this).attr('id');
			 console.log(jQuery(this));
			 console.log(filename);
			 console.log(idname);
			 jQuery('span.'+idname).next().find('span').html(filename);
			});