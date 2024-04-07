<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
    <title>Reporte Profesores</title>
</head>
<body>
<?php
include '../../con_db.php';

if(isset($_POST['register'])){

  echo '<div class="menu-reporte blur-blanco borde-azul">
  
  <p class="bold">Acciones del reporte</p>

  <a href="reporte-record.php?Id=' . $_POST['cedula'] . '&Plan=' .$_POST['plan']. '" target="_blank" title="Imprimir PDF"><div class="boton-menu-reporte imagen-pdf transicion-corta borde-verde"></div></a>
  
  </div>';

  $id = trim($_POST['cedula']);
  $plan = trim($_POST['plan']);

  $resultado = mysqli_query($conex, "CALL sp_reporte_record($id,$plan)");

  ?>
      <h1 class="titulo-reporte fuente-sistema text-center bold italic">Boletín Informativo</h1>
      <table class="fuente-sistema">
        <thead>
          <tr>
            <th>Materia</th>
            <th>Lapso 1</th>  
            <th>Lapso 2</th>
            <th>Lapso 3</th>
            <th>Promedio</th>
          </tr>
        </thead>

        <tbody>

  <?php 

$datos = [];

while ($fila = mysqli_fetch_array($resultado)) {
    $materia = $fila[1];
    $lapso = $fila[2];
    $nota = $fila[0];

    // Almacenamos en array
    $datos[$materia][$lapso] = $nota;
}

// Imprimimos tabla
foreach ($datos as $materia => $lapsoNota) {
    echo "<tr>";

    echo "<td>$materia</td>"; // Agregamos esto

    $sumaNotas = 0; // Inicializamos la suma de notas
    $totalLapsos = count($lapsoNota); // Contamos la cantidad de lapsos

    // Recorremos los 3 lapsos posibles
    for ($i = 1; $i <= 3; $i++) {
      if (isset($lapsoNota["Lapso $i"])) {
          $nota = $lapsoNota["Lapso $i"];
          echo "<td>$nota</td>";
          $sumaNotas += $nota; // Sumamos las notas
      } else {
          echo "<td>0</td>"; // Si no hay nota, mostramos 0
      }
  }

  // Calculamos el promedio (si hay notas) o asignamos 0 (si no hay notas)
  $promedio = $sumaNotas / 3;

  // Reducimos a 2 decimales utilizando number_format
  $promedioFormateado = number_format($promedio, 2);

    echo "<td>$promedioFormateado</td>"; // Imprimimos el promedio

    echo "</tr>";
}

  ?>
      </tbody>
    </table>
<?php } ?>
</body>
</html>