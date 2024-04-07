<?php
include("../../controlador/verificacion_sesion.php");
include("../../controlador/verificacion_admin.php");
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Agregar Mision y Vision (BdN)</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>
<body class="transicion-corta scroll cursor-morado">
	<?php include "../menu-contextual.php"; ?>
	<!-- Cabeza -->
	<header>
		<!-- Navegación Horizontal -->
		<nav class="nav blur blur-morado-suave borde-morado">
		<!-- Menú Horizontal -->
		<ul class="menu">
				<?php include "../menu-superior-1.php"; ?>
				<?php include "menu-acciones-administrativos.php"; ?>
				<?php include "../menu-superior-2.php"; ?>
			<ul>
		</nav>
		<?php include "../menu-lateral.php"; ?>
		<?php include "../menu-lateral-2.php"; ?>
	</header>
<!-- Cuerpo -->
<form method="POST">
	<div class="z zp-pasillo blur blur-blanco scroll scroll-morado borde-morado">
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-morado transicion-corta">Agregar Administrativos (NO TERMINADO)</p>
		</div>
		<div class="y scroll scroll-morado">
			<div class="contenedorx blur blur-blanco borde-morado">
				<div class="boton-menu imagen-usuario transicion-corta borde-morado"></div>
				<div class="formularioaux">
					<p class="sub-texto">Cédula</p>
					<input class="input input-blanco transicion-corta borde-morado" required name="cedula-a" type="number" onkeypress="return solonumeros(event);" placeholder="CI --.---.---"/>
					<p class="sub-texto">Nombre</p>
					<input class="input input-blanco transicion-corta borde-morado" onkeypress="return solotexto(event);" required name="nombre-a" type="text" placeholder="Oriana">
					<p class="sub-texto">Apellido</p>
					<input class="input input-blanco transicion-corta borde-morado" onkeypress="return solotexto(event);" required name="apellido-a" type="text" placeholder="Villasana">
				</div>
			</div>
		</div>
	</div>
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-morado transicion-corta">¡Ha sido todo por ahora!</p>
		</div>
	</div>
	<?php 
	include("ingresar-administrativos.php");
	?>
	<!-- Navegación Inferior -->
	<!-- Gran contenedor U -->
	<div class="u">
		<?php include "../pie1.php"; ?>
		<?php include "../pie2.php"; ?>
		<!-- Contenedor W -->
		<div class="w">
		<!-- Pie de pagina -->
		<footer class="pie pie-registro blur blur-morado-suave borde-morado">
				<!-- Lista Horizontal -->
				<ul class="menu-pie">
					<!-- Boton Retroceder -->
					<li><a href="#"><div class="pointer-morado boton-menu-superior imagen-retroceder transicion-corta borde-morado"></div></a></li>
					<!-- Boton para BORRAR INPUTS -->
					<li><input class="accion boton1 transicion-corta borde-rojo" type="reset" name="reset"></li>
					<!-- Boton atrás -->
					<li><a href="#"><div class="pointer-morado boton-menu-superior imagen-atras transicion-corta borde-morado"></div></a></li>
					<!-- Boton Hogar -->
					<li><a href="#"><div class="pointer-morado boton-menu-superior imagen-hogar transicion-corta borde-morado"></div></a></li>
					<!-- Boton adelante -->
					<li><a href="#"><div class="pointer-morado boton-menu-superior imagen-adelante transicion-corta borde-morado"></div></a></li>
					<!-- Boton para REGISTRAR -->
					<li><input class="accion boton2 transicion-corta borde-verde" type="submit" name="register"/></li>
					<!-- Boton Avanzar -->
					<li><a href="#"><div class="pointer-morado boton-menu-superior imagen-avanzar transicion-corta borde-morado"></div></a></li>
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
	<!-- Smooth scroll scroll-morado-->
	<script type="text/javascript" src="../../js/smoothscroll.js"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="../../js/scripts.js"></script>
	<!-- Menu Contextual -->
	<script type="text/javascript" src="../../js/Menu-Contextual.js"></script>
	<!-- Fecha & Hora -->
	<script type="text/javascript" src="../../js/moment-min.js"></script>
</body>
</html>