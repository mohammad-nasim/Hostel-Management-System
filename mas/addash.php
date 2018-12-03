<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    if(!$_SESSION['boss']){
        header('location:adminform.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/fontawesome-all.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="bg-pic">
        <div class="container">
            
            <div class="dwrapper mt-3 pt-4 mb-3">
                <div class="title bg-dark">
                    <h2 class="text-center text-success">এডমিন ড্যাশবোর্ড</h2>
                    <hr style="height:3px;background-color:forestgreen;">
                </div>
                <div class="dbody mt-5">
                    <div class="row">
                        <div class="col-md-3  dbody-side">
                            <div class="nav-warp">
                                <ul class="" style="list-style-type:square;">
                                    <li class="nav-item ml-auto ">
                                        <a class="nav-link  text-success" href="index.php">হোম পেজে  জান</a>
                                    </li>
                                    <li class="nav-item ml-auto ">
                                        <a class="nav-link  text-success" href="adminform.php">লগইন পেজে জান</a>
                                    </li>
                                    <li class="nav-item ml-auto ">
                                        <a class="nav-link  text-danger" href=" logout.php?logout=admin">লগআউট করুন</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 dbody-main">
                        <div class="secro mt-2 pt-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="admid.php">
                                            <i class="fas fa-user-tie text-center display-1 d-block hov1"></i>
                                        </a>
                                        <br>
                                        <span class="pt-2 d-block text-center">এডমিন নিয়োগ দিন</span>   
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <a href="dashboard.php">
                                            <i class="far fa-edit text-center display-1   hov1 d-block mr-auto" >
                                            </i>
                                        </a>
                                        <br>
                                        <span class="pt-2 d-block text-center">কার্যক্রম পর্যবেক্ষণ করুন</span>  -->
                                    </div>
                                </div>
                            </div>
                            <div class="secrow mt-5 pt-5">
                            <div class="row">
                                <div class="col-md-6 ml-auto" >
                                    <!-- <a href="">
                                        <i class="fas fa-book text-center display-1  d-block  hov1"></i>
                                    </a>
                                    <br>
                                    <span class="pt-2 d-block text-center">
                                        মিলচার্জ ও স্থায়ীচার্জ
                                    </span> -->
                                </div>
                                <div class="col-md-6 ">
                                    <!-- <a href="">
                                        <i class="fas fa-hand-holding-usd text-center display-1  d-block mr-auto  hov1"></i>
                                    </a>
                                    <br>
                                    <span class="pt-2 d-block text-center"> জমা এবং দেনা-পাওনা</span> -->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


                                       