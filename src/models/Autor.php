<?php

    require_once "../src/model/Database.php";
    
    class Objeto extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
        function getAllAutores() {
            
            $sql = $this -> db->prepare('SELECT Nombre FROM ObjetosPrueba');
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }