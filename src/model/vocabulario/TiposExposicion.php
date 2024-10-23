<?php

require_once "../src/model/Database.php";

class TiposExposicion extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->connection();
    }

    function getAllTiposExposicions()
    {
        $sql = $this->db->prepare('SELECT * FROM TiposExposicion');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getTiposExposicion($id)
    {
        $sql = $this->db->prepare('SELECT * FROM TiposExposicion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addTiposExposicion($params)
    {
        $sql = $this->db->prepare('INSERT INTO TiposExposicion (valor) VALUES (:valor)');
        
        $sql->bindParam(':valor', $params['valor']);
        
        $sql->execute();
    }

    function updateTiposExposicion($params)
    {
        $sql = $this->db->prepare('UPDATE TiposExposicion SET valor = :valor WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyTiposExposicion($id)
    {
        $sql = $this->db->prepare('DELETE FROM TiposExposicion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
