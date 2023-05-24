<?php
require('../Database.php');
$db =  new Database();
if(isset($_POST['delete_comment'])){
    try{
        $id = $_POST["delete_comment"];
        $sql = 'DELETE FROM comment WHERE id ='.$id;          // odstran kde id sa rovna s id-m
        $db->conn->exec($sql);
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    
}
?>

<?php
header("Location: http://localhost/projekt/admin.php");        // presmerovat na stranku
?>