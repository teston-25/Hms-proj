<?php  
session_start();
$_SESSION;
    include 'connection2.php';
    include 'functions.php';
    include 'connection.php';

    $user_data = check_login($con);
    $user_name=$user_data['user_name'];

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $room_type =  $_POST['room_type'];
        $service_type =  $_POST['service_type'];
        $check_in =  $_POST['check_in'];
        $check_out =  $_POST['check_out'];  
        if(!empty($name) && !empty($email)&& !empty($room_type)&& !empty($service_type)&& !empty($check_in)&& !empty($check_out) ){
            
            $book_id=random_num(10);
            $sql = "INSERT INTO book (book_id,name, email, room_type, service_type, check_in, check_out) VALUES ('$book_id','$name', '$email', '$room_type', '$service_type', '$check_in', '$check_out')";
        
        if ($check_in < $check_out) {
            mysqli_query($con2,$sql);
        }
        else{
            echo "Error: Check-in date cannot be after check-out date";
        }
        
        echo '<script>alert("Booking successful! Thank you for choosing our hotel.")</script>'; 
        header("location: book.php");
    }
    }

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
    //     $name = mysqli_real_escape_string($con2, $_POST['name']);
    //     $email = mysqli_real_escape_string($con2, $_POST['email']);
    //     $room_type = mysqli_real_escape_string($con2, $_POST['room_type']);
    //     $service_type = mysqli_real_escape_string($con2, $_POST['service_type']);
    //     $check_in = mysqli_real_escape_string($con2,$_POST['check_in']);
    //     $check_out = mysqli_real_escape_string($con2,$_POST['check_out']);
    
    //     if (!empty($name) && !empty($email) && !empty($room_type) && !empty($service_type) && !empty($check_in) && !empty($check_out)) {
    
    //         if ($check_in < $check_out) {
    //             $sql = "INSERT INTO bookings (name, email, room_type, service_type, check_in, check_out) VALUES ('$name', '$email', '$room_type', '$service_type', '$check_in, '$check_out";
    //             if (mysqli_query($con2, $sql)) {
    //                 echo '<script>alert("Booking successful! Thank you for choosing our hotel.")</script>';
    //                 header("location: book.php");
    //             } else {
    //                 // Handle database error (e.g., redirect to error page)
    //                 echo "Database Error: " . mysqli_error($con2);
    //             }
    //         } else {
    //             echo '<script>alert("Error: Check-in date cannot be after check-out date")</script>';
    //             header("location: book.php");
    //         }
    //     } else {
    //         // Handle missing field errors (e.g., redirect to booking form with error message)
    //         echo "Please fill in all required fields.";
    //     }
    
    //     die;
    // }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Managment System</title>
    <link rel="stylesheet" href="./book.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellefair&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="a2-a-view">
            <div class="header">
                <div class="header-left">
                    <a href="HMS.php">HMS</a>
                    <a class="bar-3" href="logout.php">Log-Out</a>
                </div>
                <button class="menu" aria-controls="primary-nav" aria-expanded="false"><span>menu</span></button>
                <div class="header-right primary-nav" data-visible="false">
                    
                    <section class="bar-r " aria-hidden="true"><a class="bar-1" href="./HMS.php">Home</a></section>
                    <section class="bar-r" aria-hidden="true"><a class="bar-2" href="./rev.php">Review</a></section>
                    <section class="bar-r" aria-hidden="true"><a class="bar-3" href="./book.php">Book</a></section>
                    <section class="bar-r" aria-hidden="true"><a class="bar-4" href="./about.php">About</a></section>
    
                </div>
            </div>
    
            <div class="intro">
                    <form class="book" action="book.php" method="post">
                            <label for="">Name:</label>
                            <!-- <?php echo $user_name ?> -->
                            <input type="text" name="name">
                            <br>
                            <label for="">Email:</label>
                            <input type="email" id="email" name="email">
                            <br>
                            <label for="">Room Type:</label>
                               <input type="text" name="room_type">
                            <br>
                            <label for="">Service Type:</label>
                                <input type="text" name="service_type">
                            <br>
                            <label for="">Check-in:</label>
                            <input type="date" name="check_in">
                            <br>
                            <label for="">Chek-out:</label>
                            <input type="date" name="check_out">
                            <br>
                            <input type="submit" id="check" value="Check Avilability">
                    </form>
            </div>
        </div>
