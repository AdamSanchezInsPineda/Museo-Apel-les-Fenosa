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

$seccion = $documento->addSection([
    'marginLeft' => 0,
    'marginRight' => 0,

]);

$table = $seccion->addTable(
);
$row = $table->addRow();

$cellImage = $row->addCell(2000); // Ancho de la celda para la imagen
for ($i=0;$i<2;$i++){
    $cellImage->addImage('resources/images/logoMuseu.png', [
        'width' => 75,
        'height' => 60,
        'marginLeft' => 0,
        'marginTop' => 0,
        'wrappingStyle' => 'inline',
    ]);
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addImage('resources/images/textoExemple.png', [
        'width' => 75,
        'height' => 200,
        'marginLeft' => 0,
        'marginTop' => 0,
        'wrappingStyle' => 'inline',
    ]);
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
    $cellImage->addTextBreak();
}
$cellContent = $row->addCell(9000); 

$tituloFontStyle = new Font();
$tituloFontStyle->setBold(true);
$tituloFontStyle->setSize(12);

$titulo2FontStyle = new Font();
$titulo2FontStyle->setItalic(true);
$titulo2FontStyle->setSize(12);

$titulo3FontStyle = new Font();
$titulo3FontStyle->setSize(12);

$contentSection = $cellContent->addTextRun(); // Usamos TextRun para agregar múltiples elementos
$contentSection->addText("FORMULARI DE PRÉSTEC PER RETORNAR AL CENTRE", $tituloFontStyle);
$contentSection->addTextBreak();
$contentSection->addText("FORMULARIO DE PRÉSTAMO PARA DEVOLVER AL CENTRO", $titulo2FontStyle);
$contentSection->addTextBreak();
$contentSection->addText("FORMULARY OF LOAN TO RETURN TO CENTRE", $titulo3FontStyle);
$contentSection->addTextBreak();
$contentSection->addText('________________________________________________________________', $tituloFontStyle);


$terminos = [
    ['Institució sol·licitant', 'Institución solicitante', 'Applicant Institution:'],
    ['Responsable del préstec', 'Responsable del préstamo', 'Responsible of loan:'],
    ['Càrrec', 'Cargo', 'Job title:'],
    ['Exposició', 'Exposición', 'Exhibition:'],
    ['Lloc', 'Lugar', 'Place:'],
    ['Dates', 'Fechas', 'Dates:']
];

foreach ($terminos as $index => $fila) {
    // Crear un nuevo texto en ejecución para evitar saltos de línea
    $textRun = $cellContent->addTextRun();

    // Agregar el término en catalán en negrita
    $fontStyle = new Font();
    $fontStyle->setBold(true);
    $textRun->addText($fila[0], $fontStyle);
    
    // Agregar los otros términos sin negrita
    for ($i = 1; $i < count($fila); $i++) {
        $textRun->addText(' / ' . $fila[$i]);
    }
    
    // Agregar un salto de línea después de cada fila
    $cellContent->addTextBreak();
    
    // Agregar una línea de subrayado para la entrada
    if($index != count($terminos) - 1){ // Cambiar la condición aquí
        $cellContent->addText('____________________________________________________________________________');
        $cellContent->addTextBreak(); // Salto de línea adicional
    }else{
        $cellContent->addText('__________________ - ___________________________');
    }
}

$cellContent->addText('________________________________________________________________', $tituloFontStyle);

// Espacio
$cellContent->addTextBreak();
$terminos2 = [
    'Museu Apel·les Fenosa. Fundació Privada Apel·les Fenosa',
    ' Carrer Major, 25, 43700 El Vendrell, Tarragona ',
    '+34 977 15 41 92',
    'info@museuapellesfenosa.cat'
];
$fontStyleResponse = new Font();
$fontStyleResponse->setBold(true);
$fontStyleResponse->setSize(10);
$cellContent->addText("Nom del prestador: ".$terminos2[0], $fontStyleResponse);
$cellContent->addText("Nombre del prestador / Name of lender");
$cellContent->addTextBreak();
$cellContent->addText("Adreça: ".$terminos2[1], $fontStyleResponse);
$cellContent->addText("Dirección / Address");
$cellContent->addTextBreak();
$cellContent->addText("Telèfon: +34 977 15 41 92".$terminos2[2], $fontStyleResponse);
$cellContent->addText("Teléfono / Telephone");
$cellContent->addTextBreak();
$cellContent->addText("Correu electrònic: ".$terminos2[3], $fontStyleResponse);
$cellContent->addText("Correo electrónico / Electronic mail");
$cellContent->addTextBreak();
$cellContent->addText('________________________________________________________________', $tituloFontStyle);
$cellContent->addTextBreak();


$datosFontstyle = new Font();
$datosFontstyle->setBold(true);

$textRun = $cellContent->addTextRun();
$textRun->addText("Número de registre: ",$datosFontstyle);
$textRun-> addText($cont[1][0]['RegistroNº'], $datosFontstyle);
$cellContent->addText("Número de inventario");
$cellContent->addText("Inventory number");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Nom de l'objecte i Títol: ",$datosFontstyle);
$textRun->addText($cont[1][0]['Nombre'].", ".$cont[1][0]['Titulo'],$datosFontstyle);
$cellContent->addText("Nombre del objeto y Título");
$cellContent->addText("Object name and title ");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Autor: ",$datosFontstyle);
$textRun->addText($cont[1][0]['AutorNombre'], $datosFontstyle);
$cellContent->addText("Autor");
$cellContent->addText("Author");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Dimensions màx. (Alçada/Amplada/Fondària): ", $datosFontstyle);
$textRun->addText($cont[1][0]['Altura'].", ".$cont[1][0]['Anchura'].", ".$cont[1][0]['Profundidad'],$datosFontstyle);
$cellContent->addText("Dimensiones (Altura / Ancho / Fondo)");
$cellContent->addText("Dimensions (Height / Width / Depth)");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Materials: ", $datosFontstyle);

