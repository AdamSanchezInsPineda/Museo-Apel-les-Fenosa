<?php 
    include "resources/components/header.php";    
?> 
<body class = "createExposicions">
    <!--Contenido variable de la pagina-->  
    <div>
        <h1>Modificar una exposició</h1>
    </div>
    <form action="/exposicions/<?php echo $exposicion[0]['ExposicionID'] ?>/update" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" value="<?php echo $exposicion[0]['Nombre']?>"required>
        </div>
        <div>
            <label for="LugarExposicion">Lloc</label>
            <input type="text" id="LugarExposicion" name="LugarExposicion" value="<?php echo $exposicion[0]['LugarExposicion']?>"required>
        </div>

        <div>
            <label for="Data_Inicial">Data Inicial</label>
            <input type="datetime-local" id="Data_Inicial" name="Data_Inicial" value="<?php echo $exposicion[0]['FechaInicio']?>" required>
        </div>
        <div>
            <label for="Data_Final">Data Final</label>
            <input type="datetime-local" id="Data_Final" name="Data_Final" value="<?php echo $exposicion[0]['FechaFin']?>" required>
        </div>

        <div>
            <label for="Tipus">Tipus</label>
            <select name="Tipus" required>
                <?php foreach ($tiposExposicion as $index => $tipo): ?>
                    <option value="<?php echo $index + 1; ?>" 
                            <?php echo (($index + 1) == $exposicion[0]['TipoExposicion']) ? 'selected' : ''; ?>>
                        <?php echo $tipo['valor']; ?>
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