<?php
session_start();
include_once "./config.php";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $remember_me = $_POST["remember_me"];

    $_SESSION["input"] = $_POST;


    // CHECK REQUIRED FIELDS
    if ($email == "" || $password == "") {
        $_SESSION["msg"] = "Email and Password are required fields!";
        header("Location: ../login.php");
        die();
    }

    // IS USER EXISTS
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";

    $res = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($res);

    if (mysqli_num_rows($res) > 0) {

        $verifyPass = password_verify($password, $user["password"]);
        if ($verifyPass) {

            if ($user['verified'] == 0) {

                $_SESSION["user_id"] = $user["id"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["admin"] = $user["admin"];

                if ($remember_me) {
                    setcookie("email", $email, time() + (7 * 24 * 60 * 60), "/");
                    setcookie("password", $password, time() + (7 * 24 * 60 * 60), "/");


                } else {
                    setcookie("email", "", 1, "/");
                    setcookie("password", "", 1, "/");
                    echo "Hello Cokie";

                }


                header("Location: ../index.php");
                die();

            } else {
                $_SESSION["msg"] = "Please Verify Your Account!";
                header("Location: ../login.php");
                die();
            }

        } else {
            $_SESSION["msg"] = "Email or Password is Incorrect!";
            header("Location: ../login.php");
            die();
        }

    } else {
        $_SESSION["msg"] = "Email or Password is Incorrect!";
        header("Location: ../login.php");
        die();
    }

}

?>