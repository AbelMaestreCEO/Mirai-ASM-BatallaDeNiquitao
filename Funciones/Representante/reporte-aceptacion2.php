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

  <a href="reporte-aceptacion.php?Id=' . $_POST['cedula'] . '&Inicio=' . $_POST['inicio'] . '" target="_blank" title="Imprimir PDF"><div class="boton-menu-reporte imagen-pdf transicion-corta borde-verde"></div></a>
  
  </div>';

  $id = trim($_POST['cedula']);
  $inicio = trim($_POST['inicio']);

  $resultado = mysqli_query($conex, "CALL sp_reporte_aceptacion($id)");

  ?>
      <h1 class="titulo-reporte fuente-sistema text-center bold italic">Boletín Informativo</h1>
      <table class="fuente-sistema">
        <thead>
          <tr>
            <th>Carta</th>
            <th>Estudiante</th>  
            <th>Representante</th>
            <th>Año de Inicio</th>
          </tr>
        </thead>

        <tbody>

  <?php 

while($fila = mysqli_fetch_array($resultado)) {

  echo "<tr>";
  
  echo "<td>Aceptación</td>";
  echo "<td>" . $fila[2] . " " . $fila[3] ."</td>";
  echo "<td>" . $fila[11] . " " . $fila[12] ."</td>";
  echo "<td>" . $inicio . "</td>";
  
  // imprimir el resto de campos

    echo "</tr>";
}

  ?>
      </tbody>
    </table>
<?php } ?>
</body>
</html>