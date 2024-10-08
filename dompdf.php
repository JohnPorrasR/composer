<?php 

require 'vendor/autoload.php';
define('DOMPDF_ENABLE_AUTOLOAD', false);

use Dompdf\Dompdf;

// Introducimos HTML de prueba
$html = '<h1>@johnporrasr</h1>';
 
// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();
 
// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("A4", "portrait");
 
// Cargamos el contenido HTML.
$pdf->load_html(utf8_decode($html));
 
// Renderizamos el documento PDF.
$pdf->render();
 
// Enviamos el fichero PDF al navegador.
$pdf->stream('FicheroEjemplo.pdf');