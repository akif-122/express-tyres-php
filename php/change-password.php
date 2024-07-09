<?php

include "config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = mysqli_real_escape_string($conn, $_POST["user-id"]);
    $opassword = mysqli_real_escape_string($conn, $_POST["opassword"]);
    $npassword = mysqli_real_escape_string($conn, $_POST["npassword"]);
    $cnpassword = mysqli_real_escape_string($conn, $_POST["cnpassword"]);
}


// CHECK EMPTY


if ($opassword == "" || $npassword == "" || $cnpassword == "") {
    $_SESSION["msg"] = "All fields are required";
    header("Location: ../user-change-password.php");
    die();
}

// CONFIRM PASSWORD
if ($npassword != $cnpassword) {
    $_SESSION["msg"] = "New password and Confirm password are not matching";
    header("Location: ../user-change-password.php");
    die();
}

// CHECK USER EXISTS
$sql = "SELECT * FROM `users` WHERE `id` = '$userId' ";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) == 1) {
    $row = mysqli_fetch_assoc($res);

    // CHECK OLD PASSWORD IS MATCHING
    $verifyOldPass = password_verify($opassword, $row["password"]);

    if ($verifyOldPass) {

        $hashNewPass = password_hash($npassword, PASSWORD_DEFAULT);

        $sql1 = "UPDATE `users` SET `password` = '$hashNewPass' ";
        $res1 = mysqli_query($conn, $sql1);
        if ($res1) {
            $_SESSION["update"] = "Password Changed Successfully!";
            header("Location: ../user-change-password.php");
            die();
        } else {
            $_SESSION["msg"] = "Something Goes Wrong, Please try again.";
            header("Location: ../user-change-password.php");
            die();
        }

    } else {
        $_SESSION["msg"] = "Old Password is Incorrect.";
        header("Location: ../user-change-password.php");
        die();
    }


} else {
    $_SESSION["msg"] = "Something Goes Wrong, Please try again.";
    header("Location: ../user-change-password.php");
    die();

}

?>