<?php
    class Index{

        public $db;

        function get_image($n){

            try{            // pokus spravit

            $this->db = new Database();
            $query = $this->db->conn->query("SELECT * FROM image");     // vsetky obrazky ktore sa nachadzaju v "image" tabulke
            $imm = $query->fetchAll(PDO::FETCH_OBJ);
            if($n == 1) echo $imm[0]->image;    // vyber obrazku ..
            if($n == 2) echo $imm[1]->image;
            if($n == 3) echo $imm[2]->image;
            if($n == 4) echo $imm[3]->image;
            if($n == 5) return $imm;

        }catch(PDOException $e){} // zachyt chybu


        }
    }
    

    $Index = new Index();


?>