<h1>Create a Product Item</h1>
        <form method="get" action="create.php">
            <label>Enter the name</label><br>
            <input type="text" name="name" class="form-control">
            <br>
            
            <label>Product Description</label><br>
            <textarea name="description" rows=10 class="form-control"></textarea>
            <br>
                
            <label>Price</label><br>
            <input type="text" name="price" class="form-control">
            <br>
                
            <label>Image path</label><br>
            <input type="text" name="image" class="form-control">
            <br>
                
            <button type="submit" class="btn  btn-primary">Create</button>
        </form>