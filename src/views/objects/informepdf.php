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
                <div>
                    <p>Nom: ".$cont[1][0]['Nombre']."</p>
                    <p>Museu: ".$cont[1][0]['MuseoNombre']."</p>
                    <p>Autor: ".$cont[1][0]['AutorNombre']."</p> 
                    <p>Títol: ".$cont[1][0]['Titulo']."</p>
                </div>
            </div>
            <div>
                    
            <div><h2>Ubicacions</h2><span></span></div>

            <div>
                <p>Data Inici Ubicació: ".$cont[1][0]['FechaInicioUbicacion']."</p>
                <p>Data Final Ubicació: ".$cont[1][0]['FechaFinUbicacion']."</p>
                <p>Comentari Ubicació: ".$cont[1][0]['ComentarioUbicacion']."</p>

            </div>

            <div><h2>Propietats</h2><span></span></div>

            <div>
                <p>Altura: ".$cont[1][0]['Altura']."</p>
                <p>Datació: ".$cont[1][0]['DatacionDescripcion']."</p>
                <p>Amplada: ".$cont[1][0]['Anchura']."</p>
                <p>Any Inicial: ".$cont[1][0]['any_inicial']."</p>
                <p>Profunditat: ".$cont[1][0]['Profundidad']."</p>
                <p>Any Final: ".$cont[1][0]['any_final']."</p>
                <p>Material: ".$cont[1][0]['MaterialNombre']."</p>
                <p>Tècnica: ".$cont[1][0]['TecnicaNombre']."</p>
            </div>

            <div><h2>Baixa</h2><span></span></div>

            <div>
                <p>Baixa: ".$cont[1][0]['BajaValor']."</p>
                <p>Causa Baixa: ".$cont[1][0]['CausaBajaValor']."</p>
                <p>Data Baixa: ".$cont[1][0]['FechaBaja']."</p>
                <p>Persona Autorizada Baja: ".$cont[1][0]['PersonaAutorizadaBaja']."</p>
            </div>

            <div><h2>Restauració</h2><span></span></div>

            <div>
                <p>Data Inici Restauració: ".$cont[1][0]['FechaInicioRestauracion']."</p>
                <p>Data Final Restauració: ".$cont[1][0]['FechaFinRestauracion']."</p>
                <p>Codi Restauració: ".$cont[1][0]['CodigoRestauracion']."</p>
                <p>Nom Restaurador: ".$cont[1][0]['NombreRestaurador']."</p>
                <p>Comentari Restauració: ".$cont[1][0]['ComentarioRestauracion']."</p>
            </div>

            <div><h2>Ingrés</h2><span></span></div>

            <div>
                <p>Forma d'Ingrés: ".$cont[1][0]['FormaIngresoValor']."</p>
                <p>Font d'Ingrés: ".$cont[1][0]['FuenteIngreso']."</p>
                <p>Data d'Ingrés: ".$cont[1][0]['FechaIngreso']."</p>
                <p>Estat de conservació: ".$cont[1][0]['EstadoConservacionNombre']."</p>
            </div>
                        
            <div><h2>Exposicions</h2><span></span></div>

            <div>
                <p>Nom: ".$cont[1][0]['ExposicionNombre']."</p>
                <p>Lloc: ".$cont[1][0]['LugarExposicion']."</p>
                <p>Data Inicial: ".$cont[1][0]['FechaInicioExposicion']."</p>
                <p>Data Final: ".$cont[1][0]['FechaFinExposicion']."</p>
                <p>Tipus: ".$cont[1][0]['TipoExposicionNombre']."</p>
            </div> 
                        
            <div><h2>Altres Dades</h2><span></span></div>

            <div>
                <p>Col·lecció de Procedencia: ".$cont[1][0]['ColeccionProcedencia']."</p>
                <p>Lloc d'Execució: ".$cont[1][0]['LugarEjecucion']."</p>
                <p>Nº de Tiratge: ".$cont[1][0]['NumeroTiraje']."</p>
                <p>Valoració Económica: ".$cont[1][0]['ValoracionEconomica']."</p>
                <p>Nº d'Exemplars: ".$cont[1][0]['NumeroEjemplares']."</p>
                <p>Lloc de Procedencia: ".$cont[1][0]['LugarProcedencia']."</p>
                <p>Altres Nº Identificació: ".$cont[1][0]['OtrosNrosIdentificacion']."</p>
                <p>Classificació Genérica: ".$cont[1][0]['ClasificacionGenerica']."</p>
                <p>Usuari que crea l'objecte: ".$cont[1][0]['UsuarioNombre']."</p>
                <p>Data de Registre: ".$cont[1][0]['FechaRegistro']."</p>
                <p>Bibliografia: ".$cont[1][0]['Bibliografia']."</p> 
                <p>Descripció: ".$cont[1][0]['Descripcion']."</p>
                <p>Història de l'objecte: ".$cont[1][0]['HistoriaObjeto']."</p>
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