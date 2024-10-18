<?php 
    include "resources/components/header.php";
?>
<body class = "createUser">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Crear un nou usuari</h1>
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
                <option value="admin">Administració</option>
                <option value="tecnic">Tècnic</option>
                <option value="convidat">Convidat</option>
            </select>
        </div>
        
        <input type="submit" value="Afegir" class="submit">
    </form>
</body>
    
<?php
    include "resources/components/footer.php";
?>