<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Tyeres</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="wrapper">
        <?php include_once "includes/header.php" ?>


        <!-- REGISTRATION FORM START-->
        <section class="registration form-wrap">
            <div class="container ">
                <p class="text-danger col-lg-5 col-md-6 mx-auto">
                    <?php if (isset($_SESSION["msg"])) {
                        echo $_SESSION["msg"];
                    } ?>
                </p>
                <form action="php/signin.php" method="POST">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        <h5 class="text-center mb-4">PLEASE LOGIN</h5>
                        <div class="row">

                            <div class="col-12  mb-4 mb-lg-0">

                                <div class="form-group mb-3">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="email" placeholder="Email Address" name="email" class="form-control">
                                </div>

                                <div class="form-group mb-1">
                                    <label for="">Password <span>*</span> </label>
                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                </div>

                                <div
                                    class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-between">

                                    <div class="text-end">
                                        <p class="m-0"><a href="forget-password.html">Forgot Password?</a></p>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="remeberme" class="form-check-input" id="remeber">
                                        <label for="remeber">Remember me</label>
                                    </div>
                                </div>


                            </div>



                        </div>
                        <div class="mt-2 px-0">
                            <button class="main-btn w-100">Signin</button>
                        </div>
                        <p class="px-0 my-2">Don't have an account? <a href="signup.html">Register</a> </p>





                    </div>
                </form>
            </div>
        </section>
        <!-- REGISTRATION FORM END -->

        <?php
        include_once "includes/footer.php";
        unset($_SESSION["msg"]);
        ?>


    </div>


    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>



</body>

</html>