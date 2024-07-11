<?php
include_once "php/config.php";
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
        <?php include_once "includes/header.php" ?>
        <?php
        $id = $_GET["id"];
        $sql1 = "SELECT * FROM `manufacturers` WHERE id = '$id'";
        $res1 = mysqli_query($conn, $sql1);

        $row1 = mysqli_fetch_assoc($res1);
        ?>


        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner " style="background-image: url('assets/imgs/dunlop-banner.jpg');">
            <div class="container">
                <div class="banner-text">
                    <h1><?php echo $row1["manu_name"] ?> Tyres</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <!-- SEARCH SECTION START -->
        <section class="man-search">
            <div class="search-wrap">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="search-reg-number">
                            <form action="#">
                                <h3>Search Tyres by Vehicle Registration</h3>
                                <div class="row">
                                    <div class="col-lg-5 mb-2 px-1">
                                        <div class="form-group reg">
                                            <input type="text" class="form-control" placeholder="ENTER REG">
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-6 mb-2 px-1">
                                        <div class="form-group ">
                                            <select name="" id="" class="form-select">
                                                <option value="">Garage Fitted</option>
                                                <option value="">Mobile Fitted</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-2 px-1">
                                        <button class="search-btn w-100">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="col-md-7 ">
                        <div class="search-by-tyres">
                            <h3>Search by Tyre size</h3>

                            <form action="">
                                <div class="row">
                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="" class="form-select" id="">
                                                <option value="215">215</option>
                                                <option value="22">22</option>
                                                <option value="225">225</option>
                                                <option value="235">235</option>
                                                <option value="24">24</option>
                                                <option value="245">245</option>
                                                <option value="25">25</option>
                                                <option value="255">255</option>
                                                <option value="265">265</option>
                                                <option value="275">275</option>
                                                <option value="285">285</option>
                                                <option value="295">295</option>
                                                <option value="305">305</option>
                                                <option value="31">31</option>
                                                <option value="315">315</option>
                                                <option value="325">325</option>
                                                <option value="33">33</option>
                                                <option value="335">335</option>
                                                <option value="345">345</option>
                                                <option value="350">350</option>
                                                <option value="355">355</option>
                                                <option value="500">500</option>
                                                <option value="7.50">7.50</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="profile" class="form-select">
                                                <option value="">Profile</option>
                                                <option value="40">40</option>
                                                <option value="45">45</option>
                                                <option value="50">50</option>
                                                <option value="55" selected="">55</option>
                                                <option value="60">60</option>
                                                <option value="65">65</option>
                                                <option value="70">70</option>
                                                <option value="75">75</option>
                                                <option value="80">80</option>
                                            </select>

                                        </div>

                                    </div>


                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="diameter" class="form-control">
                                                <option value="">Rim Size</option>
                                                <option value="15">15</option>
                                                <option value="16" selected="">16</option>
                                                <option value="17">17</option>
                                                <option value="19">19</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="speed" class="form-select">
                                                <option value="">Any</option>
                                                <option value="H">H</option>
                                                <option value="T">T</option>
                                                <option value="V">V</option>
                                                <option value="W">W</option>
                                                <option value="Y">Y</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="order_type" class="form-select">
                                                <option selected="selected" value="fullyfitted">Garage Fitted</option>
                                                <option value="mobilefitted">Mobile Fitted</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <button class="search-btn w-100">
                                            Search
                                        </button>
                                    </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SEARCH SECTION END -->


        <!-- TYRES DETAIL SECTION START -->
        <section class="tyres-detail">
            <div class="container">



                <h2 class="text-center"><?php echo $row1["manu_name"] ?> Tyres</h2>

                <?php

                if ($row1["description"]) {

                    ?>
                    <div class="tyres-text">
                        <p>We can all agree that a set of good tyres is a must-have to keep the vehicle up and running for a
                            long time. If you have been driving with worn-out tyres for years or are looking for some
                            quality tyres, wait no more. A set of good tyres can have a huge impact on your overall driving
                            experience. To ease this task for you, <strong>XPRESS TYRES LTD</strong>. recommends premier
                            <strong>Dunlop tyres Manchester</strong>. Their latest range is available online at our garage.
                        </p>

                        <p>Pneumatic tyre pioneer John Boyd Dunlop founded Dunlop in Birmingham, England, in 1889. It is
                            operated and owned by Goodyear Tire and Rubber Company in North America, Europe, New Zealand,
                            and Australia. The company has extensive manufacturing operations worldwide.

                        </p>

                        <p>What do their tyres have that makes them stand apart? It’s their reliable quality and dependable
                            performance. They ensure a quiet and smooth drive and seem to hold the road well. Breaking down
                            its performance, Dunlop tyres provide superb handling, fantastic dry grip (they do not suddenly
                            lose grip even in wet weather conditions), and stiff sidewalls, because of which the driver will
                            not feel any flex or roll-over in hard cornering. Their tyres can sustain significant long,
                            spirited driving without being prone to wear and tear.</p>

                        <p>Dunlop has been the favourite of motorsport events such as the Le Mans 24-Hour and the Isle of
                            Man TT. They have been the leading tyre developers on four-wheels and two-wheels, on-track and
                            off-road. All the experience gathered from such events is converted into better technology by
                            the tyre manufacturers. These new technologies are tested and then adapted for road use.</p>

                        <p>Additionally, Dunlop is a proud technical partner to Mercedes AMG Customer Sports and many of the
                            world’s leading vehicle manufacturers, which include Audi, Porsche, BMW, Lexus, Honda, and
                            Mercedes-Benz. It is no surprise that Dunlop has become one of the most iconic and recognisable
                            tyre brands in the world today. It has an entire 120-year history of pioneering groundbreaking
                            innovations in car performance and safety.</p>

                        <p>Affordable <strong>Dunlop Tyres Manchester</strong> can be ordered online for delivery to car
                            owners around the globe. These tyres are available for vans, cars, SUVs and 4x4s. The turn-in is
                            that these tyres are razor-sharp and suitable even for sporty driving. XPRESS TYRES LTD. offers
                            a complete range of dunlop tyres Manchester from this renowned brand at affordable price levels.
                            Take time to meet our technicians to get the best tyres for your vehicle and enjoy a host of
                            after-care services, all within your budget.</p>

                    </div>

                    <?php
                }
                ?>


                <!-- TYRES START-->
                <section class="tyres mt-0">
                    <h3 class="text-center mb-4">All tyres by <strong><?php echo $row1["manu_name"] ?> Tyres</strong>
                    </h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5">
                            <div class="tyres-manu">
                                <ul>

                                    <?php
                                    $sql = "SELECT * FROM  `manufacturers`";
                                    $res = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($res) > 0) {
                                        while ($row = mysqli_fetch_assoc($res)) {

                                            $mamu_active = ($_GET['id'] == $row["id"]) ? "active" : "";


                                            ?>


                                            <li>
                                                <a class="<?php echo $mamu_active; ?>"
                                                    href="manufacturers.php?id=<?php echo $row["id"]; ?>"><strong><?php echo $row["manu_name"] ?></strong>
                                                    Tyres <i class="fa-solid fa-angle-right"></i> </a>
                                            </li>

                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">

                            <div class="row">

                                <?php
                                $sql3 = "SELECT * FROM tyres JOIN tyre_patteren ON tyres.p_id = tyre_patteren.pid WHERE tyres.manu_id = '$id'";

                                $res3 = mysqli_query($conn, $sql3);
                                if (mysqli_num_rows($res3)) {
                                    while ($row = mysqli_fetch_assoc($res3)) {

                                        ?>

                                        <!-- tyre card -->
                                        <div class="col-sm-6 mb-3">
                                            <div class="tyre-card">
                                                <div class="row">

                                                    <div class="col-lg-4">
                                                        <div class="trye-img">
                                                            <img src="assets/imgs/tyres/econodrive.jpg" width="100%" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8">
                                                        <div class="tyre-card-text">
                                                            <a href="tyre-pattren.php"><?php echo $row1["manu_name"] . " " . $row["tyre_name"]  ?></a>
                                                            <p>Price from <strong>£127.05</strong></p>
                                                            <div class="tyre-card-btn">
                                                                <a href="tyre-pattren.php?mid=<?php echo $row["manu_id"] ?>&pid=<?php echo $row["pid"] ?>">Find OUT MORE <i
                                                                        class="fa-solid fa-angle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                } else {
                                    ?>
                                    <div class="col-md-6  mt-5 ">
                                        <h6 class="text-center">No record Found.</h6>
                                    </div>
                                <?php } ?>




                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES DETAIL SECTION END -->


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