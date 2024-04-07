<?php
include("../../con_db.php")
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Recuperar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>

<body class="transicion-corta scroll cursor-morado">
	<!-- Cabeza -->

	<nav class="blur blur-blanco nav-login">
		<h1 class="titulo-nav-login fuente-sistema">U.E.P. Batalla de Niquitao - Recuperar Contraseña</h1>
	</nav>
	<nav class="blur-azul nav2-login"></nav>
	<nav class="blur-rojo nav3-login"></nav>

<!-- Cuerpo -->
<div class="z-login">
	<form name="registro" method="POST" action="">
	<div class="contenedor-login scroll">
			<div class="formulario-login blur blur-blanco borde-azul">
					<p class="texto-formulario-login">Cédula <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<input class="fuente-sistema campo-login transicion-corta borde-negro" onkeypress="return solonumeros(event);" name="cedula" type="text" placeholder="V:--.---.---">
					
					<input class="accion-login boton1-login borde-verde" type="submit" name="register"/>
					<input class="accion-login boton2-login borde-rojo" type="reset" name="reset"/>
					<?php 
					if(!empty($_POST["register"])){
						if (!empty($_POST["cedula"])) {
							$usuario=trim($_POST["cedula"]);
							$nombre='';
							$result = mysqli_query($conex, "CALL sp_mostrar_preguntas('$usuario')");
							$row = mysqli_fetch_array($result);
							$nombre = $row[2];
							echo '
							
							<p class="texto-formulario-login">Excelente '; echo "<strong>$nombre</strong>"; echo ', sigamos...</p>
							
							<a href="recuperar-script.php?Id=' . $usuario . '" title="Siguiente sección"><div class="accion-login boton1-login borde-verde">Siguiente sección</div></a>';
						}
					}
					?>
			</div>
	</div>
	</form>
</div>

<!-- Pie -->
	<footer class="pie-login blur blur-blanco borde-azul">
	<h1 class="titulo-pie-login fuente-sistema"> &copy; Abel Maestre Corporation, Inc.</h1>
	</footer>
	
	<!-- JS -->
	<script type="text/javascript" src="../../js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="../../js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="../../js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="../../js/scripts.js"></script><!-- Scripts -->
	<script type="text/javascript" src="../../js/validacion.js"></script><!-- Scripts -->

</body>
</html>
