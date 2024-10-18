<?php 
    include "resources/components/header.php";
?>
<body class = "campsLlista">
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/vocabulary/campsLlista/add">Afegir un vocabulari nou<img src="resources/images/plus.png" alt="Afegir camp llista nou"></a>

                
            </div>
            <table>
                <?php
                    if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic") 
                        $columns = ["Vocabulari","Valors","Accions"];

                    else
                        $columns = ["Vocabulari","Valors"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($campsLlista as $campLlista) {
                        echo "<tr>";
                            foreach ($campLlista as $key => $dato){
                                echo "<td>{$dato}</td>";
                            }
                            if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic"){
                                echo "<td>";
                                echo "<a href='/vocabulary/campsLlista/{$campLlista['id']}'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                                echo "<a href='/vocabulary/campsLlista/{$campLlista['id']}/delete'><img src='resources/images/accions/delete.png' alt='Ficha'></a>";
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