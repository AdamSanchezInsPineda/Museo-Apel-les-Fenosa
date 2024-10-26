<?php

class FormaIngreso extends Database
{
    function getAllFormaIngresos()
    {
        $sql = $this->db->prepare('SELECT * FROM FormaIngreso');
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getFormaIngreso($id)
    {
        $sql = $this->db->prepare('SELECT * FROM FormaIngreso WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function addFormaIngreso($params)
    {
        $sql = $this->db->prepare('INSERT INTO FormaIngreso (valor) VALUES (:valor)');
        
        $sql->bindParam(':valor', $params['valor']);
        
        $sql->execute();
    }

    function updateFormaIngreso($params)
    {
        $sql = $this->db->prepare('UPDATE FormaIngreso SET valor = :valor WHERE id = :id');
        
        $sql->bindParam(':valor', $params['valor']);
        $sql->bindParam(':id', $params['id'], PDO::PARAM_INT);
        
        $sql->execute();
    }

    function destroyFormaIngreso($id)
    {
        $sql = $this->db->prepare('DELETE FROM FormaIngreso WHERE id = :id');
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();
    }
}
