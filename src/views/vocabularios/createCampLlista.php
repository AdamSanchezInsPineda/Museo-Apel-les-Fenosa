<?php 
    include "resources/components/header.php";
?>
<body class="createCAmpsLlista">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Crear un nou valor</h1>
    </div>
    <form action="/vocabularis/<?php echo $path ?>/create" method="post">
        <?php
            switch($path){
                case "codigoGetty":
                    echo "<div><label for='Tipus'>Tipus</label><select name='tipo' id='Tipus'><option value='autor'>Autor</option><option value='material'>Material</option><option value='tecnica'>Tècnica</option></select></div>";
                    echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='valor' required></div>";
                    break;
                case "datacion":
                    echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='descripcion' required></div>";
                    echo "<div><label for='Any-inicial'>Any inicial</label><input type='number' id='Any-inicial' name='inicial'></div>";
                    echo "<div><label for='Any-final'>Any final</label><input type='number' id='Any-final' name='final'></div>";
                    break;
                case "autor":
                        echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='Nombre' required></div>";
                        break;
                default:
                    echo "<div><label for='Valor'>Valor</label><input type='text' id='Valor' name='valor' required></div>";
            }
        ?>

        <button class="submit">Afegir valor</button>
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>