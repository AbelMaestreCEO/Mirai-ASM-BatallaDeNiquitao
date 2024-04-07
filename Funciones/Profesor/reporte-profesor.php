<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../css/estilo-reporte.php'; ?>
    <title>Reporte Profesores</title>
</head>
<body class="fondo-blanco">
<?php
include '../../con_db.php';

$resultado = mysqli_query($conex, "CALL sp_reporte_profesor()");

?>
    <!-- Encabezado incio -->
    <?php include '../Reportes/encabezado-reportes.php'; ?>
      <p class="titulo-reporte fuente-sistema text-center bold italic">Listado de Profesores</p>
      <p class="text-center fuente-sistema linea">________________________________________________________________________________</p>
      <!-- Encabezado fin -->
    <table class="fuente-sistema encabezado">
      <thead>
        <tr>
          <th>Cédula</th>
          <th>Nombre</th>  
          <th>Apellido</th>
          <th>Teléfono</th>
          <th>Correo</th>
          <th>Materia</th>
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
  echo "<td>" . $fila[4] . "</td>";
  echo "<td>" . $fila[5] . "</td>";
  // imprimir el resto de campos
  
  echo "</tr>";

}

?>

      </tbody>
    </table>
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

$dompdf->stream("Listado de Profesores.pdf", array("Attachment" => false));
?>