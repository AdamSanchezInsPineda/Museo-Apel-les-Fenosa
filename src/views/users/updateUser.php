<?php 
    include "resources/components/header.php";
?> 
<body class = "createUser">
    <!--Contenido variable de la pagina-->  
    <div>
        <h1>Modificar un usuari</h1>
    </div>
    <form action="/users/<?php echo $usuario[0]['UsuarioID'] ?>/update" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" value="<?php echo $usuario[0]['Nombre']?>" required>
        </div>
        
        <div>
            <label for="Contraseña">Contraseña</label>
            <input type="text" id="Contraseña" name="Contraseña" required>
        </div>

        <div>
            <label for="Rol">Rol</label>
            <select name="Rol" id="Rol">
            <?php 
            switch ($usuario[0]['Rol']){
                case "admin":
                    echo "<option value='admin' selected>Administració</option>";
                    echo "<option value='tecnic'>Tècnic</option>";
                    echo "<option value='convidat'>Convidat</option>";
                    break;
                case "tecnic":
                    echo "<option value='admin'>Administració</option>";
                    echo "<option value='tecnic' selected>Tècnic</option>";
                    echo "<option value='convidat'>Convidat</option>";
                case "convidat":
                    echo "<option value='admin'>Administració</option>";
                    echo "<option value='tecnic'>Tècnic</option>";
                    echo "<option value='convidat' selected>Convidat</option>";
            }
                
            ?>
            </select>
        </div>
        
        <input type="submit" value="Modificar" class="submit">
    </form>
<?php
    include "resources/components/footer.php";
?>
</body>