<?php
include("../../controlador/verificacion_sesion.php")
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Representante</title>
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
	<!-- Super Contenedor Z -->
	<div class="z zp-estudiante1 blur blur-blanco scroll scroll-rojo borde-rojo">
		<!-- Representantes Tipo 1-->
		<!-- Gran Contenedor Y -->
		<div class="y scroll scroll-rojo">
			<!-- Contenedor X -->
			<div class="contenedory blur blur-blanco borde-rojo">
				<!-- Espacios -->
				<p></p>
				<!-- Logo circular -->
				<div class="boton-central-grande imagen-representante transicion-corta borde-rojo">

				</div>
				<!-- Tabla X vacía -->
				<div class="tabla">
					<!-- Espacios -->
					<p></p>
					<!-- Columna X Vacía -->
					<div class="columna">
						<!-- Espacios -->
						<p></p>
						<!-- Fila X vacía -->
						<div class="fila">
							<!-- Titulo de la sección -->
							<p class="titulo-seccion">Padres y Representantes</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-rojo transicion-corta">Reportes</p>
		</div>
		<div class="x scroll scroll-rojo">
			<!-- Contenedor X -->
			<div class="contenedorx blur blur-blanco borde-rojo">
				<!-- Espacios -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-representante transicion-corta borde-rojo">

				</div>
				<!-- Boton Blanco -->
				<a href="reporte-retiro-hogar.php" class="boton boton-activo boton-rojo transicion-corta borde-rojo">Retiro</a>
				<!-- Tabla X -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la Tabla -->
					<p class="texto-simple">Constancia de Retiro</p>
					<!-- Conlumna X -->
					<div class="columna">
						<!-- División -->
						<hr class="blur-azul">
						<!-- Titulo de la columna -->
						<p class="texto-simple">...</p>
						<!-- Fila X -->
						<div class="fila">
							<!-- División -->
							<hr class="blur-azul">
							<!-- Texto de la fila -->
							<p class="texto-simple">...</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Contenedor X -->
			<div class="contenedorx blur blur-blanco borde-rojo">
				<!-- Espacio -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-representante transicion-corta borde-rojo">

				</div>
				<!-- Boton azul -->
				<a href="reporte-aceptacion-hogar.php" class="boton boton-activo boton-rojo transicion-corta borde-rojo">Aceptación</a>
				<!-- Tabla x -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la tabla -->
					<p class="texto-simple">Constancia de Aceptación</p>
					<!-- Columna -->
					<div class="columna">
						<!-- División x -->
						<hr class="blur-azul">
						<!-- Titulo de la columna -->
						<p class="texto-simple">...</p>
						<!-- Fila x -->
						<div class="fila">
							<!-- División -->
							<hr class="blur-azul">
							<!-- Texto de la fila -->
							<p class="texto-simple">...</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Contenedor x -->
			<div class="contenedorx blur blur-blanco borde-rojo">
				<!-- Espacios -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-representante transicion-corta borde-rojo">

				</div>
				<!-- Boton rojo -->
				<a href="reporte-estudio-hogar.php" class="boton boton-activo boton-rojo transicion-corta borde-rojo">Estudio</a>
				<!-- Tabla x -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la tabla -->
					<p class="texto-simple">Constancia de Estudio</p>
					<!-- Columna x -->
					<div class="columna">
						<!-- División -->
						<hr class="blur-azul">
						<!-- Titulo de la columna -->
						<p class="texto-simple">...</p>
						<!-- Fila -->
						<div class="fila">
							<!-- División -->
							<hr class="blur-azul">
							<!-- Texto de la fila -->
							<p class="texto-simple">...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Navegación Inferior -->
	<!-- Gran contenedor U -->
	<div class="u">
		<?php include "../pie1.php"; ?>
		<?php include "../pie2.php"; ?>
		<!-- Contenedor W -->
		<div class="w">
			<?php include "../pie3.php"; ?>
			<!-- Pie de pagina -->
			<footer class="pie blur blur-rojo-suave borde-rojo">
				<!-- Lista Horizontal -->
				<ul class="menu-pie">
					<!-- Boton más -->
					<li><a href="#"><div title="Sección Anterior" class="pointer-rojo boton-menu-superior imagen-retroceder transicion-corta borde-rojo"></div></a></li>
					<!-- Boton atrás -->
					<li><a href="#"><div title="Página Anterior" class="pointer-rojo boton-menu-superior imagen-atras transicion-corta borde-rojo"></div></a></li>
					<!-- Boton Hogar -->
					<li><a href="#"><div title="Hogar" class="pointer-rojo boton-menu-superior imagen-hogar transicion-corta borde-rojo"></div></a></li>
					<!-- Boton adelante -->
					<li><a href="#"><div title="Página Siguiente" class="pointer-rojo boton-menu-superior imagen-adelante transicion-corta borde-rojo"></div></a></li>
					<!-- Boton tema -->
					<li><a href="#"><div title="Sección Siguiente" class="pointer-rojo boton-menu-superior imagen-avanzar transicion-corta borde-rojo"></div></a></li>
				</ul>
			</footer>
		</div>
	</div>
	<!-- JS -->
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