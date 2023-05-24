<?php
    require("../Database.php");
    $db = new Database();
    if(isset($_POST["comm"])){
    $data = [
        'firstname'=>$_POST['firstname'],
        'lastname' =>$_POST['lastname'],
        'comment' =>$_POST['comment'],         
        ];
        $query = "INSERT INTO comment (firstname,lastname,comment) VALUES (:firstname, :lastname, :comment)";   // kde sa ma ulozit v databaze
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);         // poslat data
        
        

    }else{
        echo 'Error';
    }


    
    header("Location: http://localhost/projekt/application.php");        // presmerovat na stranku


?>

