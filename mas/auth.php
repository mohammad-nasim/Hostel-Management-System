<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $new = $obj->Login_Select($username);
        if($new->num_rows>0){
            while($data = $new->fetch_object()){
                $uid = $data->id ;
                $pass = $data->password;
            }
        }
        //matching password
        $match_pass = md5($password);
        if($match_pass === $pass){
            $obj->Session_Start($uid);
        }
        else{
            header('location:login.php');
            
        }
        //index
        if($obj->Index() == TRUE){
            header('location:profile.php');
        }
        else{
            header('location:login.php');
        }
    }
?>