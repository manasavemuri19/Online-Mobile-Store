<?php

    require "db/connection.php";
    require "db/functions.php";

    if(isset($_REQUEST['name'])){
        $name = $_REQUEST['name'];
        
        $description = $_REQUEST['description'];
        
        $price = $_REQUEST['price'];
        
        $image = $_REQUEST['image'];
        
       //This function is for inserting data into the database
    
     insert($conn,$name,$description,$price,$image);
        
        echo "One record inserted";
    }

?>
<html>
    <?php require "modules/head.php"; ?>
    <body>
        <?php require "modules/header.php"; ?>
        <div class="container">
            <div class="border p-3 mt-5 mb-5">
            <?php require "modules/form.php"; ?>
            </div>
        </div>
        <?php require "modules/footer.php"; ?>
    </body>
</html>