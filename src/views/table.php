<?php 
    include "resources/components/header.php";
?>
<link rel="stylesheet" href="../resources/styles/css/table.css">
<body>
    <!--Contenido variable de la pagina-->
    <div>
        <?php
            $columns = ["Nº","Imatge","Objecte","Títol","Autor","Datació","Ubicació","Accions"];
        ?>
        <table>
            <?php

                echo"<tr>";

                foreach ($columns as $column)
                    echo "<th>{$column}</th>";

                echo"</tr>";
                
                foreach ($registros as $registro) {
                    echo "<tr>";
                        foreach ($registro as $key => $dato){
                            if ($key == "Imatges") {
                                echo"<td>Imatge</td>";
                                /*echo '<img src="resources/images/obras/{$dato}" alt="Foto de {$dato}">';*/
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
    <!--Scripts-->
    
</body>

<?php
    include "resources/components/footer.php";
?>