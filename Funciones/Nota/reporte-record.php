<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../css/estilo-reporte.php'; ?>
    <title>Reporte de Records</title>
</head>
<body>
<?php
include '../../con_db.php'; 

  $id = trim($_REQUEST['Id']);
  $plan = trim($_REQUEST['Plan']);

  $resultado = mysqli_query($conex, "CALL sp_reporte_record($id,$plan)");

  mysqli_next_result($conex); 

  $row = mysqli_fetch_array($resultado);
    $cedula = $row[3];
    $nombre = $row[4];
    $apellido = $row[5];
    $seccion = $row[6];
    $planes = $row[7];
    $guia_nombre = $row[9];
    $guia_apellido = $row[10];

  ?>
      <!-- Encabezado incio -->
      <?php include '../Reportes/encabezado-reportes.php'; ?>
      <p class="titulo-reporte fuente-sistema text-center bold italic">BOLETÍN INFORMATIVO</p>
      <p class="text-center fuente-sistema linea">________________________________________________________________________________</p>
      <div class="informacion">
        <div class="a">
          <P class="encabezado fuente-sistema bold italic">APELLIDOS: <?php echo"$apellido";?></p>
          <P class="encabezado fuente-sistema bold italic">NOMBRES: <?php echo"$nombre";?></p>
          <P class="encabezado fuente-sistema bold italic">C.I O C.E: <?php echo"$cedula";?></p>
        </div>
        <div class="b">
          <P class="encabezado fuente-sistema bold italic">AÑO, SECCIÓN: <?php echo"$planes, $seccion";?></p>
          <P class="encabezado fuente-sistema bold italic">PERIODO ESCOLAR: </p>
        </div>
      </div>
      <!-- Encabezado fin -->

      <table class="fuente-sistema encabezado">
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

$resultado1 = mysqli_query($conex, "CALL sp_reporte_record($id,$plan)");

while ($fila = mysqli_fetch_array($resultado1)) {
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

    <!-- Pie incio -->

    <footer class="">
      <div class="a">
        <p class="encabezado fuente-sistema firma-izquierda bold italic">____________________</p>
        <p class="encabezado fuente-sistema texto-izquierda bold italic">DIRECTOR</p>
      </div>
      <div class="b">
        <p class="encabezado fuente-sistema firma-derecha bold italic">____________________</p>
        <p class="encabezado fuente-sistema texto-derecha bold italic">PROFESOR GUÍA: <br> <?php echo"$guia_nombre $guia_apellido";?></p>
      </div>
      <div class="c sello">
        <p class="encabezado fuente-sistema bold italic">SELLO DEL COLEGIO</p>
      </div>
    </footer>

    <!-- Pie fin -->
</body>
</html>

<?php $html = ob_get_clean();

require_once '../../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');
$dompdf->render();

//Especificar nombre del archivo

$dompdf->stream("Record.pdf", array("Attachment" => false));
?>