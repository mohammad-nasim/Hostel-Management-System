<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    if(!$_SESSION['boss']){
        header('location:login.php');
    }
    $use = $obj->View();
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
                    <a class="nav-link  text-primary" href="admid.php">প্রবেশ পেজে ফিরে জান
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link  text-danger" href="addash.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="show">
            <div class="head">
                <h2 class="text-center">তথ্য জমাকারী টেবিল</h2>
                <hr>
            </div>
            <div class="table-show mt-4 pt-3">
                <table class="table text-center">
                    <thead class="thead-dark ">
                        <tr >
                            <th scope="col" class="text-warning">সদস্যের নাম</th>
                            <th scope="col" class="text-warning">মোবাইল নম্বর</th>
                            <th scope="col" class="text-warning">শিক্ষাপ্রতিষ্ঠান</th>
                            <th scope="col" class="text-warning">ঠিকানা</th>
                            <th scope="col" class="text-warning">অবস্থা</th>
                            <th scope="col" class="text-warning">অবস্থা পরিবর্তন</th>
                        </tr>
                    </thead>
                    <?php 
                        if($use->num_rows>0){
                            while($data = $use->fetch_object()){
                    ?>
                    <tbody>
                        <tr>
                            <td scope="col"><?php echo $data->name; ?></td>
                            <td scope="col"><?php echo $data->mobile; ?></td>
                            <td scope="col"><?php echo $data->education; ?></td>
                            <td scope="col"><?php echo $data->address; ?></td>
                            <td scope="col"><?php echo $data->role; ?></td>
                            <td scope="col"><a href="updaterole.php?id=<?php echo $data->id ?>"><button class="btn btn-success">পরিবর্তন করুন</button></a></td>
                        </tr>
                    </tbody>
                    <?php 
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>