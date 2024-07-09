<!DOCTYPE html>
<?php



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
    <link rel="stylesheet" href="assets/css/user-dashboard.css">

</head>

<body>

    <div class="wrapper">
        <?php

        include_once "includes/header.php";



        ?>


        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">

                <div class="row">
                    <div class="col-md-3">

                        <?php include "includes/user-side.php" ?>

                    </div>

                    <div class="col-md-9">
                        <div class="user-main">
                            <h5>Change Password</h5>

                            <section class="registration form-wrap">
                                <div class="container ">
                                    <p class="text-danger col-lg-6 mx-auto col-md-6"><?php if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                    } ?>
                                    </p>
                                    <p class="text-success col-lg-6 mx-auto col-md-6"><?php if (isset($_SESSION["update"])) {
                                        echo $_SESSION["update"];
                                    } ?>
                                    </p>
                                    <form action="php/change-password.php" method="POST">
                                        <div class="col-lg-6 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                                            <h5 class="text-center mb-4">Change Password</h5>
                                            <div class="row">

                                                <div class="col-12  mb-4 mb-lg-0">
                                                    <input type="hidden" value="<?php echo $userId ?>" name="user-id">



                                                    <div class="form-group mb-3">
                                                        <label for="">Old Password <span>*</span></label>
                                                        <input type="password" name="opassword"
                                                            placeholder="Enter Old Password" class="form-control">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">New Password <span>*</span></label>
                                                        <input type="password" name="npassword"
                                                            placeholder="Enter New Password" class="form-control">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">Confirm Password <span>*</span></label>
                                                        <input type="password" name="cnpassword"
                                                            placeholder="Enter Confirm Password" class="form-control">
                                                    </div>



                                                </div>



                                            </div>
                                            <div class="mt-2 px-0">
                                                <button class="main-btn w-100">Change Password</button>
                                            </div>





                                        </div>
                                    </form>
                                </div>
                            </section>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->



        <?php
        include_once "includes/footer.php";
        unset($_SESSION["msg"]);
        unset($_SESSION["update"]);
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