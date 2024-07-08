<?php

include "./config.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $cpassword = mysqli_real_escape_string($conn, $_POST["cpassword"]);
    $company_name = mysqli_real_escape_string($conn, $_POST["company_name"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $postcode = mysqli_real_escape_string($conn, $_POST["postcode"]);
    $company_phone = mysqli_real_escape_string($conn, $_POST["company_phone"]);

    $_SESSION["input"] = $_POST;

    if ($fname == "" || $lname == "" || $email == "" || $password == "" || $cpassword == "" || $phone == "") {
        $_SESSION["msg"] = "Please fill all required fields!";
        header("Location: http://localhost/xpress-tyres/signup.php");
        die();
    }

    if ($password !== $cpassword) {
        $_SESSION["msg"] = "Passwords are not matching";
        header("Location: http://localhost/xpress-tyres/signup.php");
        die();
    }


    // CHECK EXISTING USER
    $existUser = "SELECT * FROM `users` WHERE email = '$email' ";

    $res = mysqli_query($conn, $existUser);

    if (mysqli_num_rows($res) > 0) {
        $_SESSION["msg"] = "User Already exists, Please Login.";
        header("Location: http://localhost/xpress-tyres/signup.php");
        die();
    }


    // HASHING PASSWORD
    $hashPass = password_hash($password, PASSWORD_DEFAULT);


    // ADDING NEW USER
    echo $saveUser = "INSERT INTO `users`(`fname`, `lname`, `email`, `phone`, `password`, `company_name`, `country`, `city`, `address`, `postcode`, `company_phone`, `created_at`) VALUES ('$fname','$lname','$email','$phone','$hashPass', '$company_name', '$country', '$city', '$address', '$postcode', '$company_phone' , current_timestamp())";

    $res = mysqli_query($conn, $saveUser);

    if ($res) {
        header("Location: http://localhost/xpress-tyres/login.php");
        die();
    } else {
        $_SESSION["msg"] = "Something goes wrong please try again later.";
        header("Location: http://localhost/xpress-tyres/signup.php");
        die();
    }


}
?>