<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


include "./config.php";
if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $interest = mysqli_real_escape_string($conn, $_POST["interest"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);


    // CHECKING VALUE IS EMPTY
    if ($name == "" || $email == "" || $phone == "" || $interest == "" || $message == "") {
        $_SESSION["msg"] = "Please fill all fields.";
        header("Location: ../contact.php");
        die();
    }



    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "akifullah0317@gmail.com";                    //SMTP username
        $mail->Password = 'ncvvhicrbhfmmsoh';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('akifullah0317@gmail.com', 'Webspires Pvt Ltd.');
        $mail->addAddress("akifullah0317@gmail.com");               //Name is optional


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact from Webspires';
        $mail->Body = '<h3>' . $name . '! is Contacting from xpress tyres. </h3> <p><strong>Email: </strong> ' . $email . '. </p> <p><strong>Interest:</strong>' . $interest . '</p> <p><strong>Message:</strong>' . $message . '.</p>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $_SESSION["success"] = "Message Submitted Successfully.";
        header("Location: ../contact.php");

        die();
    } catch (Exception $e) {
        $_SESSION["msg"] = "Something goes wrong please try again.";
        header("Location: ../contact.php");
        die();
    }



}

?>