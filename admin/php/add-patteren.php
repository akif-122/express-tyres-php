<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $manu_id = mysqli_real_escape_string($conn, $_POST["manu_id"]);


    if ($name == "" || $manu_id == "") {
        $_SESSION["msg"] = "All fields are required";
        header("Location: ../add-patteren.php");
        die();
    }


  echo  $sql = "INSERT INTO `tyre_patteren`(`p_name`,  `manu_id`) 
                VALUES('$name', '$manu_id' )";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION["success"] = "Patteren added successfully!";
        header("Location: ../add-patteren.php");
        die();
    } else {
        $_SESSION["msg"] = "Something goes wrong please try again";
        header("Location: ../add-patteren.php");
        die();
    }




}

?>