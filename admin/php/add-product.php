<?php
include "config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $image = mysqli_real_escape_string($conn, $_POST["image"]);
    $manu_name = mysqli_real_escape_string($conn, $_POST["manu_name"]);
    $patteren_type = mysqli_real_escape_string($conn, $_POST["patteren_type"]);
    $fuel = mysqli_real_escape_string($conn, $_POST["fuel"]);
    $wet_grip = mysqli_real_escape_string($conn, $_POST["wet_grip"]);
    $road_noise = mysqli_real_escape_string($conn, $_POST["road_noise"]);
    $size = mysqli_real_escape_string($conn, $_POST["size"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $season = mysqli_real_escape_string($conn, $_POST["season"]);
    $budget = mysqli_real_escape_string($conn, $_POST["budget"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);


    if ($name == "" || $image == "" || $manu_name == "" || $patteren_type == "" || $fuel == "" || $wet_grip == "" || $road_noise == "" || $size == "" || $type == "" || $season == "" || $budget == "" || $price == "") {
        $_SESSION["msg"] = "All Field are required";
        header("Location: ../add-product.php");
        die();
    }


    $sql = "INSERT INTO `tyres`(`tyre_name`,`image`, `fuel_efficiency`, `wet-grip`, `road_noise`, `size`, `tyre_type`, `season_type`, `budget_tyre`, `tyre_price`, `manu_id`, `p_id`) 
            VALUES('$name', '$image', '$fuel', '$wet_grip', '$road_noise', '$size', '$type', '$season', '$budget', '$price' , '$manu_name',  '$patteren_type')";

    $res = mysqli_query($conn, $sql);

    if($res){
        $_SESSION["success"] = "Product Added Successfully.";
        header("Location: ../add-product.php");
        die();
    }else{
        $_SESSION["msg"] = "Something Goes Wrong Please try again.";
        header("Location: ../add-product.php");
        die();
    }


}
?>