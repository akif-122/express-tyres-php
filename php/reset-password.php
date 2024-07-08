<?php
session_start();
include "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $cpassword = mysqli_real_escape_string($conn, $_POST["cpassword"]);
    $token = mysqli_real_escape_string($conn, $_POST["token"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);

    if ($password == "" || $cpassword == "") {
        $_SESSION["msg"] = "All fields are required";
        header("Location: ../reset-password.php?token=$token&email=$email");
        die();
    }

    if ($password != $cpassword) {
        $_SESSION["msg"] = "Passwords are not matched.";
        header("Location: ../reset-password.php?token=$token&email=$email");
        die();
    }

    // CHECK USER
    $sql = "SELECT * FROM `users` WHERE email = '$email' AND `token` = '$token' ";

    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $sql1 = "UPDATE `users` SET  `password`='$hashPass' , `token`= '' ";
        $res1 = mysqli_query($conn, $sql1);
        if ($res1) {
            $_SESSION["update"] = "Password Successfully Updated.";
            header("Location: ../reset-password.php?token=$token&email=$email");
            die();
        } else {
            $_SESSION["msg"] = "Something Goes wrong, Please try again later.";
            header("Location: ../reset-password.php?token=$token&email=$email");
            die();
        }


    } else {
        $_SESSION["msg"] = "User Not Found.";
        header("Location: ../reset-password.php?token=$token&email=$email");
        die();
    }


}


?>