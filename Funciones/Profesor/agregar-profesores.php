<?php
include("../../controlador/verificacion_sesion.php");
include("../../controlador/verificacion_admin.php");
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Agregar profesor (BdN)</title>
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
				<?php include "menu-acciones-profesor.php"; ?>
				<?php include "../menu-superior-2.php"; ?>
			<ul>
		</nav>
		<?php include "../menu-lateral.php"; include "../menu-lateral-2.php";?>
	</header>
<!-- Cuerpo -->
<form method="POST">
	<div class="z zp-interior blur blur-blanco scroll scroll-azul borde-azul">
		<?php include "../Formularios/datos.php"; include "../Formularios/contactos.php"; include "../Formularios/direccion.php";?>
		
	<div class="v">
		<p class="titulo-pagina blur blur-blanco borde-azul transicion-corta">Profesor</p>
	</div>
	<div class="y scroll scroll-azul">
		<div class="contenedorx blur blur-blanco borde-azul">
		<div class="boton-menu imagen-profesor transicion-corta borde-azul"></div>
			<div class="formularioaux">
			<p class="sub-texto">Título Universitario <strong class="texto-rojo texto-borde-negro">*</strong></p>
				<select name="titulo" class="pointer-azul input input-blanco borde-morado">
					<option value="Bachillerato">Bachillerato</option>
					<option value="TSU">TSU</option>			
					<option value="Ingeniería">Ingeniería</option>
					<option value="Licenciatura">Licenciatura</option>
					<option value="Maestría">Maestría</option>
					<option value="Doctorado">Doctorado</option>
				</select>
	    	    <p class="sub-texto">Materia <strong class="texto-rojo texto-borde-negro">*</strong></p>
	    	    <select name="clase" class="pointer-azul input input-blanco borde-morado">
						<?php 
						include("../../con_db.php");
						$resultado = mysqli_query($conex, "CALL sp_listar_materia()");
						while($row = mysqli_fetch_array($resultado)){
							$id = $row[0];
							$estado = $row[1];
							?>				
							<option value="<?php echo $id; ?>"> <?php echo $id." - ".$estado; ?> </option>
							<?php
						}
						?>
					</select>
	    	    <p class="sub-texto">Contrato <strong class="texto-rojo texto-borde-negro">*</strong></p>
	    	    <select name="contrato" class="pointer-azul input input-blanco borde-morado">
						<?php 
						include("../../con_db.php");
						$resultado = mysqli_query($conex, "CALL sp_listar_contratos()");
						while($row = mysqli_fetch_array($resultado)){
							$id = $row[0];
							$estado = $row[1];
							$estado2 = $row[2];
							?>				
							<option value="<?php echo $id; ?>"> <?php echo $id." - ".$estado." al ".$estado2; ?> </option>			
							<?php
						}
						?>
					</select>
	    	</div>
    	</div>
	</div>
		
	<div class="v">
		<p class="titulo-pagina blur blur-blanco borde-azul transicion-corta">¡Ha sido todo por ahora!</p>
	</div>
	<?php 
	include("ingresar-profesor.php");
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
		<footer class="pie pie-registro blur blur-azul-suave borde-azul">
				<!-- Lista Horizontal -->
				<ul class="menu-pie">
					<!-- Boton más -->
					<li><a href="agregar-estudiantes-dark.php"><div title="Sección Anterior" class="pointer-azul boton-menu-superior imagen-retroceder transicion-corta borde-azul"></div></a></li>
					<!-- Boton para BORRAR INPUTS -->
					<li><input class="accion boton1 transicion-corta borde-rojo" type="reset" name="reset"></li>
					<!-- Boton atrás -->
					<li><a href="../Estudiante/agregar-estudiante.php"><div class="pointer-azul boton-menu-superior imagen-atras transicion-corta borde-azul"></div></a></li>
					<!-- Boton Hogar -->
					<li><a href="agregar-profesor-dark.php"><div class="pointer-azul boton-menu-superior imagen-hogar transicion-corta borde-azul"></div></a></li>
					<!-- Boton adelante -->
					<li><a href="../Profesor/agregar-profesor.php"><div class="pointer-azul boton-menu-superior imagen-adelante transicion-corta borde-azul"></div></a></li>
					<!-- Boton para REGISTRAR -->
					<li><input class="accion boton2 transicion-corta borde-verde" type="submit" name="register"/></li>
					<!-- Boton tema -->
					<li><a href="agregar-estudiantes-dark.php"><div title="Sección Siguiente" class="pointer-azul boton-menu-superior imagen-avanzar transicion-corta borde-azul"></div></a></li>
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