<?php
    require "db/connection.php";
    require "db/functions.php";

    if(isset($_REQUEST['id'])){

                    $id = $_REQUEST['id'];
                    $result = retrieve_record($conn,$id);
                    echo "<h1>".$result['name']."</h1>";
                    echo "<img src='".$result['image']."'  width=100px>";
                    echo "<br>";
                    echo "<p>".$result['description']."</p>";

?>
<a href="update.php?id=<?php echo $result['id']; ?>">
    <button class="btn btn-primary">Edit</button>
</a>

<a href="delete.php?id=<?php echo $result['id']; ?>">
    <button class="btn btn-danger">Delete</button>
</a>
<?php
          }else{
                    echo "<h3>Please specify the product you want to view:<br>1) For iPhones, give the URL parameter 1<br>2) For Oppo Mobiles, give the URL parameter 2<br>3) For Xiaomi Mobiles, give the URL parameter 3</h3>";
    }
        
        
?>








