<?php
include("../../con_db.php");
$usuario=$_REQUEST["Id"];
$sql="CALL sp_mostrar_preguntas('$usuario')";
$result = mysqli_query($conex, $sql);
$row = mysqli_fetch_array($result);
$pregunta1 = $row[0];
$pregunta2 = $row[1];
$nombre = $row[2];
$apellido = $row[3];

?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Recuperar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>

<body class="transicion-corta scroll cursor-morado">
	<!-- Cabeza -->

	<nav class="blur blur-blanco nav-login">
		<h1 class="titulo-nav-login fuente-sistema">U.E.P. Batalla de Niquitao - Recuperar Contraseña</h1>
	</nav>
	<nav class="blur-azul nav2-login"></nav>
	<nav class="blur-rojo nav3-login"></nav>

<!-- Cuerpo -->
<div class="z-login">
	<form name="registro" method="POST" action="">
	<div class="contenedor-login scroll">
			<div class="formulario-login blur blur-blanco borde-azul">
                <?php 
                    echo "
                        <p class='texto-formulario-login'>Nombre:</p>
                        <p class='texto-formulario-login'><strong class='texto-rojo texto-borde-negro'>$nombre $apellido</strong></p>
                        <p class='texto-formulario-login'>Pregunta 1</p>
                        <p class='texto-formulario-login'><strong class='texto-amarillo texto-borde-negro'>' $pregunta1 '</strong></p>
                        <p class='texto-formulario-login'>Respuesta 1 <strong class='texto-rojo texto-borde-negro'>*</strong></p>
                        <input class='fuente-sistema campo-login transicion-corta borde-negro' required name='res1' type='text' placeholder='...'>
                        <p class='texto-formulario-login'>Pregunta 2</p>
                        <p class='texto-formulario-login'><strong class='texto-amarillo texto-borde-negro'>' $pregunta2 '</strong></p>
                        <p class='texto-formulario-login'>Respuesta 2 <strong class='texto-rojo texto-borde-negro'>*</strong></p>
                        <input class='fuente-sistema campo-login transicion-corta borde-negro' required name='res2' type='text' placeholder='...'>
                    ";
                ?>
				<input class="accion-login boton1-login borde-verde" type="submit" name="register"/>
				<input class="accion-login boton2-login borde-rojo" type="reset" name="reset"/>
				<?php
                if(!empty($_POST["register"])){
                    if (!empty($_POST["res1"])&&!empty($_POST["res2"])) {
                        $Respuesta1=trim($_POST["res1"]);
                        $Respuesta2=trim($_POST["res2"]);
                        echo '
                        <p class="texto-formulario-login">Excelente, sigamos...</p>
                        <a href="../../controlador/recuperar_usuario.php?Id='.$usuario.'&Res1='.$Respuesta1.'&Res2='.$Respuesta2.'" title="Siguiente sección"><div class="accion-login boton1-login borde-verde">Siguiente sección</div></a>
                        ';
                    }
                }
				?>
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