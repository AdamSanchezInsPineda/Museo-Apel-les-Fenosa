<?php 
    include "resources/components/header.php";
?> 
<body class = "createExposicions">
    <!--Contenido variable de la pagina-->  
    <div>
        <h1>Modificar una exposicio</h1>
    </div>
    <form action="/exposicions/<?php echo $exposicio[0]['ExposicionID'] ?>/update" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" value="<?php echo $exposicio[0]['Nombre']?>"required>
        </div>
        <div>
            <label for="Lloc">Lloc</label>
            <input type="text" id="Lloc" name="Lloc" value="<?php echo $exposicio[0]['LugarExposicion']?>"required>
        </div>

        <div>
            <label for="Data_Inicial">Data Inicial</label>
            <input type="text" id="Data_Inicial" name="Data_Inicial" value="<?php echo $exposicio[0]['FechaInicio']?>" required>
        </div>
        <div>
            <label for="Data_Final">Data Final</label>
            <input type="text" id="Data_Final" name="Data_Final" value="<?php echo $exposicio[0]['FechaFin']?>" required>
        </div>

        <div>
            <label for="Tipus">Tipus</label>
            <select name="Tipus" id="Tipus">
            <?php 
            switch ($exposicio[0]['TipoExposicionID']){
                case 1:
                    echo "<option value='1' selected>1</option>";
                    echo "<option value='2'>2</option>";
                    echo "<option value='3'>3</option>";
                    break;
                case 2:
                    echo "<option value='1'>1</option>";
                    echo "<option value='2' selected>2</option>";
                    echo "<option value='3'>3</option>";
                case 3:
                    echo "<option value='1'>1</option>";
                    echo "<option value='2'>2</option>";
                    echo "<option value='3' selected>3</option>";
            }
                
            ?>
            </select>
        </div>
        <input type="submit" value="Guardar" class="submit">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>

</body>