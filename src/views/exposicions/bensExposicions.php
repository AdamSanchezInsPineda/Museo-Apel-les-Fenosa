<?php
    include "resources/components/header.php";
?> 
<body class = "bensExposicions">    
    <div>
        <div>
            <h1>Afegir Bens a la exposició seleccionada</h1>
            <div>
                <div>
                    <input type="text" placeholder="Cercar" id="search">
                </div>
                <a href="<?php echo $_SERVER['REQUEST_URI'][-1] === '/' ? $_SERVER['REQUEST_URI'] : $_SERVER['REQUEST_URI'].'/'?>add">Afegir bens patrimonials<img src='/resources/images/plus.png' alt='Afegir exposició'></a>
            </div>
            
            <table>
                <?php
                    if ($_SESSION['rol'] == "admin")
                        $columns = ["Nº","Objecte","Treure"];                  

                    else
                        $columns = ["Nº","Objecte"];       

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

