<div class="v">
	<p class="titulo-pagina blur blur-blanco borde-azul transicion-corta">Datos de la persona</p>
</div>
<div class="y scroll">
	<div class="contenedorx blur blur-blanco borde-negro">
		<div class="boton-menu imagen-cedula transicion-corta borde-negro"></div>
		<div class="formularioaux">
			<p class="sub-texto">Cédula <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="text-negro input input-blanco transicion-corta borde-negro" onkeypress="return solonumeros(event);" required name="cedula" type="text" placeholder="V: --.---.---"/>
			<p class="sub-texto">Nombre <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="text-negro input input-blanco transicion-corta borde-negro" onkeypress="return solotexto(event);" required name="nombre" type="text" placeholder="Abel">
			<p class="sub-texto">Apellido <strong class="texto-rojo texto-borde-negro">*</strong></p>
			<input class="text-negro input input-blanco transicion-corta borde-negro" onkeypress="return solotexto(event);" required name="apellido" type="text" placeholder="Maestre">
		</div>
	</div>
	<div class="contenedorx blur blur-blanco borde-negro">
		<div class="boton-menu imagen-nacimiento transicion-corta borde-negro"></div>
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