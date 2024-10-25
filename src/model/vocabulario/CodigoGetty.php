<?php

require_once __DIR__."/../Database.php";

class CodigoGetty extends Database
{
    function getAllCodigoGettys()
    {
        $sql = $this->db->prepare('SELECT * FROM CodigoGetty');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getCodigoGetty($id)
    {
        $sql = $this->db->prepare('SELECT * FROM CodigoGetty WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addCodigoGetty($params)
    {
        $sql = $this->db->prepare('INSERT INTO CodigoGetty (valor, tipo) VALUES (:valor, :tipo)');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':tipo', $params['tipo']);
        
        $sql->execute();
    }

    function updateCodigoGetty($params)
    {
        $sql = $this->db->prepare('UPDATE CodigoGetty SET valor = :valor, tipo = :tipo WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':tipo', $params['tipo']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyCodigoGetty($id)
    {
        $sql = $this->db->prepare('DELETE FROM CodigoGetty WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
