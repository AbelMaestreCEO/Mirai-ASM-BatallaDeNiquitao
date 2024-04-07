<?php 

/* Prueba de conexión */

$files = scandir('./');

$route = [];

$directorio = './';

$ruta = new RecursiveDirectoryIterator($directorio);
$iterator = new RecursiveIteratorIterator($ruta);

$routes = [];

foreach ($iterator as $filename => $file) {

if($file->isFile() && $file->getFilename() !== '.' && $file->getFilename() !== '..' && pathinfo($filename, PATHINFO_EXTENSION) === 'php') {

    $route = pathinfo($filename, PATHINFO_FILENAME);

    $routes[$route] = $filename;

}

}

/*foreach ($files as $file){
    if($file !== '.' && $file !== '..'){

        $route = basename($file, '.php');
    
        $routes[$route] = $file; 
    
    }
}*/

// escribir reglas  
$rewriterule = '';

foreach($routes as $route => $file){

    $rewriterule .= "RewriteRule ^{$route}/?$ {$file} [NC,L]\n";

}

$errores = '';
$reading ='';

$reading .="RewriteEngine On
RewriteBase /

";

$errores .= "#Carga tu propia página de error 404 

ErrorDocument 404 /errores/404.php

#Carga tu propia página de error 403

ErrorDocument 403 /errores/403.php

#Index predeterminado

#DirectoryIndex /index.php";

// Guardarlas en .htaccess
$htaccess = fopen(".htaccess","w");

fwrite($htaccess,$reading);

fwrite($htaccess,$rewriterule);

fwrite($htaccess,$errores);
fclose($htaccess); 

?>