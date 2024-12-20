<?php 
    include "resources/components/header.php";
?>
<body class = "campsLlista">
    <div>
        <div>
            <h1>Vocabulari</h1>
            <table>
                <?php
                    if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic") 
                        $columns = ["Vocabulari","Accions"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($vocabularis as $key => $value) {
                        echo "<tr>";
                            echo "<td>{$key}</td>";
                            if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic"){
                                echo "<td>";
                                echo "<a href='/vocabularis/{$value}'><img src='/resources/images/accions/eye.svg' alt='Ficha'></a>";

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