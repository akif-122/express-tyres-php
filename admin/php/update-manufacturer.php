<?php
include "config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $excerp = mysqli_real_escape_string($conn, $_POST["excerp"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $desc = $_POST["desc"];



   echo $sql = "UPDATE `manufacturers` SET `manu_name`='$name', `excerp`='$excerp', `description`= '$desc' , `image`='$image' WHERE id = '$id'  ";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION["success"] = "Manufacture Updated Successfully.";
        header("Location: ../manufacturers.php");
        die();
    } else {
        $_SESSION["msg"] = "Something Goes Wrong Please try again.";
        header("Location: ../edit-manufacture.php");
        die();
    }


}
?>