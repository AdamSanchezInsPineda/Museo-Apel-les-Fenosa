<?php

    require_once "../src/model/Database.php";

    class Usuario extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
        
        function comprovarUsuario($nom,$usuario) {
            
            $sql = $this -> db->prepare('SELECT * FROM Usuarios WHERE Nombre = :nombre AND Contraseña = :password');

            $sql->bindParam(':nombre', $nom);
            $sql->bindParam(':password', $usuario);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result != null;
        }

        function rolUsuario($nom,$usuario){
            
            $sql = $this -> db->prepare('SELECT Rol FROM Usuarios WHERE Nombre = :nombre AND Contraseña = :password');

            $sql->bindParam(':nombre', $nom);
            $sql->bindParam(':password', $usuario);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result[0]['Rol'];
        }

        function mostrarUsuarios() {
            $sql = $this -> db->prepare('SELECT UsuarioID, Nombre, Rol FROM Usuarios');

            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
