<?php

    // This function is used to retrieve data from
    // a table items
    function retrieve($conn){
        $sql = "SELECT * from items";
        $result = mysqli_query($conn,$sql);
        return $result;
    }

    // this function is used to retrieve one record from
    // the table items
    function retrieve_record($conn,$id){
        $sql = "SELECT * FROM items WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        $record = mysqli_fetch_assoc($result);
        return $record;
    }


    //function to insert
    function insert($conn,$name,$description,$price,$image){
        $sql = "INSERT INTO items (id,name,description,price,image) VALUES (null,'$name','$description',$price,'$image')";
        
        $status = mysqli_query($conn,$sql);
    }

    //this function is used to update the data in the table
    function update($conn,$id,$name,$description,$price,$image){
        $sql = "UPDATE items SET name='$name', description='$description', price=$price, image='$image' WHERE id =$id";
        
        $status = mysqli_query($conn,$sql);
    }
    

    function delete($conn,$id){
        $sql = "DELETE from items WHERE id =$id";
        $status = mysqli_query($conn,$sql);
    }

    //This function is used for check the user credentials 
    function login($conn,$username,$password){
        $sql = "SELECT * from users WHERE username='$username' ";
        
        $result = mysqli_query($conn,$sql);
        $userdata = mysqli_fetch_assoc($result);
        
        if($userdata){
            
            if($userdata['password'] == $password)
                $status = "Login Successful";
            else
                $status = "Password incorrect";
            
        }else{
            $status = "User not found. Kindly Register";
        }
        
        return $status;
    }

    //This function is used to logout the user
    function logout(){
        
        
    }








?>