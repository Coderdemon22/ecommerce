<?php 
    $hostname="localhost";
    $username="root";
    $password="";
    $database="ecommerce";

    $conn=mysqli_connect($hostname,$username,$password,$database);

    if(!$conn){
        die("Error Occured : ".mysqli_connect_error());
    }
?>