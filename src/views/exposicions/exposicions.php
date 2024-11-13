<?php
    include "resources/components/header.php";
?> 
<body class = "exposicions">   
    <div>
        <div>
            <h1>Exposicions</h1>
            <div>
                <input type="text" placeholder="Cercar">
                <?php
                    if ($_SESSION['rol'] == "admin"){
                        echo "<a href='exposicions/add'>Crear una exposició<img src='resources/images/plus.png' alt='Afegir exposició'></a>";
                    }
                ?>
                
            </div>
            <table>
                <?php
                        $columns = ["Nom","Data Inici","Data Final", "Tipos", "Lloc", "Veure"];                  

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
                                echo "<a href='/exposicions/{$exposicio['ExposicionID']}/bens'><img src='resources/images/accions/eye.svg' alt='Ficha'></a>";
                                echo "<a href='/exposicions/{$exposicio['ExposicionID']}'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                                echo "<a href='/exposicions/{$exposicio['ExposicionID']}/delete'><img src='resources/images/accions/delete.png' alt='Borrar'></a>";

                                echo "</td>";
                            }else{
                                echo "<td>";
                                echo "<a href='/exposicions/{$exposicio['ExposicionID']}/bens'><img src='resources/images/accions/eye.svg' alt='Ficha'></a>";
                                echo "</td>";
                            }
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <!--Scripts-->
    <?php
    include "resources/components/footer.php";
    ?>
</body>