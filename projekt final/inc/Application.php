<?php
    class Application{

        public $db;

        function get_comment(){

            try{            // pokus spravit

            $this->db = new Database();
            $query = $this->db->conn->query("SELECT * FROM comment");     // vsetky obrazky ktore sa nachadzaju v "image" tabulke
            $imm = $query->fetchAll(PDO::FETCH_OBJ);
            return $imm;

        }catch(PDOException $e){} // zachyt chybu
            print_r($e->getMessage());

        }
    }
    

    $Application = new Application();


?>