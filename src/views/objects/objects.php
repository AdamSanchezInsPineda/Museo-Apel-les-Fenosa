<?php
    include "resources/components/header.php";
?>
<body class = "objects">
    <!--Contenido variable de la pagina-->   
    <div>
        <div>
            <h1>Registres</h1>
            <div>
                <div>
                    <input type="text" placeholder="Cercar" id="search"> 
                    <button id="mostrarBuscador">Buscador avançat</button>
                </div>
                <a href="/registers/add">Fer un nou registre<img src="resources/images/plus.png" alt="Afegir registre"></a>
            </div>

            <div id="buscadorAvanzado" class="modal">

                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Buscador avançat</h2>
                    </div>

                    <div class="modal-body">
                    <form id="buscadorAvanzado">
                        <h3>Buscar Obres</h3>
                        
                        <table id="filters-container">

                        </table>

                        <div>
                            <label for="campo">Selecciona un campo:</label>
                            <select id="campo">
                                <option value="Nombre">Nombre</option>
                                <option value="Titulo">Título</option>
                                <option value="ColeccionProcedencia">Colección Procedencia</option>
                                <option value="Altura">Altura</option>
                                <option value="Anchura">Anchura</option>
                                <option value="Profundidad">Profundidad</option>
                                <option value="NumeroEjemplares">Número de Ejemplares</option>
                                <option value="NumeroTiraje">Número Tiraje</option>
                                <option value="FechaRegistro">Fecha de Registro</option>
                                <option value="FechaIngreso">Fecha de Ingreso</option>
                                <option value="FuenteIngreso">Fuente de Ingreso</option>
                                <option value="Ubicación">Ubicación</option>
                                <option value="LugarProcedencia">Lugar de Procedencia</option>
                                <option value="ValoracionEconomica">Valoración Económica</option>
                            </select>
                            <button type="button" id="addFilter">Añadir Filtro</button>
                        </div>

                        <button type="submit">Buscar</button>
                    </form>
                    </div>

                    <div class="modal-footer">
                    <span class="close">X</span>
                </div>
                </div>

            </div>

            <section class="scroll">
                <table>
                    <thead>
                    <?php
                        $columns = ["Nº", "Imatge", "Objecte", "Títol", "Autor", "Ubicació", "Datació", "Accions"];
                        echo "<tr>";

                        foreach ($columns as $column) {
                            echo "<th>{$column}</th>";
                        }

                        echo "</tr>";
                    ?>
                    </thead>
                    <tbody class="tbody">

                    </tbody>
                </table>
            </section>
            <div>
                <button><a href="/registers/llibreRegistre" target="_blank">Generar Llibre de Registre</a></button>
            </div>
        </div>
    </div>
    <!--Scripts-->
    <script type="module" src="/resources/js/tableSearch/search.js"></script>
    <script src="/resources/js/tableSearch/buscadorAvanzado.js"></script>
    <script src="resources/js/imagePreview.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>