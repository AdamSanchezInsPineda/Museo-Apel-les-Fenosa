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
            
            $sql = $this -> db->prepare('SELECT id, nombre, descripcion FROM Vocabularios WHERE activo = 1');
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
        function getVocabulario($id) {
            
            $sql = $this -> db->prepare('SELECT id, nombre, descripcion FROM Vocabularios WHERE activo = 1 AND id = :id');

            $sql->bindParam(':id', $id);
            
            $sql->execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            
            $row[0]["valors"] = $this->getAllVocabularioValores($row["id"]);

            return $result;
        }
        function updateVocabulario($params) {
            $sql = $this -> db->prepare('UPDATE Vocabularios SET codigo = ?, nombre = ? WHERE id = ?');

            $sql->bindParam($params);
            
            $sql->execute();
        }
        function destroyVocabulario($id){
            $sql = $this -> db->prepare('UPDATE Vocabularios SET activo = 0 WHERE id = :id');

            $sql->bindParam(':id', $id);
            
            $sql->execute();
        }
    }