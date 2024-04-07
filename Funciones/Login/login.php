<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Login</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>

<body class="transicion-corta scroll cursor-morado">
	<!-- Cabeza -->

	<nav class="blur blur-blanco nav-login">
		<h1 class="titulo-nav-login fuente-sistema">U.E.P. Batalla de Niquitao</h1>
	</nav>
	<nav class="blur-azul nav2-login"></nav>
	<nav class="blur-rojo nav3-login"></nav>

	<!-- Cuerpo -->
	<div class="z-login scroll-bar">
	<div class="contenedor-login scroll borde-rojo">
		<div class="formulario-login blur blur-blanco borde-azul">
			<form method="POST" action="">
			<h1 class="titulo-formulario-login fuente-sistema">Iniciar Sesión</h1>
			<p class="texto-formulario-login">Cédula <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="campo-login transicion-corta borde-negro fuente-sistema" onkeypress="return solonumeros(event);" name="usuario" type="number" placeholder="V --.---.---">
			<p class="texto-formulario-login">Contraseña <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="campo-login transicion-corta borde-negro fuente-sistema" name="clave" type="password" placeholder="********">
			<br>
			<hr class="blur-azul">
			<br>
			<?php include "../../con_db.php"; include "../../controlador/inicio_sesion.php" ?>
			<input class="accion-login boton1-login borde-verde transicion-corta" type="submit" name="register"/>
			<input class="accion-login boton2-login borde-rojo transicion-corta" type="reset" name="reset"/>
			<a class="texto-recuperacion-login" href="recuperar.php">¿Has olvidado tu contraseña?</a>
			<a class="texto-recuperacion-login" href="registro.php">¡Registrarse Ahora!</a>
			</form>
		</div>
	</div>		
	</div>
	<!-- pie -->

		<footer class="pie-login blur blur-blanco borde-azul">
		<h1 class="titulo-pie-login fuente-sistema"> &copy; Abel Maestre Corporation, Inc.</h1>
		</footer>

	<!-- JS -->
	<script type="text/javascript" src="../../js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="../../js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="../../js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="../../js/scripts.js"></script><!-- Scripts -->
	<script type="text/javascript" src="../../js/Validacion.js"></script><!-- Validacion -->

</body>
</html>