<div class="b2-b-vieww">
    <h1 id="b-title">Booking</h1>
    <div class="r-container">    
        <div class="review-room r1st-review">
            <div class="left-side"><img src="./images/couplesmin.jpg" alt="" width="100%" height="100%"></div>
            <div class="ro-all ro-1">
                <h1>service: luxury</h1>
                <h1>room: super delux</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cumque accusamus blanditiis fugiat similique! Ea dolorem nisi voluptas atque quisquam!</p>
                <h4>Guests: 3 </h4>
                <h4>Beds: 2</h4>
                <h4>Bath: 2</h4>
                <h3>Price: <span>$400</span> /Night</h3>
            </div>
        </div>
        
        <div class="review-room r2nd-review">
            <div class="left-side"><img src="./images/family1.jpg" alt="" width="100%" height="100%"></div>
            <div class="ro-all ro-2">
                <h1>service: luxury</h1>
                <h1>room: family delux</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cumque accusamus blanditiis fugiat similique! Ea dolorem nisi voluptas atque quisquam!</p>
                <h4>Guests: 3 </h4>
                <h4>Beds: 2</h4>
                <h4>Bath: 2</h4>
                <h3>Price: <span>$300</span> /Night</h3>
            </div>

        </div>
       
        <div class="review-room r3rd-review">
            <div class="left-side"><img src="./images/singlemax.jpg" alt="" width="100%" height="100%"></div>
            <div class="ro-all ro-3">
                <h1>service: luxury</h1>
                <h1>room: double delux</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cumque accusamus blanditiis fugiat similique! Ea dolorem nisi voluptas atque quisquam!</p>
                <h4>Guests: 3 </h4>
                <h4>Beds: 2</h4>
                <h4>Bath: 2</h4>
                <h3>Price: <span>$300</span> /Night</h3>
            </div>
        </div>
        
        <div class="review-room r4th-review">
            <div class="left-side"><img src="./images/doublemin.jpg" alt="" width="100%" height="100%"></div>
            <div class="ro-all ro-4">
                <h1>service:simple</h1>
                <h1>room: super delux</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cumque accusamus blanditiis fugiat similique! Ea dolorem nisi voluptas atque quisquam!</p>
                <h4>Guests: 3 </h4>
                <h4>Beds: 2</h4>
                <h4>Bath: 2</h4>
                <h3>Price: <span>$300</span> /Night</h3>
            </div>

        </div>
        
        <div class="review-room r5th-review">           
            <div class="left-side"><img src="./images/family2.jpg" alt="" width="100%" height="100%"></div>
            <div class="ro-all ro-5">
                <h1>service:simple</h1>
                <h1>room: family delux</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cumque accusamus blanditiis fugiat similique! Ea dolorem nisi voluptas atque quisquam!</p>
                <h4>Guests: 3 </h4>
                <h4>Beds: 2</h4>
                <h4>Bath: 2</h4>
                <h3>Price: <span>$300</span> /Night</h3>
            </div>
        
        </div>
        <div class="review-room r6th-review">           
            <div class="left-side"><img src="./images/doublemin.jpg" alt="" width="100%" height="100%"></div> 
            <div class="ro-all ro-6">
                <h1>service:simple</h1>
                <h1>room: double delux</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cumque accusamus blanditiis fugiat similique! Ea dolorem nisi voluptas atque quisquam!</p>
                <h4>Guests: 3 </h4>
                <h4>Beds: 2</h4>
                <h4>Bath: 2</h4>
                <h3>Price: <span>$300</span> /Night</h3>
            </div>
        </div>
    </div>
</div>
</div>
    <script src="./main.js"></script>
</body>
</html>