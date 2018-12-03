<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $new = $obj->Admin_Retrive($username);
        if($new->num_rows>0){
            while($data = $new->fetch_object()){
                $userid = $data->id;
                $pass = $data->password;
            }
        }
        //matching password
        $match_pass = md5($password);
        if($match_pass === $pass){
            $obj->Admin_Session($userid);
        }
        else{  
            header('location:adminform.php');
        }
        //index start
        if($obj->Admin_Index() === TRUE){
            header('location:addash.php');
        }
        else{
            header('location:adminform.php');
        }

        
    }
    
?>