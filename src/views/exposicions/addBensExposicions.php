<?php
    include "resources/components/header.php";
?> 
<body class = "addBensExposicions">    
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                
            </div>
            <table>
                <?php

                    $columns = ["Nº","Imatge","Objecte","Títol","Autor","Datació","Ubicació","Afegir"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($exposicioObjetos as $objeto) {
                        echo "<tr>";
                            foreach ($objeto as $key => $dato){
                                if ($key != "ObjetoExposicionID"){
                                    echo "<td>{$dato}</td>";
                                }
                            }
                                echo "<td>";
                                echo "<input type='checkbox' name='afegir[]' value='{$objeto['ObjetoExposicionID']}'>";
                                echo "</td>";

                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <!--Scripts-->
    <script src="resources/js/delete.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>