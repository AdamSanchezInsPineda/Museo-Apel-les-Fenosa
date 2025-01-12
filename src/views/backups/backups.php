<?php
    include "resources/components/header.php";
?> 
<body class = "backups">    
    <div>
        <div>
            <h1>Copies de seguretat</h1>
            <div>
                <label for="nameBackup">Nom de la nova copia: <input type="text" id="nameBackup"></label>
                <a href="#" id="createBackup">Crear Backup</a>            </div>
            <table>
                <thead>
                <?php
                    $columns = ["Nombre","Fecha de creacion","Accións"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                ?>
                </thead>
                <tbody class="tbody">
                    <?php foreach ($backups as $backup) { ?>
                    <tr>
                        <td><?php echo $backup['name'] ?></td>
                        <td><?php echo $backup['date'] ?></td>
                        <td>
                            <a href="#" class="deleteBackup" data-backup="<?php echo $backup['name']; ?>">
                                <img src='resources/images/accions/delete.svg' alt='Borrar'>
                            </a>
                            <a href="#" class="importBackup" data-backup="<?php echo $backup['name']; ?>">
                                <img src='resources/images/accions/import.svg' alt='Importar'>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="module" src="/resources/js/backup.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>