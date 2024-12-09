<?php

class Tecnica extends Database
{
    function getAllTecnicas()
    {
        $sql = $this->db->prepare('SELECT * FROM Tecnica');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getTecnica($id)
    {
        $sql = $this->db->prepare('SELECT * FROM Tecnica WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addTecnica($params)
    {
        $sql = $this->db->prepare('INSERT INTO Tecnica (valor) VALUES (:valor)');
        
        $sql->bindParam(':valor', $params['valor']);
        
        $sql->execute();
    }

    function updateTecnica($params)
    {
        $sql = $this->db->prepare('UPDATE Tecnica SET valor = :valor WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyTecnica($id)
    {
        $sql = $this->db->prepare('DELETE FROM Tecnica WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
