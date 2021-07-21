<?php

    require "db/connection.php";
    require "db/functions.php";

    

    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
           
        $status = login($conn,$username,$password);
        
        echo "<h1>".$status."</h1>";
    }

?>
<form method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>