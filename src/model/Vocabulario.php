<?php

    require_once "../src/model/Database.php";
    
    class Vocabulario extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
        function getAllVocabularioValores($id) {
            
            $sql = $this -> db->prepare('SELECT * FROM Vocabulario_valores WHERE vocabulario_id = :id');

            $sql->bindParam(':id', $id);
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
        function getAllVocabularios() {
            
            $sql = $this -> db->prepare('SELECT id, nombre, descripcion FROM Vocabularios WHERE padre_id IS NULL AND activo = 1');
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as &$row) {
                $row["valors"] = $this->getAllVocabularioValores($row["id"]);
            }

            return $result;
        }
    }