<?php
include("../../controlador/verificacion_sesion.php");
include("../../controlador/verificacion_admin.php");
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Agregar Secciones (BdN)</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>
<body class="transicion-corta scroll cursor-verde">
	<?php include "../menu-contextual.php"; ?>
	<!-- Cabeza -->
	<header>
		<!-- Navegación Horizontal -->
		<nav class="nav blur blur-verde-suave borde-verde">
		<!-- Menú Horizontal -->
		<ul class="menu">
				<?php include "../menu-superior-1.php"; ?>
				<?php include "menu-acciones-seccion.php"; ?>
				<?php include "../menu-superior-2.php"; ?>
			<ul>
		</nav>
		<?php include "../menu-lateral.php"; ?>
		<?php include "../menu-lateral-2.php"; ?>
	</header>
<!-- Cuerpo -->
<form method="POST">
	<div class="z zp-salon blur blur-blanco scroll scroll-verde borde-verde">
	<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-verde transicion-corta">Agregar Secciones</p>
		</div>
		<div class="y scroll scroll-verde">
			<div class="contenedorx blur blur-blanco borde-verde">
					<div class="boton-menu imagen-seccion transicion-corta borde-verde"></div>

					<div class="formularioaux">
					<p class="sub-texto">Profesor Guía <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<select name="profesor" class="pointer-verde input input-blanco borde-morado">
					<?php 
						include("../../con_db.php");
						$resultado = mysqli_query($conex, "CALL sp_listar_profesor()");
						while($row = mysqli_fetch_array($resultado)){
							$id = $row[0];
							$estado = $row[1];
							$estado2 = $row[2];
							?>				
							<option value="<?php echo $id; ?>"> <?php echo $id." - ".$estado." ".$estado2." -"; ?> </option>
							<?php
						}
						?>
					</select>
					<p class="sub-texto">Sección <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<select name="seccion" class="pointer-verde input input-blanco borde-morado">		
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="U">U</option>
					</select>
				</div>
			</div>
			<div class="contenedorx blur blur-blanco borde-verde">
					<div class="boton-menu imagen-seccion transicion-corta borde-verde"></div>
					<div class="formularioaux">
					<p class="sub-texto">Salón <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<select name="salon" class="pointer-verde input input-blanco borde-morado">
					<?php 
						include("../../con_db.php");
						$resultado = mysqli_query($conex, "CALL sp_listar_salon()");
						while($row = mysqli_fetch_array($resultado)){
							$id = $row[0];
							$estado = $row[1];
							?>				
							<option value="<?php echo $id; ?>"> <?php echo $id." - ".$estado; ?> </option>
							<?php
						}
						?>
				</select>
				<p class="sub-texto">Plan de Estudio <strong class="texto-rojo texto-borde-negro">*</strong></p>
					<select name="plan" class="pointer-verde input input-blanco borde-morado">
					<?php 
						include("../../con_db.php");
						$resultado = mysqli_query($conex, "CALL sp_listar_plan()");
						while($row = mysqli_fetch_array($resultado)){
							$id = $row[0];
							$estado = $row[1];
							?>				
							<option value="<?php echo $id; ?>"> <?php echo $id." - ".$estado; ?> </option>
							<?php
						}
						?>
				</select>
				</div>
			</div>
		</div>
		<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-verde transicion-corta">¡Ha sido todo por ahora!</p>
		</div>
		<?php 
	include("ingresar-secciones.php");
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
		<footer class="pie pie-registro blur blur-verde-suave borde-verde">
				<!-- Lista Horizontal -->
				<ul class="menu-pie">
					<!-- Boton Retroceder -->
					<li><a href="#"><div class="pointer-verde boton-menu-superior imagen-retroceder transicion-corta borde-verde"></div></a></li>
					<!-- Boton para BORRAR INPUTS -->
					<li><input class="accion boton1 transicion-corta borde-rojo" type="reset" name="reset"></li>
					<!-- Boton atrás -->
					<li><a href="#"><div class="pointer-verde boton-menu-superior imagen-atras transicion-corta borde-verde"></div></a></li>
					<!-- Boton Hogar -->
					<li><a href="#"><div class="pointer-verde boton-menu-superior imagen-hogar transicion-corta borde-verde"></div></a></li>
					<!-- Boton adelante -->
					<li><a href="#"><div class="pointer-verde boton-menu-superior imagen-adelante transicion-corta borde-verde"></div></a></li>
					<!-- Boton para REGISTRAR -->
					<li><input class="accion boton2 transicion-corta borde-verde" type="submit" name="register"/></li>
					<!-- Boton Avanzar -->
					<li><a href="#"><div class="pointer-verde boton-menu-superior imagen-avanzar transicion-corta borde-verde"></div></a></li>
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
	<!-- Smooth scroll scroll-verde-->
	<script type="text/javascript" src="../../js/smoothscroll.js"></script>
	<!-- Scripts -->
	<script type="text/javascript" src="../../js/scripts.js"></script>
	<!-- Menu Contextual -->
	<script type="text/javascript" src="../../js/Menu-Contextual.js"></script>
	<!-- Fecha & Hora -->
	<script type="text/javascript" src="../../js/moment-min.js"></script>
</body>
</html>