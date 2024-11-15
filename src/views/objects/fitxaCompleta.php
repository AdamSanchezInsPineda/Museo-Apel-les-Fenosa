<?php 
    include "resources/components/header.php";
?>

<body class = "verFichaCompleta">
    <main>
        <!--Contenido variable de la pagina-->
        <h1>Fitxa completa de <?php echo $cont[1][0]['Nombre']?></h1>
        <button>Cambiar a fitxa bàsica</button>
        <button><a href="/registers/<?php echo $cont[1][0]['RegistroNº']?>/informepdf" target="_blank">PDF fitxa completa</a></button>
        <button><a href="/registers/<?php echo $cont[1][0]['RegistroNº']?>/informeBasicpdf" target="_blank">PDF fitxa bàsica</a></button>
                        
        <div>
            <div>
                <p>Nº de Registre: <?php echo $cont[1][0]['RegistroNº']?></p> 

                <img src="/resources/images/obras/<?php echo $cont[1][0]['Imagen']?>.jpg" alt="imatge obra">
            </div>
             
            <div>
                <p>Nom: <?php echo $cont[1][0]['Nombre']?></p>
                <p>Museu: <?php echo $cont[1][0]['MuseoNombre']?></p>
                <p>Autor: <?php echo $cont[1][0]['AutorNombre']?></p> 
                <p>Títol: <?php echo $cont[1][0]['Titulo']?></p>
            </div>
        </div>
        
        <div>
                    
            <div class="toggle-hide"><h2>Ubicacions</h2><span></span></div>

            <section class="hide">
                <p>Data Inici Ubicació: <?php echo $cont[1][0]['FechaInicioUbicacion']?></p>
                <p>Data Final Ubicació: <?php echo $cont[1][0]['FechaFinUbicacion']?></p>
                <p>Comentari Ubicació: <?php echo $cont[1][0]['ComentarioUbicacion']?></p>

            </section>

            <div class="toggle-hide"><h2>Propietats</h2><span></span></div>

            <section class="hide">
                <p>Altura: <?php echo $cont[1][0]['Altura']?></p>
                <p>Datació: <?php echo $cont[1][0]['DatacionDescripcion']?></p>
                <p>Amplada: <?php echo $cont[1][0]['Anchura']?></p>
                <p>Any Inicial: <?php echo $cont[1][0]['any_inicial']?></p>
                <p>Profunditat: <?php echo $cont[1][0]['Profundidad']?></p>
                <p>Any Final: <?php echo $cont[1][0]['any_final']?></p>
                <p>Material: <?php echo $cont[1][0]['MaterialNombre']?></p>
                <p>Tècnica: <?php echo $cont[1][0]['TecnicaNombre']?></p>
            </section>

            <div class="toggle-hide"><h2>Baixa</h2><span></span></div>

            <section class="hide">
                <p>Baixa: <?php echo $cont[1][0]['BajaValor']?></p>
                <p>Causa Baixa: <?php echo $cont[1][0]['CausaBajaValor']?></p>
                <p>Data Baixa: <?php echo $cont[1][0]['FechaBaja']?></p>
                <p>Persona Autorizada Baja: <?php echo $cont[1][0]['PersonaAutorizadaBaja']?></p>
            </section>

            <div class="toggle-hide"><h2>Restauració</h2><span></span></div>

            <section class="hide">
                <p>Data Inici Restauració: <?php echo $cont[1][0]['FechaInicioRestauracion']?></p>
                <p>Data Final Restauració: <?php echo $cont[1][0]['FechaFinRestauracion']?></p>
                <p>Codi Restauració: <?php echo $cont[1][0]['CodigoRestauracion']?></p>
                <p>Nom Restaurador: <?php echo $cont[1][0]['NombreRestaurador']?></p>
                <p>Comentari Restauració: <?php echo $cont[1][0]['ComentarioRestauracion']?></p>
            </section>

            <div class="toggle-hide"><h2>Ingrés</h2><span></span></div>

            <section class="hide">
                <p>Forma d'Ingrés: <?php echo $cont[1][0]['FormaIngresoValor']?></p>
                <p>Font d'Ingrés: <?php echo $cont[1][0]['FuenteIngreso']?></p>
                <p>Data d'Ingrés: <?php echo $cont[1][0]['FechaIngreso']?></p>
                <p>Estat de conservació: <?php echo $cont[1][0]['EstadoConservacionNombre']?></p>
            </section>
                        
            <div class="toggle-hide"><h2>Exposicions</h2><span></span></div>

            <section class="hide">
                <p>Nom: <?php echo $cont[1][0]['ExposicionNombre']?></p>
                <p>Lloc: <?php echo $cont[1][0]['LugarExposicion']?></p>
                <p>Data Inicial: <?php echo $cont[1][0]['FechaInicioExposicion']?></p>
                <p>Data Final: <?php echo $cont[1][0]['FechaFinExposicion']?></p>
                <p>Tipus: <?php echo $cont[1][0]['TipoExposicionNombre']?></p>
            </section> 
                        
            <div class="toggle-hide"><h2>Altres Dades</h2><span></span></div>

            <section class="hide">
                <p>Col·lecció de Procedencia: <?php echo $cont[1][0]['ColeccionProcedencia']?></p>
                <p>Lloc d'Execució: <?php echo $cont[1][0]['LugarEjecucion']?></p>
                <p>Nº de Tiratge: <?php echo $cont[1][0]['NumeroTiraje']?></p>
                <p>Valoració Económica: <?php echo $cont[1][0]['ValoracionEconomica']?></p>
                <p>Nº d'Exemplars: <?php echo $cont[1][0]['NumeroEjemplares']?></p>
                <p>Lloc de Procedencia: <?php echo $cont[1][0]['LugarProcedencia']?></p>
                <p>Altres Nº Identificació: <?php echo $cont[1][0]['OtrosNrosIdentificacion']?></p>
                <p>Classificació Genérica: <?php echo $cont[1][0]['ClasificacionGenerica']?></p>
                <p>Usuari que crea l'objecte: <?php echo $cont[1][0]['UsuarioNombre']?></p>
                <p>Data de Registre: <?php echo $cont[1][0]['FechaRegistro']?></p>
                <p>Bibliografia: <?php echo $cont[1][0]['Bibliografia']?></p> 
                <p>Descripció: <?php echo $cont[1][0]['Descripcion']?></p>
                <p>Història de l'objecte: <?php echo $cont[1][0]['HistoriaObjeto']?></p>
            </section>

            <button><a href="/registers/<?php echo $cont[1][0]['RegistroNº']?>/prestecdoc">Formulari de préstec</a></button>

        </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function() {
            $(".toggle-hide").on("click", function() {
                $(this).find("span").toggleClass("drop");
                $(this).next("section").toggleClass("hide");
            });
        });

    </script>
    <?php
    include "resources/components/footer.php";
    ?>
</body>