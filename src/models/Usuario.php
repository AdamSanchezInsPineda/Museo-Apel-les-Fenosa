<?php

    class Usuario extends Database
    {
        function comprovarUsuario($nom,$usuario) {
            
            $sql = $this -> db->prepare('SELECT * FROM Usuarios WHERE Nombre = :nombre AND Contraseña = :password');

            $sql->bindParam(':nombre', $nom);
            $sql->bindParam(':password', $usuario);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result != null;
        }

        function rolUsuario($nombre,$password){
            
            $sql = $this -> db->prepare('SELECT Rol FROM Usuarios WHERE Nombre = :nombre AND Contraseña = :password');

            $sql->bindParam(':nombre', $nombre);
            $sql->bindParam(':password', $password);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result[0]['Rol'];
        }

        function getUsuarios($found) {
            try {
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
            }
        }

        function crearUsuario($nombre, $password, $rol){
            
            $sql = $this -> db->prepare('INSERT INTO `Usuarios` (`Nombre`, `Contraseña`, `Rol`) VALUES (?, ?, ?)');

            $sql->execute([$nombre, $password, $rol]);
        }
        
        function updateViewUsuario($id) {
            $sql = $this -> db->prepare('SELECT UsuarioID, Nombre, Rol FROM Usuarios WHERE UsuarioID = :id');

            $sql->bindParam(':id', $id);
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        function updateUsuario($nombre, $contraseña, $rol, $id) {
            
            $sql = $this -> db->prepare('UPDATE Usuarios SET Nombre = ?, Contraseña = ?, Rol = ? WHERE UsuarioID = ?');

            $sql->execute([$nombre, $contraseña, $rol, $id]);
        }

        function eliminarUsuario($id) {
            $sql = $this -> db->prepare('DELETE FROM Usuarios WHERE UsuarioID = :id');
            
            $sql->bindParam(':id', $id);

            $sql->execute();
        }
    }
