<?php
    include "resources/components/header.php";
?> 
<body class = "exposicions">   
    <div>
        <div>
            <h1>Exposicions</h1>
            <div>
                <input type="text" placeholder="Cercar" id="search"> 
                <?php
                    if ($_SESSION['rol'] == "admin"){
                        echo "<a href='exposicions/add'>Crear una exposició<img src='resources/images/plus.png' alt='Afegir exposició'></a>";
                    }
                ?>
                
            </div>
            <table>
                <?php
                    $columns = ["Nom","Data Inici","Data Final", "Tipos", "Lloc", "Veure"];                  

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
    <script type="module" src="/resources/js/tableSearch/search.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>