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
                <a class="nav-link  text-danger" href="index.php">হোম পেজে ফিরে জান</a>
            </li>
            </ul>
        </div>
        <div class="middle mt-3">
             <hr>
            <h2 class="text-center"><strong class="text-warning">প্রধান এডমিন </strong>হিসেবে লগইন করুন</h2>
            <hr>
            <div class="form-warp mt-5 pt-5 ">
                <div class="card ml-auto mr-auto bg-dark" style="width: 22rem;">
                    <div class="icon mt-3 ml-auto mr-auto">
                        <i class="fas fa-user-circle display-2 text-warning"></i> 
                    </div>
                    <div class="card-body  ">
                        <form action="adminauth.php" method="post" >
                        <label for="username" class="text-center text-light d-block">আপনার নাম </label>
                        <input type="text" name="username" class="form-control" id="username">
                        <label for="password" class="text-center d-block text-light ">পাসওয়ার্ড দিন</label>
                        <input type="password" name="password" class="form-control" id="password"><br>
                        <button type="submit" name="login" class="btn btn-warning btn-block">লগইন করুন</button>
                        <button type="reset" name="reset" class="btn btn-danger btn-block">বাতিল করুন</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>