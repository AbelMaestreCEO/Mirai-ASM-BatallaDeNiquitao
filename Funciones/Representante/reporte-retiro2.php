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

  <a href="reporte-retiro.php?Id=' . $_POST['cedula'] . '&Plan=' .$_POST['plan']. '&Motivo=' . $_POST['motivo'] . '&Expiracion=' . $_POST['expiracion'] . '" target="_blank" title="Imprimir PDF"><div class="boton-menu-reporte imagen-pdf transicion-corta borde-verde"></div></a>
  
  </div>';

  $id = trim($_POST['cedula']);
  $plan = trim($_POST['plan']);
  $motivo = trim($_POST['motivo']);
  $expiracion = trim($_POST['expiracion']);

  $resultado = mysqli_query($conex, "CALL sp_reporte_retiro($id,$plan)");

  ?>
      <h1 class="titulo-reporte fuente-sistema text-center bold italic">Boletín Informativo</h1>
      <table class="fuente-sistema">
        <thead>
          <tr>
            <th>Carta</th>
            <th>Estudiante</th>  
            <th>Motivo</th>
            <th>Expiracion</th>
          </tr>
        </thead>

        <tbody>

  <?php 

while($fila = mysqli_fetch_array($resultado)) {

  echo "<tr>";
  
  echo "<td>Retiro</td>";
  echo "<td>" . $fila[0] . "</td>";
  echo "<td>" . $motivo . "</td>";
  echo "<td>" . $expiracion . "</td>";
  
  // imprimir el resto de campos

    echo "</tr>";
}

  ?>
      </tbody>
    </table>
<?php } ?>
</body>
</html>