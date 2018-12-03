<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    $new = $obj->Login_View();
    if(!$_SESSION['admin']){
        header('location:login.php');
    }
    $newid = $_SESSION['admin'];
    $show = $obj->Personal_Data($newid);
    
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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>      
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="nav-warp">
            <ul class="nav">
                <li class="nav-item ml-auto ">
                    <a class="nav-link  text-primary" href="index.php">হোম পেজে ফিরে জান</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link  text-danger" href="logout.php?logout=true">লগআউট করুন</a>
                </li>
            </ul>
        </div>
        <div class="profile">
            <?php 
                if($show->num_rows>0){
                    while($data = $show->fetch_object()){
            ?>
            <div class="head-text  mb-5">
                <h2 class="text-center">ম্যানেজার <span class="text-danger">
                    <?php echo $data->username; ?></span> আপনার প্রোফাইল এ স্বাগতম
                </h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="sidebar">
                        <h3 class="text-light text-center">প্রোফাইল</h3>
                        <hr>
                        <div class="circle">
                            <img src="imgg/<?php echo $data->picture; ?>" class="circle"  >
                        </div>
                        <div class="detail">
                            <div class="name pt-4">
                                <h6 class="text-light text-center">ম্যানেজার</h6>
                                <div class="name-box">
                                    <h4 class="text-danger text-center"><?php echo $data->username; ?></h4>
                                </div>                              
                            </div>
                            <div class="name pt-4">
                                <h6 class="text-light text-center">তারিখ</h6>
                                <div class="name-box">
                                    <h4 class="text-light text-center">
                                        <?php  
                                            echo $data->created;
                                        
                                        ?>
                                    </h4>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bck-img">
                        <div class="head-text" >
                            <h2 class="text-light">ড্যাশবোর্ড এ যান</h2>
                            <hr>
                            <a href="dashboard.php">
                                <div class="btnn">                                   
                                    <a href="dashboard.php" style="text-decoration:none;">
                                        <h5 class="mt-2 text-light">ড্যাশবোর্ড</h5>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>