<?php
include("../../controlador/verificacion_sesion.php")
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">

	
	
</head>

<body class="transicion-corta scroll cursor-negro">
	<audio autoplay src="../../audio/sound/Inicio de sesion.mp3"></audio>
<?php include "../menu-contextual.php"; ?>
	<!-- Cabeza -->
	<header>
		<!-- Navegación Horizontal -->
		<nav class="nav blur blur-gris-suave borde-azul">
		<!-- Menú Horizontal -->
			<ul class="menu">
				<?php include "../menu-superior-1.php"; ?>
				<!-- Texto de contacto -->
				<li><a href="../Soporte/soporte.php"><div class="pointer-negro boton-central boton-superior transicion-corta borde-negro">CONTACTO</div></a></li>
				<!-- Logo del colegio -->
<li><a href="../Acerca/hogar-acerca-de.php"><div class="pointer-azul boton-menu-superior imagen-niquitao transicion-corta borde-negro" title="UEP Batalla de Niquitao"></div></a></li>
			<ul>
		</nav>
		<?php include "../menu-lateral.php"; ?>
		<?php include "../menu-lateral-2.php"; ?>
	</header>
<!-- Cuerpo -->
	<div class="z zp-exterior blur blur-blanco scroll borde-azul">
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-azul transicion-corta">Mirai ASM - Batalla de Niquitao
			</p>
		</div>
		<?php include "buscar-mision-vision.php"; ?>
	</div>
	<div class="u">
		<?php include "../pie1.php"; ?>
		<?php include "../pie2.php"; ?>
		<!-- Contenedor W -->
		<div class="w">
		<?php include "../pie3.php"; ?>
		<!-- Pie de pagina -->
			<footer class="pie blur blur-gris-suave borde-negro">
					<!-- Lista Horizontal -->
					<ul class="menu-pie">
						<!-- Boton más -->
						<li><a href="#"><div class="pointer-negro boton-menu-superior imagen-retroceder transicion-corta borde-negro"></div></a></li>
						<!-- Boton atrás -->
						<li><a href="#"><div class="pointer-negro boton-menu-superior imagen-atras transicion-corta borde-negro"></div></a></li>
						<!-- Boton Hogar -->
						<li><a href="#"><div class="pointer-negro boton-menu-superior imagen-hogar transicion-corta borde-negro"></div></a></li>
						<!-- Boton adelante -->
						<li><a href="#"><div 	class="pointer-negro boton-menu-superior imagen-adelante transicion-corta borde-negro"></div></a></li>
						<!-- Boton tema -->
						<li><a href="#"><div class="pointer-negro boton-menu-superior imagen-avanzar transicion-corta borde-negro"></div></a></li>

					<ul>

			</footer>

		</div>
	</div>
</div>
	<!-- JS -->
	<!-- jQuery -->
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<!-- Parallax -->
	<script type="text/javascript" src="../../js/jquery.parallax.js"></script>
	<!-- Smooth Scroll -->
	<script type="text/javascript" src="../../js/smoothscroll.js"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="../../js/scripts.js"></script>
	<!-- Menu Contextual -->
	<script type="text/javascript" src="../../js/Menu-Contextual.js"></script>
	<!-- Fecha & Hora -->
	<script type="text/javascript" src="../../js/moment-min.js"></script>

</body>

</html>