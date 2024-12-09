<?php
    include "resources/components/header.php";
?> 
<body class = "users">    
    <div>
        <div>
            <h1>Usuaris</h1>
            <div>
                <input type="text" placeholder="Cercar" id="search"> 
                <a href="/users/add">Crear un nou usuari<img src="resources/images/plus.png" alt="Afegir usuari"></a>
            </div>
            <table>
            <?php
                    if ($_SESSION['rol'] == "admin")
                        $columns = ["Usuari","Rol","Accions"];

                    else
                        $columns = ["Usuari","Rol"];

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                ?>
                <tbody class="tbody">

                </tbody>
            </table>
        </div>
    </div>
    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/@simondmc/popup-js@1.4.3/popup.min.js"></script>
    <script type="module" src="/resources/js/tableSearch/search.js"></script>

    <?php
    include "resources/components/footer.php";
    ?>
</body>