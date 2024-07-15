<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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


    <?php





    if (isset($_SESSION["input"])) {
        $email = $_SESSION["input"]["email"];
        $password = $_SESSION["input"]["password"];

    } elseif (isset($_COOKIE["email"])) {
        $email = $_COOKIE["email"];
        $password = $_COOKIE["password"];
    } else {
        $email = "";
        $password = "";
    }




    ?>



    <div class="d-flex align-items-center justify-content-center w-100" style="min-height: 100vh;">

        <!-- REGISTRATION FORM START-->
        <section class="registration form-wrap w-100">
            <div class="container ">
                <p class="text-danger col-lg-5 col-md-6 mx-auto">
                    <?php if (isset($_SESSION["msg"])) {
                        echo $_SESSION["msg"];
                    } ?>
                </p>
                <form action="php/signin.php" method="POST">
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        <h5 class="text-center mb-4">Admin Login</h5>
                        <div class="row">

                            <div class="col-12  mb-4 mb-lg-0">

                                <div class="form-group mb-3">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="email" placeholder="Email Address" name="email" class="form-control"
                                        value="<?php echo $email; ?>">
                                </div>

                                <div class="form-group mb-1">
                                    <label for="">Password <span>*</span> </label>
                                    <input type="password" placeholder="Password" name="password" class="form-control"
                                        value="<?php echo $password; ?>">
                                </div>

                                <div
                                    class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-between">

                                    <div class="text-end">
                                        <p class="m-0"><a href="forget-password.php">Forgot Password?</a></p>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="remember_me" <?php if (isset($_COOKIE["email"])) {
                                            echo "checked";
                                        } ?> value="1" class="form-check-input" id="remeber">
                                        <label for="remeber">Remember me</label>
                                    </div>
                                </div>


                            </div>



                        </div>
                        <div class="mt-2 px-0">
                            <button class="main-btn w-100">Signin</button>
                        </div>

                        <?php
                        unset($_SESSION["msg"]);
                        ?>



                    </div>
                </form>
            </div>
        </section>
        <!-- REGISTRATION FORM END -->
    </div>

</body>

</html>