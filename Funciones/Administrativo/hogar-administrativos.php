<?php
include("../../controlador/verificacion_sesion.php");
include("../../controlador/verificacion_admin.php");
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Administrativos</title>
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
	<!-- Super Contenedor Z -->
	<div class="z zp-pasillo blur blur-blanco scroll scroll-morado borde-morado">
		<!-- Administrativos Tipo 1-->
		<!-- Gran Contenedor Y -->
		<div class="y scroll scroll-morado">
			<!-- Contenedor X -->
			<div class="contenedory blur blur-blanco borde-morado">
				<!-- Espacios -->
				<p></p>
				<!-- Logo circular -->
				<div class="boton-central-grande imagen-usuario transicion-corta borde-morado">

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
							<p class="titulo-seccion">Personal Administrativo</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-morado transicion-corta">Reportes</p>
		</div>
		<div class="x scroll scroll-morado">
			<!-- Contenedor X -->
			<div class="contenedorx blur blur-blanco borde-morado">
				<!-- Espacios -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-usuario transicion-corta borde-morado">

				</div>
				<!-- Boton Blanco -->
				<a href="reporte-administrativo.php" class="boton boton-activo boton-morado transicion-corta borde-morado" target="_blank">Administrativos</a>
				<!-- Tabla X -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la Tabla -->
					<p class="texto-simple">Consultar Administrativos</p>
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
			<div class="contenedorx blur blur-blanco borde-morado">
				<!-- Espacio -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-usuario transicion-corta borde-morado">

				</div>
				<!-- Boton azul -->
				<a href="#" class="boton boton-activo boton-morado transicion-corta borde-morado">¿Admin?</a>
				<!-- Tabla x -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la tabla -->
					<p class="texto-simple">¿Qué es Administrador?</p>
					<!-- Columna -->
					<div class="columna">
						<!-- División x -->
						<hr class="blur-azul">
						<!-- Titulo de la columna -->
						<p class="texto-simple">Consulte nuestro manual de usuario</p>
						<!-- Fila x -->
						<div class="fila">
							<!-- División -->
							<hr class="blur-azul">
							<!-- Texto de la fila -->
							<p class="texto-simple">Disponible en local, PDF y web.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<embed  src="Portada Mandala.pdf" type="application/pdf" width="100%" height="100%" class="borde-morado blur-morado" />
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
			<footer class="pie blur blur-morado-suave borde-morado">
				<!-- Lista Horizontal -->
				<ul class="menu-pie">
					<!-- Boton más -->
					<li><a href="#"><div title="Sección Anterior" class="pointer-morado boton-menu-superior imagen-retroceder transicion-corta borde-morado"></div></a></li>
					<!-- Boton atrás -->
					<li><a href="#"><div title="Página Anterior" class="pointer-morado boton-menu-superior imagen-atras transicion-corta borde-morado"></div></a></li>
					<!-- Boton Hogar -->
					<li><a href="#"><div title="Hogar" class="pointer-morado boton-menu-superior imagen-hogar transicion-corta borde-morado"></div></a></li>
					<!-- Boton adelante -->
					<li><a href="#"><div title="Página Siguiente" class="pointer-morado boton-menu-superior imagen-adelante transicion-corta borde-morado"></div></a></li>
					<!-- Boton tema -->
					<li><a href="#"><div title="Sección Siguiente" class="pointer-morado boton-menu-superior imagen-avanzar transicion-corta borde-morado"></div></a></li>
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