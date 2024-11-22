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
    'marginLeft' => -1000, // Margen izquierdo
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
$textRun->addText("Nom de l'objecte i autor: ",$datosFontstyle);
$textRun->addText($cont[1][0]['Nombre'].", ". $cont[1][0]['AutorNombre'], $variableFontStyle);
$seccion->addText("Nombre del objeto y autor");
$seccion->addText("Object name:");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Dimensions màx. (Alçada/Amplada/Fondària/Diàmetre): ", $datosFontstyle);
$textRun->addText($cont[1][0]['Altura'].", ".$cont[1][0]['Anchura'].", ".$cont[1][0]['Profundidad'],$variableFontStyle);
$seccion->addText("Dimensiones (Altura / Ancho / Fondo / Diámetro)");
$seccion->addText("Dimensions (Height / Width / Depth / Diameter)");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Materials: ", $datosFontstyle);
$textRun->addText($cont[1][0]['MaterialNombre'], $variableFontStyle);
$seccion->addText("Materials");
$seccion->addText("Materials");
$seccion->addTextBreak();

$textRun = $seccion->addTextRun();
$textRun->addText("Datació: ", $datosFontstyle);
$textRun->addText($cont[1][0]['DatacionDescripcion'], $variableFontStyle);
$seccion->addText("Datación");
$seccion->addText("Dating:");
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