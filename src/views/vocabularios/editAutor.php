<?php 
    include "resources/components/header.php";
?> 
<body class = "createAutor">
    <!--Contenido variable de la pagina-->  
    <div>
        <h1>Modificar un autor</h1>
    </div>
    <form action="/vocabulary/autors/<?php echo $autor[0]['AutorID'] ?>/update" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" value="<?php echo $autor[0]['Nombre']?>" required>
        </div>
        
        <input type="submit" value="Modificar" class="submit">
    </form>
<?php
    include "resources/components/footer.php";
?>
</body>