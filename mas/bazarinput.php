<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    if(!$_SESSION['admin']){
        header('location:login.php');
    }
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $date = $_POST['date'];
        $total = $_POST['tk'];
        $obj->bazarinput($name,$date,$total);
        header('location:bazarview.php');
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
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
    <div class="nav-warp">
            <ul class="nav">
                <li class="nav-item ml-auto ">
                    <a class="nav-link  text-primary" href="bazarmid.php">প্রবেশ পেজে ফিরে জান
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link  text-danger" href="dashboard.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="header mt-4">
            <h2 class="text-center">বাজারের হিসাব সংরক্ষণ করুন</h2>
            <hr>
        </div>
        <div class="body mt-5">
            <div class="card ml-auto mr-auto bg-dark" style="width: 23rem;">
                    <div class="card-body ">
                        <form action="#" method="post" class="text-light">
                            <label> সদস্যের নাম </label>
                            <input type="text" name="name" class="form-control"><br>
                            <label>তারিখ</label>
                            <input type="date" name="date" class="form-control"><br>
                            <label> মোট খরচ </label>
                            <input type="number" name="tk" class="form-control"><br>
                            <div class="row">
                                <div class="col-md-6"><button type="submit" name="submit" class="btn btn-success btn-block">সাবমিট</button>
                                </div>
                                <div class="col-md-6"><button type="reset" name="reset" class="btn btn-danger btn-block">মুছুন</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    
        </div>
    </div>
</body>
</html>