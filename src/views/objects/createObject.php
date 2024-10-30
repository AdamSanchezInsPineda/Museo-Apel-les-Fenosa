<?php 
    include "resources/components/header.php";
?>
<body class = "createObject">
    <!--Contenido variable de la pagina-->
    <div>
        <h1>Afegir un registre</h1>
    </div>
    <div>
        <button><a href="#"> Cambiar a fitxa bàsica</a></button>
    </div>
    <form action="post">
        <table>
            <tr>
                <td colspan = "2">
                    <h2>Informació Bàsica</h2>
                </td>     
            </tr>
            <tr>
                <td>
                    <label for="RegistroNº">Nº de Registre:</label>
                    <input type="text" id="RegistroNº" name="RegistroNº" required>
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
                    <label for="Nom">Nom:</label>
                    <input type="text" id="Nom" name="Nom" required>
                </td>
            </tr>
            <tr>
                <td >
                    <label for="Museos">Museu:</label>
                    <select name="Museos" id="Museos" required>
                        <!-- Select de Nombre de Museos -->
                    </select>
                    <!-- <input type="text" id="Museu" name="Museu" required> -->
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Autors">Autor:</label>
                    <select name="Autors" id="Autors" required>
                        <!-- Select de Nombre de Autors -->
                    </select>
                    <!-- <input type="text" id="Autor" name="Autor" required> -->
                </td>
                <td>
                    <label for="Títol">Títol:</label>
                    <input type="text" id="Títol" name="Títol" required>
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
                    <label for="FechaInicioUbicacion">Data Inici Ubicació:</label>
                    <input type="datetime-local" id="FechaInicioUbicacion" name="FechaInicioUbicacion" required>
                </td>
                <td>
                    <label for="FechaFinUbicacion">Data Final Ubicació:</label>
                    <input type="datetime-local" id="FechaFinUbicacion" name="FechaFinUbicacion">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ComentarioUbicacion">Comentari Ubicació:</label>
                    <input type="text" id="ComentarioUbicacion" name="ComentarioUbicacion">
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Propietats</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Altura">Altura:</label>
                    <input type="text" id="Altura" name="Altura" required>
                </td>
                <td>
                    <label for="descripcion">Datació:</label>
                    <input type="text" id="descripcion" name="descripcion" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Anchura">Amplada:</label>
                    <input type="text" id="Anchura" name="Anchura" required>
                </td>
                <td>
                    <label for="any_inicial">Any Inicial:</label>
                    <input type="text" id="any_inicial" name="any_inicial">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Profundidad">Profunditat:</label>
                    <input type="text" id="Profundidad" name="Profundidad" required>
                </td>
                <td>
                    <label for="any_final">Any Final:</label>
                    <input type="text" id="any_final" name="any_final">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Material">Material:</label>
                    <select name="Material" id="Material">
                        <!-- Select de valor de Material -->
                    </select>
                </td>
                <td>
                    <label for="Tecnica">Tècnica:</label>
                    <select name="Tecnica" id="Tecnica">
                        <!-- Select de valor de Tecnica -->
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Baixa</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Baja">Baixa:</label>
                    <select name="Baja" id="Baja">
                        <option value="No">No</option>
                        <option value="Si">Si</option>
                    </select>
                </td>
                <td>
                    <label for="CausaBaja">Causa Baixa:</label>
                    <select name="CausaBaja" id="CausaBaja">
                        <!-- Select de valor de CausaBaja -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaBaja">Data Baixa:</label>
                    <input type="datetime-local" id="FechaBaja" name="FechaBaja">
                </td>
                <td>
                    <label for="PersonaAutorizadaBaja">Persona Autorizada Baja:</label>
                    <input type="text" id="PersonaAutorizadaBaja" name="PersonaAutorizadaBaja">
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Restauració</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaInicio">Data Inici Restauració:</label>
                    <input type="datetime-local" id="FechaInicio" name="FechaInicio">
                </td>
                <td>
                    <label for="FechaFin">Data Final Restauració:</label>
                    <input type="datetime-local" id="FechaFin" name="FechaFin">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="CodigoRestauracion">Codi Restauració:</label>
                    <input type="text" id="CodigoRestauracion" name="CodigoRestauracion">
                </td>
                <td>
                    <label for="NombreRestaurador">Nom Restaurador:</label>
                    <input type="text" id="NombreRestaurador" name="NombreRestaurador">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ComentarioRestauracion">Comentari Restauració:</label>
                    <input type="text" id="ComentarioRestauracion" name="ComentarioRestauracion">
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Ingrés</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FormaIngreso">Forma d'Ingrés:</label>
                    <select name="FormaIngreso" id="FormaIngreso">
                        <!-- Select de valor de FormaIngreso -->
                    </select>                
                </td>
                <td>
                    <label for="FuenteIngreso">Font d'Ingrés:</label>
                    <input type="text" id="FuenteIngreso" name="FuenteIngreso">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaIngreso">Data d'Ingrés:</label>
                    <input type="text" id="FechaIngreso" name="FechaIngreso">
                </td>
                <td>
                    <label for="EstadoConservacion">Estat de conservació:</label>
                    <select name="EstadoConservacion" id="EstadoConservacion">
                        <!-- Select de valor de EstadoConservacion -->
                    </select>                  
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Exposicions</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NombreExposicion">Nom:</label>
                    <input type="text" id="NombreExposicion" name="NombreExposicion">
                </td>
                <td>
                    <label for="LugarExposicion">Lloc:</label>
                    <input type="text" id="LugarExposicion" name="LugarExposicion">
                </td>
                     
            </tr>
            <tr>
                <td>
                    <label for="InicioExposicion">Data Inicial:</label>
                    <input type="datetime-local" id="InicioExposicion" name="InicioExposicion">
                </td>
                <td>
                    <label for="FinalExposicion">Data Final:</label>
                    <input type="datetime-local" id="FinalExposicion" name="FinalExposicion">
                </td>
            </tr>
                
            <tr>
                <td>
                    <label for="TiposExposicion">Tipus:</label>
                    <select name="TiposExposicion" id="TiposExposicion">
                        <!-- Select de valor de TiposExposicion -->
                    </select>                  
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Altres Dades</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Col·lecció">Col·lecció de Procedencia:</label>
                    <input type="text" id="Col·lecció" name="Col·lecció">
                </td>
                <td>
                    <label for="LugarEjecucion">Lloc d'Execució:</label>
                    <input type="text" id="LugarEjecucion" name="LugarEjecucion">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NumeroTiraje">Nº de Tiratge:</label>
                    <input type="text" id="NumeroTiraje" name="NumeroTiraje">
                </td>
                <td>
                    <label for="ValoracionEconomica">Valoració Económica:</label>
                    <input type="text" id="ValoracionEconomica" name="ValoracionEconomica">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NumeroEjemplares">Nº d'Exemplars:</label>
                    <input type="text" id="NumeroEjemplares" name="NumeroEjemplares">
                </td>
                <td>
                    <label for="LugarProcedencia">Lloc de Procedencia:</label>
                    <input type="text" id="LugarProcedencia" name="LugarProcedencia">
                </td>               
            </tr>
            <tr>
                <td>
                    <label for="OtrosNrosIdentificacion">Altres Nº Identificació:</label>
                    <input type="text" id="OtrosNrosIdentificacion" name="OtrosNrosIdentificacion">
                </td>
                <td>
                    <label for="Classificacion">Classificació Genérica:</label>
                    <select name="Classificacion" id="Classificacion">
                        <!-- Select de valor de Classificacion -->
                    </select>                  
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Usuario">Usuari que crea l'objecte:</label>
                    <select id="Usuario" name="Usuario">
                        <!-- Select de Nombre de Usuario -->
                    </select> 
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Bibliografia">Bibliografia:</label>
                    <input type="text" id="Bibliografia" name="Bibliografia">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Descripcion">Descripció:</label>
                    <input type="text" id="Descripcion" name="Descripcion">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="HistoriaObjeto">Història de l'objecte:</label>
                    <input type="text" id="HistoriaObjeto" name="HistoriaObjeto">
                </td>
            </tr>
            <tr>
                <td>                
                    <input type="submit" value="Guardar" class="submit">
                </td>
            </tr>
        </table>
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>