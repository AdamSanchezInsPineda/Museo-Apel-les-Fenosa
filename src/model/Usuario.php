<?php
require_once("Database.php");
class Usuario extends Database
{
    function comprovarUsuario($nom,$usuario) {
        // Use named placeholders for safety
        $sql = $db->prepare('SELECT * FROM Usuarios WHERE Nombre = :nombre AND Contraseña = :password');

        // Bind the parameters
        $sql->bindParam(':nombre', $nom);
        $sql->bindParam(':password', $usuario);

        $sql->execute();
        $result = $sql->fetchAll();

        return $result != null;
    }
}
