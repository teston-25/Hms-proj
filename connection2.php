<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="book_db";

if(!$con2 = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    alert("Failed to connect!");
}

?>