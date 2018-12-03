<?php  
    session_start();
    include 'class.php';
    $obj = new Soft;
    $new = $obj->Bazar_View();
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="nav-warp">
            <ul class="nav">
                <li class="nav-item ml-auto ">
                    <a class="nav-link  text-info" href="bazarmid.php">প্রবেশ পেজে ফিরে জান
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link  text-danger" href="dashboard.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="header">
            <h2 class="text-center">বাজারের তালিকা</h2>
        </div>
        <div class="body mt-3">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">তারিখ</th>
                        <th scope="col">নাম</th>
                        <th scope="col">মোট খরচ</th>
                    </tr>
                </thead>
                <?php 
                    if($new->num_rows>0){
                        while($data = $new->fetch_object()){
                ?>
                <tbody>
                    <tr>
                        <td scope="col" ><?php echo $data->date; ?></td>
                        <td scope="col"><?php echo $data->name; ?></td>
                        <td scope="col"><?php echo $data->total; ?></td>
                    </tr>
                </tbody>
                <?php 
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>