<?php 
    include "resources/components/header.php";
?>
<body class = "campsLlista">
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/vocabularis/<?php echo $path; ?>/add">Afegir un vocabulari nou<img src="/resources/images/plus.png" alt="Afegir camp llista nou"></a>
            </div>
            <table>
                <?php

                    if ($_SESSION['rol'] == "admin" |  $_SESSION['rol'] == "tecnic"){
                        switch($path){
                            case "codigoGetty":
                                $columns = ["Valor", "Tipus", "Accions"];
                                break;
                            case "datacion":
                                $columns = ["Descripció", "Any Inicial", "Any Final", "Accions"];
                                break;
                            default:
                                $columns = ["Valor","Accions"];;
                        }
                    }

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($vocabularis as $vocabulari) {
                        echo "<tr>";
                            foreach ($vocabulari as $key => $value){
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
                                echo "<a href='/vocabularis/{$path}/{$vocabulari['id']}'><img src='/resources/images/accions/edit.svg' alt='Ficha'></a>";
                                echo "<a href='/vocabularis/{$path}/{$vocabulari['id']}/delete'><img src='/resources/images/accions/delete.png' alt='Ficha'></a>";
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