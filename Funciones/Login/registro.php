<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Registro</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>

<body class="transicion-corta scroll cursor-morado">
	<!-- Cabeza -->

	<nav class="blur blur-blanco nav-login">
		<h1 class="titulo-nav-login fuente-sistema">U.E.P. Batalla de Niquitao - Registro</h1>
	</nav>
	<nav class="blur-azul nav2-login"></nav>
	<nav class="blur-rojo nav3-login"></nav>

	<!-- Cuerpo -->
<div class="z-login">
	<form name="registro" method="POST" action="">
	<div class="contenedor-login scroll">
			<div class="formulario-login blur blur-blanco borde-azul">
					<p class="texto-formulario-login">Cédula <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<input class="fuente-sistema campo-login transicion-corta borde-negro" onkeypress="return solonumeros(event);" required name="usuario" type="number" placeholder="V --.---.---">
					<p class="texto-formulario-login">Nombres <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<input class="fuente-sistema campo-login transicion-corta borde-negro" onkeypress="return solotexto(event);" required name="nombre" type="text" placeholder="'Abel'">
					<p class="texto-formulario-login">Apellidos <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<input class="fuente-sistema campo-login transicion-corta borde-negro" onkeypress="return solotexto(event);" required  name="apellido" type="text" placeholder="'Maestre'">
					<p class="texto-formulario-login">Contraseña <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<input class="fuente-sistema campo-login transicion-corta borde-negro" required id="password" name="clave" type="password" placeholder="********">
			</div>
			<div class="formulario-login blur blur-blanco borde-azul">
				<p class="texto-formulario-login">Pregunta de Seguridad 1 <strong class="texto-rojo texto-borde-negro">*</strong></p>
				<input class="fuente-sistema campo-login transicion-corta borde-negro" name="pregunta1" type="text" required placeholder="'Lugar favorito'">
				<p class="texto-formulario-login">Respuesta <strong class="texto-rojo texto-borde-negro">*</strong></p>
				<input class="fuente-sistema campo-login transicion-corta borde-negro" name="respuesta1" type="text" required placeholder="'Playa'">
				<p class="texto-formulario-login">Pregunta de Seguridad 2 <strong class="texto-rojo texto-borde-negro">*</strong></p>
				<input class="fuente-sistema campo-login transicion-corta borde-negro" name="pregunta2" type="text" required placeholder="'Postre favorito'">
				<p class="texto-formulario-login">Respuesta <strong class="texto-rojo texto-borde-negro">*</strong></p>
				<input class="fuente-sistema campo-login transicion-corta borde-negro" name="respuesta2" type="text" required placeholder="'Pastel de chocolate'">
			</div>
			<div class="formulario-login blur blur-blanco borde-azul">
				<br>
				<p class="texto-formulario-login">Tipo de Usuario <strong class="texto-rojo texto-borde-negro">*</strong></p>
				<select name="tipo" class="pointer-negro input input-blanco borde-morado">		
						<option value="1">1. Administrador</option>
						<option value="2">2. Asistente</option>
						<option value="3">3. Visitante (Descontinuado)</option>
					</select>
				<br>
				<hr class="blur-azul">
				<br>
				<?php include "../../con_db.php"; include "../../controlador/ingresar_usuario.php" ?>
				<input class="accion-login boton1-login borde-rojo" onclick="validarPassword(document.registro.password)" type="submit" name="register"/>
				<input class="accion-login boton2-login borde-verde" type="reset" name="reset"/>
				<br>
				<a class="texto-recuperacion-login" href="recuperar.php">¿Has olvidado tu contraseña?</a>
				<a class="texto-recuperacion-login" href="login.php">¡Inicia sesión ahora!</a>
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
