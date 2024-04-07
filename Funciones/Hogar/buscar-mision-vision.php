<?php 

	//Mision y Vision

	$mision = '';
	$vision = '';
	$id = 1;

	$consulta = "CALL buscar_mision_vision ('$id', @mision, @vision)";

	mysqli_query($conex, $consulta);

	$sql = "SELECT @mision, @vision";
    $result = mysqli_query($conex, $sql);

	$row = mysqli_fetch_array($result);
    $mision = $row[0];
	$vision = $row[1];

	echo " <div class='x scroll'>
				<!-- Contenedor X -->
				<div class='contenedorx blur blur-blanco borde-azul'>
					<!-- Espacios -->
					<p></p>
					<!-- Logo cuadrado -->
					<div class='boton-menu imagen-niquitao transicion-corta borde-azul'>
					</div>
					<!-- Tabla X -->
					<div class='tabla'>
						<!-- División -->
						<hr class='blur-azul'>
						<!-- Titulo de la Tabla -->
						<p class='texto-simple'>Misión</p>
						<!-- Conlumna X -->
						<div class='columna'>
							<!-- División -->
							<hr class='blur-azul'>
							<!-- Titulo de la columna -->
							<p class='texto-simple'>$mision</p>
						</div>
					</div>
				</div>
				<div class='contenedorx blur blur-blanco borde-azul'>
					<!-- Espacios -->
					<p></p>
					<!-- Logo cuadrado -->
					<div class='boton-menu imagen-niquitao transicion-corta borde-azul'>
					</div>
					<!-- Tabla X -->
					<div class='tabla'>
						<!-- División -->
						<hr class='blur-azul'>
						<!-- Titulo de la Tabla -->
						<p class='texto-simple'>Visión</p>
						<!-- Conlumna X -->
						<div class='columna'>
							<!-- División -->
							<hr class='blur-azul'>
							<!-- Titulo de la columna -->
							<p class='texto-simple'>$vision</p>
						</div>
					</div>
				</div>
			</div>";
?>