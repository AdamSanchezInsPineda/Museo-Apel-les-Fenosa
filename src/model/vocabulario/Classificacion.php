<?php

require_once __DIR__."/../Database.php";

class Classificacion extends Database
{
    function getAllClassificacions()
    {
        $sql = $this->db->prepare('SELECT * FROM Classificacion');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getClassificacion($id)
    {
        $sql = $this->db->prepare('SELECT * FROM Classificacion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addClassificacion($params)
    {
        $sql = $this->db->prepare('INSERT INTO Classificacion (valor) VALUES (:valor)');
        
        $sql->bindParam(':valor', $params['valor']);
        
        $sql->execute();
    }

    function updateClassificacion($params)
    {
        $sql = $this->db->prepare('UPDATE Classificacion SET valor = :valor WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyClassificacion($id)
    {
        $sql = $this->db->prepare('DELETE FROM Classificacion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
