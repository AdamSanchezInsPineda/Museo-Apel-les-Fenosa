<?php

    require_once "../src/model/Database.php";

    class Exposicio extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
        


        function mostrarExposicions() {
            $sql = $this -> db->prepare('SELECT Nombre, FechaInicio, FechaFin, TipoExposicionID, LugarExposicion FROM Exposiciones');

            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
  
        }  

        function crearExposicion($nombre, $fechaInicio, $fechaFin,  $tipoExposicionID, $lugarExposicion) {
            
            $sql = $this -> db->prepare('INSERT INTO `Usuarios` (`Nombre`, `FechaInicio`, `FechaFin`, `TipoExposicionID`,`LugarExposicion`) VALUES (?, ?, ?, ?, ?)');

            $sql->execute([$nombre, $fechaInicio,  $fechaFin, $tipoExposicionID, $lugarExposicion]);
        }
        
        function eliminarExposicion($id) {
            $sql = $this -> db->prepare('DELETE FROM Exposicions WHERE ExposicionID = :id');
            
            $sql->bindParam(':id', $id);

            $sql->execute();
        }
    }
//
//
//
//
//
    //     function crearUsuario($nombre, $password, $rol){
            
    //         $sql = $this -> db->prepare('INSERT INTO `Usuarios` (`Nombre`, `Contraseña`, `Rol`) VALUES (?, ?, ?)');

    //         $sql->execute([$nombre, $password, $rol]);
    //     }
        
    //     function updateViewUsuario($id) {
    //         $sql = $this -> db->prepare('SELECT UsuarioID, Nombre, Rol FROM Usuarios WHERE UsuarioID = :id');

    //         $sql->bindParam(':id', $id);
    //         $sql->execute();
    //         $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    //         return $result;
    //     }

    //     function updateUsuario($nombre, $contraseña, $rol, $id) {
            
    //         $sql = $this -> db->prepare('UPDATE Usuarios SET Nombre = ?, Contraseña = ?, Rol = ? WHERE UsuarioID = ?');

    //         $sql->execute([$nombre, $contraseña, $rol, $id]);
    //     }

    //     function eliminarUsuario($id) {
    //         $sql = $this -> db->prepare('DELETE FROM Usuarios WHERE UsuarioID = :id');
            
    //         $sql->bindParam(':id', $id);

    //         $sql->execute();
    //     }
    // }
