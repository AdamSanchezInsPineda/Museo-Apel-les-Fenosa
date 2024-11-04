<?php 
    include "resources/components/header.php";
?>
<body class = "verFicha">
    <!--Contenido variable de la pagina-->
    <div>
        <h1>Fitxa completa de XXXXXXX</h1>
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
                    <p>Nº de Registre: <?php echo $objetos[0]['o.RegistroNº']?></p> 
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
                    <p>Nom: <?php echo $objetos[0]['o.Nombre']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Museu: <?php echo $objetos[0]['MuseoNombre']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Autor: <?php echo $objetos[0]['AutorNombre']?></p> 
                </td>
                <td>
                    <p>Títol: <?php echo $objetos[0]['o.Titulo']?></p>
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
                    <p>Data Inici Ubicació: <?php echo $objetos[0]['uo.FechaInicioUbicacion']?></p>
                </td>
                <td>
                    <p>Data Final Ubicació: <?php echo $objetos[0]['uo.FechaFinUbicacion']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Comentari Ubicació: <?php echo $objetos[0]['uo.ComentarioUbicacion']?></p>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Propietats</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Altura: <?php echo $objetos[0]['o.Altura']?></p>
                </td>
                <td>
                    <p>Datació: <?php echo $objetos[0]['DatacionDescripcion']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Amplada: <?php echo $objetos[0]['o.Anchura']?></p>
                </td>
                <td>
                    <p>Any Inicial: <?php echo $objetos[0]['d.any_inicial']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Profunditat: <?php echo $objetos[0]['o.Profundidad']?></p>
                </td>
                <td>
                    <p>Any Final: <?php echo $objetos[0]['d.any_final']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Material: <?php echo $objetos[0]['MaterialNombre']?></p>
                </td>
                <td>
                    <p>Tècnica: <?php echo $objetos[0]['TecnicaNombre']?></p>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Baixa</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Baixa: <?php echo $objetos[0]['BajaValor']?></p>
                </td>
                <td>
                    <p>Causa Baixa: <?php echo $objetos[0]['CausaBajaValor']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Data Baixa: <?php echo $objetos[0]['o.FechaBaja']?></p>
                </td>
                <td>
                    <p>Persona Autorizada Baja: <?php echo $objetos[0]['o.PersonaAutorizadaBaja']?></p>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Restauració</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Data Inici Restauració: <?php echo $objetos[0]['FechaInicioRestauracion']?></p>
                </td>
                <td>
                    <p>Data Final Restauració: <?php echo $objetos[0]['FechaFinRestauracion']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Codi Restauració: <?php echo $objetos[0]['r.CodigoRestauracion']?></p>
                </td>
                <td>
                    <p>Nom Restaurador: <?php echo $objetos[0]['r.NombreRestaurador']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Comentari Restauració: <?php echo $objetos[0]['r.ComentarioRestauracion']?></p>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Ingrés</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Forma d'Ingrés: <?php echo $objetos[0]['FormaIngresoValor']?>
                </td>
                <td>
                    <p>Font d'Ingrés: <?php echo $objetos[0]['o.FuenteIngreso']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Data d'Ingrés: <?php echo $objetos[0]['o.FechaIngreso']?></p>
                </td>
                <td>
                    <p>Estat de conservació: <?php echo $objetos[0]['EstadoConservacionNombre']?></p>                 
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Exposicions</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nom: <?php echo $objetos[0]['ExposicionNombre']?></p>
                </td>
                <td>
                    <p>>Lloc: <?php echo $objetos[0]['e.LugarExposicion']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Data Inicial: <?php echo $objetos[0]['FechaInicioExposicion']?></p>
                </td>
                <td>
                    <p>Data Final: <?php echo $objetos[0]['FechaFinExposicion']?></p>
                </td>
            </tr>
                
            <tr>
                <td>
                    <p>Tipus: <?php echo $objetos[0]['TipoExposicionNombre']?></p> 
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Altres Dades</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Col·lecció de Procedencia: <?php echo $objetos[0]['o.ColeccionProcedencia']?></p>
                </td>
                <td>
                    <p>Lloc d'Execució: <?php echo $objetos[0]['o.LugarEjecucion']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nº de Tiratge: <?php echo $objetos[0]['o.NumeroTiraje']?></p>
                </td>
                <td>
                    <p>Valoració Económica: <?php echo $objetos[0]['o.ValoracionEconomica']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nº d'Exemplars: <?php echo $objetos[0]['o.NumeroEjemplares']?></p>
                </td>
                <td>
                    <p>Lloc de Procedencia: <?php echo $objetos[0]['o.LugarProcedencia']?></p>
                </td>               
            </tr>
            <tr>
                <td>
                    <p>Altres Nº Identificació: <?php echo $objetos[0]['o.OtrosNrosIdentificacion']?></p>
                </td>
                <td>
                    <p>Classificació Genérica: <?php echo $objetos[0]['ClasificacionGenerica']?></p>           
                </td>
            </tr>
            <tr>
                <td>
                    <p>Usuari que crea l'objecte: <?php echo $objetos[0]['UsuarioNombre']?></p> 
                </td>
                <td>
                    <p>Data de Registre: <?php echo $objetos[0]['o.FechaRegistro']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Bibliografia: <?php echo $objetos[0]['o.Bibliografia']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Descripció: <?php echo $objetos[0]['o.Descripcion']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Història de l'objecte: <?php echo $objetos[0]['o.HistoriaObjeto']?></p>
                </td>
            </tr>
        </table>
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>