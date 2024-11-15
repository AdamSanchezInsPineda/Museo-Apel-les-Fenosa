<?php

//var_dump($cont);
$imagen = "resources/images/obras/";
//echo "Ruta de la imagen: " . $imagePath;
require('../vendor/autoload.php');

use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf("P","A4","es");
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
                width: 190mm;
                margin: 5mm;
            }
            th, td {
                padding: 10px;
                text-align: left;
                word-wrap: break-word;
                max-width: 150px;
            }
            th{
                border-bottom: 1px;
                font-size: 15px;
            }
            h1, h2 {
                color: #333;
            }
            td{
                width: 50%;        
            }
            .long-text {
                grid-column: span 2; 
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Fitxa bàsica de ".$cont[1][0]['RegistroNº']."</h1>                        
            <div>
                <table>
                    <tr>
                        <td>Nº de Registre: ".$cont[1][0]['RegistroNº']."</td>
                        <td rowspan=3 style='text-align: center;'><img src='".$imagen.$cont[1][0]['Imagen'].".jpg' alt='imatge obra'style='max-width: 200px; max-height: 200px;'></td>
                    </tr>
                    <tr>
                        <td>Nom: ".$cont[1][0]['Nombre']."</td>
                    </tr>
                    <tr>
                        <td>Autor: ".$cont[1][0]['AutorNombre']."</td>
                    </tr>
                    <tr>
                        <td>Títol: ".$cont[1][0]['Titulo']."</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Propietats</th>
                    </tr>
                    <tr>
                        <td>Altura: ".$cont[1][0]['Altura']."</td>
                        <td>Amplada: ".$cont[1][0]['Anchura']."</td>
                    </tr>
                    <tr>
                        <td>Profunditat: ".$cont[1][0]['Profundidad']."</td>
                        <td>Datació: ".$cont[1][0]['DatacionDescripcion']."</td>
                    </tr>
                    <tr>
                        <td>Material: ".$cont[1][0]['MaterialNombre']."</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Ingrés</th>
                    </tr>
                    <tr>  
                        <td>Forma d'Ingrés: ".$cont[1][0]['FormaIngresoValor']."</td>
                        <td>Font d'Ingrés: ".$cont[1][0]['FuenteIngreso']."</td>
                    </tr>
                    <tr>
                        <td>Data d'Ingrés: ".$cont[1][0]['FechaIngreso']."</td>
                        <td>Estat de conservació: ".$cont[1][0]['EstadoConservacionNombre']."</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Altres Dades</th>
                    </tr>
                    <tr>
                        <td>Valoració Económica: ".$cont[1][0]['ValoracionEconomica']."</td>
                        <td>Lloc de Procedencia: ".$cont[1][0]['LugarProcedencia']."</td>
                    </tr>
                    <tr>
                        <td>Data de Registre: ".$cont[1][0]['FechaRegistro']."</td>
                        <td>Classificació Genérica: ".$cont[1][0]['ClasificacionGenerica']."</td>
                    </tr>
                    <tr> 
                        <td>Usuari que crea l'objecte: ".$cont[1][0]['UsuarioNombre']."</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
";


$html2pdf ->writeHTML($content);
                
$html2pdf->output("PDFPRUEBA.pdf");


?>