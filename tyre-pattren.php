<?php
include "php/config.php";
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

        <?php
        include_once "includes/header.php";

        ?>





        <!-- TYRES PATTERN SECTION START -->
        <section class="tyres-detail tyre-pattern">
            <div class="container pattern-container">

                <?php


                $sql = "SELECT * FROM `tyre_patteren` JOIN `manufacturers` ON tyre_patteren.manu_id = manufacturers.id  ";
                $res = mysqli_query($conn, $sql);


                if (mysqli_num_rows($res) > 0) {
                    $row1 = mysqli_fetch_assoc($res);


                    ?>



                    <h2><?php echo $row1["manu_name"] . " " . $row1["p_name"]; ?></h2>
                <?php } ?>

                <!-- TYRES START-->
                <section class="tyres">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 side">
                            <h5>ALL TYRES PATTERNS</h5>
                            <div class="tyres-manu pattern">
                                <ul>
                                    <?php
                                    $mid = $_GET["mid"];
                                    $pid = $_GET["pid"];

                                    $sql2 = "SELECT * FROM `tyre_patteren` WHERE manu_id = '$mid' ";

                                    $res2 = mysqli_query($conn, $sql2);
                                    while ($row = mysqli_fetch_assoc($res2)) {
                                        $active = ($row["pid"] == $_GET["pid"]) ? "active" : "";
                                        ?>
                                        <li><a href="tyre-pattren.php?mid=<?php echo $mid ?>&pid=<?php echo $row["pid"] ?>"
                                                class="<?php echo $active ?>"><?php echo $row["p_name"]; ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">

                            <div class="row">

                                <?php
                                $sql4 = "SELECT * FROM tyres  WHERE p_id = '$pid' AND manu_id = '$mid'";
                                $res4 = mysqli_query($conn, $sql4);

                                if (mysqli_num_rows($res4) > 0) {
                                    while ($row4 = mysqli_fetch_assoc($res4)) {

                                        ?>

                                        <!-- CARD -->
                                        <div class="col-lg-4 col-sm-6 mb-5">
                                            <div class="pattern-card">
                                                <div class="patt-card-head">
                                                    <div class="pt-img">
                                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                                    </div>

                                                    <div class="feature">

                                                        <ul class="list-unstyled">
                                                            <li class="d-flex align-items-center">
                                                                <div class="">
                                                                    <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                                                </div>
                                                                <span
                                                                    class="green"><?php echo $row4["fuel_efficiency"]; ?></span>
                                                            </li>

                                                            <li class="d-flex align-items-center">
                                                                <div class="">
                                                                    <img src="assets/imgs/wet_grip.jpg" alt="">
                                                                </div>
                                                                <span class="orange"><?php echo $row4["wet-grip"]; ?></span>
                                                            </li>

                                                            <li class="d-flex align-items-center">
                                                                <div class="">
                                                                    <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                                                </div>
                                                                <span class="black"><?php echo $row4["road_noise"]; ?></span>
                                                            </li>
                                                        </ul>

                                                    </div>

                                                </div>

                                                <div class="tyre-brand">
                                                    <img src="assets/imgs/dunlop.png" alt="">
                                                </div>

                                                <div class="tyre-detail text-center">
                                                    <h5><?php echo $row4["tyre_name"] ?></h5>
                                                    <p><?php echo $row4["size"] ?></p>
                                                </div>

                                                <div class="durability">
                                                    <?php
                                                    if ($row4['tyre_type'] == "car") {
                                                        ?>
                                                        <div class="icon">
                                                            <img src="assets/imgs/car.png" alt="">
                                                        </div>
                                                    <?php } ?>
                                                    <div class="icon">

                                                        <img src="assets/imgs/summer-icon.png" alt="">
                                                    </div>
                                                    <div class="icon">
                                                        <img src="assets/imgs/budget.png" alt="">
                                                    </div>
                                                </div>

                                                <div class="price">
                                                    <form>

                                                        <div class="price-label">
                                                            <h4>£<?php echo $row4["tyre_price"] ?></h4>
                                                            <p>Garage Fitted</p>
                                                        </div>

                                                        <div class="form-group mb-2">
                                                            <select name="quantity" class="form-select">
                                                                <option value="1">1 Tyre £<?php echo $row4["tyre_price"] ?>
                                                                </option>
                                                                <option value="2">2 Tyre £<?php echo $row4["tyre_price"] * 2 ?>
                                                                </option>
                                                                <option value="3">3 Tyre £<?php echo $row4["tyre_price"] * 3 ?>
                                                                </option>
                                                                <option value="4">4 Tyre £<?php echo $row4["tyre_price"] * 4 ?>
                                                                </option>
                                                            </select>
                                                        </div>

                                                    </form>
                                                    <a href="booking.php">
                                                        <button class="main-btn w-100">
                                                            BUY <i class="fa-solid fa-angle-right"></i>
                                                        </button>
                                                    </a>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- CARD -->

                                        <?php
                                    }
                                } else {
                                    ?>
                                    <h5>No record Found</h5>
                                    <?php
                                }
                                ?>


                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES PATTERN SECTION END -->



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