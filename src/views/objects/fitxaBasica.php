<?php 
    include "resources/components/header.php";
?>

<body class = "verFichaCompleta">
    <main>
        <!--Contenido variable de la pagina-->
        <h1>Fitxa completa de <?php echo $cont[1][0]['Nombre']?></h1>                  
        <div>
            <div>
                <p>Nº de Registre: <?php echo $cont[1][0]['RegistroNº']?></p> 

                <img src="/resources/images/obras/<?php echo $cont[1][0]['Imagen']?>.jpg" alt="imatge obra">
            </div>
             
            <div>
                <p>Nom: <?php echo $cont[1][0]['Nombre']?></p>
                <p>Autor: <?php echo $cont[1][0]['AutorNombre']?></p> 
                <p>Títol: <?php echo $cont[1][0]['Titulo']?></p>
            </div>
        </div>
        
        <div>
                    

            <div class="toggle-hide"><h2>Propietats</h2></div>

            <section>
                <p>Altura: <?php echo $cont[1][0]['Altura']?></p>
                <p>Datació: <?php echo $cont[1][0]['DatacionDescripcion']?></p>
                <p>Amplada: <?php echo $cont[1][0]['Anchura']?></p>
                <p>Any Inicial: <?php echo $cont[1][0]['any_inicial']?></p>
                <p>Profunditat: <?php echo $cont[1][0]['Profundidad']?></p>
                <p>Any Final: <?php echo $cont[1][0]['any_final']?></p>
                <p>Material: <?php echo $cont[1][0]['MaterialNombre']?></p>
            </section>

            <div class="toggle-hide"><h2>Ingrés</h2></div>

            <section>
                <p>Forma d'Ingrés: <?php echo $cont[1][0]['FormaIngresoValor']?></p>
                <p>Font d'Ingrés: <?php echo $cont[1][0]['FuenteIngreso']?></p>
                <p>Data d'Ingrés: <?php echo $cont[1][0]['FechaIngreso']?></p>
                <p>Estat de conservació: <?php echo $cont[1][0]['EstadoConservacionNombre']?></p>
            </section>

            <div class="toggle-hide"><h2>Altres Dades</h2></div>

            <section>
                <p>Valoració Económica: <?php echo $cont[1][0]['ValoracionEconomica']?></p>
                <p>Lloc de Procedencia: <?php echo $cont[1][0]['LugarProcedencia']?></p>
                <p>Classificació Genérica: <?php echo $cont[1][0]['ClasificacionGenerica']?></p>
                <p>Usuari que crea l'objecte: <?php echo $cont[1][0]['UsuarioNombre']?></p>
                <p>Data de Registre: <?php echo $cont[1][0]['FechaRegistro']?></p>
            </section>
            <div>
            <button><a href="/registers/<?php echo $cont[1][0]['RegistroNº']?>">Cambiar a fitxa completa</a></button>
            <button><a href="/registers/<?php echo $cont[1][0]['RegistroNº']?>/informeBasicpdf" target="_blank">PDF fitxa bàsica</a></button>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggles = document.querySelectorAll(".toggle-hide");

            toggles.forEach(toggle => {
                toggle.addEventListener("click", function () {
                    toggle.classList.toggle("rotate");
                    const nextSection = this.nextElementSibling;
                    if (nextSection && nextSection.tagName === "SECTION") {
                        nextSection.classList.toggle("show");
                    }
                });
            });
        });
    </script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>