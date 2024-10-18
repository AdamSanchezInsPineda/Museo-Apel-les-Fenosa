<?php 
    include "resources/components/header.php";
?>
<body class = "autors">
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/vocabulary/autors/add">Afegir un autor<img src="resources/images/plus.png" alt="Afegir autor"></a>

                
            </div>
            <table>
                <?php
                    if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic") 
                        $columns = ["Autor","Accions"];

                    else
                        $columns = ["Autor"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($autors as $autor) {
                        echo "<tr>";
                            foreach ($autor as $key => $dato){
                                echo "<td>{$dato}</td>";
                            }
                            if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic"){
                                echo "<td>";
                                echo "<a href='/vocabulary/autors/{$autor['AutorID']}'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                                echo "<a href='/vocabulary/autors/{$autor['AutorID']}/delete'><img src='resources/images/accions/delete.png' alt='Ficha'></a>";
                                echo "</td>";
                            }
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    </>
    <?php
    include "resources/components/footer.php";
    ?>
</body>