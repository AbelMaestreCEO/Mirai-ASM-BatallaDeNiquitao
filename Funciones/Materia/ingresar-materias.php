<?php 

include("../../con_db.php");

?>

<a href="#"><div class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</div></a>

<?php

if(isset($_POST['register'])){

	//Materia

	$materia = trim($_POST['materia']);
	$horai = trim($_POST['horai']);
	$horaf = trim($_POST['horaf']);
	$plan = trim($_POST['plan']);
	
	$consulta = "CALL sp_insertar_materia ('$materia','$horai','$horaf','$plan')";
	
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