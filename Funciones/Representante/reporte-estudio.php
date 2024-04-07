<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../css/estilo-reporte.php'; ?>
    <title>Constancia de Estudio</title>
</head>
<body>
<?php
include '../../con_db.php'; 

  $id = trim($_REQUEST['Id']);
  $expiracion = trim($_REQUEST['Expiracion']);

  $resultado = mysqli_query($conex, "CALL sp_reporte_estudio($id)");

  mysqli_next_result($conex); 

  $row = mysqli_fetch_array($resultado);
    $estudiante = $row[0];
    $fecha = $row[1];
    $nombre = $row[2];
    $apellido = $row[3];
    $plan = $row[4];
    $tipo = $row[5];
    $nombre_director = $row[6];
    $cedula_director = $row[7];
    $telefono = $row[8];
    $telefono2 = $row[9];

    function fechaATexto($expiracion) {

      $dias = array("Cero","Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Ocho","Nueve","Diez","Once","Doce","Trece","Catorce","Quince","Dieciséis","Diecisiete","Dieciocho","Diecinueve","Veinte","Veintiuno","Veintidós","Veintitrés","Veinticuatro","Veinticinco","Veintiséis","Veintisiete","Veintiocho","Veintinueve","Treinta","Treinta y uno");

      $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    
      list($year, $month, $day) = explode("-", $expiracion);

      $day = intval($day);
    
      return "$dias[$day] (".str_pad($month, 2, "0", STR_PAD_LEFT).") días del mes de ".$meses[$month-1]." del $year";
    
    }

    // Obtener el año actual
    $year = date("Y"); 

    // Restarle 1 para obtener el año pasado
    $last_year = $year - 1;


  ?>
      <!-- Encabezado incio -->
      <?php include '../Reportes/encabezado-reportes.php'; ?>
      <p class="titulo-reporte fuente-sistema text-center bold italic">Constancia de Estudio</p>
      <p class="text-center fuente-sistema linea">________________________________________________________________________________</p>
      <br>
      <p class="text-14 fuente-sistema interlineado sangria">Quien suscribe Prof. <strong><?php echo"$nombre_director";?></strong>, portadora de la cédula de idéntidad Nº: <?php echo"$cedula_director";?>, Director(a) de la institución, por medio de la presente hace constar que el (la) estudiante: <?php echo"$apellido $nombre";?>, de fecha de nacimiento: <?php echo"$fecha";?>, Portador de la cédula Nº <strong><?php echo"$estudiante";?></strong>, quien cursa <strong><?php echo"$plan";?></strong> de <strong><?php echo"$tipo";?></strong>, en esta Institución Educativa, correspondiente al año escolar <?php echo"$last_year - $year";?></p>
      <br>
      <p class="text-14 fuente-sistema interlineado sangria">Constancia que se expide a petición de la parte interesada, en la Ciudad de El Tigre a los <?php echo fechaATexto($expiracion);?></p>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- Encabezado fin -->

    <!-- Pie incio -->

    <footer class="">
      <div class="c sello borde">
        <br>
        <br>
        <br>
        <br>
        <br>
        <p class="encabezado fuente-sistema bold italic text-center">____________________</p>
        <p class="encabezado fuente-sistema bold italic text-center">Prof. <?php echo"$nombre_director";?></p>
        <p class="encabezado fuente-sistema bold italic text-center">C.I: <?php echo"$cedula_director";?></p>
        <p class="encabezado fuente-sistema bold italic text-center">Director(a)</p>
        <br>
      </div>
      <p class="encabezado fuente-sistema bold italic text-center">Dirección: calle 27 sur- El Tigre. Edo. Anzoátegui</p>
      <p class="encabezado fuente-sistema bold italic text-center">Teléfonos: <?php echo"$telefono";?> - <?php echo"$telefono2";?></p>
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