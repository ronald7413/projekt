<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="Ie=edge">
        <meta name ="viewport" content="witdth=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
      include("partials/header.php");    // vlozeny menu
    ?>
        <h1>Admin rozhranie</h1>    
</br>
        <h2>Image</h2>
        <form action="inc/Index/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="text" name="image" id="image" placeholder="Image Location">
            <input type="submit" value="Submit", name="insert_img">         <!-- poslat data do insert.php !-->
        </form>

        <?php
            $index = $Index->get_image(5); //znamena: return all images
            echo '<table class="admin-table" border="5px solid black">';
            $a = 0;
                foreach($index as $p){
                    $a++;
                    $b="";
                    switch($a) {
                        case 1: $b="Profile";break;
                        case 2: $b="Java";break;
                        case 3: $b="Python";break;
                        case 4: $b="Plan";break;
                        default: $b=$p->name;break;
                    }
                    
                    echo '<tr>';                        //prve styri obrazky pomenovane
                    echo '<td>'.$b.'</td>';
                    echo '<td>'.'<img width="150" src = "'.$p->image.'">';
                    echo '<td>
                            <form action="inc/Index/delete.php" method="post">
                            <button type = "submit" name="delete_img" value="'.$p->id.'"'.'>Delete</button>
                            </form>';
                    echo '</tr>';
                }
                echo '</table>';
                
      ?>
            <br>
            <h2>Comment</h2>
        <?php
            $app = $Application->get_comment();
            echo '<table class="admin-table" border="5px solid black">';
            foreach($app as $c){
            echo '<tr>';                       
            echo '<td>'.$c->firstname.'</td>';
            echo '<td>'.$c->lastname.'</td>';
            echo '<td>'.$c->comment.'</td>';
            echo '<td>'.$c->answer.'</td';
            echo '<td><form action="inc/Application/update.php" method="post">
                    <textarea id="contact_message" name="comment_com" class="form-control" cols="50" placeholder="Note" required></textarea>
                    <button type = "submit" name="update_comment" value="'.$c->id, $c->comment.'"'.'>update</button>
                    </form></td>

                <td><form action="inc/Application/delete.php" method="post">
                    <button type = "submit" name="delete_comment" value="'.$c->id.'"'.'>Delete</button>
                    </form></td>';

            echo '</tr>';
            }
            echo '</table>';     
                      
        ?>
    </body>
</html>