

<?php
include "php/config.php";
$current_page = basename($_SERVER['REQUEST_URI'], ".php");

$userId = $_SESSION["user_id"];

$sql = "SELECT * FROM `users` WHERE `id` = $userId";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) == 1) {
    $row = mysqli_fetch_assoc($res);
}

?>


<aside class="side-bar">
    <h3><?php echo $row["fname"] . " " . $row["lname"]; ?></h3>

    <ul>
        <li><a href="user-dashboard.php" class="<?php echo ($current_page == 'user-dashboard') ? 'active' : '' ?>"><i
                    class="fa-solid fa-user"></i> Profile</a></li>
        <li><a href="user-change-password.php"
                class="<?php echo ($current_page == 'user-change-password') ? 'active' : '' ?>"><i
                    class="fa-solid fa-lock"></i> Change Password</a></li>
        <li><a href="php/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
    </ul>
</aside>