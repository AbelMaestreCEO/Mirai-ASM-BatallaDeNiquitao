<?php 

include("../../con_db.php");

?>

<h1 class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</h1>

<?php

if(isset($_POST['register'])){

	$cedula = trim($_POST['profesor']);
	$plan = trim($_POST['plan']);
	$seccion = trim($_POST['seccion']);
	$salon = trim($_POST['salon']);
	$observacion = trim($_POST['observacion']);
	
	$consulta = "CALL sp_insertar_profesor_guia ('$cedula','$plan','$seccion','$salon','$observacion')";
	
	$resultado = mysqli_query($conex, $consulta);
	
	if($resultado){
		?>
	<a href="#"><div class="mensaje-PHP bueno">ELIMINADO CORRECTAMENTE</div></a>
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