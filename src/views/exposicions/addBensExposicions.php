<?php
    include "resources/components/header.php";
?> 
<body class = "addBensExposicions">  
    <div>
        <h2>Bens per afegir a la exposició</h2>
    </div>
    <div>
        <div>
            <div>
                <input type="text" placeholder="Cercar" id="search">
            </div>
            
            <form method="POST" action="/exposicions/<?php echo explode("/", $_SERVER['REQUEST_URI'])[2] ?>/bens/create"id="addObjectsForm" onsubmit="return validateForm()">
                <div>
                    <table>
                        <?php
                            $columns = ["Nº","Imatge","Objecte","Títol","Autor","Datació","Ubicació","Afegir"];
                            echo"<tr>";

                            foreach ($columns as $column)
                                echo "<th>{$column}</th>";

                            echo"</tr>";
                        ?>    
                        <tbody class="tbody">
                    
                        </tbody>                            
                        
                    </table>
                </div>
                <div>
                    <button type="submit">Afegir</button>
                </div>
                <div id="errorMessage" style="color: red; display: none; margin: 10px 0;">
                    Seleccioneu almenys un objecte abans de continuar.
                </div>
            </form>
        </div>
    </div>
    
    
    <!--Scripts-->
    <script src="/resources/js/imagePreview.js"></script>
    <script type="module" src="/resources/js/tableSearch/search.js"></script>
    <!--<script src="/resources/js/delete.js"></script>-->
    <script src="/resources/js/validateForm.js"></script>
    <?php
        include "resources/components/footer.php";
    ?>
</body>