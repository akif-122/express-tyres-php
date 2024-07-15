<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $excerp = mysqli_real_escape_string($conn, $_POST["excerp"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $desc = $_POST["desc"];


    if ($name == "") {
        $_SESSION["msg"] = "Name is required";
        header("Location: ../add-manufacture.php");
        die();
    }


  echo  $sql = "INSERT INTO `manufacturers`(`manu_name`, `excerp`, `description`, `image`) 
                VALUES('$name', '$excerp', '$desc' , '$image')";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION["success"] = "Manufacture added successfully!";
        header("Location: ../add-manufacture.php");
        die();
    } else {
        $_SESSION["msg"] = "Something goes wrong please try again";
        header("Location: ../add-manufacture.php");
        die();
    }




}

?>