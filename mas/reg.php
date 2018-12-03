<?php 
    include 'class.php';
    $obj = new Soft;
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $password = md5($pass);       
        $folder = "imgg/";
        $imgfile  = $folder.basename($_FILES['pic']['name']);
        if(move_uploaded_file($_FILES['pic']['tmp_name'],$imgfile)){
            $image = $_FILES['pic']['name'];            
        }
        $obj->Login_Insert($username,$password,$image);
?>
        <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>রেজিষ্ট্রেশন</strong> সম্পন্ন হয়েছে...
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> 
<?php      
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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>      
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container ">
        <div class="nav-warp">
        <ul class="nav">
            <li class="nav-item ml-auto ">
                <a class="nav-link  text-danger" href="index.php">হোম পেজে ফিরে জান</a>
            </li>
            </ul>
        </div>
        <div class="middle mt-3">
             <hr>
            <h2 class="text-center">নতুন একাউন্টের জন্য <span class="text-primary">রেজিষ্ট্রেশন</span> করুন</h2>
            <hr>
            <div class="form-warp mt-2 pt-5 bga">
                <div class="card ml-auto mr-auto" style="width: 22rem;">
                    <div class="icon mt-3 ml-auto mr-auto">
                        <i class="fas fa-user-shield h1 text-primary "></i> 
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                        <label for="username" class="text-center d-block">আপনার নাম </label>
                        <input type="text" name="username" class="form-control" id="username">
                        <label for="password" class="text-center d-block">পাসওয়ার্ড দিন</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <label for="pic" class="text-center d-block">প্রফাইলের জন্য ছবি দিন</label>
                        <input type="file" name='pic' class="form-control" id="pic"><br>
                        <button type="submit" name="register" class="btn btn-primary btn-block">রেজিষ্ট্রেশন করুন</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>