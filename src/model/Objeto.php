<?php

    require_once "../src/model/Database.php";
    
    class Objeto extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
        function getAllObjetos() {
            
            $sql = $this -> db->prepare('SELECT o.RegistroNº, o.Imagen, o.Nombre, o.Titulo, a.Nombre AS autor, o.Datacion, u.Nombre AS ubicacion FROM (Objetos o INNER JOIN Autors a ON o.AutorID = a.AutorID) INNER JOIN Ubicaciones u ON o.UbicacionActualID = u.UbicacionID');
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }