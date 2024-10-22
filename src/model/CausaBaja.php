<?php

require_once "../src/model/Database.php";

class CausaBaja extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->connection();
    }

    function getAllCausaBajas()
    {
        $sql = $this->db->prepare('SELECT * FROM CausaBaja');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getCausaBaja($id)
    {
        $sql = $this->db->prepare('SELECT * FROM CausaBaja WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addCausaBaja($params)
    {
        $sql = $this->db->prepare('INSERT INTO CausaBaja (valor) VALUES (:valor)');
        
        $sql->bindParam(':valor', $params['valor']);
        
        $sql->execute();
    }

    function updateCausaBaja($params)
    {
        $sql = $this->db->prepare('UPDATE CausaBaja SET valor = :valor WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyCausaBaja($id)
    {
        $sql = $this->db->prepare('DELETE FROM CausaBaja WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
