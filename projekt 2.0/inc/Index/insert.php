<?php
    require("../Database.php");
    $db = new Database();
    if(isset($_POST["insert_img"])){
    $data = [
        'name'=>$_POST['name'],         // vytvaranie arrayu kde sa data mozeme ulozit
        'image'=>$_POST['image'],
        ];
        $query = "INSERT INTO image (name,image) VALUES (:name, :image)";   // kde sa ma ulozit v databaze
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);         // poslat data
    }else{
        echo 'Error';
    }
?>