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
            <h1>Fitxa completa de ".$cont[1][0]['RegistroNº']."</h1>                        
            <div style='page-break-after: always;'>
                <table>
                    <tr>
                        <td>Nº de Registre: ".$cont[1][0]['RegistroNº']."</td>
                        <td rowspan=6><img src='".$imagen.$cont[1][0]['Imagen'].".jpg' alt='imatge obra'style='width: auto; height: auto; max-width: 200px; max-height: 200px;'></td>
                    </tr>
                    <tr>
                        <td>Nom: ".$cont[1][0]['Nombre']."</td>
                    </tr>
                    <tr>
                        <td>Museu: ".$cont[1][0]['MuseoNombre']."</td>
                    </tr>
                    <tr>
                        <td>Autor: ".$cont[1][0]['AutorNombre']."</td>
                    </tr>
                    <tr>
                        <td>Títol: ".$cont[1][0]['Titulo']."</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Ubicació</th>
                    </tr>
                    <tr>
                        <td>Ubicacion por añadir</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Propietats</th>
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
                    <tr>
                        <th colspan='2'>Baixa</th>
                    </tr>
                    <tr>
                        <td>Baixa: ".$cont[1][0]['BajaValor']."</td>
                        <td>Causa Baixa: ".$cont[1][0]['CausaBajaValor']."</td>
                    </tr>
                    <tr>
                        <td>Data Baixa: ".$cont[1][0]['FechaBaja']."</td>
                        <td>Persona Autorizada Baja: ".$cont[1][0]['PersonaAutorizadaBaja']."</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Restauració</th>
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
                        <td colspan='2' class='long-text>Comentari Restauració: ".$cont[1][0]['ComentarioRestauracion']."</td>
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
                        <th colspan='2'>Exposicions</th>
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
                </table>
            </div>
            <div>
                <table>
                    <tr>
                        <th colspan='2'>Altres Dades</th>
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
                        <td colspan='2' class='long-text'>Bibliografia: ".$cont[1][0]['Bibliografia']."</td> 
                    </tr>
                    <tr> 
                        <td colspan='2' class='long-text'>Descripció: ".$cont[1][0]['Descripcion']."</td>
                    </tr>
                    <tr>    
                        <td colspan='2' class='long-text'>Història de l'objecte: ".$cont[1][0]['HistoriaObjeto']."</td>
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