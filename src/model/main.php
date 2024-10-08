<?php

    function bd(){
        $font = 'mysql:host=localhost;dbname=museu';
        $username = 'admindb';
        $password = 'museo';

        try {
            $connect = new PDO($font, $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $connect;
    }
    function comprovarUsuario($nom,$usuario) {

        $connect = bd();
        // Use named placeholders for safety
        $sql = $connect->prepare('SELECT * FROM Usuarios WHERE Nombre = :nombre AND Contraseña = :password');

        // Bind the parameters
        $sql->bindParam(':nombre', $nom);
        $sql->bindParam(':password', $usuario);

        $sql->execute();
        $result = $sql->fetchAll();

        return $result != null;

    }