<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once "vendor/autoload.php";

$phpExcel = new \PHPExcel();

$phpExcel->getProperties()
	->setCreator("Cattivo")
	->setLastModifiedBy("Cattivo")
	->setTitle("twitter")
	->setSubject("Mostranto twitter")
	->setDescription("Demostracion sobre como crear archivos de Excel desde PHP.")
	->setKeywords("Excel Office 2007 openxml php")
	->setCategory("Pruebas de Excel e instalacion por composer.json");
	 
	// Agregar Informacion
$phpExcel->setActiveSheetIndex(0)
	->setCellValue('A1', 'twitter')
	->setCellValue('A2', '@johnporrasr')
	->setCellValue('B1', 'Fanpage')
	->setCellValue('B2', 'johnporrasr')
	->setCellValue('C1', 'Suma')
	->setCellValue('C2', '10')
	->setCellValue('C3', '12')
	->setCellValue('C4', '=sum(C2:C3)');
	 
	// Renombrar Hoja
	$phpExcel->getActiveSheet()->setTitle('Tecnologia Simple');
	 
	// Establecer la hoja activa, para que cuando se abra el documento se muestre primero.
	$phpExcel->setActiveSheetIndex(0);
	 
	// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="phpExcel.xlsx"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
