<?php
include("../../controlador/verificacion_sesion.php")
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Agregar Mensualidades (BdN)</title>
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
				<?php include "menu-acciones-mensualidad.php"; ?>
				<?php include "../menu-superior-2.php"; ?>
			<ul>
		</nav>
		<?php include "../menu-lateral.php"; ?>
		<?php include "../menu-lateral-2.php"; ?>
	</header>
<!-- Cuerpo -->
<form method="POST">
	<div class="z zp-estudiante1 blur blur-blanco scroll scroll-rojo borde-rojo">
	<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-rojo transicion-corta">Agregar Mensualidades</p>
		</div>
		<div class="y scroll scroll-rojo">
			<div class="contenedorx blur blur-blanco borde-rojo">
					<div class="boton-menu imagen-mensualidad transicion-corta borde-rojo"></div>

					<div class="formularioaux">
					<p class="sub-texto">Vigencia Inicio <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<input class="text-rojo input input-blanco transicion-corta borde-rojo" required name="vigenciai-m" type="date" placeholder="dd/mm/aaaa"/>
					<p class="sub-texto">Vigencia Final <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<input class="text-rojo input input-blanco transicion-corta borde-rojo" required name="vigenciaf-m" type="date" placeholder="dd/mm/aaaa">
					<p class="sub-texto">Mes <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<select name="mes-m" class="pointer-rojo input input-blanco borde-morado">			
						<option value="Enero">Enero</option>
						<option value="Febrero">Febrero</option>
						<option value="Marzo">Marzo</option>
						<option value="Abril">Abril</option>
						<option value="Mayo">Mayo</option>
						<option value="Junio">Junio</option>
						<option value="Julio">Julio</option>
						<option value="Agosto">Agosto</option>
						<option value="Septiembre">Septiembre</option>
						<option value="Octubre">Octubre</option>
						<option value="Noviembre">Noviembre</option>
						<option value="Diciembre">Diciembre</option>			
					</select>
				</div>
			</div>
		</div>
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-rojo transicion-corta">¡Ha sido todo por ahora!</p>
		</div>
		<?php 
	include("ingresar-mensualidades.php");
	?>
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