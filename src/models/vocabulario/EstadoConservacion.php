<?php

class EstadoConservacion extends Database
{
    function getAllEstadoConservacions()
    {
        $sql = $this->db->prepare('SELECT * FROM EstadoConservacion');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getEstadoConservacion($id)
    {
        $sql = $this->db->prepare('SELECT * FROM EstadoConservacion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addEstadoConservacion($params)
    {
        $sql = $this->db->prepare('INSERT INTO EstadoConservacion (valor, tipo) VALUES (:valor, :tipo)');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':tipo', $params['tipo']);
        
        $sql->execute();
    }

    function updateEstadoConservacion($params)
    {
        $sql = $this->db->prepare('UPDATE EstadoConservacion SET valor = :valor, tipo = :tipo WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':tipo', $params['tipo']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyEstadoConservacion($id)
    {
        $sql = $this->db->prepare('DELETE FROM EstadoConservacion WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
