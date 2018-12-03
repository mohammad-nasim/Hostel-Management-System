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
    <div class="container-fluid ">
        <div class="nav-warp">
            <ul class="nav">
                <li class="nav-item ml-auto ">
                    <a class="nav-link  text-danger" href="dashboard.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="mid">
            <div class="head">
                <h2 class="text-center">মিল ম্যানেজমেন্ট সিস্টেম</h2>
                <hr class="bg-dark">
            </div>
                <div class="body">
                    <div class= " ml-auto mr-auto mt-5" style="width: 30rem;">
                            <div class="card-body bg-dark d-block">
                                <h2 class="card-title text-center text-warning">
                                    প্রবেশ করুন
                                </h2>                               
                                <hr class="bg-light">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="dailyinput.php">
                                        <button class="btn btn-warning btn-block text-dark">তথ্য লিখুন</button>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="daily.php">
                                        <button class="btn btn-success btn-block text-light">মিল আপডেট</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>