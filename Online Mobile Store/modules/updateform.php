<?php

    require "db/connection.php";
    require "db/functions.php";
    
    if(isset($_REQUEST['name'])){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        
        $description = $_REQUEST['description'];
        
        $price = $_REQUEST['price'];
        
        $image = $_REQUEST['image'];
        
       //This function is for updating data into the database
    
     update($conn,$id,$name,$description,$price,$image);
        
        echo "One record updated";
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        
        $result = retrieve_record($conn,$id);
?>

    
        <h1>Update a Product Item</h1>
        <form method="get" action="update.php">
            <label>Enter the name</label><br>
            <input type="text" name="name" 
value="<?php echo $result['name']; ?>" class="form-control">
            
            <br>
            
            <label>Product Description</label><br>
            <textarea name="description" rows=10 class="form-control"><?php echo $result['description']; ?></textarea>
            <br>
                
            <label>Price</label><br>
            <input type="text" name="price" value="<?php echo $result['price']; ?>" class="form-control">
            <br>
                
            <label>Image path</label><br>
            <input type="text" name="image" value="<?php echo $result['image']; ?>" class="form-control">
            <br>
                
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>" >
            <button type="submit" class="btn btn-success">Update</button>
        </form>


<?php }else{ ?>

<h1> Kindly Enter the id to update</h1>

<?php  } ?>