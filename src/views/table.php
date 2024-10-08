<?php 
    include "resources/components/header.php";
?>
<body class = "table">
    <!--Contenido variable de la pagina-->   
    
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <button>Fer un nou registre<img src="resources/images/plus.png" alt="Afegir registre"></button>
            </div>
            <table>
                <?php
                    $columns = ["Nº","Imatge","Objecte","Títol","Autor","Datació","Ubicació","Accions"];
                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($registros as $registro) {
                        echo "<tr>";
                            foreach ($registro as $key => $dato){
                                if ($key == "Imagen") {
                                    echo "<td><img src='resources/images/obras/{$dato}.jpeg' alt='Foto de {$dato}' class='button1'></td>";
                                    echo "<div class='img-preview'>";
                                        echo "<button class='button2'>Salir</button>";
                                        echo "<img src='resources/images/obras/{$dato}.jpeg' alt='Foto de {$dato}'>";
                                    echo "</div>";
                                }
                                else{
                                    echo "<td>{$dato}</td>";
                                }
                            }
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <!--Scripts-->
    <script src="resources/js/imagePreview.js"></script>
</body>

<?php
    include "resources/components/footer.php";
?>