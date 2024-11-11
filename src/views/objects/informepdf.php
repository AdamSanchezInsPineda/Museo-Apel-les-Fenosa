<?php
// var_dump($cont);
require('../vendor/autoload.php');

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$content = "
<html>
    <body class = 'verFichaCompleta'>
        <div>
            <!--Contenido variable de la pagina-->
            <h1>Fitxa completa de </h1>                        
            <div>
                <p>Nº de Registre: ".$cont[1][0]['RegistroNº']."</p> 
                //imagen
                    
                <div>
                    <p>Nom: ".$cont[1][0]['Nombre']."</p>
                    <p>Museu: ".$cont[1][0]['MuseoNombre']."</p>
                    <p>Autor: ".$cont[1][0]['AutorNombre']."</p> 
                    <p>Títol: ".$cont[1][0]['Titulo']."</p>
                </div>
            </div>
            
            
        </div>
    </body>
</html>";


$html2pdf ->writeHTML($content);
                
$html2pdf->output("PDFPRUEBA.pdf");































// require('../vendor/setasign/fpdf/fpdf.php');

// // $pdf = new FPDF('P','mm','A4');// donde la P es el orientación(L es para horizontal), mm es la unidad de medida y A4 es el tamaño de la hoja
// // $pdf->AddPage();
// // $pdf->SetFont('Arial','B',16);
// // $pdf->Cell(40,10,'Hello World!');
// // $pdf->Cell(40,10,'Hello World !',1);
// // $pdf->Cell(60,10,'Powered by FPDF.',0,1,'C');
// // $pdf->Output();

// class PDF extends FPDF
// {
// // Page header
// function Header()
// {
//     // Logo
//     // $this->Image('plus.png',10,6,30);
//     // Arial bold 15
//     $this->SetFont('Arial','B',15);
//     // Move to the right
//     $this->Cell(80);
//     // Title
//     $this->Cell(30,10,'Title',1,0,'C');
//     // Line break
//     $this->Ln(20);
// }

// // Page footer
// function Footer()
// {
//     // Position at 1.5 cm from bottom
//     $this->SetY(-15);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Page number
//     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
// }
// }

// // Instanciation of inherited class
// $pdf = new PDF();
// $pdf->AliasNbPages();
// $pdf->AddPage();
// $pdf->SetFont('Times','',12);
// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
// $pdf->Output();
?>