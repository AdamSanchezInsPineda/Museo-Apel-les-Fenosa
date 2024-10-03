<?php 
    include "resources/components/header.php";
?>
<body>
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
                                if ($key == "Imatges") {
                                    echo '<td><img src="resources/images/obras/{$dato}" alt="Foto de {$dato}"></td>';
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
    
</body>

<?php
    include "resources/components/footer.php";
?>