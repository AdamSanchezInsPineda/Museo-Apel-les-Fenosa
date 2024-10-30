<?php

    class Exposicio extends Database
    {
        function mostrarExposicions() {
            $sql = $this -> db->prepare('SELECT ExposicionID, Nombre, DATE_FORMAT(FechaInicio, "%Y-%m-%d %H:%i") AS FechaInicio, DATE_FORMAT(FechaFin, "%Y-%m-%d %H:%i") AS FechaFin, TipoExposicionID, LugarExposicion FROM Exposiciones');

            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
  
        }  

        function crearExposicion($nombre, $fechaInicio, $fechaFin,  $tipoExposicionID, $lugarExposicion) {
            
            $sql = $this -> db->prepare('INSERT INTO `Exposiciones` (`Nombre`, `FechaInicio`, `FechaFin`, `TipoExposicionID`,`LugarExposicion`) VALUES (?, ?, ?, ?, ?)');

            $sql->execute([$nombre, $fechaInicio,  $fechaFin, $tipoExposicionID, $lugarExposicion]);
        }

        function updateViewExposicion($id) {
            $sql = $this -> db->prepare('SELECT ExposicionID, Nombre, FechaInicio, FechaFin, TipoExposicionID, LugarExposicion FROM Exposiciones WHERE ExposicionID = :id');

            $sql->bindParam(':id', $id);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        function updateExposicion($nombre, $fechaInicio, $fechaFin,  $tipoExposicionID, $lugarExposicion, $id) {
            
            $sql = $this -> db->prepare('UPDATE Exposiciones SET Nombre = ?, FechaInicio = ?, FechaFin = ?, TipoExposicionID = ?,  LugarExposicion = ? WHERE ExposicionID = ?');

            $sql->execute([$nombre, $fechaInicio, $fechaFin,  $tipoExposicionID, $lugarExposicion, $id]);
        }
        
        function eliminarExposicion($id) {
            $sql = $this -> db->prepare('DELETE FROM Exposiciones WHERE ExposicionID = :id');
            
            $sql->bindParam(':id', $id);

            $sql->execute();
        }

        function verBens($id){
            $sql = $this -> db->prepare('
                SELECT oe.ObjetoExposicionID, oe.ExposicionID, o.RegistroNº, o.Nombre 
                FROM ObjetoExposicion oe 
                JOIN Objetos o ON oe.ObjetoID = o.ObjetoID 
                WHERE oe.ExposicionID = :id');
            $sql->bindParam(':id', $id);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
        }

        function eliminarObjetoExposicion($id) {
            $sql = $this -> db->prepare('DELETE FROM ObjetoExposicion WHERE ObjetoExposicionID = :id');
            
            $sql->bindParam(':id', $id);

            $sql->execute();
        }

        function insertObjetoExposicion($exposicionID, $objetoID) {
            $sql = $this->db->prepare('INSERT INTO ObjetoExposicion (ExposicionID, ObjetoID) VALUES (?, ?)');
            $sql->execute([$exposicionID, $objetoID]);
        }
        
    }