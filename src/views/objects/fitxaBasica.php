<?php 
    include "resources/components/header.php";
?>
<body class = "verFicha">
    <!--Contenido variable de la pagina-->
    <div>
        <h1>Fitxa bàsica de XXXXXXX</h1>
    </div>
        <table>
            <tr>
                <td colspan = "2">
                    <h2>Informació Bàsica</h2>
                </td>     
            </tr>
            <tr>
                <td>
                    <label for="RegistroNº">Nº de Registre:</label>
                    <input type="text" id="RegistroNº" name="RegistroNº" value="<?php echo $objetos[0]['o.RegistroNº']?> "required>
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
                    <label for="Nom">Nom:</label>
                    <input type="text" id="Nom" name="Nom" value="<?php echo $objetos[0]['o.Nombre']?>"required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Autors">Autor:</label>
                    <select name="Autors" id="Autors" value="<?php echo $objetos[0]['AutorNombre']?> " required>
                        <!-- Select de Nombre de Autors -->
                    </select>
                    <!-- <input type="text" id="Autor" name="Autor" required> -->
                </td>
                <td>
                    <label for="Títol">Títol:</label>
                    <input type="text" id="Títol" name="Títol" value="<?php echo $objetos[0]['o.Titulo']?> " required>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Propietats</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="descripcion">Datació:</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $objetos[0]['DatacionDescripcion']?>"required>
                </td>
                <td>
                    <label for="Altura">Altura:</label>
                    <input type="text" id="Altura" name="Altura" value="<?php echo $objetos[0]['o.Altura']?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Anchura">Amplada:</label>
                    <input type="text" id="Anchura" name="Anchura" value="<?php echo $objetos[0]['o.Anchura']?>" required>
                </td>
                <td>
                    <label for="Profundidad">Profunditat:</label>
                    <input type="text" id="Profundidad" name="Profundidad" value="<?php echo $objetos[0]['o.Profundidad']?>"required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Material">Material:</label>
                    <select name="Material" id="Material" value="<?php echo $objetos[0]['MaterialNombre']?>">
                        <!-- Select de valor de Material -->
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Ingrés</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FormaIngreso">Forma d'Ingrés:</label>
                    <select name="FormaIngreso" id="FormaIngreso" value="<?php echo $objetos[0]['FormaIngresoValor']?>">
                        <!-- Select de valor de FormaIngreso -->
                    </select>                
                </td>
                <td>
                    <label for="FuenteIngreso">Font d'Ingrés:</label>
                    <input type="text" id="FuenteIngreso" name="FuenteIngreso" value="<?php echo $objetos[0]['o.FuenteIngreso']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaIngreso">Data d'Ingrés:</label>
                    <input type="text" id="FechaIngreso" name="FechaIngreso" value="<?php echo $objetos[0]['o.FechaIngreso']?>">
                </td>
                <td>
                    <label for="EstadoConservacion">Estat de conservació:</label>
                    <select name="EstadoConservacion" id="EstadoConservacion" value="<?php echo $objetos[0]['EstadoConservacionNombre']?>">
                        <!-- Select de valor de EstadoConservacion -->
                    </select>                  
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <h2>Altres Dades</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ValoracionEconomica">Valoració Económica:</label>
                    <input type="text" id="ValoracionEconomica" name="ValoracionEconomica" value="<?php echo $objetos[0]['o.ValoracionEconomica']?>">
                </td>
                <td>
                    <label for="LugarProcedencia">Lloc de Procedencia:</label>
                    <input type="text" id="LugarProcedencia" name="LugarProcedencia" value="<?php echo $objetos[0]['o.LugarProcedencia']?>">
                </td>               
            </tr>
            <tr>
                <td>
                    <label for="Classificacion">Classificació Genérica:</label>
                    <select name="Classificacion" id="Classificacion" value="<?php echo $objetos[0]['ClasificacionGenerica']?>">
                        <!-- Select de valor de Classificacion -->
                    </select>                  
                </td>
                <td>
                    <label for="FechaRegistro">Data de Registre:</label>
                    <input type="text" id="FechaRegistro" name="FechaRegistro" value="<?php echo $objetos[0]['o.FechaRegistro']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Usuario">Usuari que crea l'objecte:</label>
                    <p><?php echo $objetos[0]['UsuarioNombre']?></p> 
                </td>
            </tr>
        </table>
    <?php
    include "resources/components/footer.php";
    ?>
</body>