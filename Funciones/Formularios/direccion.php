<div class="v">
			<p class="titulo-pagina blur blur-blanco borde-azul transicion-corta">Dirección</p>
</div>

<div class="x scroll">

	<div class="contenedorx blur blur-blanco borde-negro">
		<div class="boton-menu imagen-casa transicion-corta borde-negro"></div>
		<div class="formularioaux">
	        <p class="sub-texto">Casa <strong class="texto-rojo texto-borde-negro">*</strong></p>
	        <input class="text-negro input input-blanco transicion-corta borde-negro" required type="text" name="casa" placeholder="N° 253">
	        <p class="sub-texto">Calle <strong class="texto-rojo texto-borde-negro">*</strong></p>
	        <input class="text-negro input input-blanco transicion-corta borde-negro" required type="text" name="calle" placeholder="Calle 27 Sur">
	        <p class="sub-texto">Vereda</p>
	        <input class="text-negro input input-blanco transicion-corta borde-negro" type="text" name="vereda" placeholder="Izquierda">
		</div>
	</div>

	<div class="contenedorx blur blur-blanco borde-negro">
		<div class="boton-menu imagen-edificio transicion-corta borde-negro"></div>
		<div class="formularioaux">
		    <p class="sub-texto">Piso</p>
		    <input class="text-negro input input-blanco transicion-corta borde-negro" type="text" name="piso" placeholder="Piso: 3">
		    <p class="sub-texto">Edificio</p>
		    <input class="text-negro input input-blanco transicion-corta borde-negro" type="text" name="edificio" placeholder="Edificio A-1">
		    <p class="sub-texto">Punto de referencia <strong class="texto-rojo texto-borde-negro">*</strong></p>
		    <input class="text-negro input input-blanco transicion-corta borde-negro" required type="text" name="punto" placeholder="Panadería">
		</div>
	</div>
    <div class="contenedorx blur blur-blanco borde-negro">
		<div class="boton-menu imagen-parroquias transicion-corta borde-negro"></div>
		<div class="formularioaux">
		    <p class="sub-texto">Parroquia <strong class="texto-rojo texto-borde-negro">*</strong></p>
		    <select name="parroquia" class="pointer-negro input input-blanco borde-morado">
			<?php 
						include("../../con_db.php");
						$resultado = mysqli_query($conex, "CALL sp_listar_parroquia()");
						while($row = mysqli_fetch_array($resultado)){
							$id = $row[0];
							$estado = $row[1];
							?>				
							<option value="<?php echo $id; ?>"> <?php echo $id." - ".$estado; ?> </option>
							<?php
						}
						?>
			</select>
        </div>
    </div>
</div>