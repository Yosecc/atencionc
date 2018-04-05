<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>R.I.V.E</title>
	<link rel="stylesheet" href="views/css/bootstrap.css">
	<link rel="stylesheet" href="views/css/bootstrap-grid.css">
	<link rel="stylesheet" href="views/css/bootstrap-reboot.css">
	<!--PORSONALIZADOS-->
	<link rel="stylesheet" href="views/css/styles.css">
	<link rel="stylesheet" href="views/css/base.css">
	<link rel="stylesheet" href="views/css/basic.css">
	<link rel="stylesheet" href="views/css/custom.css">



</head>
<body class="bwhite">
	<div>
		<?php 
			include("views/modules/cabecera.php");
		?>
	</div>
	<div class="padding0 container-fluid mb-5">
			<div class="bg img-principal" style="height: 200px">

				<div class="row justify-content-center align-items-center no-gutters content-text pl-1 pr-1" >

				<div class="bold"><h2 class="color-white"><b>Registro Internacional de Venezolanos en el Exterior</b></h2></div>

			</div>
				<!--img src="views/img/img.jpg" class="img-fluid" alt="Responsive image"-->
			</div>
		<div class="container mt-5 mb-5 ">
			<?php 
				$modulos = new Enlaces();
        		$modulos -> enlacesControllers();
			 ?>
		</div>
		
		
	</div>


		
	<div>
		<?php 
			include("views/modules/footer.php");
		?>
	</div>
<!--BOOTSTRAP.JS-->
	<script src="views/js/bootstrap.js"></script>
	<script src="views/js/jquery-3.3.1.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>


</body>
</html>