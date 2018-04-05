<?php 

	class EnlacesModels{
		public function enlacesModel($enlaces){

			if ($enlaces == "registro" ||
				$enlaces == "exito" ||
				$enlaces == "form" ||
				$enlaces == "contacto" ||
				$enlaces == "respuesta" ||
				$enlaces == "error"){

				$module= "views/modules/".$enlaces.".php";

			}elseif ($enlaces == "index") {
				
				$module= "views/modules/inicio.php";

			}else{

				$module= "views/modules/inicio.php";
			}
			return $module;

		}
	}