<?php  
    // session_start();
    // $_SESSION;

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    alert("Failed to connect!");
}

?>
