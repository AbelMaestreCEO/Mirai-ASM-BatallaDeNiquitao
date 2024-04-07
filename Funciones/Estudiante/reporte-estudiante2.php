<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/Estilo-AMC.css" />
    <title>Reporte Estudiantes</title>
</head>
<body>
<?php
include '../../con_db.php';

if(isset($_POST['register'])){

  echo '<div class="menu-reporte blur-blanco borde-azul">
  
  <p class="bold">Acciones del reporte</p>

  <a href="reporte-estudiante.php?Id=' . $_POST['id'] . '&Seccion=' .$_POST['seccion']. '" target="_blank" title="Imprimir PDF"><div class="boton-menu-reporte imagen-pdf transicion-corta borde-verde"></div></a>
  
  </div>';

  $id = trim($_POST['id']);
  $seccion = trim($_POST['seccion']);
  $plan = '';
  $sec = '';

  $resultado2 = mysqli_query($conex, "CALL sp_reporte_estudiante($id,$seccion)");
  $row = mysqli_fetch_array($resultado2);
  $plan = $row[5];
  $sec = $row[4];
  mysqli_next_result($conex);

  ?>

      <?php $resultado = mysqli_query($conex, "CALL sp_reporte_estudiante($id,$seccion)"); ?>

      <!-- Encabezado incio -->
      <h1 class="titulo-reporte fuente-sistema text-center bold italic">Listado de estudiantes (<?php echo "$plan '$sec'"; ?>)</h1>
      <!-- Encabezado fin -->

      <table class="fuente-sistema">
        <thead>
          <tr>
            <th>Cédula</th>
            <th>Nombre</th>  
            <th>Apellido</th>
            <th>Matrícula</th>
            <th>Representante</th>
            <th>Telefono</th>
            <th>Correo</th>
          </tr>
        </thead>

        <tbody>

  <?php 

while($fila = mysqli_fetch_array($resultado)) {

  echo "<tr>";
  
  echo "<td>" . $fila[0] . "</td>";
  echo "<td>" . $fila[1] . "</td>";
  echo "<td>" . $fila[2] . "</td>";
  echo "<td>" . $fila[3] . "</td>";
  echo "<td>" . $fila[6] . "</td>";
  echo "<td>" . $fila[7] . "</td>";
  echo "<td>" . $fila[8] . "</td>";
  
  // imprimir el resto de campos
  
  echo "</tr>";

}

  ?>
      </tbody>
    </table>
<?php } ?>
</body>
</html>