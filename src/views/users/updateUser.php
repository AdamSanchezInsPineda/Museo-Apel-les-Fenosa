<?php 
    include "resources/components/header.php";
?>
<body class = "createUser">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Modificar un usuari<?php echo $usuario[0]['Nombre']?></h1>
    </div>
    <form action="/users/<?php echo $usuario['UsuarioID'] ?>/update" method="post">
        
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
                case "Administració":
                    echo "<option value='Administració' selected>Administració</option>";
                    echo "<option value='Tècnic'>Tècnic</option>";
                    echo "<option value='Convidat'>Convidat</option>";
                    break;
                case "Tècnic":
                    echo "<option value='Administració'>Administració</option>";
                    echo "<option value='Tècnic' selected>Tècnic</option>";
                    echo "<option value='Convidat'>Convidat</option>";
                case "Convidat":
                    echo "<option value='Administració'>Administració</option>";
                    echo "<option value='Tècnic'>Tècnic</option>";
                    echo "<option value='Convidat' selected>Convidat</option>";
            }
                
            ?>
            </select>
        </div>
        
        <input type="submit" value="Modificar" class="submit">
    </form>
</body>
    
<?php
    include "resources/components/footer.php";
?>