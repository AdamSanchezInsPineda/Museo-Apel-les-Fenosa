<?php
    include "resources/components/header.php";
?>
<body class = "objects">
    <!--Contenido variable de la pagina-->   
    
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/registers/add">Fer un nou registre<img src="resources/images/plus.png" alt="Afegir registre"></a>
            </div>
            <table>
                <?php
                    $columns = ["Nº","Imatge","Objecte","Títol","Autor","Datació","Ubicació","Accions"];
                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    foreach ($registros as $registro) {
                        echo "<tr>";
                            foreach ($registro as $key => $dato){
                                if ($key == "Imagen") {
                                    echo "<td><img src='resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}' class='button1'></td>";
                                    echo "<div class='img-preview'>";
                                        echo "<button class='button2'>Salir</button>";
                                        echo "<img src='resources/images/obras/{$dato}.jpg' alt='Foto de {$dato}'>";
                                    echo "</div>";
                                }
                                else{
                                    echo "<td>{$dato}</td>";
                                }
                            }
                            echo "<td>";
                            echo "<a href='/registers/{$registro['Registro']}'><img src='resources/images/accions/eye.svg' alt='Ficha'></a>";
                            if ($_SESSION['rol'] != "Convidat"){
                                echo "<a href='/registers/{$registro['Registro']}/update'><img src='resources/images/accions/edit.svg' alt='Ficha'></a>";
                            }
                            if ($_SESSION['rol'] == "admin") {
                                echo "<a href='/registers/{$registro['Registro']}/delete'><img src='resources/images/accions/delete.png' alt='Ficha'></a>";
                            }

                            echo "</td>";
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    <!--Scripts-->
    <script src="resources/js/imagePreview.js"></script>
</body>

<?php
    include "resources/components/footer.php";
?>