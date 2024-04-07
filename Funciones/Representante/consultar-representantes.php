<?php
include("../../controlador/verificacion_sesion.php")
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Consultar Representante (BdN)</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>
<body class="transicion-corta scroll cursor-rojo">
	<?php include "../menu-contextual.php"; ?>
	<!-- Cabeza -->
	<header>
		<!-- Navegación Horizontal -->
		<nav class="nav blur blur-rojo-suave borde-rojo">
		<!-- Menú Horizontal -->
		<ul class="menu">
				<?php include "../menu-superior-1.php"; ?>
				<?php include "menu-acciones-representante.php"; ?>
				<?php include "../menu-superior-2.php"; ?>
			<ul>
		</nav>
		<?php include "../menu-lateral.php"; ?>
		<?php include "../menu-lateral-2.php"; ?>
	</header>
<!-- Cuerpo -->
<form method="POST">
	<div class="z zp-estudiante1 scroll scroll-rojo borde-rojo">
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-rojo transicion-corta">Consultar Representante</p>
		</div>
		<?php include("../Formularios/Unicos/cedula.php"); ?>
		<?php include("buscar-representantes.php"); ?>
	</div>
	</div>
	
	<!-- Navegación Inferior -->
	<!-- Gran contenedor U -->
	<div class="u">
		<?php include "../pie1.php"; ?>
		<?php include "../pie2.php"; ?>
		<!-- Contenedor W -->
		<div class="w">
		<!-- Pie de pagina -->
		<footer class="pie pie-registro blur blur-rojo-suave borde-rojo">
				<!-- Lista Horizontal -->
				<ul class="menu-pie">
					<!-- Boton Retroceder -->
					<li><a href="#"><div class="pointer-rojo boton-menu-superior imagen-retroceder transicion-corta borde-rojo"></div></a></li>
					<!-- Boton para BORRAR INPUTS -->
					<li><input class="accion boton1 transicion-corta borde-rojo" type="reset" name="reset"></li>
					<!-- Boton atrás -->
					<li><a href="#"><div class="pointer-rojo boton-menu-superior imagen-atras transicion-corta borde-rojo"></div></a></li>
					<!-- Boton Hogar -->
					<li><a href="#"><div class="pointer-rojo boton-menu-superior imagen-hogar transicion-corta borde-rojo"></div></a></li>
					<!-- Boton adelante -->
					<li><a href="#"><div class="pointer-rojo boton-menu-superior imagen-adelante transicion-corta borde-rojo"></div></a></li>
					<!-- Boton para REGISTRAR -->
					<li><input class="accion boton2 transicion-corta borde-verde" type="submit" name="register"/></li>
					<!-- Boton Avanzar -->
					<li><a href="#"><div class="pointer-rojo boton-menu-superior imagen-avanzar transicion-corta borde-rojo"></div></a></li>
				<ul>
		</footer>
		</div>
	</div>
</form>
	<!-- JS -->
	<!-- Script para validar inputs -->
	<script type="text/javascript" src="../../js/Validacion.js"></script>
	<!-- jQuery -->
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<!-- Parallax -->
	<script type="text/javascript" src="../../js/jquery.parallax.js"></script>
	<!-- Smooth scroll scroll-rojo-->
	<script type="text/javascript" src="../../js/smoothscroll.js"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="../../js/scripts.js"></script>
	<!-- Menu Contextual -->
	<script type="text/javascript" src="../../js/Menu-Contextual.js"></script>
	<!-- Fecha & Hora -->
	<script type="text/javascript" src="../../js/moment-min.js"></script>
</body>
</html>