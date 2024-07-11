<?php
session_start();
include_once "config.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);


    if ($email == "") {
        $_SESSION["msg"] = "Email is required.";
        header("Location: ../forget-password.php");
        die();
    }

    $sql = "SELECT * FROM `users` WHERE `email` = '$email'";

    $res = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($res);


    if (mysqli_num_rows($res) > 0) {

        echo $token = md5(uniqid(mt_rand(), true));

        $sql1 = "UPDATE `users` SET `token`= '$token' WHERE `email` = '$email' ";

        $res1 = mysqli_query($conn, $sql1);

        if ($res1) {
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
                $mail->addAddress($email);               //Name is optional


                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Reset Password';
                $mail->Body = '<h3>Hello ' . $user['fname'] . '!</h3> <p>Click on the link below to reset your password </p> <a href=http://localhost/xpress-tyres/reset-password.php?token=' . $token . '&email=' . $email . ' >http://localhost/xpress-tyres/reset-password.php?token=' . $token . '&email=' . $email . '</a>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                $_SESSION["msg-send"] = "Reset Password link sent to your email.";
                header("Location: ../forget-password.php");
                die();
            } catch (Exception $e) {
                $_SESSION["msg"] = "Something goes wrong please try again.";
                header("Location: ../forget-password.php");
                die();
            }
        }





    } else {
        $_SESSION["msg"] = "User is not Found.";
        header("Location: ../forget-password.php");
        die();
    }





}








// try {
//     //Server settings
//     $mail->isSMTP();
//     $mail->Host = "smtp.gmail.com";
//     $mail->SMTPAuth = true;
//     $mail->Username = "akifullah0317@gmail.com";                    //SMTP username
//     $mail->Password = 'ncvvhicrbhfmmsoh';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//     $mail->Port = 587;

//     //Recipients
//     $mail->setFrom('akifullah0317@gmail.com', 'Webspires Pvt Ltd.');
//     $mail->addAddress('akifullah0317@gmail.com');               //Name is optional


//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

?>