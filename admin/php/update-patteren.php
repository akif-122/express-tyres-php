<?php
include "config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $manu_id = mysqli_real_escape_string($conn, $_POST["manu_id"]);



   echo $sql = "UPDATE `tyre_patteren` SET `p_name`='$name', `manu_id` = '$manu_id' WHERE pid = '$id' ";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $_SESSION["success"] = "Patteren Updated Successfully.";
        header("Location: ../tyre-patteren.php");
        die();
    } else {
        $_SESSION["msg"] = "Something Goes Wrong Please try again.";
        header("Location: ../edit-patteren.php");
        die();
    }


}
?>