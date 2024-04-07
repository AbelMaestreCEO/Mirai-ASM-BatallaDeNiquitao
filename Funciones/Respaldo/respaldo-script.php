<?php
	
	$db_host = 'localhost'; //Host del Servidor MySQL
	$db_name = 'batalla_de_niquitao'; //Nombre de la Base de datos
	$db_user = 'root'; //Usuario de MySQL
	$db_pass = 'AMCorporation48.'; //Password de Usuario MySQL
	
	$fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo

	// Obtener ruta actual 
	$dir = dirname(__FILE__); 

	// Construir ruta de destino
	$salida_sql = $dir.'/'.$db_name.'_'.$fecha.'.sql';
	$salida_sql2 = $db_name.'_'.$fecha.'.sql';
	
	//Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
	$dump = "cd C:\\xampp\\mysql\\bin & mysqldump -h$db_host -u$db_user -p$db_pass $db_name > $salida_sql";
	system($dump, $output); //Ejecutamos el comando para respaldo
	
	$zip = new ZipArchive(); //Objeto de Libreria ZipArchive
	
	//Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
	$salida_zip = $db_name.'_'.$fecha.'.zip';
	
	if($zip->open($salida_zip,ZIPARCHIVE::CREATE)===true) { //Creamos y abrimos el archivo ZIP
		$zip->addFile($salida_sql2); //Agregamos el archivo SQL a ZIP
		$zip->close(); //Cerramos el ZIP
		unlink($salida_sql); //Eliminamos el archivo temporal SQL
		header ("Location: $salida_zip"); // Redireccionamos para descargar el Arcivo ZIP
		} else {
		echo 'Error en el respaldo de Base de Datos'; //Enviamos el mensaje de error
	}
?>