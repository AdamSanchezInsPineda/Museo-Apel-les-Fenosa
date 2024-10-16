<?php

    require_once "../src/model/Database.php";
    
    class Vocabulario extends Database
    {
        private $db;
        
        public function __construct()
        {
            $this -> db = $this -> connection();
        }
    }