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
$header = $seccion->addHeader();
$textRun = $header->addTextRun();
$textRun->addImage('resources/images/logoMuseu.png', [
    'width' => 100, // Ajusta el ancho de la imagen
    'height' => 80, // Ajusta la altura de la imagen
    'marginLeft' => 0, // Margen izquierdo
    'marginTop' => 0, // Margen superior
    'wrappingStyle' => 'inline', // Estilo de envoltura
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

foreach ($terminos as $index => $fila) {
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
    if($index != count($terminos) - 1){ // Cambiar la condición aquí
        $seccion->addText('____________________________________________________________________________');
    }else{
        $seccion->addText('__________________ - ___________________________');
    }
    $seccion->addTextBreak(); // Salto de línea adicional
}

$seccion->addText('___________________________________________________________________________', $tituloFontStyle);

// Espacio
$seccion->addTextBreak();
$terminos2 = [
    'Museu Apel·les Fenosa. Fundació Privada Apel·les Fenosa',
    ' Carrer Major, 25, 43700 El Vendrell, Tarragona ',
    '+34 977 15 41 92',
    'info@museuapellesfenosa.cat'
];
$fontStyleResponse = new Font();
$fontStyleResponse->setBold(true);
$fontStyleResponse->setSize(10);
$seccion->addText("Nom del prestador: ".$terminos2[0], $fontStyleResponse);
$seccion->addText("Nombre del prestador / Name of lender");
$seccion->addTextBreak();
$seccion->addText("Adreça: ".$terminos2[1], $fontStyleResponse);
$seccion->addText("Dirección / Address");
$seccion->addTextBreak();
$seccion->addText("Telèfon: +34 977 15 41 92".$terminos2[2], $fontStyleResponse);
$seccion->addText("Teléfono / Telephone");
$seccion->addTextBreak();
$seccion->addText("Correu electrònic: ".$terminos2[3], $fontStyleResponse);
$seccion->addText("Correo electrónico / Electronic mail");
$seccion->addTextBreak();
$seccion->addText('___________________________________________________________________________', $tituloFontStyle);
$seccion->addTextBreak();


$datosFontstyle = new Font();
$datosFontstyle->setBold(true);
$variableFontStyle = array('size' => 12);

$textRun = $seccion->addTextRun();
$textRun->addText("Número de registre: ",$datosFontstyle);
$textRun-> addText($cont[1][0]['RegistroNº'], $variableFontStyle);
$seccion->addText("Número de inventario");
$seccion->addText("Inventory number");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Nom de l'objecte i Títol: ",$datosFontstyle);
$textRun->addText($cont[1][0]['Nombre'].", ".$cont[1][0]['Titulo'],$variableFontStyle);
$seccion->addText("Nombre del objeto y Título");
$seccion->addText("Object name and title ");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Autor: ",$datosFontstyle);
$textRun->addText($cont[1][0]['AutorNombre'], $variableFontStyle);
$seccion->addText("Autor");
$seccion->addText("Author");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Dimensions màx. (Alçada/Amplada/Fondària): ", $datosFontstyle);
$textRun->addText($cont[1][0]['Altura'].", ".$cont[1][0]['Anchura'].", ".$cont[1][0]['Profundidad'],$variableFontStyle);
$seccion->addText("Dimensiones (Altura / Ancho / Fondo)");
$seccion->addText("Dimensions (Height / Width / Depth)");
$seccion->addTextBreak();
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Materials: ", $datosFontstyle);
$textRun->addText($cont[1][0]['MaterialNombre']."                     ", $variableFontStyle);
$textRun->addText("Datació: ", $datosFontstyle);
$textRun->addText($cont[1][0]['DatacionDescripcion'], $variableFontStyle);
$seccion->addText("Materiales                                   Datación");
$seccion->addText("Materials                                    Dating");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Datació: ", $datosFontstyle);
$textRun->addText($cont[1][0]['DatacionDescripcion'], $variableFontStyle);
$seccion->addText("Datación");
$seccion->addText("Dating");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Necessitat d’embalatge especial: ", $datosFontstyle);
$checkboxStyle = array('size' => 12); 
$textRun->addText(" ☐", $checkboxStyle);
$seccion->addText("Necesidad de embalado especial");
$seccion->addText("Need of packed special");
$seccion->addTextBreak();
$seccion->addText('___________________________________________________________________________', $tituloFontStyle);
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Forma en què el prestador vol figurar en el catàleg: ");
$textRun->addText("Museu Apel·les Fenosa", $variableFontStyle);
$seccion->addText("Forma en que el prestador quiere figurar en el catálogo");
$seccion->addText("Form in wich the lender wishes to feature in the catalague");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("El prestador admet que es fotografïi per a ", $datosFontstyle);
$textRun->addText("/ El prestador admite que se fotografie para / The lender allows be photographed for the catalogue:");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Publicacions de l’exposició              Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Mitjans de comunicació                   Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Arxius                                              Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Finalitats privades                           Sí");
$textRun->addText(" ☐", $checkboxStyle);
$textRun->addText("      No");
$textRun->addText(" ☐", $checkboxStyle);
$seccion->addTextBreak();
$seccion->addText('___________________________________________________________________________', $tituloFontStyle);
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Valoració per a l'assegurança: ",$datosFontstyle);
$textRun->addText($cont[1][0]['ValoracionEconomica'],$variableFontStyle);
$seccion->addText("Valoración para el seguro");
$seccion->addText("Insurance value");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();

$textRun->addText("Adreça on s'ha de ", $datosFontstyle);
$textRun->addText("recollir", array('underline' => 'single'));
$textRun->addText(" l'objecte: ", $datosFontstyle);
$textRun = $seccion->addTextRun();
$textRun->addText("Dirección donde debe ", $datosFontstyle);
$textRun->addText("recogerse", array('underline' => 'single')); 
$textRun->addText(" el objeto");
$textRun = $seccion->addTextRun();
$textRun->addText("Address from which object is to be ", $datosFontstyle);
$textRun->addText("picked up", array('underline' => 'single'));
$seccion->addTextBreak();

$seccion->addText("Telèfon: ", $datosFontstyle);
$seccion->addText("Teléfono ");
$seccion->addText("Telephone");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Adreça on s'ha de ", $datosFontstyle);
$textRun->addText("retornar", array('underline' => 'single'));
$textRun->addText(" l'objecte: ", $datosFontstyle);
$textRun = $seccion->addTextRun();
$textRun->addText("Dirección donde debe ", $datosFontstyle);
$textRun->addText("devolverse", array('underline' => 'single'));
$textRun->addText(" el objeto ", $datosFontstyle);
$textRun = $seccion->addTextRun();
$textRun->addText("Address from which object is to be ", $datosFontstyle);
$textRun->addText("returned", array('underline' => 'single'));
$seccion->addTextBreak();

$seccion->addText("Telèfon: ", $datosFontstyle);
$seccion->addText("Teléfono ");
$seccion->addText("Telephone");
$seccion->addTextBreak();
$seccion->addText('___________________________________________________________________________', $tituloFontStyle);
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addTextBreak();
$seccion->addText("Data i firma del prestador del préstec                          Data i firma del prestatari del préstec ",$datosFontstyle);
$seccion->addText("Fecha y firma del prestador del préstamo                              Fecha y firma del prestatario del préstamo ");
$seccion->addText("Date and signature of lender                                                  Date and signature of borrewer");

$footer = $seccion->addFooter();
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

// Agregar texto al pie de página con el estilo definido
$footer->addText("Fundació Privada Apel·les Fenosa", $fontStyleNegrita); // Cursiva y negrita
$footer->addText("Carrer Major, 25", $fontStyle); // Solo cursiva
$footer->addText("43700 El Vendrell, Tel.:+34 977 15 41 92", $fontStyle); // Solo cursiva
$footer->addText("info@museuapellesfenosa.cat", array_merge($fontStyle, $fontStyleAzul)); // Cursiva y azul

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