<?php

include("../../con_db.php");

session_start();
if($_SESSION["sesion"] == 0){
    header("location: ../../errores/403.php");
}else{
    $usuarioRecuperado = $_SESSION["usuario"];

    $consulta_usuario = mysqli_query($conex, "CALL sp_listar_nombre_usuario($usuarioRecuperado,@usuarioRecuperado2)");

    $guardar_usuario = mysqli_query($conex,"SELECT @usuarioRecuperado2");

    $columna_usuario = mysqli_fetch_array($guardar_usuario);

    $nombre_usuario = $columna_usuario[0];

    $tipoRecuperado = $_SESSION["tipo"];

    $consulta_tipo = mysqli_query($conex, "CALL sp_listar_tipo_usuario($tipoRecuperado,@tipoRecuperado2)");

    $guardar_tipo = mysqli_query($conex,"SELECT @tipoRecuperado2");
    
    $columna_tipo = mysqli_fetch_array($guardar_tipo);
    
    $nombre_tipo = $columna_tipo[0];
}

?>