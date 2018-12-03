<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    if(!$_SESSION['admin']){
        header('location:login.php');      
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
                    <h2 class="text-center text-light">ড্যাশবোর্ড</h2>
                    <hr style="height:0.5px;background-color:coral;">
                </div>
                <div class="dbody mt-5">
                    <div class="row">
                        <div class="col-md-3  dbody-side">
                            <div class="nav-warp">
                                <ul class="" style="list-style-type:square;">
                                    <li class="nav-item ml-auto ">
                                        <a class="nav-link  text-info" href="index.php">হোম পেজে ফিরে জান</a>
                                    </li>
                                    <li class="nav-item ml-auto ">
                                        <a class="nav-link  text-info" href="profile.php">প্রোফাইল পেজে ফিরে জান</a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a class="nav-link  text-danger" href="logout.php?logout=true">লগআউট করুন</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9 dbody-main">
                            <div class="firstrow">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <a href="udmid.php">
                                            <i class="fas fa-users text-center display-1  hov"></i>
                                        </a>
                                        <br>
                                        <span class="pt-2 d-block">সদস্যদের তথ্য</span>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <a href="bazarmid.php">
                                            <i class="fas fa-shopping-bag text-center display-1   hov"></i>
                                            </i>
                                        </a>
                                        <br>
                                        <span class="pt-2 d-block">বাজার হিসাব</span>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <a href="dailymid.php">
                                            <i class="far fa-edit text-center display-1   hov" >
                                            </i>
                                        </a>
                                        <br>
                                        <span class="pt-2 d-block">প্রতিদিনের আপডেট</span>
                                    </div>
                                </div>
                            </div>
                            <div class="secrow mt-5 pt-5">
                            <div class="row">
                                <div class="col-md-6 ml-auto" >
                                    <a href="">
                                        <i class="fas fa-book text-center display-1  d-block  hov"></i>
                                    </a>
                                    <br>
                                    <span class="pt-2 d-block text-center">
                                        মিলচার্জ 
                                    </span>
                                </div>

                                <div class="col-md-6 ">
                                    <a href="submitmid.php">
                                        <i class="fas fa-hand-holding-usd text-center display-1  d-block mr-auto  hov"></i>
                                    </a>
                                    <br>
                                    <span class="pt-2 d-block text-center">মোট জমা </span>
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