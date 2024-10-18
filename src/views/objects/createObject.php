<?php 
    include "resources/components/header.php";
?>
<body class = "createObject">
    <!--Contenido variable de la pagina-->
    <div>
        <h1>Afegir un registre</h1>
    </div>
    <form action="post">
        <table>
            <tr>
                <td>
                    <label for="nRegistre">Nº de Registre:</label>
                    <input type="text" id="nRegistre" name="nRegistre" required>
                </td>
                <td rowspan = 4>
                    <input type="file" name="imagen" src="resources/images/lupa.png" alt="Submit" height="100px">
                    <?php/*
                    if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
                    {
                    $nombreDirectorio = "img/";
                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" .
                    $_FILES['imagen']['name'];
                    move_uploaded_file ($_FILES['imagen']['tmp_name'],
                    $nombreDirectorio . $nombreFichero);
                    }
                    else
                    print ("No se ha podido subir el fichero\n");
                    */?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Nom">Nom:</label>
                    <input type="text" id="Nom" name="Nom" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Museu">Museu:</label>
                    <input type="text" id="Museu" name="Museu" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Col·lecció">Col·lecció de Procedencia:</label>
                    <input type="text" id="Col·lecció" name="Col·lecció" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Títol">Títol:</label>
                    <input type="text" id="Títol" name="Títol" required>
                </td>
                <td>
                    <label for="Autor">Autor:</label>
                    <input type="text" id="Autor" name="Autor" required>
                </td>
            </tr>
        </table>
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>