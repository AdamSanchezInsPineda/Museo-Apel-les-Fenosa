<?php
    include "resources/components/header.php";
?>
<body class = "users">
    <!--Contenido variable de la pagina-->   
    
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/users/add">Crear un nou usuari<img src="resources/images/plus.png" alt="Afegir usuari"></a>

                
            </div>
            <table>
                <?php
                    if ($_SESSION['rol'] == "admin")
                        $columns = ["Usuari","Rol","Accions"];

                    else
                        $columns = ["Usuari","Rol"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                            foreach ($usuario as $key => $dato){
                                if ($key != "UsuarioID"){
                                    echo "<td>{$dato}</td>";
                                }
                            }
                            if ($_SESSION['rol'] == "admin"){
                                echo "<td>";
                                echo "<a href='/users/{$usuario['UsuarioID']}'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                                echo "<a href='/users/{$usuario['UsuarioID']}/delete'><img src='resources/images/accions/delete.png' alt='Ficha'></a>";
                                echo "</td>";
                            }
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