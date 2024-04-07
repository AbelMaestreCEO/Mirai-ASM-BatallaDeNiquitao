<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../css/estilo-reporte.php'; ?>
    <title>Reporte de Literal</title>
</head>
<body>
<?php
include '../../con_db.php'; 

  $id = trim($_REQUEST['Id']);
  $plan = trim($_REQUEST['Plan']);

  $resultado = mysqli_query($conex, "CALL sp_reporte_literal($id,$plan)");

  mysqli_next_result($conex); 

  $row = mysqli_fetch_array($resultado);
    $literal = $row[0];
    $cedula = $row[3];
    $nombre = $row[4];
    $apellido = $row[5];
    $seccion = $row[6];
    $planes = $row[7];
    $guia_nombre = $row[9];
    $guia_apellido = $row[10];
    $guia_titulo = $row[11];
    $observacion = $row[12];
    $recomendacion = $row[13];
    $descripcion_literal = $row[14];

  ?>
      <!-- Encabezado incio -->
      <?php include '../Reportes/encabezado-reportes.php'; ?>
      <p class="titulo-reporte fuente-sistema text-center bold italic">BOLETÍN DESCRIPTIVO FINAL</p>
      <p class="text-center fuente-sistema linea">________________________________________________________________________________</p>
      <div class="informacion">
        <div class="a">
          <p class="encabezado fuente-sistema bold italic">APELLIDOS Y NOMBRES: <?php echo"$apellido $nombre";?></p>
          <p class="encabezado fuente-sistema bold italic">C.I O C.E: <?php echo"$cedula";?></p>
          <p class="encabezado fuente-sistema bold italic">DOCENTE: <?php echo"$guia_titulo. $guia_nombre $guia_apellido";?></p>
        </div>
        <div class="b">
          <P class="encabezado fuente-sistema bold italic">AÑO, SECCIÓN: <?php echo"$planes, $seccion";?></p>
          <P class="encabezado fuente-sistema bold italic">PERIODO ESCOLAR: </p>
        </div>
      </div>
      <p class="encabezado fuente-sistema"><?php echo"$observacion";?></p>
      <br>
      <p class="encabezado fuente-sistema">Recomendaciones Pedagógicas: <?php echo"$recomendacion";?></p>
      <br>
      <p class="encabezado fuente-sistema">De acuerdo con el artículo 108 del Reglamento de la Ley Orgánica de Educación y la Resolución 266 de Gaceta Oficial Nº 5428 el (la) estudiante fue promovida al <?php echo"$literal";?> con el literal "<?php echo"$literal";?>" cuyda descripción se especifica:</p>
      <br>
      <p class="encabezado fuente-sistema">(<?php echo"$literal";?>) = <?php echo"$descripcion_literal";?>.</p>
      <!-- Encabezado fin -->

    <!-- Pie incio -->

    <footer class="">
      <div class="a">
        <p class="encabezado fuente-sistema firma-izquierda bold italic">____________________</p>
        <p class="encabezado fuente-sistema texto-izquierda bold italic">DOCENTE: <br> <?php echo"$guia_nombre $guia_apellido";?></p>
      </div>
      <div class="b">
        <p class="encabezado fuente-sistema firma-derecha bold italic">____________________</p>
        <p class="encabezado fuente-sistema texto-derecha bold italic">DIRECTOR</p>
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