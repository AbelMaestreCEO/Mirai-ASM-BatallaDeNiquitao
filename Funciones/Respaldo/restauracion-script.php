<?php

// Credenciales de MySQL
$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = 'AMCorporation48.';

//Mostrar formulario para seleccionar archivo
echo '<form method="post" enctype="multipart/form-data">';
echo 'Selecciona el archivo SQL: <input type="file" name="file">'; 
echo '<input type="submit" value="Restaurar">';
echo '</form>';

//Procesar archivo subido
if(isset($_FILES['file'])){

	//Obtener archivo
	$file = $_FILES['file']['tmp_name'];

	//Conectar a DB
	$conex = mysqli_connect($db_host, $db_user, $db_pass);

	// Seleccionar base de datos 
	$bd = "batalla_de_niquitao";
	mysqli_select_db($conex, $bd); 

	//Leer y ejecutar queries
	$sql = file_get_contents($file);
	$queries = explode(';', $sql);
	
	foreach($queries as $query){
		mysqli_query($conex, $query); 
	}

echo 'Base de datos restaurada correctamente!';
mysqli_close($conex);
}


?>