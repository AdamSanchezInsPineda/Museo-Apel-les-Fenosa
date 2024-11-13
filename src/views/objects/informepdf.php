<?php
// var_dump($cont);
require('../vendor/autoload.php');

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$content = "
<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                line-height: 1.6;
            }
            table {
                width: 100%; /* Asegura que la tabla ocupe todo el ancho */
                border-collapse: collapse; /* Elimina el espacio entre celdas */
            }
            th, td {
                padding: 10px; /* Espaciado interno de las celdas */
                text-align: left; /* Alineación del texto */
            }
            h1, h2 {
                color: #333;
            }
            .long-text {
                grid-column: span 2; /* Esta clase hará que el elemento ocupe ambas columnas */
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Fitxa completa de ".$cont[1][0]['RegistroNº']."</h1>                        
            <table>
                <tr>
                    <th>Nº de Registre</th>
                    <td>".$cont[1][0]['RegistroNº']."</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>".$cont[1][0]['Nombre']."</td>
                </tr>
                <tr>
                    <th>Museu</th>
                    <td>".$cont[1][0]['MuseoNombre']."</td>
                </tr>
                <tr>
                    <th>Autor</th>
                    <td>".$cont[1][0]['AutorNombre']."</td>
                </tr>
                <tr>
                    <th>Títol</th>
                    <td>".$cont[1][0]['Titulo']."</td>
                </tr>
                <tr>
                    <th>Ubicacions</th>
                    <td>
                        <p>Data Inici Ubicació: ".$cont[1][0]['FechaInicioUbicacion']."</p>
                        <p>Data Final Ubicació: ".$cont[1][0]['FechaFinUbicacion']."</p>
                        <p>Comentari Ubicació: ".$cont[1][0]['ComentarioUbicacion']."</p>
                    </td>
                </tr>
                <tr>
                    <tr>
                        <th>Propietats</th>
                    </tr>
                    <tr>
                        <td>Altura: ".$cont[1][0]['Altura']."</td>
                        <td>Datació: ".$cont[1][0]['DatacionDescripcion']."</td>
                    </tr>
                    <tr>
                        <td>Amplada: ".$cont[1][0]['Anchura']."</td>
                        <td>Any Inicial: ".$cont[1][0]['any_inicial']."</td>
                    </tr>
                    <tr>
                        <td>Profunditat: ".$cont[1][0]['Profundidad']."</td>
                        <td>Any Final: ".$cont[1][0]['any_final']."</td>
                    </tr>
                    <tr>
                        <td>Material: ".$cont[1][0]['MaterialNombre']."</td>
                        <td>Tècnica: ".$cont[1][0]['TecnicaNombre']."</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                        <th>Baixa</th>
                    </tr>
                    <tr>
                        <td>Baixa: ".$cont[1][0]['BajaValor']."</td>
                        <td>Causa Baixa: ".$cont[1][0]['CausaBajaValor']."</td>
                    </tr>
                    <tr>
                        <td>Data Baixa: ".$cont[1][0]['FechaBaja']."</td>
                        <td>Persona Autorizada Baja: ".$cont[1][0]['PersonaAutorizadaBaja']."</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                        <th>Restauració</th>
                    </tr>
                    <tr>
                        <td>Data Inici Restauració: ".$cont[1][0]['FechaInicioRestauracion']."</td>
                        <td>Data Final Restauració: ".$cont[1][0]['FechaFinRestauracion']."</td>
                    </tr>
                    <tr>
                        <td>Codi Restauració: ".$cont[1][0]['CodigoRestauracion']."</td>
                        <td>Nom Restaurador: ".$cont[1][0]['NombreRestaurador']."</td>
                    </tr>
                    <tr>
                        <td>Comentari Restauració: ".$cont[1][0]['ComentarioRestauracion']."</td>
                    </tr>
                </tr>
                <tr>
                    <tr>
                        <th>Ingrés</th>
                    </tr>
                    <tr>  
                        <td>Forma d'Ingrés: ".$cont[1][0]['FormaIngresoValor']."</td>
                        <td>Font d'Ingrés: ".$cont[1][0]['FuenteIngreso']."</td>
                    </tr>
                    <tr>
                        <td>Data d'Ingrés: ".$cont[1][0]['FechaIngreso']."</td>
                        <td>Estat de conservació: ".$cont[1][0]['EstadoConservacionNombre']."</td>
                    </tr>        
                </tr>
                <tr>
                    <tr>
                        <th>Exposicions</th>
                    </tr>
                    <tr>
                        <td>Nom: ".$cont[1][0]['ExposicionNombre']."</td>
                        <td>Lloc: ".$cont[1][0]['LugarExposicion']."</td>
                    </tr>
                    <tr>
                        <td>Data Inicial: ".$cont[1][0]['FechaInicioExposicion']."</td>
                        <td>Data Final: ".$cont[1][0]['FechaFinExposicion']."</td>
                    </tr>
                    <tr>
                        <td>Tipus: ".$cont[1][0]['TipoExposicionNombre']."</td>
                    </tr>        
                </tr> 
                        
                <tr>
                    <tr>
                        <th>Altres Dades</th>
                    </tr>
                    <tr>
                        <td>Col·lecció de Procedencia: ".$cont[1][0]['ColeccionProcedencia']."</td>
                        <td>Lloc d'Execució: ".$cont[1][0]['LugarEjecucion']."</td>
                    </tr>
                    <tr>
                        <td>Nº de Tiratge: ".$cont[1][0]['NumeroTiraje']."</td>
                        <td>Valoració Económica: ".$cont[1][0]['ValoracionEconomica']."</td>
                    </tr>
                    <tr> 
                        <td>Nº d'Exemplars: ".$cont[1][0]['NumeroEjemplares']."</td>
                        <td>Lloc de Procedencia: ".$cont[1][0]['LugarProcedencia']."</td>
                    </tr>
                    <tr> 
                        <td>Altres Nº Identificació: ".$cont[1][0]['OtrosNrosIdentificacion']."</td>
                        <td>Classificació Genérica: ".$cont[1][0]['ClasificacionGenerica']."</td>
                    </tr>
                    <tr> 
                        <td>Usuari que crea l'objecte: ".$cont[1][0]['UsuarioNombre']."</td>
                        <td>Data de Registre: ".$cont[1][0]['FechaRegistro']."</td>
                    </tr>
                    <tr> 
                        <td>Bibliografia: ".$cont[1][0]['Bibliografia']."</td> 
                    </tr>
                    <tr> 
                        <td>Descripció: ".$cont[1][0]['Descripcion']."</td>
                    </tr>
                    <tr>    
                        <td class='long-text'>Història de l'objecte: ".$cont[1][0]['HistoriaObjeto']."</td>
                    </tr>
                </tr>
            </table>
        </div>
    </body>
</html>
";


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