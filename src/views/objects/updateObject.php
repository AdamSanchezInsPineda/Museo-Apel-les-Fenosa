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
                    <input type="text" id="museo" name="museo" value="<?php echo $cont[1][0]['MuseoNombre']; ?>" ></label>
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
                    <input type="datetime-local" id="fechaInicioUbicacion" name="fechaInicioUbicacion" value="<?php echo $cont[1][0]['FechaInicioUbicacion']; ?>" ></label>
                    <label for="fechaFinUbicacion">Data Final Ubicació:
                    <input type="datetime-local" id="fechaFinUbicacion" name="fechaFinUbicacion" value="<?php echo $cont[1][0]['FechaFinUbicacion']; ?>" ></label>
                    <label for="comentarioUbicacion">Comentari Ubicació:
                    <textarea id="comentarioUbicacion" name="comentarioUbicacion" ><?php echo $cont[1][0]['ComentarioUbicacion']; ?></textarea></label>

                </section>

                <div class="toggle-hide"><h2>Propietats</h2><span></span></div>

                <section class="hide">
                    <label for="altura">Altura:
                    <input type="text" id="altura" name="altura" value="<?php echo $cont[1][0]['Altura']; ?>" ></label>
                    <label for="datacion">Datació:
                    <input type="text" id="datacion" name="datacion" value="<?php echo $cont[1][0]['DatacionDescripcion']; ?>" ></label>
                    <label for="anchura">Amplada:
                    <input type="text" id="anchura" name="anchura" value="<?php echo $cont[1][0]['Anchura']; ?>" ></label>
                    <label for="anyInicial">Any Inicial:
                    <input type="text" id="anyInicial" name="anyInicial" value="<?php echo $cont[1][0]['any_inicial']; ?>" ></label>
                    <label for="profundidad">Profunditat:
                    <input type="text" id="profundidad" name="profundidad" value="<?php echo $cont[1][0]['Profundidad']; ?>" ></label>
                    <label for="anyFinal">Any Final:
                    <input type="text" id="anyFinal" name="anyFinal" value="<?php echo $cont[1][0]['any_final']; ?>" ></label>
                    <label for="material">Material:
                    <input type="text" id="material" name="material" value="<?php echo $cont[1][0]['MaterialNombre']; ?>" ></label>
                    <label for="tecnica">Tècnica:
                    <input type="text" id="tecnica" name="tecnica" value="<?php echo $cont[1][0]['TecnicaNombre']; ?>" ></label>
                </section>

                <div class="toggle-hide"><h2>Baixa</h2><span></span></div>

                <section class="hide">
                    <label for="baja">Baixa:
                    <input type="text" id="baja" name="baja" value="<?php echo $cont[1][0]['BajaValor']; ?>" ></label>
                    <label for="causaBaja">Causa Baixa:
                    <input type="text" id="causaBaja" name="causaBaja" value="<?php echo $cont[1][0]['CausaBajaValor']; ?>" ></label>
                    <label for="fechaBaja">Data Baixa:
                    <input type="datetime-local" id="fechaBaja" name="fechaBaja" value="<?php echo $cont[1][0]['FechaBaja']; ?>" ></label>
                    <label for="personaAutorizadaBaja">Persona Autorizada Baja:
                    <input type="text" id="personaAutorizadaBaja" name="personaAutorizadaBaja" value="<?php echo $cont[1][0]['PersonaAutorizadaBaja']; ?>" ></label>
                </section>

                <div class="toggle-hide"><h2>Restauració</h2><span></span></div>

                <section class="hide">
                    <label for="fechaInicioRestauracion">Data Inici Restauració:
                    <input type="datetime-local" id="fechaInicioRestauracion" name="fechaInicioRestauracion" value="<?php echo $cont[1][0]['FechaInicioRestauracion']; ?>" ></label>
                    <label for="fechaFinRestauracion">Data Final Restauració:
                    <input type="datetime-local" id="fechaFinRestauracion" name="fechaFinRestauracion" value="<?php echo $cont[1][0]['FechaFinRestauracion']; ?>" ></label>
                    <label for="codigoRestauracion">Codi Restauració:
                    <input type="text" id=" codigoRestauracion" name="codigoRestauracion" value="<?php echo $cont[1][0]['CodigoRestauracion']; ?>" ></label>
                    <label for="nombreRestaurador">Nom Restaurador:
                    <input type="text" id="nombreRestaurador" name="nombreRestaurador" value="<?php echo $cont[1][0]['NombreRestaurador']; ?>" ></label>
                    <label for="comentarioRestauracion">Comentari Restauració:
                    <textarea id="comentarioRestauracion" name="comentarioRestauracion" ><?php echo $cont[1][0]['ComentarioRestauracion']; ?></textarea></label>
                </section>

                <div class="toggle-hide"><h2>Ingrés</h2><span></span></div>

                <section class="hide">
                    <label for="formaIngreso">Forma d'Ingrés:
                    <input type="text" id="formaIngreso" name="formaIngreso" value="<?php echo $cont[1][0]['FormaIngresoValor']; ?>" ></label>
                    <label for="fuenteIngreso">Font d'Ingrés:
                    <input type="text" id="fuenteIngreso" name="fuenteIngreso" value="<?php echo $cont[1][0]['FuenteIngreso']; ?>" ></label>
                    <label for="fechaIngreso">Data d'Ingrés:
                    <input type="datetime-local" id="fechaIngreso" name="fechaIngreso" value="<?php echo $cont[1][0]['FechaIngreso']; ?>" ></label>
                    <label for="estadoConservacion">Estat de conservació:
                    <input type="text" id="estadoConservacion" name="estadoConservacion" value="<?php echo $cont[1][0]['EstadoConservacionNombre']; ?>" ></label>
                </section>

                <div class="toggle-hide"><h2>Exposicions</h2><span></span></div>

                <section class="hide">
                    <label for="exposicionNombre">Nom:
                    <input type="text" id="exposicionNombre" name="exposicionNombre" value="<?php echo $cont[1][0]['ExposicionNombre']; ?>" ></label>
                    <label for="lugarExposicion">Lloc:
                    <input type="text" id="lugarExposicion" name="lugarExposicion" value="<?php echo $cont[1][0]['LugarExposicion']; ?>" ></label>
                    <label for="fechaInicioExposicion">Data Inicial:
                    <input type="datetime-local" id="fechaInicioExposicion" name="fechaInicioExposicion" value="<?php echo $cont[1][0]['FechaInicioExposicion']; ?>" ></label>
                    <label for="fechaFinExposicion">Data Final:
                    <input type="datetime-local" id="fechaFinExposicion" name="fechaFinExposicion" value="<?php echo $cont[1][0]['FechaFinExposicion']; ?>" ></label>
                    <label for="tipoExposicion">Tipus:
                    <input type="text" id="tipoExposicion" name="tipoExposicion" value="<?php echo $cont[1][0]['TipoExposicionNombre']; ?>" ></label>
                </section>

                <div class="toggle-hide"><h2>Altres Dades</h2><span></span></div>

                <section class="hide">
                    <label for="coleccionProcedencia">Col·lecció de Procedencia:
                    <input type="text" id="coleccionProcedencia" name="coleccionProcedencia" value="<?php echo $cont[1][0]['ColeccionProcedencia']; ?>" ></label>
                    <label for="lugarEjecucion">Lloc d'Execució:
                    <input type="text" id="lugarEjecucion" name="lugarEjecucion" value="<?php echo $cont[1][0]['LugarEjecucion']; ?>" ></label>
                    <label for="numeroTiraje">Nº de Tiratge:
                    <input type="text" id="numeroTiraje" name="numeroTiraje" value="<?php echo $cont[1][0]['NumeroTiraje']; ?>" ></label>
                    <label for="valoracionEconomica">Valoració Económica:
                    <input type="text" id="valoracionEconomica" name="valoracionEconomica" value="<?php echo $cont[1][0]['ValoracionEconomica']; ?>" ></label>
                    <label for="numeroEjemplares">Nº d'Exemplars:
                    <input type="text" id="numeroEjemplares" name="numeroEjemplares" value="<?php echo $cont[1][0]['NumeroEjemplares']; ?>" ></label>
                    <label for="lugarProcedencia">Lloc de Procedencia:
                    <input type="text" id="lugarProcedencia" name="lugarProcedencia" value="<?php echo $cont[1][0]['LugarProcedencia']; ?>" ></label>
                    <label for="otrosNrosIdentificacion">Altres Nº Identificació:
                    <input type="text" id="otrosNrosIdentificacion" name="otrosNrosIdentificacion" value="<?php echo $cont[1][0]['OtrosNrosIdentificacion']; ?>" ></label>
                    <label for="clasificacionGenerica">Classificació Genérica:
                    <input type="text" id="clasificacionGenerica" name="clasificacionGenerica" value="<?php echo $cont[1][0]['ClasificacionGenerica']; ?>" ></label>
                    <label for="usuarioNombre">Usuari que crea l'objecte:
                    <input type="text" id="usuarioNombre" name="usuarioNombre" value="<?php echo $cont[1][0]['UsuarioNombre']; ?>" readonly></label>
                    <label for="fechaRegistro">Data de Registre:
                    <input type="datetime-local" id="fechaRegistro" name="fechaRegistro" value="<?php echo $cont[1][0]['FechaRegistro']; ?>" readonly></label>
                    <label for="bibliografia">Bibliografia:
                    <textarea id="bibliografia" name="bibliografia" ><?php echo $cont[1][0]['Bibliografia']; ?></textarea></label>
                    <label for="descripcion">Descripció:
                    <textarea id="descripcion" name="descripcion" ><?php echo $cont[1][0]['Descripcion']; ?></textarea></label>
                    <label for="historiaObjeto">Història de l'objecte:
                    <textarea id="historiaObjeto" name="historiaObjeto" ><?php echo $cont[1][0]['HistoriaObjeto']; ?></textarea></label>
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