<?php

    require "db/connection.php";
    require "db/functions.php";

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        
        delete($conn,$id);
        
        echo "item - $id is deleted ";
        
    }
    


?>