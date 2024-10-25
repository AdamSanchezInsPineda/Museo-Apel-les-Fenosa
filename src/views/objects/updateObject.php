<?php 
    include "resources/components/header.php";
?>
<body class = "createObject">
    <!--Contenido variable de la pagina-->
    <div>
        <h1>Modificar un registre</h1>
    </div>
    <form value="/registers/<?php echo $objeto[0]['o.ObjetoID'] ?>/update" action="post">
        <h2>Informació Bàsica</h2>
        <table>
            <tr>
                <td>
                    <label for="RegistroNº">Nº de Registre:</label>
                    <input type="text" id="RegistroNº" name="RegistroNº" value="<?php echo $objeto[0]['o.RegistroNº']?>" required>
                </td>
                <td rowspan = 4>
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
                    <label for="Nom">Nom:</label>
                    <input type="text" id="Nom" name="Nom" value="<?php echo $objeto[0]['o.Nombre']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Museos">Museu:</label>
                    <select name="Museos" id="Museos" value="<?php echo $objeto[0]['m.Nombre']?>" required>
                        <!-- Select de Nombre de Museos -->
                    </select>
                    <!-- <input type="text" id="Museu" name="Museu" required> -->
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Autors">Autor:</label>
                    <select name="Autors" id="Autors" value="<?php echo $objeto[0]['a.Nombre']?>"required>
                        <!-- Select de Nombre de Autors -->
                    </select>
                    <!-- <input type="text" id="Autor" name="Autor" required> -->
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Títol">Títol:</label>
                    <input type="text" id="Títol" name="Títol" value="<?php echo $objeto[0]['o.Titulo']?>"required>
                </td>
            </tr>
        </table>
        <table>
            <h2>Ubicacions</h2>
            <tr>
                <!-- Ubicacio -->
            </tr>
            <tr>
                <td>
                    <label for="FechaInicioUbicacion">Data Inici Ubicació:</label>
                    <input type="datetime-local" id="FechaInicioUbicacion" name="FechaInicioUbicacion" value="<?php echo $objeto[0]['uo.FechaInicioUbicacion']?>"required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaFinUbicacion">Data Final Ubicació:</label>
                    <input type="datetime-local" id="FechaFinUbicacion" name="FechaFinUbicacion" value="<?php echo $objeto[0]['uo.FechaFinUbicacion']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ComentarioUbicacion">Comentari Ubicació:</label>
                    <input type="text" id="ComentarioUbicacion" name="ComentarioUbicacion" value="<?php echo $objeto[0]['uo.ComentarioUbicacion']?>">
                </td>
            </tr>
        </table>

        <table>
            <h2>Propietats</h2>
            <tr>
                <td>
                    <label for="Altura">Altura:</label>
                    <input type="text" id="Altura" name="Altura" value="<?php echo $objeto[0]['o.Altura']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Anchura">Amplada:</label>
                    <input type="text" id="Anchura" name="Anchura" value="<?php echo $objeto[0]['o.Anchura']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Profundidad">Profunditat:</label>
                    <input type="text" id="Profundidad" name="Profundidad" value="<?php echo $objeto[0]['o.Profundidad']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="descripcion">Datació:</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $objeto[0]['d.descripcion']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="any_inicial">Any Inicial:</label>
                    <input type="text" id="any_inicial" name="any_inicial" value="<?php echo $objeto[0]['d.any_inicial']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="any_final">Any Final:</label>
                    <input type="text" id="any_final" name="any_final" value="<?php echo $objeto[0]['d.any_final']?>">
                </td>
            </tr>
        </table>
        <table>
            <h2>Baixa</h2>
            <tr>
                <td>
                    <label for="Baja">Baixa:</label>
                    <select name="Baja" id="Baja" value="<?php echo $objeto[0]['b.valor']?>">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="CausaBaja">Causa Baixa:</label>
                    <select name="CausaBaja" id="CausaBaja" value="<?php echo $objeto[0]['cb.valor']?>">
                        <!-- Select de valor de CausaBaja -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaBaja">Data Baixa:</label>
                    <input type="datetime-local" id="FechaBaja" name="FechaBaja" value="<?php echo $objeto[0]['o.FechaBaja']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="PersonaAutorizadaBaja">Persona Autorizada Baja:</label>
                    <input type="text" id="PersonaAutorizadaBaja" name="PersonaAutorizadaBaja" value="<?php echo $objeto[0]['o.PersonaAutorizadaBaja']?>" >
                </td>
            </tr>
        </table>

        <table>
            <h2>Restauració</h2>
            <tr>
                <td>
                    <label for="FechaInicio">Data Inici Restauració:</label>
                    <input type="datetime-local" id="FechaInicio" name="FechaInicio" value="<?php echo $objeto[0]['r.FechaInicio']?>">
                </td>
            </tr>
            <tr>
                <td>
                <label for="FechaFin">Data Final Restauració:</label>
                <input type="datetime-local" id="FechaFin" name="FechaFin" value="<?php echo $objeto[0]['r.FechaFin']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="CodigoRestauracion">Codi Restauració:</label>
                    <input type="text" id="CodigoRestauracion" name="CodigoRestauracion"value="<?php echo $objeto[0]['r.CodigoRestauracion']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NombreRestaurador">Nom Restaurador:</label>
                    <input type="text" id="NombreRestaurador" name="NombreRestaurador" value="<?php echo $objeto[0]['r.NombreRestaurador']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ComentarioRestauracion">Comentari Restauració:</label>
                    <input type="text" id="ComentarioRestauracion" name="ComentarioRestauracion" value="<?php echo $objeto[0]['r.ComentarioRestauracion']?>">
                </td>
            </tr>
        </table>

        <table>
            <h2>Ingrés</h2>
            <tr>
                <td>
                    <label for="FormaIngreso">Forma d'Ingrés:</label>
                    <select name="FormaIngreso" id="FormaIngreso" value="<?php echo $objeto[0]['fi.valor']?>">
                        <!-- Select de valor de FormaIngreso -->
                    </select>                
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FuenteIngreso">Font d'Ingrés:</label>
                    <input type="text" id="FuenteIngreso" name="FuenteIngreso" value="<?php echo $objeto[0]['o.FuenteIngreso']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaIngreso">Data d'Ingrés:</label>
                    <input type="text" id="FechaIngreso" name="FechaIngreso" value="<?php echo $objeto[0]['o.FechaIngreso']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="EstadoConservacion">Comentari Restauració:</label>
                    <select name="EstadoConservacion" id="EstadoConservacion" value="<?php echo $objeto[0]['ec.EstadoConservacion']?>">
                        <!-- Select de valor de EstadoConservacion -->
                    </select>                  
                </td>
            </tr>
        </table>

        <table>
            <h2>Exposicions</h2>
            <tr>
                <td>
                    <label for="NombreExposicion">Nom:</label>
                    <input type="text" id="NombreExposicion" name="NombreExposicion" value="<?php echo $objeto[0]['e.Nombre']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="InicioExposicion">Data Inicial:</label>
                    <input type="datetime-local" id="InicioExposicion" name="InicioExposicion" value="<?php echo $objeto[0]['e.FechaInicio']?>">
                </td>               
            </tr>
            <tr>
                <td>
                    <label for="FinalExposicion">Data Final:</label>
                    <input type="datetime-local" id="FinalExposicion" name="FinalExposicion" value="<?php echo $objeto[0]['e.FechaFin']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="LugarExposicion">Lloc:</label>
                    <input type="text" id="LugarExposicion" name="LugarExposicion" value="<?php echo $objeto[0]['e.LugarExposicion']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="TiposExposicion">Tipus:</label>
                    <select name="TiposExposicion" id="TiposExposicion" value="<?php echo $objeto[0]['te.valor']?>">
                        <!-- Select de valor de TiposExposicion -->
                    </select>                  
                </td>
            </tr>
        </table>

        <table>
            <h2>Altres Dades</h2>
            <tr>
                <td>
                    <label for="Col·lecció">Col·lecció de Procedencia:</label>
                    <input type="text" id="Col·lecció" name="Col·lecció" value="<?php echo $objeto[0]['o.ColeccionProcedencia']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="LugarEjecucion">Lloc d'Execució:</label>
                    <input type="text" id="LugarEjecucion" name="LugarEjecucion" value="<?php echo $objeto[0]['o.LugarEjecucion']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NumeroTiraje">Nº de Tiratge:</label>
                    <input type="text" id="NumeroTiraje" name="NumeroTiraje" value="<?php echo $objeto[0]['o.NumeroTiraje']?>">
                </td>               
            </tr>
            <tr>
                <td>
                    <label for="ValoracionEconomica">Valoració Económica:</label>
                    <input type="text" id="ValoracionEconomica" name="ValoracionEconomica" value="<?php echo $objeto[0]['o.ValoracionEconomica']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NumeroEjemplares">Nº d'Exemplars:</label>
                    <input type="text" id="NumeroEjemplares" name="NumeroEjemplares" value="<?php echo $objeto[0]['o.NumeroEjemplares']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="LugarProcedencia">Lloc de Procedencia:</label>
                    <input type="text" id="LugarProcedencia" name="LugarProcedencia" value="<?php echo $objeto[0]['o.LugarProcedencia']?>">
                </td>               
            </tr>
            <tr>
                <td>
                    <label for="OtrosNrosIdentificacion">Altres Nº Identificació:</label>
                    <input type="text" id="OtrosNrosIdentificacion" name="OtrosNrosIdentificacion" value="<?php echo $objeto[0]['o.OtrosNrosIdentificacion']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Classificacion">Classificació Genérica:</label>
                    <select name="Classificacion" id="Classificacion" value="<?php echo $objeto[0]['c.valor']?>">
                        <!-- Select de valor de Classificacion -->
                    </select>                  
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Bibliografia">Bibliografia:</label>
                    <input type="text" id="Bibliografia" name="Bibliografia" value="<?php echo $objeto[0]['o.Bibliografia']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Descripcion">Descripció:</label>
                    <input type="text" id="Descripcion" name="Descripcion" value="<?php echo $objeto[0]['o.Descripcion']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="HistoriaObjeto">Història de l'objecte:</label>
                    <input type="text" id="HistoriaObjeto" name="HistoriaObjeto" value="<?php echo $objeto[0]['o.HistoriaObjeto']?>">
                </td>
            </tr>
        </table>
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>