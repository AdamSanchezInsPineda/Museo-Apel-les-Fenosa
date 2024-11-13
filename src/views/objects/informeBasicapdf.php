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
            <h1>Fitxa bàsica de ".$cont[1][0]['RegistroNº']."</h1>                        
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
                    <th>Autor</th>
                    <td>".$cont[1][0]['AutorNombre']."</td>
                </tr>
                <tr>
                    <th>Títol</th>
                    <td>".$cont[1][0]['Titulo']."</td>
                </tr>
                <tr>
                    <tr>
                        <th>Propietats</th>
                    </tr>
                    <tr>
                        <td>Datació: ".$cont[1][0]['DatacionDescripcion']."</td>
                        <td>Altura: ".$cont[1][0]['Altura']."</td>
                    </tr>
                    <tr>
                        <td>Amplada: ".$cont[1][0]['Anchura']."</td>
                        <td>Profunditat: ".$cont[1][0]['Profundidad']."</td>
                    </tr>
                    <tr>
                        <td>Material: ".$cont[1][0]['MaterialNombre']."</td>
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
                        <th>Altres Dades</th>
                    </tr>
                    <tr>
                        <td>Valoració Económica: ".$cont[1][0]['ValoracionEconomica']."</td>
                        <td>Lloc de Procedencia: ".$cont[1][0]['LugarProcedencia']."</td>
                    </tr>
                    <tr>
                        <td>Classificació Genérica: ".$cont[1][0]['ClasificacionGenerica']."</td>
                        <td>Data de Registre: ".$cont[1][0]['FechaRegistro']."</td>
                    </tr>
                    <tr> 
                        <td>Usuari que crea l'objecte: ".$cont[1][0]['UsuarioNombre']."</td>
                    </tr>
                </tr>
            </table>
        </div>
    </body>
</html>
";


$html2pdf ->writeHTML($content);
                
$html2pdf->output("PDFPRUEBA.pdf");

?>