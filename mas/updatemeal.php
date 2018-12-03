<?php 
    session_start();
    include 'class.php';
    $obj = new Soft;
    $id = $_GET['id'];
    $search = $obj->Meal_Search($id);

    $new = $obj->up_Jan_View($id);
    if($new->num_rows>0){
        while($data = $new->fetch_object()){
            $meal_x = $data->meal;
        }
    }
    
    if(isset($_POST['submit'])){
        $meal_y = $_POST['meal'];
        $meal = $meal_x + $meal_y;
        
        $obj->Update_Meal($meal,$id);
        header('location:daily.php');
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
                    <a class="nav-link  text-danger" href="dashboard.php">ড্যাশবোর্ড পেজে ফিরে জান
                    </a>
                </li>
            </ul>
        </div>
        <div class="header">
            <h2 class="text-center">
                update
            </h2>
        </div>
        <div class="body">
            <div class="card ml-auto mr-auto mt-5" style="width: 40rem;">
                <div class="card-body">
                    <form action="#" method="post">
                        <label >daily meal</label>
                        <input type="number" name="meal" class="form-control"><br>
                        <button type="submit" name="submit" class="btn btn-info">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>