<?php

class Baja extends Database
{
    function getAllBajas()
    {
        $sql = $this->db->prepare('SELECT * FROM Baja');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getBaja($id)
    {
        $sql = $this->db->prepare('SELECT * FROM Baja WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addBaja($params)
    {
        $sql = $this->db->prepare('INSERT INTO Baja (valor) VALUES (:valor)');
        
        $sql->bindParam(':valor', $params['valor']);
        
        $sql->execute();
    }

    function updateBaja($params)
    {
        $sql = $this->db->prepare('UPDATE Baja SET valor = :valor WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyBaja($id)
    {
        $sql = $this->db->prepare('DELETE FROM Baja WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
