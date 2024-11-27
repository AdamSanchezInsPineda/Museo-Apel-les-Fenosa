<?php 
    include "resources/components/header.php";
    
?>
<body class = "updateObject">
    <!--Contenido variable de la pagina-->
    <main>
        <!--Contenido variable de la pagina-->              
        <form action="/registers/update" method="POST" enctype="multipart/form-data">
            <h1>Actualizar Objeto <?php echo $cont[1][0]['Nombre']?></h1>
            <div>
                <div>
                    <p>Nº de Registre: <?php echo $cont[1][0]['RegistroNº']?></p> 

                    <label for="imagen">Imagen:
                    <input type="file" name="imagen" id="imagen" accept="image/*"></label>
                </div>

                <div>
                    <label for="nombre">Nom:
                    <input type="text" id="nombre" name="nombre" value="<?php echo $cont[1][0]['Nombre']; ?>" required></label>
                    <label for="museo">Museu:
                    <input type="text" id="museo" name="museo" value="<?php echo $cont[1][0]['MuseoNombre']; ?>" required></label>
                    <label for="autor">Autor:
                    <input type="text" id="autor" name="autor" value="<?php echo $cont[1][0]['AutorNombre']; ?>" required></label>
                    <label for="titulo">Títol:
                    <input type="text" id="titulo" name="titulo" value="<?php echo $cont[1][0]['Titulo']; ?>" required></label>
                </div>
            </div>

            <div>
                        
                <div class="toggle-hide"><h2>Ubicacions</h2><span></span></div>

                <section class="hide">
                    <label for="fechaInicioUbicacion">Data Inici Ubicació:
                    <input type="datetime-local" id="fechaInicioUbicacion" name="fechaInicioUbicacion" value="<?php echo $cont[1][0]['FechaInicioUbicacion']; ?>" required></label>
                    <label for="fechaFinUbicacion">Data Final Ubicació:
                    <input type="datetime-local" id="fechaFinUbicacion" name="fechaFinUbicacion" value="<?php echo $cont[1][0]['FechaFinUbicacion']; ?>" required></label>
                    <label for="comentarioUbicacion">Comentari Ubicació:
                    <textarea id="comentarioUbicacion" name="comentarioUbicacion" required><?php echo $cont[1][0]['ComentarioUbicacion']; ?></textarea></label>

                </section>

                <div class="toggle-hide"><h2>Propietats</h2><span></span></div>

                <section class="hide">
                    <label for="altura">Altura:
                    <input type="text" id="altura" name="altura" value="<?php echo $cont[1][0]['Altura']; ?>" required></label>
                    <label for="datacion">Datació:
                    <input type="text" id="datacion" name="datacion" value="<?php echo $cont[1][0]['DatacionDescripcion']; ?>" required></label>
                    <label for="anchura">Amplada:
                    <input type="text" id="anchura" name="anchura" value="<?php echo $cont[1][0]['Anchura']; ?>" required></label>
                    <label for="anyInicial">Any Inicial:
                    <input type="text" id="anyInicial" name="anyInicial" value="<?php echo $cont[1][0]['any_inicial']; ?>" required></label>
                    <label for="profundidad">Profunditat:
                    <input type="text" id="profundidad" name="profundidad" value="<?php echo $cont[1][0]['Profundidad']; ?>" required></label>
                    <label for="anyFinal">Any Final:
                    <input type="text" id="anyFinal" name="anyFinal" value="<?php echo $cont[1][0]['any_final']; ?>" required></label>
                    <label for="material">Material:
                    <input type="text" id="material" name="material" value="<?php echo $cont[1][0]['MaterialNombre']; ?>" required></label>
                    <label for="tecnica">Tècnica:
                    <input type="text" id="tecnica" name="tecnica" value="<?php echo $cont[1][0]['TecnicaNombre']; ?>" required></label>
                </section>

                <div class="toggle-hide"><h2>Baixa</h2><span></span></div>

                <section class="hide">
                    <label for="baja">Baixa:
                    <input type="text" id="baja" name="baja" value="<?php echo $cont[1][0]['BajaValor']; ?>" required></label>
                    <label for="causaBaja">Causa Baixa:
                    <input type="text" id="causaBaja" name="causaBaja" value="<?php echo $cont[1][0]['CausaBajaValor']; ?>" required></label>
                    <label for="fechaBaja">Data Baixa:
                    <input type="datetime-local" id="fechaBaja" name="fechaBaja" value="<?php echo $cont[1][0]['FechaBaja']; ?>" required></label>
                    <label for="personaAutorizadaBaja">Persona Autorizada Baja:
                    <input type="text" id="personaAutorizadaBaja" name="personaAutorizadaBaja" value="<?php echo $cont[1][0]['PersonaAutorizadaBaja']; ?>" required></label>
                </section>

                <div class="toggle-hide"><h2>Restauració</h2><span></span></div>

                <section class="hide">
                    <label for="fechaInicioRestauracion">Data Inici Restauració:
                    <input type="datetime-local" id="fechaInicioRestauracion" name="fechaInicioRestauracion" value="<?php echo $cont[1][0]['FechaInicioRestauracion']; ?>" required></label>
                    <label for="fechaFinRestauracion">Data Final Restauració:
                    <input type="datetime-local" id="fechaFinRestauracion" name="fechaFinRestauracion" value="<?php echo $cont[1][0]['FechaFinRestauracion']; ?>" required></label>
                    <label for="codigoRestauracion">Codi Restauració:
                    <input type="text" id=" codigoRestauracion" name="codigoRestauracion" value="<?php echo $cont[1][0]['CodigoRestauracion']; ?>" required></label>
                    <label for="nombreRestaurador">Nom Restaurador:
                    <input type="text" id="nombreRestaurador" name="nombreRestaurador" value="<?php echo $cont[1][0]['NombreRestaurador']; ?>" required></label>
                    <label for="comentarioRestauracion">Comentari Restauració:
                    <textarea id="comentarioRestauracion" name="comentarioRestauracion" required><?php echo $cont[1][0]['ComentarioRestauracion']; ?></textarea></label>
                </section>

                <div class="toggle-hide"><h2>Ingrés</h2><span></span></div>

                <section class="hide">
                    <label for="formaIngreso">Forma d'Ingrés:
                    <input type="text" id="formaIngreso" name="formaIngreso" value="<?php echo $cont[1][0]['FormaIngresoValor']; ?>" required></label>
                    <label for="fuenteIngreso">Font d'Ingrés:
                    <input type="text" id="fuenteIngreso" name="fuenteIngreso" value="<?php echo $cont[1][0]['FuenteIngreso']; ?>" required></label>
                    <label for="fechaIngreso">Data d'Ingrés:
                    <input type="datetime-local" id="fechaIngreso" name="fechaIngreso" value="<?php echo $cont[1][0]['FechaIngreso']; ?>" required></label>
                    <label for="estadoConservacion">Estat de conservació:
                    <input type="text" id="estadoConservacion" name="estadoConservacion" value="<?php echo $cont[1][0]['EstadoConservacionNombre']; ?>" required></label>
                </section>

                <div class="toggle-hide"><h2>Exposicions</h2><span></span></div>

                <section class="hide">
                    <label for="exposicionNombre">Nom:
                    <input type="text" id="exposicionNombre" name="exposicionNombre" value="<?php echo $cont[1][0]['ExposicionNombre']; ?>" required></label>
                    <label for="lugarExposicion">Lloc:
                    <input type="text" id="lugarExposicion" name="lugarExposicion" value="<?php echo $cont[1][0]['LugarExposicion']; ?>" required></label>
                    <label for="fechaInicioExposicion">Data Inicial:
                    <input type="datetime-local" id="fechaInicioExposicion" name="fechaInicioExposicion" value="<?php echo $cont[1][0]['FechaInicioExposicion']; ?>" required></label>
                    <label for="fechaFinExposicion">Data Final:
                    <input type="datetime-local" id="fechaFinExposicion" name="fechaFinExposicion" value="<?php echo $cont[1][0]['FechaFinExposicion']; ?>" required></label>
                    <label for="tipoExposicion">Tipus:
                    <input type="text" id="tipoExposicion" name="tipoExposicion" value="<?php echo $cont[1][0]['TipoExposicionNombre']; ?>" required></label>
                </section>

                <div class="toggle-hide"><h2>Altres Dades</h2><span></span></div>

                <section class="hide">
                    <label for="coleccionProcedencia">Col·lecció de Procedencia:
                    <input type="text" id="coleccionProcedencia" name="coleccionProcedencia" value="<?php echo $cont[1][0]['ColeccionProcedencia']; ?>" required></label>
                    <label for="lugarEjecucion">Lloc d'Execució:
                    <input type="text" id="lugarEjecucion" name="lugarEjecucion" value="<?php echo $cont[1][0]['LugarEjecucion']; ?>" required></label>
                    <label for="numeroTiraje">Nº de Tiratge:
                    <input type="text" id="numeroTiraje" name="numeroTiraje" value="<?php echo $cont[1][0]['NumeroTiraje']; ?>" required></label>
                    <label for="valoracionEconomica">Valoració Económica:
                    <input type="text" id="valoracionEconomica" name="valoracionEconomica" value="<?php echo $cont[1][0]['ValoracionEconomica']; ?>" required></label>
                    <label for="numeroEjemplares">Nº d'Exemplars:
                    <input type="text" id="numeroEjemplares" name="numeroEjemplares" value="<?php echo $cont[1][0]['NumeroEjemplares']; ?>" required></label>
                    <label for="lugarProcedencia">Lloc de Procedencia:
                    <input type="text" id="lugarProcedencia" name="lugarProcedencia" value="<?php echo $cont[1][0]['LugarProcedencia']; ?>" required></label>
                    <label for="otrosNrosIdentificacion">Altres Nº Identificació:
                    <input type="text" id="otrosNrosIdentificacion" name="otrosNrosIdentificacion" value="<?php echo $cont[1][0]['OtrosNrosIdentificacion']; ?>" required></label>
                    <label for="clasificacionGenerica">Classificació Genérica:
                    <input type="text" id="clasificacionGenerica" name="clasificacionGenerica" value="<?php echo $cont[1][0]['ClasificacionGenerica']; ?>" required></label>
                    <label for="usuarioNombre">Usuari que crea l'objecte:
                    <input type="text" id="usuarioNombre" name="usuarioNombre" value="<?php echo $cont[1][0]['UsuarioNombre']; ?>" required readonly></label>
                    <label for="fechaRegistro">Data de Registre:
                    <input type="datetime-local" id="fechaRegistro" name="fechaRegistro" value="<?php echo $cont[1][0]['FechaRegistro']; ?>" required readonly></label>
                    <label for="bibliografia">Bibliografia:
                    <textarea id="bibliografia" name="bibliografia" required><?php echo $cont[1][0]['Bibliografia']; ?></textarea></label>
                    <label for="descripcion">Descripció:
                    <textarea id="descripcion" name="descripcion" required><?php echo $cont[1][0]['Descripcion']; ?></textarea></label>
                    <label for="historiaObjeto">Història de l'objecte:
                    <textarea id="historiaObjeto" name="historiaObjeto" required><?php echo $cont[1][0]['HistoriaObjeto']; ?></textarea></label>
                </section>
            </div>
            <button type="submit">Actualizar</button>
        </form>
    </main>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggles = document.querySelectorAll(".toggle-hide");

            toggles.forEach(toggle => {
                toggle.addEventListener("click", function () {
                    toggle.classList.toggle("rotate");
                    const nextSection = this.nextElementSibling;
                    if (nextSection && nextSection.tagName === "SECTION") {
                        nextSection.classList.toggle("show");
                    }
                });
            });
        });
    </script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>