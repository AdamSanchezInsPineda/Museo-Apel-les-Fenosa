<?php 
    include "resources/components/header.php";
    
?>
<body class = "updateObject">
    <!--Contenido variable de la pagina-->
    <h1>Actualizar Objeto</h1>
    <form action="/registers/update" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td colspan="2">
                    <h2>Informació Bàsica</h2>
                </td>     
            </tr>
            <tr>
                <td>
                    <label for="registro">Nº de Registre:</label>
                    <input type="text" id="registro" name="registro" value="<?php echo $cont[1][0]['RegistroNº']; ?>" required readonly>
                </td>
                <td rowspan="3">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nombre">Nom:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $cont[1][0]['Nombre']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="museo">Museu:</label>
                    <input type="text" id="museo" name="museo" value="<?php echo $cont[1][0]['MuseoNombre']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="autor">Autor:</label>
                    <input type="text" id="autor" name="autor" value="<?php echo $cont[1][0]['AutorNombre']; ?>" required>
                </td>
                <td>
                    <label for="titulo">Títol:</label>
                    <input type="text" id="titulo" name="titulo" value="<?php echo $cont[1][0]['Titulo']; ?>" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Ubicacions</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fechaInicioUbicacion">Data Inici Ubicació:</label>
                    <input type="date" id="fechaInicioUbicacion" name="fechaInicioUbicacion" value="<?php echo $cont[1][0]['FechaInicioUbicacion']; ?>" required>
                </td>
                <td>
                    <label for="fechaFinUbicacion">Data Final Ubicació:</label>
                    <input type="date" id="fechaFinUbicacion" name="fechaFinUbicacion" value="<?php echo $cont[1][0]['FechaFinUbicacion']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="comentarioUbicacion">Comentari Ubicació:</label>
                    <textarea id="comentarioUbicacion" name="comentarioUbicacion" required><?php echo $cont[1][0]['ComentarioUbicacion']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Propietats</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="altura">Altura:</label>
                    <input type="text" id="altura" name="altura" value="<?php echo $cont[1][0]['Altura']; ?>" required>
                </td>
                <td>
                    <label for="datacion">Datació:</label>
                    <input type="text" id="datacion" name="datacion" value="<?php echo $cont[1][0]['DatacionDescripcion']; ?>" required>
                </td>
            </t>
            <tr>
                <td>
                    <label for="anchura">Amplada:</label>
                    <input type="text" id="anchura" name="anchura" value="<?php echo $cont[1][0]['Anchura']; ?>" required>
                </td>
                <td>
                    <label for="anyInicial">Any Inicial:</label>
                    <input type="text" id="anyInicial" name="anyInicial" value="<?php echo $cont[1][0]['any_inicial']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="profundidad">Profunditat:</label>
                    <input type="text" id="profundidad" name="profundidad" value="<?php echo $cont[1][0]['Profundidad']; ?>" required>
                </td>
                <td>
                    <label for="anyFinal">Any Final:</label>
                    <input type="text" id="anyFinal" name="anyFinal" value="<?php echo $cont[1][0]['any_final']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="material">Material:</label>
                    <input type="text" id="material" name="material" value="<?php echo $cont[1][0]['MaterialNombre']; ?>" required>
                </td>
                <td>
                    <label for="tecnica">Tècnica:</label>
                    <input type="text" id="tecnica" name="tecnica" value="<?php echo $cont[1][0]['TecnicaNombre']; ?>" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Baixa</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="baja">Baixa:</label>
                    <input type="text" id="baja" name="baja" value="<?php echo $cont[1][0]['BajaValor']; ?>" required>
                </td>
                <td>
                    <label for="causaBaja">Causa Baixa:</label>
                    <input type="text" id="causaBaja" name="causaBaja" value="<?php echo $cont[1][0]['CausaBajaValor']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fechaBaja">Data Baixa:</label>
                    <input type="date" id="fechaBaja" name="fechaBaja" value="<?php echo $cont[1][0]['FechaBaja']; ?>" required>
                </td>
                <td>
                    <label for="personaAutorizadaBaja">Persona Autorizada Baja:</label>
                    <input type="text" id="personaAutorizadaBaja" name="personaAutorizadaBaja" value="<?php echo $cont[1][0]['PersonaAutorizadaBaja']; ?>" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Restauració</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fechaInicioRestauracion">Data Inici Restauració:</label>
                    <input type="date" id="fechaInicioRestauracion" name="fechaInicioRestauracion" value="<?php echo $cont[1][0]['FechaInicioRestauracion']; ?>" required>
                </td>
                <td>
                    <label for="fechaFinRestauracion">Data Final Restauració:</label>
                    <input type="date" id="fechaFinRestauracion" name="fechaFinRestauracion" value="<?php echo $cont[1][0]['FechaFinRestauracion']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="codigoRestauracion">Codi Restauració:</label>
                    <input type="text" id=" codigoRestauracion" name="codigoRestauracion" value="<?php echo $cont[1][0]['CodigoRestauracion']; ?>" required>
                </td>
                <td>
                    <label for="nombreRestaurador">Nom Restaurador:</label>
                    <input type="text" id="nombreRestaurador" name="nombreRestaurador" value="<?php echo $cont[1][0]['NombreRestaurador']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="comentarioRestauracion">Comentari Restauració:</label>
                    <textarea id="comentarioRestauracion" name="comentarioRestauracion" required><?php echo $cont[1][0]['ComentarioRestauracion']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Ingrés</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="formaIngreso">Forma d'Ingrés:</label>
                    <input type="text" id="formaIngreso" name="formaIngreso" value="<?php echo $cont[1][0]['FormaIngresoValor']; ?>" required>
                </td>
                <td>
                    <label for="fuenteIngreso">Font d'Ingrés:</label>
                    <input type="text" id="fuenteIngreso" name="fuenteIngreso" value="<?php echo $cont[1][0]['FuenteIngreso']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fechaIngreso">Data d'Ingrés:</label>
                    <input type="date" id="fechaIngreso" name="fechaIngreso" value="<?php echo $cont[1][0]['FechaIngreso']; ?>" required>
                </td>
                <td>
                    <label for="estadoConservacion">Estat de conservació:</label>
                    <input type="text" id="estadoConservacion" name="estadoConservacion" value="<?php echo $cont[1][0]['EstadoConservacionNombre']; ?>" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Exposicions</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="exposicionNombre">Nom:</label>
                    <input type="text" id="exposicionNombre" name="exposicionNombre" value="<?php echo $cont[1][0]['ExposicionNombre']; ?>" required>
                </td>
                <td>
                    <label for="lugarExposicion">Lloc:</label>
                    <input type="text" id="lugarExposicion" name="lugarExposicion" value="<?php echo $cont[1][0]['LugarExposicion']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fechaInicioExposicion">Data Inicial:</label>
                    <input type="date" id="fechaInicioExposicion" name="fechaInicioExposicion" value="<?php echo $cont[1][0]['FechaInicioExposicion']; ?>" required>
                </td>
                <td>
                    <label for="fechaFinExposicion">Data Final:</label>
                    <input type="date" id="fechaFinExposicion" name="fechaFinExposicion" value="<?php echo $cont[1][0]['FechaFinExposicion']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tipoExposicion">Tipus:</label>
                    <input type="text" id="tipoExposicion" name="tipoExposicion" value="<?php echo $cont[1][0]['TipoExposicionNombre']; ?>" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Altres Dades</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="coleccionProcedencia">Col·lecció de Procedencia:</label>
                    <input type="text" id="coleccionProcedencia" name="coleccionProcedencia" value="<?php echo $cont[1][0]['ColeccionProcedencia']; ?>" required>
                </td>
                <td>
                    <label for="lugarEjecucion">Lloc d'Execució:</label>
                    <input type="text" id="lugarEjecucion" name="lugarEjecucion" value="<?php echo $cont[1][0]['LugarEjecucion']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="numeroTiraje">Nº de Tiratge:</label>
                    <input type="text" id="numeroTiraje" name="numeroTiraje" value="<?php echo $cont[1][0]['NumeroTiraje']; ?>" required>
                </td>
                <td>
                    <label for="valoracionEconomica">Valoració Económica:</label>
                    <input type="text" id="valoracionEconomica" name="valoracionEconomica" value="<?php echo $cont[1][0]['ValoracionEconomica']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="numeroEjemplares">Nº d'Exemplars:</label>
                    <input type="text" id="numeroEjemplares" name="numeroEjemplares" value="<?php echo $cont[1][0]['NumeroEjemplares']; ?>" required>
                </td>
                <td>
                    <label for="lugarProcedencia">Lloc de Procedencia:</label>
                    <input type="text" id="lugarProcedencia" name="lugarProcedencia" value="<?php echo $cont[1][0]['LugarProcedencia']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="otrosNrosIdentificacion">Altres Nº Identificació:</label>
                    <input type="text" id="otrosNrosIdentificacion" name="otrosNrosIdentificacion" value="<?php echo $cont[1][0]['OtrosNrosIdentificacion']; ?>" required>
                </td>
                <td>
                    <label for="clasificacionGenerica">Classificació Genérica:</label>
                    <input type="text" id="clasificacionGenerica" name="clasificacionGenerica" value="<?php echo $cont[1][0]['ClasificacionGenerica']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="usuarioNombre">Usuari que crea l'objecte:</label>
                    <input type="text" id="usuarioNombre" name="usuarioNombre" value="<?php echo $cont[1][0]['UsuarioNombre']; ?>" required readonly>
                </td>
                <td>
                    <label for="fechaRegistro">Data de Registre:</label>
                    <input type="date" id="fechaRegistro" name="fechaRegistro" value="<?php echo $cont[1][0]['FechaRegistro']; ?>" required readonly>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="bibliografia">Bibliografia:</label>
                    <textarea id="bibliografia" name="bibliografia" required><?php echo $cont[1][0]['Bibliografia']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="descripcion">Descripció:</label>
                    <textarea id="descripcion" name="descripcion" required><?php echo $cont[1][0]['Descripcion']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="historiaObjeto">Història de l'objecte:</label>
                    <textarea id="historiaObjeto" name="historiaObjeto" required><?php echo $cont[1][0]['HistoriaObjeto']; ?></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="Actualizar">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>