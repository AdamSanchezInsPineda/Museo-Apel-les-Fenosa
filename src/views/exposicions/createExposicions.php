<?php 
    include "resources/components/header.php";
?>
<body class = "createExposicions">
    <!--Contenido variable de la pagina-->   
    <div>
        <h1>Crear una nova exposició</h1>
    </div>
    <form action="/exposicions/create" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" required>
        </div>
        <div>
            <label for="Lloc">Lloc</label>
            <input type="text" id="Lloc" name="Lloc" required>
        </div>

        <div>
            <label for="Data_Inicial">Data Inicial</label>
            <input type="datetime-local" id="Data_Inicial" name="Data_Inicial" required>
        </div>
        <div>
            <label for="Data_Final">Data Final</label>
            <input type="datetime-local" id="Data_Final" name="Data_Final" required>
        </div>

        <div>
            <label for="Tipus">Tipus</label>
            <select name="Tipus" id="Tipus">
                <?php foreach ($tiposExposicion as $tipo): ?>
                    <option value="<?php echo htmlspecialchars($tipo['valor']); ?>">
                        <?php echo htmlspecialchars($tipo['valor']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <input type="submit" value="Guardar" class="submit">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>
</body>