<?php 

include("../../con_db.php");

?>

<h1 class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</h1>

<?php

if(isset($_POST['register'])){

	//Estudiante

	$cedula = trim($_POST['cedula']);
	$nombre = '';
	$apellido = '';
	$fecha = '';
	$sexo = '';

	//Representante

	$cedular = '';
	$nombrer = '';
	$apellido = '';
	$telefonor = '';
	$correor = '';

	//Matricula

	$matricula = '';
	$plan = '';


	
	$consulta = "CALL buscar_estudiante_2 ('$cedula', @nombre, @apellido,@fecha,@sexo,@celudar,@nombrer,@apellidor,@telefonor,@correor,@matricula,@plan)";

	mysqli_query($conex, $consulta);

	$sql = "SELECT @nombre, @apellido,@fecha,@sexo,@celudar,@nombrer,@apellidor,@telefonor,@correor,@matricula,@plan";
    $result = mysqli_query($conex, $sql);

	$row = mysqli_fetch_array($result);
    $nombre = $row[0];
	$apellido = $row[1];
	$fecha = $row[2];
	$sexo = $row[3];
	$cedular = $row[4];
	$nombrer = $row[5];
	$apellidor = $row[6];
	$telefonor = $row[7];
	$correor = $row[8];
	$matricula = $row[9];
	$plan = $row[10];

	echo " <div class='x scroll'>
	<!-- Contenedor X -->
	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-estudiante-1 transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Estudiante: $nombre $apellido</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Fecha de Nacimiento: $fecha</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Sexo: $sexo</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-estudiante-2 transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Matrícula $matricula</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Plan de estudio: $plan</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>...</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-estudiante-1 transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Representante $nombrer $apellidor</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Cédula: $cedular</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Telefono principal: $telefonor</p>
				</div>
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Correo principal: $correor</p>
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