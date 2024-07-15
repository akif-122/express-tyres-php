<?php

session_start();
include "config.php";

if (isset($_GET["id"]) && !empty($_GET['id'])) {

    $id = $_GET["id"];

    $sql = "DELETE FROM `tyre_patteren` WHERE pid = '$id'";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION["success"] = "Patteren Deleted Successfully";
        header("Location: ../tyre-patteren.php");
        die();
    } else {
        $_SESSION["msg"] = "Somethig goes wrong please try again later.";
        header("Location: ../tyre-patteren.php");
        die();
    }
} else {
    $_SESSION["msg"] = "Somethig goes wrong please try again later.";
    header("Location: ../tyre-patteren.php");
    die();
}



?>