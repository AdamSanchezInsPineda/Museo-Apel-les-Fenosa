<?php 
    include "resources/components/header.php";
?>
<body class = "campsLlista">
    <div>
        <div>
            <h1></h1>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/vocabulary/llista/add">Afegir un vocabulari nou<img src="/resources/images/plus.png" alt="Afegir camp llista nou"></a>

                
            </div>
            <table>
                <?php
                    if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic") 
                        $columns = ["Valors","Accions"];

                    else
                        $columns = ["Valors"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($vocabulari["valors"] as $row) {
                        echo "<tr>";
                            foreach ($vocabularis as $key => $value){
                                if ($key == "id"){
                                    continue;
                                }
                                elseif ($key == "voca"){

                                }
                                else{
                                    echo "<td>{$value}</td>";
                                }
                            }
                            if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic"){
                                echo "<td>";
                                echo "<a href='/vocabulary/llista/{$vocabularis['id']}/valors'><img src='/resources/images/accions/eye.svg' alt='Ficha'></a>";
                                echo "<a href='/vocabulary/llista/{$vocabularis['id']}'><img src='/resources/images/accions/edit.svg' alt='Ficha'></a>";
                                echo "<a href='/vocabulary/llista/{$vocabularis['id']}/delete'><img src='/resources/images/accions/delete.png' alt='Ficha'></a>";
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