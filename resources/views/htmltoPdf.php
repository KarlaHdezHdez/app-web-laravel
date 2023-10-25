<?php
//require('librerias/dompdf/src/Dompdf.php');
/*$dompdf = new Cpdf();
$dompdf->load_html(file_get_contents('encuesta_pdf.php'));
$dompdf->render();
$dompdf->stream('mi_archivo.pdf');*/
require_once('librerias/dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;
// instantiate and use the dompdf class
$options = new Options();
$options->set('isRemoteEnabled', true);
//$options->setIsRemoteEnabled(true);

if($_GET):
  $matricula = $_GET['mtr'];

  $dompdf = new Dompdf($options);
  $dompdf = new Dompdf();
  $dompdf->setPaper('A4', 'landscape');
  $dompdf->loadHtml(file_get_contents("http://localhost:8080/uthh/encuesta_pdf.php?mtr=$matricula"));
  $dompdf->render();
  $dompdf->stream("encuesta ".$matricula.".pdf");
endif;

/*
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();*/
?>
