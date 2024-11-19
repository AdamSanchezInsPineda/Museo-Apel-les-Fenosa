<?php

    class Exposicio extends Database
    {
        /*try {
            $where= ($found == "") ? "" : " AND (Nombre LIKE '%' :found '%' OR Rol LIKE '%' :found '%')";
            $sql = $this->db->prepare("SELECT UsuarioID, Nombre, Rol FROM Usuarios WHERE UsuarioID != 1 $where");
    
            if ($found != "") {
                $sql->bindParam(':found', $found);
            }
    
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
        } catch (PDOException $e) {
            return "An error occurred: " . $e->getMessage();
        }*/

        function getExposiciones($found){
            try {
                $where= ($found == "") ? "" : " WHERE (e.Nombre LIKE '%' :found '%' OR e.FechaInicio LIKE '%' :found '%' OR e.FechaFin LIKE '%' :found '%' OR te.valor LIKE '%' :found '%' OR e.LugarExposicion LIKE '%' :found '%')";
                $sql = $this->db->prepare("SELECT e.ExposicionID, e.Nombre, e.FechaInicio, e.FechaFin, te.valor as TipoExposicion, e.LugarExposicion FROM Exposiciones e INNER JOIN TiposExposicion te ON e.TipoExposicionID = te.id $where ORDER BY e.Nombre ASC");
        
                if ($found != "") {
                    $sql->bindParam(':found', $found);
                }
                
                

                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $result;
                
            } catch (PDOException $e) {
                return "An error occurred: " . $e->getMessage();
            }
        }
        function mostrarExposicions() {
            $sql = $this -> db->prepare('SELECT e.ExposicionID, e.Nombre, e.FechaInicio, e.FechaFin, te.valor as TipoExposicion, e.LugarExposicion 
                                        FROM Exposiciones e
                                        INNER JOIN TiposExposicion te ON e.TipoExposicionID = te.id ORDER BY e.Nombre ASC');

            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
  
        }  

        function crearExposicion($nombre, $fechaInicio, $fechaFin,  $tipoExposicion, $lugarExposicion) {
            
            $sql = $this -> db->prepare('INSERT INTO Exposiciones (Nombre, FechaInicio, FechaFin, TipoExposicionID, LugarExposicion) 
                                VALUES (?, ?, ?, (SELECT id FROM TiposExposicion WHERE valor = ?), ?)');

            $sql->execute([$nombre, $fechaInicio,  $fechaFin, $tipoExposicion, $lugarExposicion]);
        }

        public function getTiposExposicion() {
            $sql = $this->db->query('SELECT id, valor FROM TiposExposicion');
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        function updateViewExposicion($id) {
            $sql = $this -> db->prepare('SELECT e.ExposicionID, e.Nombre, e.FechaInicio, e.FechaFin, te.valor as TipoExposicion, e.LugarExposicion 
                                FROM Exposiciones e
                                INNER JOIN TiposExposicion te ON e.TipoExposicionID = te.id WHERE ExposicionID = :id');

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