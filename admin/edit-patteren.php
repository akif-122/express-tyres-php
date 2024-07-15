<?php
include "php/config.php";
session_start();
if (!isset($_GET["id"]) || empty($_GET["id"])) {
    header("Location: tyre-patteren.php");
}
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

    <style>
        .cke_notification_warning {
            display: none !important;
        }
    </style>

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
                    <div class="col-md-5 mx-auto">

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-0">Edit Patteren</h5>

                            <a href="tyre-patteren.php">All Patteren</a>

                        </div>

                        <p class="mb-0 mt-4 text-danger"><?php if (isset($_SESSION["msg"])) {
                            echo $_SESSION["msg"];
                        } ?></p>
                        <p class="m-0  text-success"><?php if (isset($_SESSION["success"])) {
                            echo $_SESSION["success"];
                        } ?>
                        </p>

                        <div class="form form-wrap sign-up-wrap ">

                            <?php
                            $id = $_GET["id"];

                            $sql2 = "SELECT * FROM `tyre_patteren` WHERE pid = '$id'";
                            $res2 = mysqli_query($conn, $sql2);

                            if (!mysqli_num_rows($res2) > 0) {
                                header("Location: tyre-patteren.php");
                            }

                            $row2 = mysqli_fetch_assoc($res2);
                            ?>


                            <form action="php/update-patteren.php" method="post">
                                <div class="row">

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Name:</label>
                                            <input type="hidden" name="id" value="<?php echo $row2["pid"] ?>">
                                            <input type="text" name="name" value="<?php echo $row2["p_name"] ?>"
                                                class="form-control" placeholder="name">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Manufacturers:</label>

                                            <select name="manu_id" class="form-select" id="">
                                                <option value="" disabled selected>Select Patteren</option>
                                                <?php
                                                $sql = "SELECT * FROM `manufacturers`";
                                                $res = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_assoc($res)) {

                                                        if ($row2["manu_id"] == $row["id"]) {
                                                            $selected = "selected";
                                                        } else {
                                                            $selected = "";
                                                        }

                                                        ?>
                                                        <option <?php echo $selected; ?> value="<?php echo $row["id"]; ?>">
                                                            <?php echo $row["manu_name"]; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>

                                        </div>
                                    </div>




                                    <div class="col-12 text-center">
                                        <button class="btn btn-primary ">Update Patteren</button>
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

    <script src="assets/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace("desc");
    </script>



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