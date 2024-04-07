<?php 

include("../../con_db.php");

?>

<a href="#"><div class="mensaje-PHP preparado transicion-corta borde-rojo">PREPARADO PARA INSERTAR</div></a>

<?php

if(isset($_POST['register'])){

	//Estudiantes I

	$id = trim($_POST['idEstudiante']);
	$nombres = trim($_POST['nombre']);
	$apellidos = trim($_POST['apellido']);
	$representante = trim($_POST['representante']);
	$nacimiento = trim($_POST['fecha']);
	$sexo = trim($_POST['sexo']);
	$matricula = trim($_POST['matricula']);
	$seccion = trim($_POST['seccion']);

	$id2 = '';
	$id2 .= $representante;
	$id2 .= $id;

	// Validar inputs

	$now = date("Y-m-d");
	$birth = new DateTime($nacimiento); 
	$age = date_diff($birth, new DateTime($now))->y;
	if(($age >= 11) || ($age <= 3)){
		echo "<a href='#'><div class='mensaje-PHP malo'>LA EDAD DEBE SER ENTRE 3 A 11 AÑOS</div></a>
        <audio autoplay src='../../audio/sound/Error.mp3'></audio>";
		return;
	}

	$consulta = "CALL sp_insertar_estudiante_2 ('$id2','$nombres','$apellidos','$nacimiento','$sexo','$matricula','$representante','$seccion')";
	
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