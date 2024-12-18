<?php 
    include "resources/components/header.php";
?>
<body class = "createObject">
    <!--Contenido variable de la pagina-->
    <main>
        <!--Contenido variable de la pagina-->              
        <form action="/registers/create" method="POST" enctype="multipart/form-data">
        <h1>Afegir un registre</h1>
            <div>
                <div>
                    <label for="RegistroNº">Nº de Registre:</label>
                    <input type="text" id="RegistroNº" name="RegistroNº" required>

                    <label for="imagen">Imagen:
                    <input type="file" name="imagen" id="imagen" accept="image/*"></label>
                </div>

                <div>
                    <label for="Nombre">Nom:
                    <input type="text" id="Nombre" name="Nombre" required></label>
                    <label for="Museo">Museu:</label>
                    <select name="Museo" id="Museo">
                        <option value=null>Selecciona un museu</option>
                        <?php foreach ($museos as $museo): ?>
                            <option value="<?php echo $museo['Nombre']; ?>"><?php echo $museo['Nombre']; ?></option>
                        <?php endforeach; ?>
                    </select> 
                    <label for="Autor">Autor:</label>
                    <select name="Autor" id="Autor" required>
                        <option value=null>Selecciona un autor</option>
                        <?php foreach ($autores as $autor): ?>
                            <option value="<?php echo $autor['Nombre']; ?>"><?php echo $autor['Nombre']; ?></option>
                        <?php endforeach; ?>
                    </select>                    
                    <label for="Titulo">Títol:
                    <input type="text" id="Titulo" name="Titulo" required></label>
                </div>
            </div>

            <div>
                        
                <div class="toggle-hide"><h2>Ubicacions</h2><span></span></div>

                <section class="hide">
                    <label for="fechaInicioUbicacion">Data Inici Ubicació:
                    <input type="datetime-local" id="fechaInicioUbicacion" name="fechaInicioUbicacion"></label>
                    <label for="fechaFinUbicacion">Data Final Ubicació:
                    <input type="datetime-local" id="fechaFinUbicacion" name="fechaFinUbicacion"></label>
                    <label for="comentarioUbicacion">Comentari Ubicació:
                    <textarea id="comentarioUbicacion" name="comentarioUbicacion"></textarea></label>

                </section>

                <div class="toggle-hide"><h2>Propietats</h2><span></span></div>

                <section class="hide">
                    <label for="altura">Altura:
                    <input type="text" id="altura" name="altura"></label>
                    <label for="datacion">Datació:
                    <input type="text" id="datacion" name="datacion"></label>
                    <label for="anchura">Amplada:
                    <input type="text" id="anchura" name="anchura"></label>
                    <label for="anyInicial">Any Inicial:
                    <input type="text" id="anyInicial" name="anyInicial"></label>
                    <label for="profundidad">Profunditat:
                    <input type="text" id="profundidad" name="profundidad"></label>
                    <label for="anyFinal">Any Final:
                    <input type="text" id="anyFinal" name="anyFinal"></label>
                    <label for="Material">Material:
                    <select name="Material" id="Material">
                        <option value=null>Selecciona un material</option>
                        <?php foreach ($materials as $material): ?>
                            <option value="<?php echo $material['valor']; ?>"><?php echo $material['valor']; ?></option>
                        <?php endforeach; ?>
                    </select> </label>
                    <label for="Tecnica">Técnica:
                    <select name="Tecnica" id="Tecnica">
                        <option value=null>Selecciona una Técnica</option>
                        <?php foreach ($tecnicas as $tecnica): ?>
                            <option value="<?php echo $tecnica['valor']; ?>"><?php echo $tecnica['valor']; ?></option>
                        <?php endforeach; ?>
                    </select> </label>
                </section>

                <div class="toggle-hide"><h2>Baixa</h2><span></span></div>

                <section class="hide">
                    <label for="Baja">Baixa:
                    <select name="Baja" id="Baja">
                        <option value=null>Selecciona un valor per a Baixa</option>
                        <?php foreach ($bajas as $baja): ?>
                            <option value="<?php echo $baja['valor']; ?>"><?php echo $baja['valor']; ?></option>
                        <?php endforeach; ?>
                    </select> </label>
                    <label for="causaBaja">Causa Baixa:
                    <select name="causaBaja" id="causaBaja">
                        <option value=null>Selecciona la causa de la baixa</option>
                        <?php foreach ($causaBajas as $causaBaja): ?>
                            <option value="<?php echo $causaBaja['valor']; ?>"><?php echo $causaBaja['valor']; ?></option>
                        <?php endforeach; ?>
                    </select> </label>
                    <label for="fechaBaja">Data Baixa:
                    <input type="datetime-local" id="fechaBaja" name="fechaBaja"></label>
                    <label for="personaAutorizadaBaja">Persona Autoritzada Baixa:
                    <input type="text" id="personaAutorizadaBaja" name="personaAutorizadaBaja"></label>
                </section>

                <div class="toggle-hide"><h2>Restauració</h2><span></span></div>

                <section class="hide">
                    <label for="fechaInicioRestauracion">Data Inici Restauració:
                    <input type="datetime-local" id="fechaInicioRestauracion" name="fechaInicioRestauracion"></label>
                    <label for="fechaFinRestauracion">Data Final Restauració:
                    <input type="datetime-local" id="fechaFinRestauracion" name="fechaFinRestauracion"></label>
                    <label for="codigoRestauracion">Codi Restauració:
                    <input type="text" id=" codigoRestauracion" name="codigoRestauracion"></label>
                    <label for="nombreRestaurador">Nom Restaurador:
                    <input type="text" id="nombreRestaurador" name="nombreRestaurador"></label>
                    <label for="comentarioRestauracion">Comentari Restauració:
                    <textarea id="comentarioRestauracion" name="comentarioRestauracion"></textarea></label>
                </section>

                <div class="toggle-hide"><h2>Ingrés</h2><span></span></div>

                <section class="hide">
                    <label for="formaIngreso">Forma d'Ingrés:
                        <select name="formaIngreso" id="formaIngreso">
                        <option value=null>Selecciona una forma d'ingrés</option>
                        <?php foreach ($formaIngresos as $formaIngreso): ?>
                            <option value="<?php echo $formaIngreso['valor']; ?>"><?php echo $formaIngreso['valor']; ?></option>
                        <?php endforeach; ?>
                    </select> </label>                    
                    <label for="fuenteIngreso">Font d'Ingrés:
                    <input type="text" id="fuenteIngreso" name="fuenteIngreso"></label>
                    <label for="fechaIngreso">Data d'Ingrés:
                    <input type="datetime-local" id="fechaIngreso" name="fechaIngreso"></label>
                    <label for="estadoConservacion">Estat de conservació:
                    <input type="text" id="estadoConservacion" name="estadoConservacion"></label>
                </section>

                <div class="toggle-hide"><h2>Exposicions</h2><span></span></div>

                <section class="hide">
                    <label for="exposicionNombre">Nom:
                    <input type="text" id="exposicionNombre" name="exposicionNombre"></label>
                    <label for="lugarExposicion">Lloc:
                    <input type="text" id="lugarExposicion" name="lugarExposicion"></label>
                    <label for="fechaInicioExposicion">Data Inicial:
                    <input type="datetime-local" id="fechaInicioExposicion" name="fechaInicioExposicion"></label>
                    <label for="fechaFinExposicion">Data Final:
                    <input type="datetime-local" id="fechaFinExposicion" name="fechaFinExposicion"></label>
                    <label for="tipoExposicion">Tipus:
                    <input type="text" id="tipoExposicion" name="tipoExposicion"></label>
                </section>

                <div class="toggle-hide"><h2>Altres Dades</h2><span></span></div>

                <section class="hide">
                    <label for="coleccionProcedencia">Col·lecció de Procedencia:
                    <input type="text" id="coleccionProcedencia" name="coleccionProcedencia"></label>
                    <label for="lugarEjecucion">Lloc d'Execució:
                    <input type="text" id="lugarEjecucion" name="lugarEjecucion"></label>
                    <label for="numeroTiraje">Nº de Tiratge:
                    <input type="text" id="numeroTiraje" name="numeroTiraje"></label>
                    <label for="valoracionEconomica">Valoració Económica:
                    <input type="text" id="valoracionEconomica" name="valoracionEconomica"></label>
                    <label for="numeroEjemplares">Nº d'Exemplars:
                    <input type="text" id="numeroEjemplares" name="numeroEjemplares"></label>
                    <label for="lugarProcedencia">Lloc de Procedencia:
                    <input type="text" id="lugarProcedencia" name="lugarProcedencia"></label>
                    <label for="otrosNrosIdentificacion">Altres Nº Identificació:
                    <input type="text" id="otrosNrosIdentificacion" name="otrosNrosIdentificacion"></label>
                    <label for="clasificacionGenerica">Classificació Genérica:
                    <input type="text" id="clasificacionGenerica" name="clasificacionGenerica"></label>
                    <label for="bibliografia">Bibliografia:
                    <textarea id="bibliografia" name="bibliografia"></textarea></label>
                    <label for="descripcion">Descripció:
                    <textarea id="descripcion" name="descripcion"></textarea></label>
                    <label for="historiaObjeto">Història de l'objecte:
                    <textarea id="historiaObjeto" name="historiaObjeto"></textarea></label>
                </section>
            </div>
            <button type="submit">Crear</button>
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
    <script src="/resources/js/validateForm.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>