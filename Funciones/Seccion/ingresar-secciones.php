<?php 

include("../../con_db.php");

?>
<a href="#"><div class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</div></a>
<?php

if(isset($_POST['register'])){

	//Mensualidad

	$seccion = trim($_POST['seccion']);

	$id2 = 'Sección ';
	$id2 .= $seccion;

	$dni = "/^\w$/";
	if(!preg_match($dni, $seccion)){
		echo "<div class='mensaje-PHP malo'>LA SECCIÓN DEBE CONTENER 1 SOLO CARÁCTER.</div>";
		return;
	}
	
	$consulta = "CALL sp_insertar_seccion('$id2')";
	
	$resultado = mysqli_query($conex, $consulta);
	
	if($resultado){
		?>
			<a href="#"><div class="mensaje-PHP bueno">REGISTRADO CORRECTAMENTE</div></a>
		<?php
	}else{
	?>
		<a href="#"><div class="mensaje-PHP malo">HA OCURRIDO UN ERROR</div></a>
	<?php
	}
}
?>