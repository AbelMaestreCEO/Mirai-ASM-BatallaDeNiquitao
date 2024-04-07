<?php 

include("../../con_db.php");

?>

<h1 class="mensaje-PHP preparado">PREPARADO PARA INSERTAR</h1>

<?php

if(isset($_POST['register'])){

	//Representante

	$cedula = trim($_POST['cedula']);
	$nombre = '';
	$apellido = '';
	$fecha = '';
	$sexo = '';
	$tipo = '';

	//Telefono

	$telefono1 = '';
	$telefono2 = '';

	//Correos
	$correo1 = '';
	$correo2 = '';

	//Dirección
	$casa = '';
	$calle = '';
	$vereda = '';
	$piso = '';
	$edificio = '';
	$punto = '';
	$parroquia = '';

	//Direcion extra
	$ciudad = '';
	$codigo = '';
	$municipio = '';
	$estado = '';

	
	$consulta = "CALL buscar_representante ('$cedula', @nombre, @apellido,@fecha,@telefono1,@telefono2,@correo1,@correo2,@sexo,@tipo,@casa,@calle,@vereda,@piso,@edificio,@punto,@parroquia,@ciudad,@codigop,@municipio,@estado)";

	mysqli_query($conex, $consulta);

	$sql = "SELECT @nombre, @apellido,@fecha,@telefono1,@telefono2,@correo1,@correo2,@sexo,@tipo,@casa,@calle,@vereda,@piso,@edificio,@punto,@parroquia,@ciudad,@codigop,@municipio,@estado";
    $result = mysqli_query($conex, $sql);

	$row = mysqli_fetch_array($result);
    $nombre = $row[0];
	$apellido = $row[1];
	$fecha = $row[2];
	$telefono1 = $row[3];
	$telefono2 = $row[4];
	$correo1 = $row[5];
	$correo2 = $row[6];
	$sexo = $row[7];
	$tipo = $row[8];
	$casa = $row[9];
	$calle = $row[10];
	$vereda = $row[11];
	$piso = $row[12];
	$edificio = $row[13];
	$punto = $row[14];
	$parroquia = $row[15];
	$ciudad = $row[16];
	$codigo = $row[17];
	$municipio = $row[18];
	$estado = $row[19];

	echo " <div class='x scroll'>
	<!-- Contenedor X -->
	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-representante transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Representante: $nombre $apellido</p>
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
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Tipo: $tipo</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-representante transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Telefonos de $nombre $apellido</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Telefono principal: $telefono1</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Telefono Secundario: $telefono2</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-representante transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Correos de $nombre $apellido</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Correo principal: $correo1</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Correo Secundario: $correo2</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-representante transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Dirección de $nombre $apellido</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Casa: $casa</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Calle: $calle</p>
				</div>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Vereda: $vereda</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-representante transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Dirección de $nombre $apellido</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Piso: $piso</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Edificio: $edificio</p>
				</div>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Punto de Referencia: $punto</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-representante transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Dirección de $nombre $apellido</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Parroquia: $parroquia</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Ciudad: $ciudad</p>
				</div>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Código Postal: $codigo</p>
				</div>
			</div>
		</div>
	</div>

	<div class='contenedorx blur blur-blanco borde-rojo'>
		<!-- Espacios -->
		<p></p>
		<!-- Logo cuadrado -->
		<div class='boton-menu imagen-representante transicion-corta borde-rojo'>
		</div>
		<!-- Tabla X -->
		<div class='tabla'>
			<!-- División -->
			<hr class='blur-azul'>
			<!-- Titulo de la Tabla -->
			<p class='texto-simple'>Dirección de $nombre $apellido</p>
			<!-- Conlumna X -->
			<div class='columna'>
				<!-- División -->
				<hr class='blur-azul'>
				<!-- Titulo de la columna -->
				<p class='texto-simple'>Municipio: $municipio</p>
				<!-- Fila X -->
				<div class='fila'>
					<!-- División -->
					<hr class='blur-azul'>
					<!-- Texto de la fila -->
					<p class='texto-simple'>Estado: $estado</p>
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