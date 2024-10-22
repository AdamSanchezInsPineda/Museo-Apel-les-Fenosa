<?php
    include "resources/components/header.php";
?> 
<body class = "addBensExposicions">  
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                
            </div>
            <form method="post" action="/exposicions/<?php $exposicio['ExposicionID'] ?>/bens/create">    
            <table>
        <?php
            $columns = ["Nº","Imatge","Objecte","Títol","Autor","Datació","Ubicació","Afegir"];

            echo "<tr>";
            foreach ($columns as $column)
                echo "<th>{$column}</th>";
            echo "</tr>";

            foreach ($exposicions as $exposicio) {
                echo "<tr>";
                    // Mostrar los campos de la clase Exposicio.php excepto ObjetoID
                    foreach ($exposicio as $key => $dato) {
                        if ($key != "ObjetoID") {
                            if ($key == "Imagen") {
                                echo "<td><img src='resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}' class='button1'></td>";
                                echo "<div class='img-preview'>";
                                    echo "<button class='button2'>Salir</button>";
                                    echo "<img src='resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}'>";
                                echo "</div>";
                            } else {
                                echo "<td>{$dato}</td>";
                            }
                        }
                    }
                    // Agregar la columna con la casilla de verificación
                    echo "<td>";
                    if (isset($exposicio['ObjetoID'])) {
                        echo "<input type='checkbox' name='afegir[]' value='{$exposicio['ObjetoID']}'>";
                    }
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</form>
<a href='/exposicions/<?php echo $exposicionID; ?>/bens' class="button-back">Volver a bienes</a>
<button type="submit" form="formAddBens" class="button-save">Guardar cambios</button>
        </div>
    </div>
    <!--Scripts-->
    <script src="resources/js/imagePreview.js"></script>
    <script src="resources/js/delete.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>