<aside class="side-bar" id="sideBar">

    <button class="side-close d-lg-none" id="sideCloseBtn"><i class="fa-regular fa-circle-xmark"></i></button>
    
    <?php

    if (!isset($_SESSION["loggedin"]) || $_SESSION['admin'] != "1") {
        header("Location: ../index.php");
    } 

    $current_page = basename($_SERVER["REQUEST_URI"], ".php");

    ?>
    <div class="logo">
        <!-- <img src="" alt=""> -->
        <h4 class="text-center text-white">Admin</h4>
    </div>
    <?php

    ?>
    <div class="navs">
        <ul>
            <li>
                <a class="<?php echo ($current_page == "dashboard") ? "active" : "" ?>" href="dashboard.php"><i
                        class="fa-solid fa-table-cells"></i> Dashboard</a>
            </li>
            <li>
                <a class="<?php echo ($current_page == "products") ? "active" : "" ?>" href="products.php"><i
                        class="fa-solid fa-box-archive"></i> Products</a>
            </li>
            <li>
                <a class="<?php echo ($current_page == "manufacturers") ? "active" : "" ?>" href="manufacturers.php"><i
                        class="fa-solid fa-list"></i> Manufacturers</a>
            </li>
            <li>
                <a class="<?php echo ($current_page == "tyre-patteren") ? "active" : "" ?>" href="tyre-patteren.php"><i
                        class="fa-solid fa-sliders"></i> Tyre Patteren</a>
            </li>
        </ul>
    </div>

    <a class="logout" href="../php/logout.php"><i class="fa-solid fa-right-from-bracket"></i> log Out</a>

</aside>

<script>
    
</script>