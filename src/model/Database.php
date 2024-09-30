<?php

class Database
{
    function connection(){
        $font = 'mysql:host=localhost;dbname=museu';
        $username = 'admindb';
        $password = 'museo';

        try {
            $this->db = new PDO($font, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $this->db;
    }
}
