<?php 
    include "resources/components/header.php";
?>
<body class = "verFicha">
    <!--Contenido variable de la pagina-->
    <div>
        <h1>Fitxa completa de  </h1>
    </div>
    <div>
        <button><a href="#"> Cambiar a fitxa bàsica</a></button>
    </div>  
    <table>
        <tr>
            <td colspan = "2">
                <h2>Informació Bàsica</h2>
            </td>     
        </tr>
        <tr>
            <td>
                <p>Nº de Registre: <?php echo $cont[1][0]['RegistroNº']?></p> 
            </td>
            <td rowspan="3">
                <input type="file" name="imagen" src="resources/images/lupa.png" alt="Submit" height="100px">
                <!--
                    if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
                    {
                    $nombreDirectorio = "img/";
                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" .
                    $_FILES['imagen']['name'];
                    move_uploaded_file ($_FILES['imagen']['tmp_name'],
                    $nombreDirectorio . $nombreFichero);
                    }
                    else
                    print ("No se ha podido subir el fichero\n");
                ?>-->
            </td>
        </tr>
        <tr>
            <td>
                <p>Nom: <?php echo $cont[1][0]['Nombre']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Museu: <?php echo $cont[1][0]['MuseoNombre']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Autor: <?php echo $cont[1][0]['AutorNombre']?></p> 
            </td>
            <td>
                <p>Títol: <?php echo $cont[1][0]['Titulo']?></p>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <h2>Ubicacions</h2>
            </td>
        </tr>
        <tr>
            <td>
                <!-- Ubicacio -->
            </td>
        </tr>
        <tr>
            <td>
                <p>Data Inici Ubicació: <?php echo $cont[1][0]['FechaInicioUbicacion']?></p>
            </td>
            <td>
                <p>Data Final Ubicació: <?php echo $cont[1][0]['FechaFinUbicacion']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Comentari Ubicació: <?php echo $cont[1][0]['ComentarioUbicacion']?></p>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <h2>Propietats</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p>Altura: <?php echo $cont[1][0]['Altura']?></p>
            </td>
            <td>
                <p>Datació: <?php echo $cont[1][0]['DatacionDescripcion']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Amplada: <?php echo $cont[1][0]['Anchura']?></p>
            </td>
            <td>
                <p>Any Inicial: <?php echo $cont[1][0]['any_inicial']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Profunditat: <?php echo $cont[1][0]['Profundidad']?></p>
            </td>
            <td>
                <p>Any Final: <?php echo $cont[1][0]['any_final']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Material: <?php echo $cont[1][0]['MaterialNombre']?></p>
            </td>
            <td>
                <p>Tècnica: <?php echo $cont[1][0]['TecnicaNombre']?></p>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <h2>Baixa</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p>Baixa: <?php echo $cont[1][0]['BajaValor']?></p>
            </td>
            <td>
                <p>Causa Baixa: <?php echo $cont[1][0]['CausaBajaValor']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Data Baixa: <?php echo $cont[1][0]['FechaBaja']?></p>
            </td>
            <td>
                <p>Persona Autorizada Baja: <?php echo $cont[1][0]['PersonaAutorizadaBaja']?></p>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <h2>Restauració</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p>Data Inici Restauració: <?php echo $cont[1][0]['FechaInicioRestauracion']?></p>
            </td>
            <td>
                <p>Data Final Restauració: <?php echo $cont[1][0]['FechaFinRestauracion']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Codi Restauració: <?php echo $cont[1][0]['CodigoRestauracion']?></p>
            </td>
            <td>
                <p>Nom Restaurador: <?php echo $cont[1][0]['NombreRestaurador']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Comentari Restauració: <?php echo $cont[1][0]['ComentarioRestauracion']?></p>
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <h2>Ingrés</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p>Forma d'Ingrés: <?php echo $cont[1][0]['FormaIngresoValor']?>
            </td>
            <td>
                <p>Font d'Ingrés: <?php echo $cont[1][0]['FuenteIngreso']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Data d'Ingrés: <?php echo $cont[1][0]['FechaIngreso']?></p>
            </td>
            <td>
                <p>Estat de conservació: <?php echo $cont[1][0]['EstadoConservacionNombre']?></p>                 
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <h2>Exposicions</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nom: <?php echo $cont[1][0]['ExposicionNombre']?></p>
            </td>
            <td>
                <p>Lloc: <?php echo $cont[1][0]['LugarExposicion']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Data Inicial: <?php echo $cont[1][0]['FechaInicioExposicion']?></p>
            </td>
            <td>
                <p>Data Final: <?php echo $cont[1][0]['FechaFinExposicion']?></p>
            </td>
        </tr>
            
        <tr>
            <td>
                <p>Tipus: <?php echo $cont[1][0]['TipoExposicionNombre']?></p> 
            </td>
        </tr>
        <tr>
            <td colspan = "2">
                <h2>Altres Dades</h2>
            </td>
        </tr>
        <tr>
            <td>
                <p>Col·lecció de Procedencia: <?php echo $cont[1][0]['ColeccionProcedencia']?></p>
            </td>
            <td>
                <p>Lloc d'Execució: <?php echo $cont[1][0]['LugarEjecucion']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nº de Tiratge: <?php echo $cont[1][0]['NumeroTiraje']?></p>
            </td>
            <td>
                <p>Valoració Económica: <?php echo $cont[1][0]['ValoracionEconomica']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Nº d'Exemplars: <?php echo $cont[1][0]['NumeroEjemplares']?></p>
            </td>
            <td>
                <p>Lloc de Procedencia: <?php echo $cont[1][0]['LugarProcedencia']?></p>
            </td>               
        </tr>
        <tr>
            <td>
                <p>Altres Nº Identificació: <?php echo $cont[1][0]['OtrosNrosIdentificacion']?></p>
            </td>
            <td>
                <p>Classificació Genérica: <?php echo $cont[1][0]['ClasificacionGenerica']?></p>           
            </td>
        </tr>
        <tr>
            <td>
                <p>Usuari que crea l'objecte: <?php echo $cont[1][0]['UsuarioNombre']?></p> 
            </td>
            <td>
                <p>Data de Registre: <?php echo $cont[1][0]['FechaRegistro']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Bibliografia: <?php echo $cont[1][0]['Bibliografia']?></p>
            </td>
        </tr>
        <tr>
            <td>    
                <p>Descripció: <?php echo $cont[1][0]['Descripcion']?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Història de l'objecte: <?php echo $cont[1][0]['HistoriaObjeto']?></p>
            </td>
        </tr>
    </table>
    <?php
    include "resources/components/footer.php";
    ?>
</body>