<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['update_comment'])){
        $data = [
            'id' => $_POST["update_comment"],
            'answer' => $_POST["comment_com"],
        ];

    try{
        $query = "UPDATE comment SET answer=:answer WHERE id=:id";
        $query_run = $db->conn->prepare($query);
        $query_run->execute($data);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }

header("Location: http://localhost/projekt/admin.php");        // presmerovat na stranku

}
?>
