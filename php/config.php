<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "express-tyres-db";

    $conn =  mysqli_connect($host, $user, $pass, $dbname);

    if($conn){
        echo "Connection Successful";
    }else{
        echo "Connection Failed. ";
    }
    
?>