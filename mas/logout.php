<?php 
    //----- userlogout -----//
    session_start();
    if(isset($_GET['logout'])){
        if($_GET['logout'] == TRUE){
            session_destroy();
            header('location:login.php');
        }
    }
    //----- userlogout -----//
    //----- adminlogout -----//
    if($_GET['logout']){
        if($_GET['logout'] == admin){
            session_destroy();
            header('location:adminform.php');
        }
    }
    //----- adminlogout -----//
?>