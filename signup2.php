<?php  
session_start();

include 'connection.php';
include 'functions.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];    
     if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

        $user_id=random_num(20);
        $query="insert into user (user_id,user_name,password) values('$user_id','$user_name','$password')";
        
        mysqli_query($con,$query);
        // echo "<script>alert('you have succesfully registered!') </script>";
    
        header("location: login2.php");
        die;
    }
     else{
        echo "<script>alert('Please insert a valid information!') </script>";
     }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP</title>
    <link rel="stylesheet" href="./login.css">
    <!-- toaster files -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.clodflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>
    <div class="box">
        <div class="l-cont">
            <form action=""
            class="desc">
                <h1>Description</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur accusantium hic quia vitae minus voluptatem quasi aut adipisci culpa. Adipisci ut dignissimos eligendi nam asperiores perferendis fugiat animi minima cumque alias eveniet assumenda aspernatur voluptatibus non provident nobis accusantium, iure ipsum? Aspernatur reiciendis debitis, nostrum velit beatae expedita consequuntur quisquam, delectus earum hic natus ea neque reprehenderit? Dicta dolorem officiis dolore nostrum voluptas molestias quasi, aliquam sint, aspernatur, facere repudiandae pariatur fugit quisquam? Omnis praesentium suscipit quae ipsum quod rerum ipsam sequi placeat consequatur ut at pariatur expedita recusandae doloribus blanditiis dolor dicta, dolorum natus harum cum, repudiandae nihil! Nobis?</p>
            </form>
        </div>
        <div class="r-cont">
            <form method="post" class="box-cont">
                <h2>SIGN-UP</h2><br>
                <input type="text" name="user_name" placeholder="User name"><br><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input class="button" type="submit" value="Sign up"><br><br>
                <a href="./login2.php">Click to Log-in</a>
            </form>
        </div>
    </div>
</body>
</html>