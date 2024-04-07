<?php

session_start();

if(!empty($_POST["register"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["clave"])) {
        $usuario=trim($_POST["usuario"]);
        $clave=trim($_POST["clave"]);
        $respuesta=0;
        $tipo='';

        $sql3 = "SELECT Tipo_Usuario_idTipo_Usuario FROM Usuario WHERE idUsuario = $usuario";
        $result3 = mysqli_query($conex, $sql3);

        $row2 = mysqli_fetch_array($result3);
        $tipo = $row2[0];

        $sql="CALL sp_consultar_usuario('$usuario','$clave', @respuesta)";
        $result = mysqli_query($conex, $sql);

        $sql2 = "SELECT @respuesta";
        $result2 = mysqli_query($conex, $sql2);

        $row = mysqli_fetch_array($result2);
        $respuesta = $row[0];

        if ($sql) {
            if ($respuesta == 1) {
                $_SESSION["sesion"] = 1;
                $_SESSION["usuario"] = $usuario;
                $_SESSION["tipo"] = $tipo;
                
                header("location: ../Hogar/hogar.php");
            } else {
                    $_SESSION["sesion"] = 0;
                    echo "<div class='mensaje-login malo-login fuente-sistema'>Codigo de error 3</div>"; //Usuario no existe
                }   
        } else {
                echo "<div class='mensaje-login malo-login fuente-sistema'>Codigo de error 1</div>"; //Error de conexio
            }

    } else {
        echo "<div class='mensaje-login malo-login fuente-sistema'>Codigo de error 2</div>"; //Error de campos vacios
    }

} else{
    echo "<div class='mensaje-login precaucion-login fuente-sistema'>Usted está accediendo</div>"; //Error en el login
}
?>