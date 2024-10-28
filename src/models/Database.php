<?php

class Database
{
    protected $db;
    function connection(){
        $config = parse_ini_file(__DIR__ . '/config/config.ini');
        $font = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db'];
        $username = $config['username'];
        $password = $config['password'];

        try {
            $this->db = new PDO($font, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $this->db;
    }

    public function __construct()
    {
        $this->db = $this->connection();
    }
}