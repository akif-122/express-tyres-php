<?php
include "php/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
        <div class="main">
            <?php include "includes/sidebar.php" ?>

            <div class="main-wrap" id="mainArea">



                <div class="top-bar d-flex w-100">
                    <button class="sidebar-toggler" id="sideToggler">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <h4 class="m-0">Dashboard</h4>

                    <div class="right-top dropwdown ms-auto">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="../php/logout.php" class="dropdown-item">Logout</a>
                        </ul>
                    </div>

                </div>
                <div class="content-area mt-5">
                    <div class="col-md-9 mx-auto">

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-0">Add Product</h5>

                            <a href="products.php">All Products</a>

                        </div>

                        <p class="mb-0 mt-4 text-danger"><?php if (isset($_SESSION["msg"])) {
                            echo $_SESSION["msg"];
                        } ?></p>
                        <p class="m-0  text-success"><?php if (isset($_SESSION["success"])) {
                            echo $_SESSION["success"];
                        } ?>
                        </p>

                        <div class="form form-wrap sign-up-wrap ">
                            <form action="php/add-product.php" method="post">
                                <div class="row">

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="name">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Image:</label>
                                            <input type="text" name="image" class="form-control" placeholder="Imge Url">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Manufacture Name:</label>
                                            <select class="form-select" name="manu_name" id="">
                                                <option value="" selected disabled>Select Manufacture</option>
                                                <?php
                                                $sql = "SELECT * FROM manufacturers";
                                                $res = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_assoc($res)) {


                                                        ?>
                                                        <option value="<?php echo $row["id"]; ?>">
                                                            <?php echo $row["manu_name"]; ?></option>
                                                        <?php

                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Tyre Patteren:</label>
                                            <select class="form-select" name="patteren_type" id="">
                                                <option value="" selected disabled>Select Patteren</option>
                                                <?php
                                                $sql = "SELECT * FROM tyre_patteren";
                                                $res = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_assoc($res)) {


                                                        ?>
                                                        <option value="<?php echo $row["pid"]; ?>"><?php echo $row["p_name"]; ?>
                                                        </option>
                                                        <?php

                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Fuel Efficiency:</label>
                                            <input type="text" name="fuel" class="form-control"
                                                placeholder="Fuel Efficiency">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Wet Grip:</label>
                                            <input type="text" name="wet_grip" class="form-control"
                                                placeholder="Wet Grip">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Road Noise:</label>
                                            <input type="text" name="road_noise" class="form-control"
                                                placeholder="Road Noise">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Size:</label>
                                            <input type="text" name="size" class="form-control" placeholder="Size">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Tyre Type:</label>
                                            <input type="text" name="type" class="form-control"
                                                placeholder="Tyre Type(car, bike etc)">
                                        </div>
                                    </div>

                                    <div class="col-md-5 mb-4">
                                        <label for="">Season Type:</label>
                                        <div class="">
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="winter" class="form-check-label">Winter</label>
                                                <input type="radio" class="form-check-input" name="season" value="0"
                                                    id="winter">
                                            </div>

                                            <div class="form-check form-check-inline mt-2">
                                                <label for="summer" class="form-check-label">Summer</label>
                                                <input type="radio" class="form-check-input" name="season" value="1"
                                                    id="summer">
                                            </div>

                                            <div class="form-check form-check-inline mt-2">
                                                <label for="all" class="form-check-label">All Season</label>
                                                <input type="radio" class="form-check-input" name="season" value="2"
                                                    id="all">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">

                                        <label for="budget">Budget Tyre</label>
                                        <div class="form-check mt-2">
                                            <label for="budget">Yes Budget Tyre</label>
                                            <input id="budget" type="checkbox" name="budget" value="1"
                                                class="form-check-input">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Price:</label>
                                            <input type="text" name="price" class="form-control" placeholder="Price">
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary ">Add Product</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>



                </div>


                <?php
                unset($_SESSION["msg"]);
                unset($_SESSION["success"]);
                ?>

            </div>

        </div>
    </div>

    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>



    <script>
        let sideBar = document.getElementById("sideBar");
        let sideToggler = document.getElementById("sideToggler");
        let mainArea = document.getElementById("mainArea");
        let closeBtn = document.getElementById("sideCloseBtn");

        sideToggler.addEventListener("click", function (e) {
            sideBar.classList.toggle("none")
            mainArea.classList.toggle("side-none")
        })

        closeBtn.addEventListener("click", function (e) {
           sideBar.classList.remove("none")
           mainArea.classList.remove("side-none")
        })

    </script>

</body>

</html>