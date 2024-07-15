<?php

session_start();
include "config.php";

if (isset($_GET["id"]) && !empty($_GET['id'])) {

    $id = $_GET["id"];

    $sql = "DELETE FROM `manufacturers` WHERE id = '$id'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION["success"] = "Manufacturer Deleted Deleted Successfully";
        header("Location: ../manufacturers.php");
        die();
    } else {
        $_SESSION["msg"] = "Somethig goes wrong please try again later.";
        header("Location: ../manufacturers.php");
        die();
    }
} else {
    $_SESSION["msg"] = "Somethig goes wrong please try again later.";
    header("Location: ../manufacturers.php");
    die();
}



?>