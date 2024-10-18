<?php 
    include "resources/components/header.php";
?> 
<body class = "createExposicions">
    <!--Contenido variable de la pagina-->  
    <div>
        <h1>Crear una nova exposicio</h1>
    </div>
    <form action="/exposicions/<?php echo $exposicio[0]['ExposicionID'] ?>/update" method="post">
        
        <div>
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom" value="<?php echo $exposicio[0]['Nombre']?>"required>
        </div>
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
            switch ($exposicio[0]['Tipus']){
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
        <button> <a href="/exposicions/<?php echo $exposicio[0]['ExposicionID']?>/bens"> Bens patrimonials</button>
        <input type="submit" value="Guardar" class="submit">
    </form>
    <?php
    include "resources/components/footer.php";
    ?>

</body>