<?php
    include "resources/components/header.php";
    
?> 
<body class = "bensExposicions">    
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar">
                <a href="/exposicions/<?php echo $exposicionID ?>/bens/add">Afegir bens patrimonials<img src='/resources/images/plus.png' alt='Afegir exposició'></a>
            </div>
            <?php if (!empty($exposicions)): ?>
            <table>
                <?php
                print_r($exposicions);
                    if ($_SESSION['rol'] == "admin")
                        $columns = ["Nº","Objecte","Treure"];                  

                    else
                        $columns = ["Nº","Objecte"];                  

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                    
                    foreach ($exposicions as $exposicio) {
                        echo "<tr>";
                            foreach ($exposicio as $key => $dato){
                                if ($key != "ExposicionID" && $key != "ObjetoExposicionID" ){
                                    echo "<td>{$dato}</td>";
                                }
                            }
                            if ($_SESSION['rol'] == "admin"){
                                echo "<td>";
                                if(isset($exposicio['ObjetoExposicionID'])){
                                    echo "<a href='/exposicions/{$exposicio['ExposicionID']}/bens/{$exposicio['ObjetoExposicionID']}/delete'><img src='/resources/images/accions/delete.png' alt='Borrar'></a>";
                                }
                                echo "</td>";
                            }
                        echo"</tr>";
                    }
                ?>
            </table>
            <?php else: ?>
                <p>No hi ha bens associats a aquesta exposició.</p>
            <?php endif; ?>
        </div>
    </div>
    <!--Scripts-->
    <script src="resources/js/delete.js"></script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>

