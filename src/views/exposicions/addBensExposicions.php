<?php
    include "resources/components/header.php";
?> 
<body class = "addBensExposicions">  
    <div>
        <h2>Bens per afegir a la exposició</h2>
    </div>
    <div>
        <div>
            <input type="text" placeholder="Cercar">
        </div>
        <form method="POST" action="/exposicions/<?php echo $objetos[1]; ?>/bens/create"id="addObjectsForm" onsubmit="return validateForm()">
            <div>
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
                                if ($key != "ObjetoID"){
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
                            }
                            echo "<td><input type='checkbox' name='afegir[]' value='{$objeto["ObjetoID"]}'></td>";
                            echo"</tr>";
                        }
                        
                    ?>
                </table>
            </div>
            <div>
                <button type="submit">Afegir</button>
            </div>
        <div id="errorMessage" style="color: red; display: none; margin: 10px 0;">
            Seleccioneu almenys un objecte abans de continuar.
        </div>
        </form>
    </div>
    
    
    <!--Scripts-->
    <script src="/resources/js/imagePreview.js"></script>
    <script src="/resources/js/delete.js"></script>
    <script src="/resources/js/validateForm"></script>
    <?php
        include "resources/components/footer.php";
    ?>
</body>