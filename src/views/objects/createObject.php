<?php 
    include "resources/components/header.php";
?>
<body class = "createObject">
    <!--Contenido variable de la pagina-->
    <main>
        <!--Contenido variable de la pagina-->              
        <form action="/registers/update" method="POST" enctype="multipart/form-data">
        <h1>Afegir un registre</h1>
            <div>
                <div>
                    <label for="RegistroNº">Nº de Registre:</label>
                    <input type="text" id="RegistroNº" name="RegistroNº" required>

                    <label for="imagen">Imagen:
                    <input type="file" name="imagen" id="imagen" accept="image/*"></label>
                </div>

                <div>
                    <label for="nombre">Nom:
                    <input type="text" id="nombre" name="nombre" required></label>
                    <label for="museo">Museu:
                    <input type="text" id="museo" name="museo" required></label>
                    <label for="autor">Autor:
                    <input type="text" id="autor" name="autor" required></label>
                    <label for="titulo">Títol:
                    <input type="text" id="titulo" name="titulo" required></label>
                </div>
            </div>

            <div>
                        
                <div class="toggle-hide"><h2>Ubicacions</h2><span></span></div>

                <section class="hide">
                    <label for="fechaInicioUbicacion">Data Inici Ubicació:
                    <input type="datetime-local" id="fechaInicioUbicacion" name="fechaInicioUbicacion" required></label>
                    <label for="fechaFinUbicacion">Data Final Ubicació:
                    <input type="datetime-local" id="fechaFinUbicacion" name="fechaFinUbicacion" required></label>
                    <label for="comentarioUbicacion">Comentari Ubicació:
                    <textarea id="comentarioUbicacion" name="comentarioUbicacion" required></textarea></label>

                </section>

                <div class="toggle-hide"><h2>Propietats</h2><span></span></div>

                <section class="hide">
                    <label for="altura">Altura:
                    <input type="text" id="altura" name="altura" required></label>
                    <label for="datacion">Datació:
                    <input type="text" id="datacion" name="datacion" required></label>
                    <label for="anchura">Amplada:
                    <input type="text" id="anchura" name="anchura" required></label>
                    <label for="anyInicial">Any Inicial:
                    <input type="text" id="anyInicial" name="anyInicial" required></label>
                    <label for="profundidad">Profunditat:
                    <input type="text" id="profundidad" name="profundidad" required></label>
                    <label for="anyFinal">Any Final:
                    <input type="text" id="anyFinal" name="anyFinal" required></label>
                    <label for="material">Material:
                    <input type="text" id="material" name="material" required></label>
                    <label for="tecnica">Tècnica:
                    <input type="text" id="tecnica" name="tecnica" required></label>
                </section>

                <div class="toggle-hide"><h2>Baixa</h2><span></span></div>

                <section class="hide">
                    <label for="baja">Baixa:
                    <input type="text" id="baja" name="baja" required></label>
                    <label for="causaBaja">Causa Baixa:
                    <input type="text" id="causaBaja" name="causaBaja" required></label>
                    <label for="fechaBaja">Data Baixa:
                    <input type="datetime-local" id="fechaBaja" name="fechaBaja" required></label>
                    <label for="personaAutorizadaBaja">Persona Autorizada Baja:
                    <input type="text" id="personaAutorizadaBaja" name="personaAutorizadaBaja" required></label>
                </section>

                <div class="toggle-hide"><h2>Restauració</h2><span></span></div>

                <section class="hide">
                    <label for="fechaInicioRestauracion">Data Inici Restauració:
                    <input type="datetime-local" id="fechaInicioRestauracion" name="fechaInicioRestauracion" required></label>
                    <label for="fechaFinRestauracion">Data Final Restauració:
                    <input type="datetime-local" id="fechaFinRestauracion" name="fechaFinRestauracion" required></label>
                    <label for="codigoRestauracion">Codi Restauració:
                    <input type="text" id=" codigoRestauracion" name="codigoRestauracion" required></label>
                    <label for="nombreRestaurador">Nom Restaurador:
                    <input type="text" id="nombreRestaurador" name="nombreRestaurador" required></label>
                    <label for="comentarioRestauracion">Comentari Restauració:
                    <textarea id="comentarioRestauracion" name="comentarioRestauracion" required></textarea></label>
                </section>

                <div class="toggle-hide"><h2>Ingrés</h2><span></span></div>

                <section class="hide">
                    <label for="formaIngreso">Forma d'Ingrés:
                    <input type="text" id="formaIngreso" name="formaIngreso" required></label>
                    <label for="fuenteIngreso">Font d'Ingrés:
                    <input type="text" id="fuenteIngreso" name="fuenteIngreso" required></label>
                    <label for="fechaIngreso">Data d'Ingrés:
                    <input type="datetime-local" id="fechaIngreso" name="fechaIngreso" required></label>
                    <label for="estadoConservacion">Estat de conservació:
                    <input type="text" id="estadoConservacion" name="estadoConservacion" required></label>
                </section>

                <div class="toggle-hide"><h2>Exposicions</h2><span></span></div>

                <section class="hide">
                    <label for="exposicionNombre">Nom:
                    <input type="text" id="exposicionNombre" name="exposicionNombre" required></label>
                    <label for="lugarExposicion">Lloc:
                    <input type="text" id="lugarExposicion" name="lugarExposicion" required></label>
                    <label for="fechaInicioExposicion">Data Inicial:
                    <input type="datetime-local" id="fechaInicioExposicion" name="fechaInicioExposicion" required></label>
                    <label for="fechaFinExposicion">Data Final:
                    <input type="datetime-local" id="fechaFinExposicion" name="fechaFinExposicion" required></label>
                    <label for="tipoExposicion">Tipus:
                    <input type="text" id="tipoExposicion" name="tipoExposicion" required></label>
                </section>

                <div class="toggle-hide"><h2>Altres Dades</h2><span></span></div>

                <section class="hide">
                    <label for="coleccionProcedencia">Col·lecció de Procedencia:
                    <input type="text" id="coleccionProcedencia" name="coleccionProcedencia" required></label>
                    <label for="lugarEjecucion">Lloc d'Execució:
                    <input type="text" id="lugarEjecucion" name="lugarEjecucion" required></label>
                    <label for="numeroTiraje">Nº de Tiratge:
                    <input type="text" id="numeroTiraje" name="numeroTiraje" required></label>
                    <label for="valoracionEconomica">Valoració Económica:
                    <input type="text" id="valoracionEconomica" name="valoracionEconomica" required></label>
                    <label for="numeroEjemplares">Nº d'Exemplars:
                    <input type="text" id="numeroEjemplares" name="numeroEjemplares" required></label>
                    <label for="lugarProcedencia">Lloc de Procedencia:
                    <input type="text" id="lugarProcedencia" name="lugarProcedencia" required></label>
                    <label for="otrosNrosIdentificacion">Altres Nº Identificació:
                    <input type="text" id="otrosNrosIdentificacion" name="otrosNrosIdentificacion" required></label>
                    <label for="clasificacionGenerica">Classificació Genérica:
                    <input type="text" id="clasificacionGenerica" name="clasificacionGenerica" required></label>
                    <label for="usuarioNombre">Usuari que crea l'objecte:
                    <input type="text" id="usuarioNombre" name="usuarioNombre" required readonly></label>
                    <label for="fechaRegistro">Data de Registre:
                    <input type="datetime-local" id="fechaRegistro" name="fechaRegistro" required readonly></label>
                    <label for="bibliografia">Bibliografia:
                    <textarea id="bibliografia" name="bibliografia" required></textarea></label>
                    <label for="descripcion">Descripció:
                    <textarea id="descripcion" name="descripcion" required></textarea></label>
                    <label for="historiaObjeto">Història de l'objecte:
                    <textarea id="historiaObjeto" name="historiaObjeto" required></textarea></label>
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