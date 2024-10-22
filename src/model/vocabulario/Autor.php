<?php

require_once __DIR__."../src/model/Database.php";

class Autor extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->connection();
    }

    function getAllAutors()
    {
        $sql = $this->db->prepare('SELECT * FROM Autor');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getAutor($id)
    {
        $sql = $this->db->prepare('SELECT * FROM Autor WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addAutor($params)
    {
        $sql = $this->db->prepare('INSERT INTO Autor (Nombre) VALUES (:nombre)');
        
        $sql->bindParam(':nombre', $params['Nombre']);
        
        $sql->execute();
    }

    function updateAutor($params)
    {
        $sql = $this->db->prepare('UPDATE Autor SET Nombre = :nombre WHERE id = :id');
        
        $sql->bindParam(':nombre', $params['Nombre']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyAutor($id)
    {
        $sql = $this->db->prepare('DELETE FROM Autor WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
