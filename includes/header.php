<?php
session_start();

$current_page= basename($_SERVER['REQUEST_URI'], ".php");

$current_page = explode(".", $current_page);

?>
<div class="wrapper">
    <!-- TOP BAR SECTION START -->
    <section class="top-bar d-flex align-items-center justify-content-between ">
        <ul class="m-0 d-flex align-items-center list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <div class="top-right-account dropdown">
            <a href="#" class="text-uppercase">MY ACCOUNT <i class="fa-solid fa-caret-down ms-2"></i></a>
            <div class="dropdown-menu">
                <?php
                if (isset($_SESSION["user_id"])) {
                    ?>
                    <a href="user-dashboard.php" class="dropdown-item">Dashboard</a>
                    <a href="php/logout.php" class="dropdown-item">Logout</a>

                    <?php

                } else {

                    ?>
                    <a href="signup.php" class="dropdown-item">Sign Up / Regiser</a>
                    <a href="login.php" class="dropdown-item">Login</a>
                <?php } ?>
            </div>
        </div>

    </section>
    <!-- TOP BAR SECTION END -->

    <!-- HEADER SECTION START -->
    <header class="header">
        <div class="row align-items-center">
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#">
                    <img class="logo" src="assets/imgs/logo.png" width="100%" alt="">
                </a>
            </div>

            <div class="col-6 col-lg-9 ">
                <div class="row align-items-center">

                    <div class="col-sm-5 col-md-5 col-lg-4 d-none d-md-block">

                        <div class="h-icon-box d-flex align-items-center">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="h-text">
                                <p class="my-0">Unit 4 Church Street, Middleton Manchester M24 2PY, UK</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-3 col-md-4 col-lg-3 col-lg-2 d-none d-xl-flex">


                        <div class="h-icon-box d-flex align-items-center ">
                            <div class="icon">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div class="h-text">
                                <p class="my-0">24/7 Open</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-3 col-md-4 col-lg-4 col-xl-3 d-none d-md-block">


                        <div class="h-icon-box d-flex align-items-center">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="h-text">
                                <p class="my-0"><a href="tel:01616547756">01616547756</a></p>
                                <p class="my-0 "> <a href="tel:07899757543">07899757543</a>
                                    <a>(24/7)</a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-3 col-md-2 col-sm-3 ms-auto align-self-center">


                        <div
                            class="h-icon-box cart-box d-flex flex-column justify-content-center align-items-end align-items-sm-center">
                            <div class="icon">
                                <i class="fa-solid fa-bag-shopping"></i>
                                <span id="count">0</span>
                            </div>
                            <div class="h-text">
                                <p>Your Cart</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </header>
    <!-- HEADER SECTION END -->

    <!-- NAVBAR SECTION START -->
    <nav class="navbar navbar-dark navbar-expand-lg main-nav p-0 ">
        <div class="container-xl">
            <h4 class="d-lg-none">Navigation Menu</h4>

            <button class="navbar-toggler" data-bs-target="#myNav" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav">
                    <li><a href="index.php"
                            class="<?php echo ($current_page[0] == 'index' || $current_page[0] == '') ? 'active' : ''; ?>"><i
                                class="fa-solid fa-house"></i></a></li>


                   

                    <?php
                    include "config.php";
                    $sql = "SELECT * FROM  `manufacturers` ORDER BY id desc LIMIT 8";
                    $res = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($res) > 0) {
                        ?>
                        <li class="dropdown mega-dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="<?php echo ($current_page[0] == 'manufacturers') ? 'active' : ''; ?> dropdown-toggle">
                                TYRE MANUFACTURERS</a>



                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="row">

                                    <?php
                                    while ($row = mysqli_fetch_assoc($res)) { ?>

                                        <div class="col-md-4 col-lg-3">
                                            <a href="manufacturers.php?id=<?php echo $row["id"]; ?>"><?php echo $row["manu_name"] ?> Tyres </a>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>

                        </li>
                    <?php } ?>

                    <li class="dropdown mega-dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                            class="<?php echo ($current_page[0] == 'services') ? 'active' : ''; ?> dropdown-toggle">
                            Services</a>

                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <a href="services.php">Wheel Balancing</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="services.php">24X7 Service Home Work Roadside</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="services.php">Roadside Tire Fitting Assistance</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="services.php">Mobile Tyre Repair</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="services.php">Continental Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="services.php">Emergency Tyre Fitting</a>
                                </div>



                            </div>
                        </div>
                    </li>

                    <li><a href="gallery.php"
                            class="<?php echo ($current_page[0] == 'gallery') ? 'active' : ''; ?>">Gallery</a></li>
                    <li><a href="new-part-worn-tyre.php"
                            class="<?php echo ($current_page[0] == 'new-part-worn-tyre') ? 'active' : ''; ?>">New & Part
                            Worn Tyres</a></li>
                    <li><a href="blogs.php" class="<?php echo ($current_page[0] == 'blogs') ? 'active' : ''; ?>">Blog</a>
                    </li>
                    <li><a href="about.php" class="<?php echo ($current_page[0] == 'about') ? 'active' : ''; ?>">About
                            Us</a></li>
                    <li><a href="contact.php"
                            class="<?php echo ($current_page[0] == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>


                </ul>
            </div>

        </div>
    </nav>
    <!-- NAVBAR SECTION END -->