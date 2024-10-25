<?php

require_once __DIR__."/../Database.php";

class Datacion extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->connection();
    }

    function getAllDatacions()
    {
        $sql = $this->db->prepare('SELECT * FROM Datacion');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getDatacion($id)
    {
        $sql = $this->db->prepare('SELECT * FROM Datacion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addDatacion($params)
    {
        $sql = $this->db->prepare('INSERT INTO Datacion (descripcion, any_inicial, any_final) VALUES (:descripcion, :inicial, :final)');
        
        $sql->bindParam(':descripcion', $params['descripcion']);
        $sql->bindParam(':inicial', $params['inicial']);
        $sql->bindParam(':final', $params['final']);
        
        $sql->execute();
    }

    function updateDatacion($params)
    {
        $sql = $this->db->prepare('UPDATE Datacion SET descripcion = :descripcion, any_inicial = :inicial, any_final = :final WHERE id = :id');
        
        $sql->bindParam(':descripcion', $params['descripcion']);
        $sql->bindParam(':inicial', $params['inicial']);
        $sql->bindParam(':final', $params['final']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyDatacion($id)
    {
        $sql = $this->db->prepare('DELETE FROM Datacion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
