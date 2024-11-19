<?php
$imagen = "resources/images/obras/";

require('../vendor/autoload.php');
use Spipu\Html2Pdf\Html2Pdf;

$content = "<html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    line-height: 1.6;
                }
                table {
                    width: 400mm;
                    margin: 5mm 5mm;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                }
                th{
                    border-bottom: 1px;
                    font-size: 15px;
                }
                h1, h2 {
                    color: #333;
                }
                .long-text {
                    grid-column: span 4;
                }
                td{
                    width: 25%;    
                }
            </style>
        </head>
        <body>";
for ($i=0; $i< count($cont[0]); $i++) {
    $content = $content."
        <h1>Fitxa de ".$cont[0][$i]['RegistroNº']."</h1>
        <table>
            <tr>
                <td>Nº de Registre: ".$cont[0][$i]['RegistroNº']."</td>
                <td>Nom: ".$cont[0][$i]['Nombre']."</td>
                <td>Museu: ".$cont[0][$i]['MuseoNombre']."</td>
                <td rowspan=8 style='text-align: center;'>
                    <img src='".$imagen.$cont[0][$i]['Imagen'].".jpg' alt='imatge obra' style='max-width: 200px; max-height: 200px;'>
                </td>
            </tr>
            <tr>
                <td>Autor: ".$cont[0][$i]['AutorNombre']."</td>
                <td>Títol: ".$cont[0][$i]['Titulo']."</td>
            </tr>
            <tr>
                <th colspan='3'>Ubicació</th>
            </tr>
            <tr>
                <td>Ubicacion a añadir</td>
            </tr>
            <tr>
                <th colspan='3'>Propietats</th>
            </tr>
            <tr>
                <td>Altura: ".$cont[0][$i]['Altura']."</td>
                <td>Amplada: ".$cont[0][$i]['Anchura']."</td>
                <td>Profunditat: ".$cont[0][$i]['Profundidad']."</td>
            </tr>
            <tr>
                <td>Datació: ".$cont[0][$i]['DatacionDescripcion']."</td>
                <td>Any Inicial: ".$cont[0][$i]['any_inicial']."</td>
                <td>Any Final: ".$cont[0][$i]['any_final']."</td>
            </tr>
            <tr>
                <td>Material: ".$cont[0][$i]['MaterialNombre']."</td>
                <td>Tècnica: ".$cont[0][$i]['TecnicaNombre']."</td>
            </tr>
            <tr>
                <th colspan='4'>Baixa</th>
            </tr>
            <tr>
                <td>Baixa: ".$cont[0][$i]['BajaValor']."</td>
                <td>Causa Baixa: ".$cont[0][$i]['CausaBajaValor']."</td>
                <td>Data Baixa: ".$cont[0][$i]['FechaBaja']."</td>
                <td>Persona Autorizada Baja: ".$cont[0][$i]['PersonaAutorizadaBaja']."</td>
            </tr>
            <tr>
                <th colspan='4'>Restauració</th>
            </tr>
            <tr>
                <td>Data Inici Restauració: ".$cont[0][$i]['FechaInicioRestauracion']."</td>
                <td>Data Final Restauració: ".$cont[0][$i]['FechaFinRestauracion']."</td>
                <td>Codi Restauració: ".$cont[0][$i]['CodigoRestauracion']."</td>
                <td>Nom Restaurador: ".$cont[0][$i]['NombreRestaurador']."</td>
            </tr>
            <tr>
                <td colspan='4'class='long-text'>Comentari Restauració: ".$cont[0][$i]['ComentarioRestauracion']."</td>
            </tr>
            <tr>
                <th colspan='4'>Ingrés</th>
            </tr>
            <tr>  
                <td>Forma d'Ingrés: ".$cont[0][$i]['FormaIngresoValor']."</td>
                <td>Font d'Ingrés: ".$cont[0][$i]['FuenteIngreso']."</td>
                <td>Data d'Ingrés: ".$cont[0][$i]['FechaIngreso']."</td>
                <td>Estat de conservació: ".$cont[0][$i]['EstadoConservacionNombre']."</td>
            </tr>
            <tr>
                <th colspan='4'>Exposicions</th>
            </tr>
            <tr>
                <td>Nom: ".$cont[0][$i]['ExposicionNombre']."</td>
                <td>Lloc: ".$cont[0][$i]['LugarExposicion']."</td>
                <td>Data Inicial: ".$cont[0][$i]['FechaInicioExposicion']."</td>
                <td>Data Final: ".$cont[0][$i]['FechaFinExposicion']."</td>
            </tr>
            <tr>
                <td>Tipus: ".$cont[0][$i]['TipoExposicionNombre']."</td>
            </tr>
            <tr>
                <th colspan='4'>Altres Dades</th>
            </tr>
            <tr>
                <td>Col·lecció de Procedencia: ".$cont[0][$i]['ColeccionProcedencia']."</td>
                <td>Lloc d'Execució: ".$cont[0][$i]['LugarEjecucion']."</td>
                <td>Nº de Tiratge: ".$cont[0][$i]['NumeroTiraje']."</td>
                <td>Valoració Económica: ".$cont[0][$i]['ValoracionEconomica']."</td>
            </tr>
            <tr> 
                <td>Nº d'Exemplars: ".$cont[0][$i]['NumeroEjemplares']."</td>
                <td>Lloc de Procedencia: ".$cont[0][$i]['LugarProcedencia']."</td>
                <td>Altres Nº Identificació: ".$cont[0][$i]['OtrosNrosIdentificacion']."</td>
                <td>Classificació Genérica: ".$cont[0][$i]['ClasificacionGenerica']."</td>
            </tr>
            <tr> 
                <td>Usuari que crea l'objecte: ".$cont[0][$i]['UsuarioNombre']."</td>
                <td>Data de Registre: ".$cont[0][$i]['FechaRegistro']."</td>
            </tr>
            <tr> 
                <td colspan='4' class='long-text'>Bibliografia: ".$cont[0][$i]['Bibliografia']."</td> 
            </tr>
            <tr> 
                <td colspan='4' class='long-text'>Descripció: ".$cont[0][$i]['Descripcion']."</td>
            </tr>
            <tr>    
                <td colspan='4' class='long-text'>Història de l'objecte: ".$cont[0][$i]['HistoriaObjeto']."</td>
            </tr>
        </table>";
                if($i<count($cont[0])-1){
                    $content=$content."<page></page>";
                }
}
$content = $content."</body>
</html>";
    $html2pdf = new Html2Pdf('L', 'A3', 'es');
    $html2pdf->writeHTML($content);
    $html2pdf->output("LlibreDeRegistre.pdf");


?>