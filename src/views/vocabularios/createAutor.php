<?php 
    include "resources/components/header.php";
?>
<body class = "createAutor">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Crear un nou autor</h1>
    </div>
    <form action="/vocabulary/autors/create" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" required>
        </div>

        
        <input type="submit" value="Afegir" class="submit">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>