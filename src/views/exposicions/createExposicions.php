<?php 
    include "resources/components/header.php";
?>
<body class = "createExposicions">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Crear una nova exposicio</h1>
    </div>
    <form action="/exposicions/create" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" required>
        </div>
            <label for="Lloc">Lloc</label>
            <input type="text" id="Lloc" name="Lloc" required>
        </div>

        <div>
            <label for="Data_Inicial">Data Inicial</label>
            <input type="text" id="Data_Inicial" name="Data_Inicial" required>
        </div>
        <div>
            <label for="Data_Final">Data Final</label>
            <input type="text" id="Data_Final" name="Data_Final" required>
        </div>

        <div>
            <label for="Tipus">Tipus</label>
            <select name="Tipus" id="Tipus">
                <option value="admin">Administració</option>
                <option value="tecnic">Tècnic</option>
                <option value="convidat">Convidat</option>
            </select>
        </div>
        
        <input type="submit" value="Guardar" class="submit">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>