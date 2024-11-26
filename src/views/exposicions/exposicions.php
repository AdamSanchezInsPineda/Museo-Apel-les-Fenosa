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
            <section class="scroll">
                <table>
                    <thead>
                        <?php
                            $columns = ["Nom","Data Inici","Data Final", "Tipos", "Lloc", "Accions"];                  

                            echo"<tr>";

                            foreach ($columns as $column)
                                echo "<th>{$column}</th>";

                            echo"</tr>";
                        ?>
                    </thead>
                    <tbody class="tbody">

                    </tbody>
                    
                </table>
            </section>
        </div>
    </div>
    <!--Scripts-->
    <script type="module" src="/resources/js/tableSearch/search.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>