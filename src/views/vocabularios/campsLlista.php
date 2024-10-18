<?php 
    include "resources/components/header.php";
?>
<body class = "campsLlista">
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/vocabulary/llista/add">Afegir un vocabulari nou<img src="/resources/images/plus.png" alt="Afegir camp llista nou"></a>

                
            </div>
            <table>
                <?php
                    if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic") 
                        $columns = ["Codi","Vocabulari","Accions"];

                    else
                        $columns = ["Codi","Vocabulari"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($vocabularis as $vocabularis) {
                        echo "<tr>";
                            foreach ($vocabularis as $key => $value){
                                if ($key == "id"){
                                    continue;
                                }
                                if ($key == "valors") {
                                    echo "<td>";
                                    echo "<select>";
                                    foreach ($value as $data) {
                                        echo "<option value='". $data["id"] ."'>". $data["valor"] ."</option>";
                                    }
                                    echo "</select>";
                                    echo "</td>";
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