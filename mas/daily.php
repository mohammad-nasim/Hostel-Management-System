<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    $new = $obj->Jan_View();
    
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
                    <a class="nav-link  text-danger" href="dashboard.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="header">
            <h2 class="text-center">Daily Meal</h2>
            <hr>
        </div>
        <div class="card ml-auto mr-auto mt-5" style="width: 40rem;">
            <div class="card-body">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">meal</th>
                                <th scope="col">update</th>
                            </tr>
                        </thead>
                        <?php 
                            if($new->num_rows>0){
                                while($data = $new->fetch_object()){
                        ?>
                        <tbody>
                            <tr>
                                <td scope="col"><?php echo $data->name; ?></td>
                                <td scope="col"><?php echo $data->meal; ?></td>
                                <td scope="col"><a href="updatemeal.php?id=<?php  echo $data->id ?>"><button class="btn btn-primary">update</button></a></td>
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