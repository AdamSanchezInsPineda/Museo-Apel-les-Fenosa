<?php
    include "resources/components/header.php";
?>
<body class = "users">
    <!--Contenido variable de la pagina-->   
    
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="">Crear un nou usuari<img src="resources/images/plus.png" alt="Afegir usuari"></a>

                
            </div>
            <table>
                <?php
                    $columns = ["ID","Usuari","Rol","Accions"];
                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                            foreach ($usuario as $key => $dato){
                                echo "<td>{$dato}</td>";
                            }
                            echo "<td>";
                            echo "<a href=''><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                            echo "<a href=''><img src='resources/images/accions/delete.png' alt='Ficha'></a>";

                            echo "</td>";
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <!--Scripts-->
</body>

<?php
    include "resources/components/footer.php";
?>