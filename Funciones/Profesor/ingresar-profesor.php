<?php 

include("../../con_db.php");

?>

<h1 class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</h1>

<?php

if(isset($_POST['register'])){

	//Profesor

	$cedula = trim($_POST['cedula']);
	$nombre = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
	$fecha = trim($_POST['fecha']);
	$sexo = trim($_POST['sexo']);
	$titulo = trim($_POST['titulo']);
	$materia = trim($_POST['clase']);
	$contrato = trim($_POST['contrato']);

	//Telefono

	$telefono1 = trim($_POST['telefono1']);
	$telefono2 = trim($_POST['telefono2']);
	$idtelefonos ='';

	//Correos
	$correo1 = trim($_POST['correo1']);
	$correo2 = trim($_POST['correo2']);
	$idcorreos ='';

	//Dirección
	$casa = trim($_POST['casa']);
	$calle = trim($_POST['calle']);
	$vereda = trim($_POST['vereda']);
	$piso = trim($_POST['piso']);
	$edificio = trim($_POST['edificio']);
	$punto = trim($_POST['punto']);
	$parroquia = trim($_POST['parroquia']);
	$iddireccion ='';
	
	$consulta = "CALL sp_insertar_profesor ('$cedula','$nombre','$apellido','$materia','$fecha','$sexo','$titulo','$contrato','$correo1','$correo2',@idcorreos,'$telefono1','$telefono2',@idtelefonos,'$casa','$calle','$vereda','$piso','$edificio','$punto','$parroquia',@iddireccion)";
	
	$resultado = mysqli_query($conex, $consulta);
	
	if($resultado){
		?>
	<a href="#"><div class="mensaje-PHP bueno">REGISTRADO CORRECTAMENTE</div></a>
	<audio autoplay src="../../audio/sound/Agregar.mp3"></audio>
<?php
}else{
	?>
	<a href="#"><div class="mensaje-PHP malo">HA OCURRIDO UN ERROR</div></a>
	<audio autoplay src="../../audio/sound/Error.mp3"></audio>
<?php
}
}
?>