<div class="v">
	<p class="titulo-pagina blur blur-blanco borde-rojo transicion-corta">Datos de la persona</p>
</div>
<div class="y scroll scroll-rojo">
	<div class="contenedorx blur blur-blanco borde-negro">
		<div class="boton-menu imagen-profesor transicion-corta borde-negro"></div>
		<div class="formularioaux">
			<p class="sub-texto">ID <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<select name="idEstudiante" class="pointer-negro input input-blanco borde-morado">			
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>			
			</select>
			<p class="sub-texto">Nombre <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="text-negro input input-blanco transicion-corta borde-negro" onkeypress="return solotexto(event);" required name="nombre" type="text" placeholder="Abel">
			<p class="sub-texto">Apellido <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="text-negro input input-blanco transicion-corta borde-negro" onkeypress="return solotexto(event);" required name="apellido" type="text" placeholder="Maestre">
		</div>
	</div>
	<div class="contenedorx blur blur-blanco borde-negro">
		<div class="boton-menu imagen-profesor transicion-corta borde-negro"></div>
		<div class="formularioaux">
			<p class="sub-texto">Sexo <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<select name="sexo" class="pointer-negro input input-blanco borde-morado">			
				<option value="F">F - Femenino</option>
				<option value="M">M - Masculino</option>			
			</select>
            <p class="sub-texto">Fecha de nacimiento <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="pointer-negro input input-blanco transicion-corta borde-negro" required type="date" name="fecha" placeholder="dd/mm/aaaa">
		</div>
	</div>
</div>