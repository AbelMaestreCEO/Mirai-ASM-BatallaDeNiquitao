<a href="#"><div class="mensaje-login precaucion-login fuente-sistema">PREPARADO PARA INSERTAR</div></a>
<?php

if(isset($_POST['register'])){

	//Usuario & Clave

	$usuario = trim($_POST['usuario']);
    $clave = trim($_POST['clave']);
	$nombre = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
	$pregunta1 = trim($_POST['pregunta1']);
	$pregunta2 = trim($_POST['pregunta2']);
	$respuesta1 = trim($_POST['respuesta1']);
	$respuesta2 = trim($_POST['respuesta2']);
	$tipo = trim($_POST['tipo']);

	// Validar login
	$decimal = "/^(?=.*\d)(?=.*[a-z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,16}$/";
	if (!preg_match($decimal, $clave)) {
		echo "<div class='mensaje-login malo-login fuente-sistema'>La contraseña debe tener al menos un carácter minúscula, mayúscula, número y especial. Y un rango entre 8 a 16 caracteres</div>";
		return;
	}
	
	$dni = "/^\d{7,8}$/";
	if(!preg_match($dni, $usuario)){
		echo "<div class='mensaje-login malo-login fuente-sistema'>La cédula debe tener entre 7 y 8 números.</div>";
		return;
	}
	
	$consulta = "CALL sp_insertar_usuario('$usuario','$pregunta1','$pregunta2','$respuesta1','$respuesta2','$tipo','$nombre','$apellido','$clave')";
	
	$resultado = mysqli_query($conex, $consulta);
	
	if($resultado){
		?>
			<a href="#"><div class="mensaje-login bueno-login fuente-sistema">REGISTRADO CORRECTAMENTE</div></a>
			<audio autoplay src="../../audio/sound/Agregar.mp3"></audio>
		<?php
	}else{
	?>
		<a href="#"><div class="mensaje-login malo-login fuente-sistema">HA OCURRIDO UN ERROR</div></a>
		<audio autoplay src="../../audio/sound/Error.mp3"></audio>
	<?php
	}
}
?>