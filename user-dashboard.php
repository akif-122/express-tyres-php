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

                <?php
                // include "php/config.php";
                // $userId = $_SESSION["user_id"];

                // $sql = "SELECT * FROM `users` WHERE `id` = $userId";
                // $res = mysqli_query($conn, $sql);

                // if (mysqli_num_rows($res) == 1) {
                //     $row = mysqli_fetch_assoc($res);
                // }

                ?>

                <div class="row">
                    <div class="col-md-3">

                        <?php include "includes/user-side.php" ?>

                    </div>

                    <div class="col-md-9">



                        <div class="user-main">
                            <h5>User Information</h5>
                            <div class="user-profile">
                                <h4><?php echo $row["fname"] . " " . $row["lname"]; ?></h4>


                                <div class="row">

                                    <div class="col-md-6">
                                        <p><strong>Email:</strong> <?php echo $row["email"]; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Phone:</strong> <?php echo $row["phone"]; ?></p>
                                    </div>
                                   

                                </div>




                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Company Name:</strong> <?php echo $row["company_name"]; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Country:</strong> <?php echo $row["country"]; ?></p>
                                    </div>


                                    <div class="col-md-6">
                                        <p><strong>City:</strong> <?php echo $row["city"]; ?></p>
                                    </div>


                                    <div class="col-md-6">
                                        <p><strong>Address:</strong> <?php echo $row["address"]; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Post Code:</strong> <?php echo $row["postcode"]; ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Company Phone:</strong> <?php echo $row["company_phone"]; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->



        <?php
        include_once "includes/footer.php";
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