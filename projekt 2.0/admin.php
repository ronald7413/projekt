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
        <form action="inc/Index/insert.php" method="post">
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="text" name="image" id="image" placeholder="Location of Image">
            <input type="submit" value="Submit", name="insert_img">         <!-- poslat data do insert.php !-->
        </form>
    </body>
</html>