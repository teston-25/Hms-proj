<?php  
// functions of login
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
function random_num($length){


    $text=" ";
    if($length<5){
        $length=5;
    }
        $len=rand(4,$length);

    for($i=0; $i < $len; $i++ ) {

        $text .=rand(0,9);
    }
    return $text;

}
//

//functions of booking

function check_book($con){
    if(isset($_SESSION['book_id'])){
        
        $id=$_SESSION['book_id'];
        $query="select * from book where user_id='$id' limit 1 ";

        $result= mysqli_query($con,$query);

        if($result && mysqli_num_rows($result)>0){
            $book_data=mysqli_fetch_assoc($result);
            return $book_data;
        }
    }

    header("location : book.php");
    die;
}


?>