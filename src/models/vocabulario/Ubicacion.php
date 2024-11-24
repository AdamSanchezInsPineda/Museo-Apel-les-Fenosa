<?php

class Ubicacion extends Database
{
    function getAllUbicaciones()
    {
        $sql = $this->db->prepare('SELECT * FROM Ubicaciones');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getUbicacion($id)
    {
        $sql = $this->db->prepare('SELECT * FROM Ubicaciones WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addUbicacion($params)
    {
        $sql = $this->db->prepare('INSERT INTO Ubicaciones (Nombre, UbicacionPadre) VALUES (:nombre, :ubicacion)');
        
        $sql->bindValue(':nombre', $params['Nombre']);

        $sql->bindValue(':ubicacion', $params['Ubicacion'] ?? null);
        
        $sql->execute();
        return $this->db->lastInsertId();
    }

    function updateUbicacion($params)
    {
        $sql = $this->db->prepare('UPDATE Ubicaciones SET Nombre = :nombre WHERE id = :id');
        
        $sql->bindParam(':nombre', $params['Nombre']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyUbicacion($id)
    {
        $sql = $this->db->prepare('DELETE FROM Ubicaciones WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}