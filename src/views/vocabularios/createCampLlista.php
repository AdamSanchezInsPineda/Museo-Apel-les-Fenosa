<?php 
    include "resources/components/header.php";
?>
<body class="createCAmpsLlista">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Crear un nou vocabulari</h1>
    </div>
    <form action="/vocabulary/llista/create" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nombre" required>
        </div>

        <div>
            <label for="Valors">Valors</label>
            <select name="Valors" id="Valors">
                
            </select>        
        </div>

        <button class="submit">Afegir valor</button>

        <input type="submit" value="Guardar" class="submit">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>