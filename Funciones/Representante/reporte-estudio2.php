<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
    <title>Reporte Literales</title>
</head>
<body>
<?php
include '../../con_db.php';

if(isset($_POST['register'])){

  echo '<div class="menu-reporte blur-blanco borde-azul">
  
  <p class="bold">Acciones del reporte</p>

  <a href="reporte-estudio.php?Id=' . $_POST['cedula'] . '&Expiracion=' . $_POST['expiracion'] . '" target="_blank" title="Imprimir PDF"><div class="boton-menu-reporte imagen-pdf transicion-corta borde-verde"></div></a>
  
  </div>';

  $id = trim($_POST['cedula']);

  $resultado = mysqli_query($conex, "CALL sp_reporte_estudio($id)");

  ?>
      <h1 class="titulo-reporte fuente-sistema text-center bold italic">Boletín Informativo</h1>
      <table class="fuente-sistema">
        <thead>
          <tr>
            <th>Carta</th>
            <th>Estudiante</th>  
            <th>Plan de Estudio</th>
          </tr>
        </thead>

        <tbody>

  <?php 

while($fila = mysqli_fetch_array($resultado)) {

  echo "<tr>";
  
  echo "<td>Estudio</td>";
  echo "<td>" . $fila[2] . " " . $fila[3] ."</td>";
  echo "<td>" . $fila[4] . "</td>";
  
  // imprimir el resto de campos

    echo "</tr>";
}

  ?>
      </tbody>
    </table>
<?php } ?>
</body>
</html>