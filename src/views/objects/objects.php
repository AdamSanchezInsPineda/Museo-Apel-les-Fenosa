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
            <!--<form>
                <table>
                    <tr>
                        <td>
                            <label for="nom">Nom: <input id="nom" name="nom" type="text"></label>
                        </td>

                        <td>
                            <label for="titol">Títol: <input id="titol" name="titol" type="text"></label>
                        </td>

                        <td>
                            <label for="colleccioProcedencia">Col·lecció Procedència: <input id="colleccioProcedencia" name="colleccioProcedencia" type="text"></label>
                        </td>

                        <td>
                            <label for="altura">Alçada: <input id="altura" name="altura" type="text"></label>
                        </td>

                        <td>
                            <label for="amplada">Amplada: <input id="amplada" name="amplada" type="text"></label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="profunditat">Profunditat: <input id="profunditat" name="profunditat" type="text"></label>
                        </td>

                        <td>
                            <label for="numeroExemplars">Número d'Exemplars: <input id="numeroExemplars" name="numeroExemplars" type="number"></label>
                        </td>

                        <td>
                            <label for="numeroTiratge">Número Tiratge: <input id="numeroTiratge" name="numeroTiratge" type="number"></label>
                        </td>

                        <td>
                            <label for="dataRegistre">Data de Registre: <input id="dataRegistre" name="dataRegistre" type="date"></label>
                        </td>

                        <td>
                            <label for="dataIngress">Data d'Ingress: <input id="dataIngress" name="dataIngress" type="date"></label>
                        </td>
                    </tr>
                        
                    <tr>
                        <td>
                            <label for="fontIngress">Font d'Ingress: <input id="fontIngress" name="fontIngress" type="text"></label>
                        </td>

                        <td>
                            <label for="ubicacio">Ubicació: <input id="ubicacio" name="ubicacio" type="text"></label>
                        </td>

                        <td>
                            <label for="llocProcedencia">Lloc de Procedència: <input id="llocProcedencia" name="llocProcedencia" type="text"></label>
                        </td>

                        <td>
                            <label for="valoracioEconomica">Valoració Econòmica: <input id="valoracioEconomica" name="valoracioEconomica" type="text"></label>
                        </td>
                    </tr>
                </table>
            </form>--> 
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
                <button onclick="window.open('/registers/llibreRegistre', '_blank');">Generar Llibre de Registre</button>
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