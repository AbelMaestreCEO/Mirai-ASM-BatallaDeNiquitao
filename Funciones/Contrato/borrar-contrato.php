<?php 

include("../../con_db.php");

?>

<h1 class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</h1>

<?php

if(isset($_POST['register'])){

	$id = trim($_POST['id']);
	
	$consulta = "CALL sp_eliminar_contrato ('$id')";
	
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