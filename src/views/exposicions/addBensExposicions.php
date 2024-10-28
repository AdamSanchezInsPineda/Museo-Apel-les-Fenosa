<?php
    include "resources/components/header.php";
?> 
<body class = "addBensExposicions">  
    <div>
    <form method="POST" action="/exposicions/<?php echo $objetos[1] ?>/bens/create">

        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/exposicions/<?php echo $objetos[1]; ?>/bens">Fer un nou registre<img src="/resources/images/plus.png" alt="Afegir registre"></a>
            </div>
            <table>
                <?php
                    $columns = ["Nº","Imatge","Objecte","Títol","Autor","Datació","Ubicació","Afegir"];
                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    foreach ($objetos[0] as $objeto) {
                        echo "<tr>";
                        foreach ($objeto as $key => $dato){
                            if ($key == "Imagen") {
                                echo "<td><img src='/resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}' class='button1'></td>";
                                echo "<div class='img-preview'>";
                                    echo "<button class='button2'>Salir</button>";
                                    echo "<img src='/resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}'>";
                                echo "</div>";

                            }
                            else{
                                echo "<td>{$dato}</td>";
                            }
                        }
                        echo "<td><input type='checkbox' name='afegir[]' value='{$dato}'></td>";
                        echo"</tr>";
                    }
                    
                ?>
            </table>
        </div>
        <button type="submit" class="submit"><a href="/exposicions/<?php echo $objetos[1]; ?>/bens">Añadir objetos seleccionados</a></button>
    </form>
    </div>
    
    <!--Scripts-->
    <script src="resources/js/imagePreview.js"></script>
    <script src="resources/js/delete.js"></script>
    <?php
        include "resources/components/footer.php";
    ?>
</body>