<?php
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

                <?php
                include "includes/topbar.php";
                ?>




                <div class="content-area mt-5">

                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Manufacturers</h5>
                            </div>
                            <?php
                            include "php/config.php";
                            $sql = "SELECT * FROM `manufacturers`";

                            $res = mysqli_query($conn, $sql);


                            ?>


                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Manufacturer Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Created At</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($res)) { ?>
                                            <tr>
                                                <td><?php echo $row['manu_name'] ?></td>
                                                <td>Image</td>
                                                <td><?php echo substr($row['excerp'], 0, 100) ?>...</td>
                                                <td><?php echo substr($row['created_at'], 0, 50) ?></td>



                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Tyre Pattern</h5>


                            </div>
                            <?php
                            include "php/config.php";
                            $sql = "SELECT * FROM `tyre_patteren` as tyre  JOIN `manufacturers` as manu ON tyre.manu_id = manu.id  ";

                            $res = mysqli_query($conn, $sql);


                            ?>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Patteren Name</th>
                                            <th>manufacture</th>
                                            <th>Created At</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($res)) { ?>
                                            <tr>
                                                <td><?php echo $row['p_name'] ?></td>
                                                <td><?php echo $row['manu_name'] ?></td>
                                                <td><?php echo $row['created_at'], 0, 50 ?></td>

                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Products</h5>


                    </div>
                    <?php
                    include "php/config.php";
                    $sql = "SELECT * FROM `tyres` LEFT JOIN `manufacturers` ON tyres.manu_id = manufacturers.id LEFT JOIN `tyre_patteren` ON tyres.p_id = tyre_patteren.pid ";

                    $res = mysqli_query($conn, $sql);


                    ?>


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tyre Name</th>
                                    <th>Image</th>
                                    <th>Manufac. Name</th>
                                    <th>Tyre Patteren</th>
                                    <th>fuel Effic.</th>
                                    <th>Wet Grip</th>
                                    <th>Road Noise</th>
                                    <th>Size</th>
                                    <th>Price</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td><?php echo $row['tyre_name'] ?></td>
                                        <td>Image</td>
                                        <td><?php echo $row['manu_name'] ?></td>
                                        <td><?php echo $row['p_name'] ?></td>
                                        <td><?php echo $row['fuel_efficiency'] ?></td>
                                        <td><?php echo $row['wet-grip'] ?></td>
                                        <td><?php echo $row['road_noise'] ?></td>
                                        <td><?php echo $row['size'] ?></td>

                                        <td><?php echo $row['tyre_price'] ?></td>

                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
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