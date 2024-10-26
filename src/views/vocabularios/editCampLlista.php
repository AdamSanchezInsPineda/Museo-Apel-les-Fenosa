<?php 
    include "resources/components/header.php";
?> 
<body class = "createCampLlista">
    <!--Contenido variable de la pagina-->  
    <div>
        <h1>Modificar un valor</h1>
    </div>
    <form action="/vocabularis/<?php echo $path ?>/<?php echo $id ?>/update" method="post">
        <?php
            switch($path){
                case "codigoGetty":
                    echo "<div><label for='Tipus'>Tipus</label><select name='tipo' id='Tipus'>";
                    foreach ($tipo as $key => $value) {
                        echo $vocabulari["tipo"] == $value ? "<option selected='selected' value='". $value ."'>". $key ."</option>" : "<option value='". $value ."'>". $key ."</option>";
                    }
                    echo "</select></div>";
                    echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='valor' value='". $vocabulari["valor"] ."' required></div>";
                    break;
                case "datacion":
                    echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='descripcion' value='". $vocabulari["descripcion"] ."' required></div>";
                    echo "<div><label for='Any-inicial'>Any inicial</label><input type='number' id='Any-inicial' value='". $vocabulari["any_inicial"] ."' name='inicial'></div>";
                    echo "<div><label for='Any-final'>Any final</label><input type='number' id='Any-final' value='". $vocabulari["any_final"] ."' name='final'></div>";
                    break;
                case "autor":
                        echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='Nombre' value='". $vocabulari["Nombre"] ."' required></div>";
                        break;
                default:
                    echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='valor' required></div>";
            }
        ?>
        <input type="submit" value="Guardar" class="submit">
    </form>
<?php
    include "resources/components/footer.php";
?>
</body>