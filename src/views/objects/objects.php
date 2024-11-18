<?php
    include "resources/components/header.php";
?>
<body class = "objects">
    <!--Contenido variable de la pagina-->   
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar" id="search"> 
                <a href="/registers/add">Fer un nou registre<img src="resources/images/plus.png" alt="Afegir registre"></a>
            </div>
            <table>
                <?php
                    $columns = ["Nº", "Imatge", "Objecte", "Títol", "Autor", "Ubicació", "Datació", "Accions"];
                    echo "<tr>";

                    foreach ($columns as $column) {
                        echo "<th>{$column}</th>";
                    }

                    echo "</tr>";
                ?>
                <tbody class="tbody">

                </tbody>
            </table>
            <div>
                <button><a href="/registers/llibreRegistre" target="_blank">Generar Llibre de Registre</a></button>
            </div>
        </div>
    </div>
    <!--Scripts-->
    <script type="module" src="/resources/js/tableSearch/search.js"></script>
    <script src="resources/js/imagePreview.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>