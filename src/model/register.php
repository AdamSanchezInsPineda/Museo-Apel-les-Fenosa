<?php

    function obtenerRegistros() {
        require'../src/model/main.php';

        $connect = bd();
        // Use named placeholders for safety
        $sql = $connect->prepare('SELECT o.RegistroNº, o.Imatges, o.Nombre, o.Titulo, a.Nombre AS autor, o.Datacion, u.Nombre AS ubicacion FROM (Objetos o INNER JOIN Autors a ON o.AutorID = a.AutorID) INNER JOIN Ubicaciones u ON o.UbicacionActualID = u.UbicacionID');

        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }