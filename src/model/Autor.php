<?php

    require_once "../src/model/Database.php";
    
    class Autor extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
        function getAllAutores() {
            
            $sql = $this -> db->prepare('SELECT * FROM ObjetosPrueba');
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }