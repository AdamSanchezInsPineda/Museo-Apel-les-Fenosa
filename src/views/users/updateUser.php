<?php 
    include "resources/components/header.php";
?>
<body class = "createUser">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Modificar un usuari</h1>
    </div>
    <form action="/users/create" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" required>
        </div>

        <div>
            <label for="Contraseña">Contraseña</label>
            <input type="text" id="Contraseña" name="Contraseña" required>
        </div>

        <div>
            <label for="Rol">Rol</label>
            <select name="Rol" id="Rol">
                <option value="Administració">Administració</option>
                <option value="Tècnic">Tècnic</option>
                <option value="Convidat">Convidat</option>
            </select>
        </div>
        
        <input type="submit" value="Modificar" class="submit">
    </form>
</body>
    
<?php
    include "resources/components/footer.php";
?>