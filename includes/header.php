<?php
session_start();
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
                    <a href="dashboard.php" class="dropdown-item">Dashboard</a>
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
                    <li><a href="#" class="active"><i class="fa-solid fa-house"></i></a></li>

                    <li class="dropdown mega-dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle">
                            TYRE MANUFACTURERS</a>

                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Maxxis Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Pirelli Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Dunlop Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Bridgestone Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Continental Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Goodyear Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Michelin Tyres</a>
                                </div>

                                <div class="col-md-4 col-lg-3">
                                    <a href="manufacturers.php">Nexen Tyres</a>
                                </div>

                            </div>
                        </div>

                    </li>

                    <li class="dropdown mega-dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle">
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

                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="new-part-worn-tyre.php">New & Part Worn Tyres</a></li>
                    <li><a href="blogs.php">Blog</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>


                </ul>
            </div>

        </div>
    </nav>
    <!-- NAVBAR SECTION END -->