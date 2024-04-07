<?php
include("../../controlador/verificacion_sesion.php")
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Notas</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>

<body class="transicion-corta scroll cursor-azul">
	<?php include "../menu-contextual.php"; ?>
	<!-- Cabeza -->
	<header>
		<!-- Navegación Horizontal -->
		<nav class="nav blur blur-azul-suave borde-azul">
		<!-- Menú Horizontal -->
		<ul class="menu">
				<?php include "../menu-superior-1.php"; ?>
				<?php include "menu-acciones-nota.php"; ?>
				<?php include "../menu-superior-2.php"; ?>
			<ul>
		</nav>
		<?php include "../menu-lateral.php"; ?>
		<?php include "../menu-lateral-2.php"; ?>
	</header>
<!-- Cuerpo -->
	<!-- Super Contenedor Z -->
	<div class="z zp-interior blur blur-blanco scroll scroll-azul borde-azul">
		<!-- Notas Tipo 1-->
		<!-- Gran Contenedor Y -->
		<div class="y scroll scroll-azul">
			<!-- Contenedor X -->
			<div class="contenedory blur blur-blanco borde-azul">
				<!-- Espacios -->
				<p></p>
				<!-- Logo circular -->
				<div class="boton-central-grande imagen-nota transicion-corta borde-azul">

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
							<p class="titulo-seccion">Cargar Notas</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-azul transicion-corta">Reportes</p>
		</div>
		<div class="x scroll scroll-azul">
			<!-- Contenedor X -->
			<div class="contenedorx blur blur-blanco borde-azul">
				<!-- Espacios -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-nota transicion-corta borde-azul">

				</div>
				<!-- Boton Blanco -->
				<a href="reporte-record-hogar.php" class="boton boton-activo boton-azul transicion-corta borde-azul">Notas</a>
				<!-- Tabla X -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la Tabla -->
					<p class="texto-simple">Consultar Boletín Informativo</p>
					<!-- Conlumna X -->
					<div class="columna">
						<!-- División -->
						<hr class="blur-azul">
						<!-- Titulo de la columna -->
						<p class="texto-simple">Masculinos:[]</p>
						<!-- Fila X -->
						<div class="fila">
							<!-- División -->
							<hr class="blur-azul">
							<!-- Texto de la fila -->
							<p class="texto-simple">Femeninos:[]</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Contenedor X -->
			<div class="contenedorx blur blur-blanco borde-azul">
				<!-- Espacio -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-nota transicion-corta borde-azul">

				</div>
				<!-- Boton azul -->
				<a href="reporte-literal-hogar.php" class="boton boton-activo boton-azul transicion-corta borde-azul">Literales</a>
				<!-- Tabla x -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la tabla -->
					<p class="texto-simple">Consultar Boletín</p>
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
			<div class="contenedorx blur blur-blanco borde-azul">
				<!-- Espacios -->
				<p></p>
				<!-- Logo cuadrado -->
				<div class="boton-menu imagen-nota transicion-corta borde-azul">

				</div>
				<!-- Boton rojo -->
				<a href="#" class="boton boton-activo boton-azul transicion-corta borde-azul">Notas Certificadas</a>
				<!-- Tabla x -->
				<div class="tabla">
					<!-- División -->
					<hr class="blur-azul">
					<!-- Titulo de la tabla -->
					<p class="texto-simple">Consultar Notas certificadas</p>
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
			<footer class="pie blur blur-azul-suave borde-azul">
				<!-- Lista Horizontal -->
				<ul class="menu-pie">
					<!-- Boton más -->
					<li><a href="#"><div title="Sección Anterior" class="pointer-azul boton-menu-superior imagen-retroceder transicion-corta borde-azul"></div></a></li>
					<!-- Boton atrás -->
					<li><a href="#"><div title="Página Anterior" class="pointer-azul boton-menu-superior imagen-atras transicion-corta borde-azul"></div></a></li>
					<!-- Boton Hogar -->
					<li><a href="#"><div title="Hogar" class="pointer-azul boton-menu-superior imagen-hogar transicion-corta borde-azul"></div></a></li>
					<!-- Boton adelante -->
					<li><a href="#"><div title="Página Siguiente" class="pointer-azul boton-menu-superior imagen-adelante transicion-corta borde-azul"></div></a></li>
					<!-- Boton tema -->
					<li><a href="#"><div title="Sección Siguiente" class="pointer-azul boton-menu-superior imagen-avanzar transicion-corta borde-azul"></div></a></li>
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
	<!-- Smooth scroll scroll-azul-->
	<script type="text/javascript" src="../../js/smoothscroll.js"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="../../js/scripts.js"></script>
	<!-- Menu Contextual -->
	<script type="text/javascript" src="../../js/Menu-Contextual.js"></script>
	<!-- Fecha & Hora -->
	<script type="text/javascript" src="../../js/moment-min.js"></script>
</body>
</html>