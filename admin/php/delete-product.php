<?php

include "config.php";

if (isset($_GET["id"]) && !empty($_GET['id'])) {

    $id = $_GET["id"];

    $sql = "DELETE FROM `tyres` WHERE tid = '$id'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION["success"] = "Product Deleted Successfully";
        header("Location: ../products.php");
        die();
    } else {
        $_SESSION["msg"] = "Somethig goes wrong please try again later.";
        header("Location: ../products.php");
        die();
    }
} else {
    $_SESSION["msg"] = "Somethig goes wrong please try again later.";
    header("Location: ../products.php");
    die();
}



?>