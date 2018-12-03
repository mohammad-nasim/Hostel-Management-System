<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    if(!$_SESSION['admin']){
        header('location:login.php');
    }
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mob = $_POST['mobile'];
        $edu = $_POST['edu'];
        $addr = $_POST['address'];
        $obj->User_Detail($name,$mob,$edu,$addr);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container-fluid ">
        <div class="nav-warp">
            <ul class="nav">
                <li class="nav-item ml-auto ">
                    <a class="nav-link  text-primary" href="udmid.php">প্রবেশ পেজে ফিরে জান
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  text-danger" href="dashboard.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="background">
            <div class="form">
                <div class="" style="width: 30rem;">
                    <form action="#" method="post">
                        <div class="card-body bg-dark">
                            <h2 class="card-title text-center text-light">তথ্য হালনাগাদ ফর্ম</h2>
                            <hr class="bg-light">
                            <label class="text-light">সদস্যের নাম<sup class="text-warning">*</sup></label>
                            <input type="text" name="name" class="form-control" ><br>
                            <label class="text-light">মোবাইল নম্বর <sup class="text-warning">*</sup></label>
                            <input type="number" name="mobile" class="form-control" ><br>
                            <label class="text-light">শিক্ষাপ্রতিষ্ঠান<sup class="text-warning">*</sup></label>
                            <input type="text" name="edu" class="form-control" ><br>
                            
                            <label class="text-light">ঠিকানা<sup class="text-warning">*</sup></label>
                            <input type="text" name="address" class="form-control" ><br>
                            <div class="button mt-2">
                                <div class="row">
                                    <div class="col-md-6">
                                    <button type="submit" name="submit" class="btn btn-success btn-block">সাবমিট</button>
                                    </div>
                                    <div class="col-md-6">
                                    <button type="reset" name="reset" class="btn btn-danger btn-block">মুছুন</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>