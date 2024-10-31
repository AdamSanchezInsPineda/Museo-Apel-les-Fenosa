<?php 
    include "resources/components/header.php";
?>
<body class = "verFicha">
    <!--Contenido variable de la pagina-->
    <div>
        <h1>Fitxa bàsica de XXXXXXX</h1>
    </div>
    <div>
        <button><a href="#"> Cambiar a fitxa completa</a></button>
    </div>
        <table>
            <tr>
                <td colspan = "2">
                    <h2>Informació Bàsica</h2>
                </td>     
            </tr>
            <tr>
                <td>
                    <p>Nº de Registre: <?php echo $objetos[0]['o.RegistroNº']?></p> 
                </td>
                <td rowspan="3">
                    <input type="file" name="imagen" src="resources/images/lupa.png" alt="Submit" height="100px">
                    <!--
                        if (is_uploaded_file ($_FILES['imagen']['tmp_name']))
                        {
                        $nombreDirectorio = "img/";
                        $idUnico = time();
                        $nombreFichero = $idUnico . "-" .
                        $_FILES['imagen']['name'];
                        move_uploaded_file ($_FILES['imagen']['tmp_name'],
                        $nombreDirectorio . $nombreFichero);
                        }
                        else
                        print ("No se ha podido subir el fichero\n");
                    ?>-->
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nom: <?php echo $objetos[0]['o.Nombre']?></p>
                </td>
            </tr>
            <tr>
                <td>
                   <p>Autor: <?php echo $objetos[0]['AutorNombre']?></p> 
                </td>
                <td>
                    <p>Títol: <?php echo $objetos[0]['o.Titulo']?></p>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Propietats</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Datació: <?php echo $objetos[0]['DatacionDescripcion']?></p>
                </td>
                <td>
                    <p>Altura: <?php echo $objetos[0]['o.Altura']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Amplada: <?php echo $objetos[0]['o.Anchura']?></p>
                </td>
                <td>
                    <p>Profunditat: <?php echo $objetos[0]['o.Profundidad']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Material: <?php echo $objetos[0]['MaterialNombre']?></p>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Ingrés</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Forma d'Ingrés: <?php echo $objetos[0]['FormaIngresoValor']?></p>
                </td>
                <td>
                    <p>Font d'Ingrés: <?php echo $objetos[0]['o.FuenteIngreso']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Data d'Ingrés: <?php echo $objetos[0]['o.FechaIngreso']?></p>
                </td>
                <td>
                    <p>Estat de conservació: <?php echo $objetos[0]['EstadoConservacionNombre']?></p>                 
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Altres Dades</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Valoració Económica: <?php echo $objetos[0]['o.ValoracionEconomica']?></p>
                </td>
                <td>
                    <p>Lloc de Procedencia: <?php echo $objetos[0]['o.LugarProcedencia']?></p>
                </td>               
            </tr>
            <tr>
                <td>
                    <p>Classificació Genérica: <?php echo $objetos[0]['ClasificacionGenerica']?></p>
                </td>
                <td>
                    <p>Data de Registre: <?php echo $objetos[0]['o.FechaRegistro']?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Usuari que crea l'objecte: <?php echo $objetos[0]['UsuarioNombre']?></p> 
                </td>
            </tr>
        </table>
    <?php
    include "resources/components/footer.php";
    ?>
</body>