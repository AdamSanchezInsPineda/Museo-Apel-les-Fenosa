<?php
    include "resources/components/header.php";
?> 
<body class = "addBensExposicions">  
<form method="POST" action="/exposicions/<?php echo $exposicionId; ?>/bens/create">
    <table>
        <thead>
            <tr>
                <th>Registro Nº</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Datación</th>
                <th>Ubicación</th>
                <th>Seleccionar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objetos as $objeto): ?>
                <tr>
                    <td><?php echo $objeto['RegistroNº']; ?></td>
                    <td><img src="<?php echo $objeto['Imagen']; ?>" alt="Imagen del objeto" style="width: 50px; height: 50px;"></td>
                    <td><?php echo $objeto['Nombre']; ?></td>
                    <td><?php echo $objeto['Titulo']; ?></td>
                    <td><?php echo $objeto['Autor']; ?></td>
                    <td><?php echo $objeto['Datacion']; ?></td>
                    <td><?php echo $objeto['Ubicacion']; ?></td>
                    <td>
                        <input type="checkbox" name="objetos[]" value="<?php echo $objeto['ObjetoID']; ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <input type="submit" value="Añadir objetos seleccionados">
</form>
    <!--Scripts-->
    <script src="/resources/js/imagePreview.js"></script>
    <script src="/resources/js/delete.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>