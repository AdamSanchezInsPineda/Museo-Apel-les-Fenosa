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
            
            $sql = $this -> db->prepare('SELECT Registro, Imagen, Nombre, Titulo, Autor, Datacio, Ubicacio FROM ObjetosPrueba');
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
        function afegirBensObj() {
            
            $sql = $this -> db->prepare('SELECT ObjetoID, RegistroNº, Imagen, Nombre, Titulo, AutorID, DatacionID, UbicacionActualID FROM Objetos');
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }