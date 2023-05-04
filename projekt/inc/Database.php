<?php
    class Database {

        public $conn;
        function __construct(){
            
            $this->conn = new PDO('mysql:host=localhost;dbname=projekt;charset=utf8','root',''); // spojenie s databazou

            if($this->conn){
                echo 'sme spojeny';
            }else{
                echo 'nie sme';
            }
        }

        
    }
        $db = new Database();
        $db->conn;

?>