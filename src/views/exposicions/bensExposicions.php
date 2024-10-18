<?php
    include "resources/components/header.php";
?> 
<body class = "bensExposicions">    
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="exposicions/<?php echo $exposicio[0]['ExposicioID'] ?>/bens/add">Afegir bens patrimonials<img src="resources/images/plus.png" alt="Afegir exposició"></a>

                
            </div>
            <table>
                <?php

                    if ($_SESSION['rol'] == "admin")
                        $columns = ["Nº","Objecte","Treure"];                  

                    else
                        $columns = ["Nº","Objecte"];                  

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($exposicions as $exposicio) {
                        echo "<tr>";
                            foreach ($exposicio as $key => $dato){
                                if ($key != "ExposicionID"){
                                    echo "<td>{$dato}</td>";
                                }
                            }
                            if ($_SESSION['rol'] == "admin"){
                                echo "<td>";
                                echo "<a href='/exposicions/{$exposicio['ExposicionID']}/bens/delete'><img src='resources/images/accions/delete.png' alt='Borrar'></a>";

                                echo "</td>";
                            }
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