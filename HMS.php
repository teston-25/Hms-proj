<?php  
session_start();
$_SESSION;
    include 'connection.php';
    // include 'functions.php';

function check_login($con){
        if(isset($_SESSION['user_id'])){
            
            $id=$_SESSION['user_id'];
            $query="select * from user where user_id='$id' limit 1 ";
    
            $result= mysqli_query($con,$query);
    
            if($result && mysqli_num_rows($result)>0){
                $user_data=mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
    
        header("location : login.php");
        die;
    }    

    $user_data = check_login($con);
    $user_name= $user_data['user_name'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Managment System</title>
    <link rel="stylesheet" href="./hms1 style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellefair&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="header-left">
                <a href="HMS.php">HMS</a>
                <a class="bar-1" href="logout.php">Log-Out</a>
            </div>
            <button class="menu" aria-controls="primary-nav" aria-expanded="false"><span>menu</span></button>
            <div class="header-right primary-nav" data-visible="false">
                
                <section class="bar-r " aria-hidden="true"><a class="bar-1" href="./HMS.php">Home</a></section>
                <section class="bar-r" aria-hidden="true"><a class="bar-2" href="./rev.php">Review</a></section>
                <section class="bar-r" aria-hidden="true"><a class="bar-3" href="./book.php">Book</a></section>
                <section class="bar-r" aria-hidden="true"><a class="bar-4" href="./about.php">About</a></section>

            </div>
        </div>

        <section class="home-body">
            <section class="home-left">
                <h2 id="h-s">Hello,<span><?php echo $user_name ?></span></h2>
                <h1 id="h-s">Welcome</h1>
                <br>
                <h2 id="h-h">Enjoy your time with us!</h2>
                <br>
                
            </section >
            <div class="outter-shell">
                <section class="home-right">
                <button type="button" class="explore"><a href="rev.php">EXPLORE</a></button>
                </section>  
            </div>
        </section>
    </div>
    <script src="./main.js"></script>
</body>
</html>