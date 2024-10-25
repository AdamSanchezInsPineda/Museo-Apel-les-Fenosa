<?php

require_once __DIR__."/../Database.php";

class Material extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->connection();
    }

    function getAllMaterials()
    {
        $sql = $this->db->prepare('SELECT * FROM Material');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getMaterial($id)
    {
        $sql = $this->db->prepare('SELECT * FROM Material WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addMaterial($params)
    {
        $sql = $this->db->prepare('INSERT INTO Material (valor) VALUES (:valor)');
        
        $sql->bindParam(':valor', $params['valor']);
        
        $sql->execute();
    }

    function updateMaterial($params)
    {
        $sql = $this->db->prepare('UPDATE Material SET valor = :valor WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyMaterial($id)
    {
        $sql = $this->db->prepare('DELETE FROM Material WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
