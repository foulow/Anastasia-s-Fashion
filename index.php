<?php
	include "configs/config.php";
	include "configs/funciones.php";
		
	if(!isset($p)){
		$p = "principal";
	}else{
		$p = $p;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Anastasia's Fashion</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<?php include_once ("vistas/header.php"); ?>
		<div class="cuerpo">
			<?php
				if(file_exists("modulos/".$p.".php")){
					include "modulos/".$p.".php";
				}else{
					echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
				}
			?>
		</div>
		<?php
			include_once("vistas/carrito.php");
			include_once("vistas/footer.php");
		?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>	
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="js/app.js"></script>
	</body>
</html>

