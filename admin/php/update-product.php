<?php
include "config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // if(isset($_POST["budget"])){
    //     $budget = $_POST["budget"];
    // }else{
    //     $budget = "0";
    // }
    $id = mysqli_real_escape_string($conn, $_POST["tid"]);
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
    $budget = mysqli_real_escape_string($conn, $_POST["budget"]) ;
    $price = mysqli_real_escape_string($conn, $_POST["price"]);


  
    $sql = "UPDATE `tyres` SET `tyre_name`='$name',`image`='$image',`fuel_efficiency`= '$fuel', `wet-grip`='$wet_grip', `road_noise`= '$road_noise', `size`= '$size', `tyre_type`='$type', `season_type`='$season', `budget_tyre`='$budget', `tyre_price`='$price',`manu_id`= '$manu_name', `p_id`= '$patteren_type' WHERE tid = '$id'  ";

    // $sql = "INSERT INTO `tyres`(`tyre_name`,`image`, `fuel_efficiency`, `wet-grip`, `road_noise`, `size`, `tyre_type`, `season_type`, `budget_tyre`, `tyre_price`, `manu_id`, `p_id`) 
    //         VALUES('$name', '$image', '$fuel', '$wet_grip', '$road_noise', '$size', '$type', '$season', '$budget', '$price' , '$manu_name',  '$patteren_type')";

    $res = mysqli_query($conn, $sql);

    if($res){
        $_SESSION["success"] = "Product Updated Successfully.";
        header("Location: ../products.php");
        die();
    }else{
        $_SESSION["msg"] = "Something Goes Wrong Please try again.";
        header("Location: ../edit-product.php");
        die();
    }


}
?>