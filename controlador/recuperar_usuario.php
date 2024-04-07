<?php 
include "../con_db.php";
$usuario = $_REQUEST["Id"];
$respuesta1= $_REQUEST["Res1"];
$respuesta2= $_REQUEST["Res2"];
$respuesta='';
$sql3="CALL recuperar_password('$usuario','$respuesta1','$respuesta2', @respuesta)";
$result = mysqli_query($conex, $sql3);
$sql4 = "SELECT @respuesta";
$result2 = mysqli_query($conex, $sql4);
$row2 = mysqli_fetch_array($result2);
$respuesta = $row2[0];
?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Batalla de Niquitao - Recuperar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
	<link rel="shortcut icon" type="image/png" href="../../images/UEP.png">
	
	
</head>

<body class="transicion-corta scroll cursor-negro">
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
                    if ($result) {}
                        if ($respuesta == 1) {
                            echo "
                                <p class='texto-formulario-login'>Cambie de contraseña <strong class='texto-rojo texto-borde-negro'>*</strong></p>
                                <input class='fuente-sistema campo-login transicion-corta borde-negro' required name='pass' type='text' placeholder='...'>
                            ";
                            ?>
                            <input class="accion-login boton1-login borde-verde" type="submit" name="register"/>
                            <input class="accion-login boton2-login borde-rojo" type="reset" name="reset"/>
                            <?php
                                if(!empty($_POST["register"])){
                                    if (!empty($_POST["pass"])) {
                                    $pass=trim($_POST["pass"]);
                                    // Validar login
                                    $decimal = "/^(?=.*\d)(?=.*[a-z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,16}$/";
                                    if (!preg_match($decimal, $pass)) {
                                        echo "<div class='mensaje-login malo-login fuente-sistema'>La contraseña debe tener al menos un carácter minúscula, mayúscula, número y especial. Y un rango entre 8 a 16 caracteres</div>";
                                    return;
                                    }
                                    $sql5= mysqli_query($conex, "CALL actualizar_password('$usuario','$pass')");
                                        if($sql5){
                                            echo '
                                            <a href="#"><div class="mensaje-PHP bueno">CONTRASEÑA CAMBIADA</div></a>
                                            <audio autoplay src="../../audio/sound/Agregar.mp3"></audio>
                                            <p class="texto-formulario-login">Excelente, sigamos...</p>
                                            <a href="../../index.php" title="Volver al hogar"><div class="accion-login boton1-login borde-verde">Volver al Hogar</div></a>
                                            ';
                                        }else{
                                            echo '
                                            <a href="#"><div class="mensaje-PHP malo">HA OCURRIDO UN ERROR</div></a>
                                            <audio autoplay src="../../audio/sound/Error.mp3"></audio>';
                                        }
                                    }
                                }
                        }else{
                            echo "<br><p class='texto-formulario-login'>Dispculpe, las respuestas no coinciden.</p>";
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