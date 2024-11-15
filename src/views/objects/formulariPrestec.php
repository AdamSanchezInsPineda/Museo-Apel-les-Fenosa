<?php 
require('../vendor/autoload.php');

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;

// Iniciar el buffer de salida
ob_start();

// Crear una nueva instancia de PhpWord
$documento = new PhpWord();
$documento->setDefaultFontName('Calibri');
$documento->setDefaultFontSize(11);

// Nueva sección
$seccion = $documento->addSection();

// Texto sin formato
$seccion->addText(
    htmlspecialchars('Primer texto - Texto sin formato')
);
// Espacio
$seccion->addTextBreak(2);

// Configurar los encabezados para la descarga del archivo
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.oasis.opendocument.text'); // Cambiar a ODT
header('Content-Disposition: attachment; filename="Documento01.odt"'); // Cambiar a .odt
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');

// Guardar el documento en el buffer de salida
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($documento, 'ODText'); // Cambiar a ODT
$objWriter->save('php://output');
exit;
?>