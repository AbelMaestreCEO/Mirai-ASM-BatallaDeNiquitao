<?php 

include("../../con_db.php");

?>

<h1 class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</h1>

<?php

if(isset($_POST['register'])){

	//Nota

	$estudiante = trim($_POST['estudiante']);
	$clase = trim($_POST['clase']);
	$nota = '';
	$materia = '';

	
	$consulta = "CALL buscar_nota2 ('$estudiante', '$clase', @nota, @materia)";

	$sql = "SELECT @nota, @materia";
    $result = mysqli_query($conex, $sql);

	$row = mysqli_fetch_array($result);
    $nota = $row[0];
	$materia = $row[1];

	echo " <div class='x scroll'>
	<!-- Contenedor X -->
	<div class='contenedorx blur blur-blanco borde-azul'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-nota transicion-corta borde-azul'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Estudiante: $estudiante</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Materia: $materia</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Nota: $nota</p>
				</div>
			</div>
		</div>
	</div>

</div>";
	
	$resultado = mysqli_query($conex, $consulta);
	
	if($resultado){
		?>
	<a href="#"><div class="mensaje-PHP bueno">CONSULTADO CORRECTAMENTE</div></a>
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