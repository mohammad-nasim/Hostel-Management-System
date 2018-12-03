<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    $id  = $_GET['id'];
    $search = $obj->Admin_Search($id);

    if(isset($_POST['submit'])){
        $role = $_POST['role'];
        $obj->Update($role,$id);
        header('location:adupd.php');
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
                    <a class="nav-link  text-danger" href="addash.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link  text-info" href="adupd.php">তথ্য জমাকারী ফিরে জান
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link  text-info" href="admid.php">প্রবেশ ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="header">
            <h2 class="bg-dark text-center text-warning mt-4">পরিবর্তন ফর্ম</h2>
        </div>
        <div class="body mt-3  pt-3 ">
            <div class="card ml-auto mr-auto bg-dark" style="width: 18rem;">
                <div class="card-body ">
                    <form action="#" method="post">
                        <?php 
                            if($search->num_rows>0){
                                while($data = $search->fetch_object()){
                        ?>
                        <label class="text-light">এডমিন এ পরিবর্তন করুন</label>
                        <input type="text" name="role" class="form-control" value="<?php echo $data->role ?>"><br>
                        <button type="submit" name="submit" class="btn btn-success">সাবমিট করুন</button>
                        <?php 
                                }
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>