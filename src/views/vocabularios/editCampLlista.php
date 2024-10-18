<?php 
    include "resources/components/header.php";
?> 
<body class = "createCampLlista">
    <!--Contenido variable de la pagina-->  
    <div>
        <h1>Modificar un vocabulari</h1>
    </div>
    <form action="/vocabulary/campsLlista/<?php echo $campLlista[0]['id'] ?>/update" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" value="<?php echo $campLlista[0]['nombre']?>" required>
        </div>
        
        <input type="submit" value="Guardar" class="submit">
        <input type="submit" value="Eliminar" class="submit">
        <input type="submit" value="Afegir un valor vuit" class="submit">

    </form>
<?php
    include "resources/components/footer.php";
?>
</body>