<?php 
    include "resources/components/header.php";
?>
<body class = "createCampLlista">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Crear un nou vocabulari</h1>
    </div>
    <form action="/vocabulary/campsLlista/create" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" required>
        </div>

        <div>
            <label for="Valors">Valors</label>
            <select name="Valors" id="Valors">
                
            </select>        
        </div>

        <!-- <div>
            <label for="Rol">Rol</label>
            <select name="Rol" id="Rol">
                <option value="admin">Administració</option>
                <option value="tecnic">Tècnic</option>
                <option value="convidat">Convidat</option>
            </select>
        </div> -->
        <input type="submit" value="Guardar" class="submit">

        <input type="submit" value="Afegir un valor vuit" class="submit">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>