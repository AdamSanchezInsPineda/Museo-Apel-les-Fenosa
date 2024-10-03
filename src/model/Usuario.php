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
            
            // Use named placeholders for safety
            $sql = $this -> db->prepare('SELECT * FROM Usuarios WHERE Nombre = :nombre AND Contraseña = :password');

            // Bind the parameters
            $sql->bindParam(':nombre', $nom);
            $sql->bindParam(':password', $usuario);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result != null;
        }
    }
