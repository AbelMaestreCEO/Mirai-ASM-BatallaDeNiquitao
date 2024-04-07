<?php 

include("../../con_db.php");

?>

<a href="#"><div class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</div></a>

<?php

if(isset($_POST['register'])){

	//Materia

	$plan = trim($_POST['plan']);
	$observacion = trim($_POST['observacion']);
	
	$consulta = "CALL sp_insertar_plan_estudio ('$plan','$observacion')";
	
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