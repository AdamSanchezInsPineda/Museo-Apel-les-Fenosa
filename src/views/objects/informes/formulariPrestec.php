<?php 
require('../vendor/autoload.php');

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Style\Font;

// Iniciar el buffer de salida
ob_start();

// Crear una nueva instancia de PhpWord
$documento = new PhpWord();
$documento->setDefaultFontName('Calibri');
$documento->setDefaultFontSize(8);




$seccion = $documento->addSection();
$seccion->addImage('resources/images/logoMuseu.png', [
    'width' => 100, // Ajusta el ancho de la imagen
    'height' => 80, // Ajusta la altura de la imagen
    'marginLeft' => 2000, // Margen izquierdo
    'marginTop' => 0, // Margen superior
    'wrappingStyle' => 'behind', // Estilo de envoltura
    'wrapDistanceLeft' => 0, // Distancia de envoltura izquierda
]);

$tituloFontStyle = new Font();
$tituloFontStyle->setBold(true);
$tituloFontStyle->setSize(12);

$titulo2FontStyle = new Font();
$titulo2FontStyle->setItalic(true);
$titulo2FontStyle->setSize(12);

$titulo3FontStyle = new Font();
$titulo3FontStyle->setSize(12);

// Agregar el título con el estilo específico
$seccion->addText("FORMULARI DE PRÉSTEC PER RETORNAR AL CENTRE", $tituloFontStyle);
$seccion->addText("FORMULARIO DE PRÉSTAMO PARA DEVOLVER AL CENTRO", $titulo2FontStyle);
$seccion->addText("FORMULARY OF LOAN TO RETURN TO CENTRE", $titulo3FontStyle);
$seccion->addTextBreak();
$seccion->addText('___________________________________________________________________________', $tituloFontStyle);


$terminos = [
    ['Institució sol·licitant', 'Institución solicitante', 'Applicant Institution:'],
    ['Responsable del préstec', 'Responsable del préstamo', 'Responsible of loan:'],
    ['Càrrec', 'Cargo', 'Job title:'],
    ['Exposició', 'Exposición', 'Exhibition:'],
    ['Lloc', 'Lugar', 'Place:'],
    ['Dates', 'Fechas', 'Dates:']
];

foreach ($terminos as $fila) {
    // Crear un nuevo texto en ejecución para evitar saltos de línea
    $textRun = $seccion->addTextRun();

    // Agregar el término en catalán en negrita
    $fontStyle = new Font();
    $fontStyle->setBold(true);
    $textRun->addText($fila[0], $fontStyle);
    
    // Agregar los otros términos sin negrita
    for ($i = 1; $i < count($fila); $i++) {
        $textRun->addText(' / ' . $fila[$i]);
    }
    
    // Agregar un salto de línea después de cada fila
    $seccion->addTextBreak();
    
    // Agregar una línea de subrayado para la entrada
    $seccion->addText('____________________________________________________________________________');
    $seccion->addTextBreak(); // Salto de línea adicional
}
$seccion->addText('__________________ - ___________________________');
$seccion->addText('___________________________________________________________________________', $tituloFontStyle);







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