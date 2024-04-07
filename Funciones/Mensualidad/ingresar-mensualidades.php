<?php 

include("../../con_db.php");

?>
<a href="#"><div class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</div></a>
<?php

if(isset($_POST['register'])){

	//Mensualidad

	$vigenciaim = trim($_POST['vigenciai-m']);
	$vigenciafm = trim($_POST['vigenciaf-m']);
	$mesm = trim($_POST['mes-m']);
	
	$consulta = "CALL sp_insertar_mensualidad('$mesm','$vigenciaim','$vigenciafm')";
	
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