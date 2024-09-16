<?php  
session_start();
$_SESSION;
    include 'connection.php';
    include 'functions.php';

    $user_data = check_login($con);
    $user_name=$user_data['user_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS</title>
    <link rel="stylesheet" href="./Rev1-style.css">
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
                <a class="bar-2" href="logout.php">Log-Out</a>
            </div>
            <button class="menu" aria-controls="primary-nav" aria-expanded="false"><span>menu</span></button>
            <div class="header-right primary-nav" data-visible="false">
                <section class="bar-r " aria-hidden="true"><a class="bar-1" href="./HMS.php">Home</a></section>
                <section class="bar-r" aria-hidden="true"><a class="bar-2" href="./rev.php">Review</a></section>
                <section class="bar-r" aria-hidden="true"><a class="bar-3" href="./book.php">Book</a></section>
                <section class="bar-r" aria-hidden="true"><a class="bar-4" href="./about.php">About</a></section>
            </div>
        </div>
        <br>
        <br>
        <br>
        <section class="m-body">                
            <section class="b-right">
                     <section class="bar-menu">
                            <a href="./rev0.php" class="link-1">Rooms</a>
                            <a href="./rev1.php" class="link-2">Food</a>
                            <a href="./rev2.php" class="link-3">Gallary</a>
                            <a href="./rev3.php" class="link-4">Pool</a>
                     </section>
                     <section class="text-area">
                        <h1 class="h-m">Description</h1>
                <p class="h-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus est exercitationem sint aut earum porro voluptatem provident voluptate perferendis neque, ea iure fugiat? Minima iste fuga eius consectetur suscipit, atque delectus consequatur, quia ratione, minus quibusdam cum quos quasi sapiente repellendus temporibus. Ea, ut similique totam minus adipisci veniam rerum.</p>
                         <hr>
                     </section>
                </section>
                <div class="b-left">
                    <section class="vie-1">
                        <img src="images/food3.jpg" alt="">
                    </section>
                    <section>
                        <img src="images/food1.jpg" alt="">
                    </section>
                    <section>
                        <img src="images/food2.jpg" alt="">
                    </section>
                    <section>
                       <img src="images/food5.jpg" alt="">
                   </section>
                   <section>
                       <img src="images/food4.jpg" alt="">
                   </section>
              </div>
                 </section>
    </div>
    <script src="./main.js"></script>
</body>

</html>