$materialNombre = $cont[1][0]['MaterialNombre'];
$longitudMaterialNombre = strlen($materialNombre);
$numeroEspaciosBase = 25;
$espaciosAdicionales = max(0, $numeroEspaciosBase - $longitudMaterialNombre);
$textRun->addText($materialNombre . str_repeat(' ', $espaciosAdicionales), $datosFontstyle);

$textRun->addText("Datació: ", $datosFontstyle);
$textRun->addText($cont[1][0]['DatacionDescripcion'], $datosFontstyle);
$cellContent->addText("Materiales                                   Datación");
$cellContent->addText("Materials                                     Dating");
$cellContent->addTextBreak();


$textRun = $cellContent->addTextRun();
$textRun->addText("Necessitat d’embalatge especial: ", $datosFontstyle);
$checkboxStyle = array('size' => 12); 
$textRun->addText(" ☐", $checkboxStyle);
$cellContent->addText("Necesidad de embalado especial");
$cellContent->addText("Need of packed special");
$cellContent->addTextBreak();
$cellContent->addTextBreak();

$cellContent->addText('________________________________________________________________', $tituloFontStyle);
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Forma en què el prestador vol figurar en el catàleg: ");
$textRun->addText("Museu Apel·les Fenosa", $datosFontstyle);
$cellContent->addText("Forma en que el prestador quiere figurar en el catálogo");
$cellContent->addText("Form in wich the lender wishes to feature in the catalague");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("El prestador admet que es fotografïi per a ", $datosFontstyle);
$textRun->addText("/ El prestador admite que se fotografie para / The lender allows be photographed for the catalogue:");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Publicacions de l’exposició              Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Mitjans de comunicació                   Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Arxius                                              Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Finalitats privades                           Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$cellContent->addTextBreak();
$cellContent->addText('________________________________________________________________', $tituloFontStyle);
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Valoració per a l'assegurança: ",$datosFontstyle);
$textRun->addText($cont[1][0]['ValoracionEconomica'],$datosFontstyle);
$cellContent->addText("Valoración para el seguro");
$cellContent->addText("Insurance value");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();

$textRun->addText("Adreça on s'ha de ", $datosFontstyle);
$textRun->addText("recollir", array('underline' => 'single'));
$textRun->addText(" l'objecte: ", $datosFontstyle);
$textRun = $cellContent->addTextRun();
$textRun->addText("Dirección donde debe ", $datosFontstyle);
$textRun->addText("recogerse", array('underline' => 'single')); 
$textRun->addText(" el objeto");
$textRun = $cellContent->addTextRun();
$textRun->addText("Address from which object is to be ", $datosFontstyle);
$textRun->addText("picked up", array('underline' => 'single'));
$cellContent->addTextBreak();

$cellContent->addText("Telèfon: ", $datosFontstyle);
$cellContent->addText("Teléfono ");
$cellContent->addText("Telephone");
$cellContent->addTextBreak();

$textRun = $cellContent->addTextRun();
$textRun->addText("Adreça on s'ha de ", $datosFontstyle);
$textRun->addText("retornar", array('underline' => 'single'));
$textRun->addText(" l'objecte: ", $datosFontstyle);
$textRun = $cellContent->addTextRun();
$textRun->addText("Dirección donde debe ", $datosFontstyle);
$textRun->addText("devolverse", array('underline' => 'single'));
$textRun->addText(" el objeto ", $datosFontstyle);
$textRun = $cellContent->addTextRun();
$textRun->addText("Address from which object is to be ", $datosFontstyle);
$textRun->addText("returned", array('underline' => 'single'));
$cellContent->addTextBreak();

$cellContent->addText("Telèfon: ", $datosFontstyle);
$cellContent->addText("Teléfono ");
$cellContent->addText("Telephone");
$cellContent->addTextBreak();
$cellContent->addText('________________________________________________________________', $tituloFontStyle);
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addTextBreak();
$cellContent->addText("Data i firma del prestador del préstec                          Data i firma del prestatari del préstec ",$datosFontstyle);
$cellContent->addText("Fecha y firma del prestador del préstamo                              Fecha y firma del prestatario del préstamo ");
$cellContent->addText("Date and signature of lender                                                  Date and signature of borrewer");

$fontStyle = [
    'size' => 10, 
    'italic' => true, 
    'color' => '808080'
];
$fontStyleAzul = ['size' => 10, 
    'italic' => true, 
    'bold' => true, 
    'color' => '0000FF'];
$fontStyleNegrita = [
    'size' => 10, 
    'italic' => true, 
    'bold' => true, 
    'color' => '808080' // Asegúrate de que el color sea el que deseas
];

// $cellImage->addLink('mailto:info@museuapellesfenosa.cat', '');
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); // Cambiar a DOCX
header('Content-Disposition: attachment; filename="Documento01.docx"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');

// Guardar el documento en el buffer de salida
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($documento, 'Word2007'); // Cambiar a ODT
$objWriter->save('php://output');
exit;
?>