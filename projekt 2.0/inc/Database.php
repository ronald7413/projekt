<?php
    class Database {

        public $conn;
        function __construct(){
            
            $this->conn = new PDO('mysql:host=localhost;dbname=projekt;charset=utf8','root',''); // spojenie s databazou

        }

        
    }
        $db = new Database();
        $db->conn;

?>