<?php

?>
<!DOCTYPE html>
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
        <?php include_once "includes/header.php";
        ?>


        <!-- REGISTRATION FORM START-->
        <section class="registration form-wrap">
            <div class="container ">
                <p class="text-danger col-lg-5 mx-auto col-md-6"><?php if (isset($_SESSION["msg"])) {
                    echo $_SESSION["msg"];
                } ?>
                </p>
                <p class="text-success col-lg-5 mx-auto col-md-6"><?php if (isset($_SESSION["msg-send"])) {
                    echo $_SESSION["msg-send"];
                } ?>
                </p>
                <form action="php/forget-password.php" method="POST">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        <h5 class="text-center mb-4">FORGOT PASSWORD</h5>
                        <div class="row">

                            <div class="col-12  mb-4 mb-lg-0">

                                <div class="form-group mb-3">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                                </div>



                            </div>



                        </div>
                        <div class="mt-2 px-0">
                            <button class="main-btn w-100">Reset Password</button>
                        </div>
                        <p class="px-0 my-2">Login Here <a href="login.php">Login</a> </p>





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