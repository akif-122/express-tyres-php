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



            <!-- BOOKING STEPS START-->
            <div class="container step-container">
                <div class="booking-steps d-flex align-items-center justify-content-between">

                    <div class="step active">
                        <div class="step-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <p>Search</p>
                    </div>

                    <div class="step active">
                        <div class="step-icon">
                            <i class="fa-regular fa-rectangle-list"></i>
                        </div>
                        <p>Proceed to Booking</p>
                    </div>


                    <div class="step active">
                        <div class="step-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <p>View Cart</p>
                    </div>


                    <div class="step active">
                        <div class="step-icon">
                            <i class="fa-regular fa-calendar-days"></i>
                        </div>
                        <p>Booking Details</p>
                    </div>

                    <div class="step ">
                        <div class="step-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <p>Proceed to Booking</p>
                    </div>

                    <div class="step ">
                        <div class="step-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <p>Confirmation</p>
                    </div>


                </div>
            </div>
            <!-- BOOKING STEPS END -->



            <!-- BOOKING DETAIL -->
            <section class="booking-detail ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4>Select Fitting Time</h4>

                            <div class="row">
                                <div class="col-2 col-sm-1 align-self-end">
                                    <div class=""></div>
                                    <div class="">
                                        <h6>AM</h6>
                                        <h6 class="mb-1 mb-sm-2">PM</h6>
                                    </div>
                                </div>
                                <div class="col-10 col-sm-11 pe-0 pe-sm-3">
                                    <form action="">
                                        <div class="times owl-carousel owl-theme" id="date-slides">

                                            <div class="text-center time-box">
                                                <h6>Sat <br /> 06</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-1">
                                                    <label for="time-1">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-2">
                                                    <label for="time-2">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="text-center time-box">
                                                <h6>Sun <br /> 7</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" disabled name="time" id="time-3">
                                                    <label for="time-3">
                                                        <span class="avail-btn not disabled">Not Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-4">
                                                    <label for="time-4">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="text-center time-box">
                                                <h6>Mon <br /> 08</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-5">
                                                    <label for="time-5">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-6">
                                                    <label for="time-6">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="text-center time-box">
                                                <h6>Tue <br /> 09</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-7">
                                                    <label for="time-7">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-8">
                                                    <label for="time-8">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="text-center time-box">
                                                <h6>Wed <br /> 10</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-9">
                                                    <label for="time-9">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-10">
                                                    <label for="time-10">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Thu<br /> 11</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-11">
                                                    <label for="time-11">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-12">
                                                    <label for="time-12">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Thu <br /> 12</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-13">
                                                    <label for="time-13">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-14">
                                                    <label for="time-14">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Sat <br /> 13</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-15">
                                                    <label for="time-15">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-16">
                                                    <label for="time-16">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Sub <br /> 14</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-17">
                                                    <label for="time-17">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-18">
                                                    <label for="time-18">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Mon <br /> 15</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-19">
                                                    <label for="time-19">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-20">
                                                    <label for="time-20">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Tue <br /> 16</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-21">
                                                    <label for="time-21">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-22">
                                                    <label for="time-22">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Wed <br /> 17</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-23">
                                                    <label for="time-23">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-24">
                                                    <label for="time-24">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Thu <br /> 18</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-25">
                                                    <label for="time-25">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-26">
                                                    <label for="time-26">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-center time-box">
                                                <h6>Fri <br /> 19</h6>
                                                <p>Jul</p>
                                                <div class="avail-time">
                                                    <input type="radio" name="time" id="time-27">
                                                    <label for="time-27">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                    <input type="radio" name="time" id="time-28">
                                                    <label for="time-28">
                                                        <span class="avail-btn">Available</span>
                                                    </label>
                                                </div>
                                            </div>



                                        </div>
                                    </form>



                                </div>
                            </div>


                            <p class="mt-4 mt-sm-5">Add a discount or FREE service to your order</p>

                            <form action="">
                                <div class="dicount-offer">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="offer-1">
                                                <div class="card offer-card text-center">
                                                    <input type="checkbox" id="offer-1">
                                                    <div class="card-body">
                                                        <div class="offer-img">
                                                            <img src="assets/imgs/wheel-balancing.png" alt="">
                                                        </div>
                                                        <strong>Balancing And Repiars </strong>
                                                        <h6>$100</h6>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div
                                class="call-us justify-content-between d-flex flex-column flex-sm-row  align-items-center">
                                <h2 class="text-center text-sm-start">Call Us For Immediate Fitting Requirement
                                </h2>
                                <a href="#" class="m-btn text-nowrap">CALL US!</a>
                            </div>


                            <div class="book-search man-search p-0">
                                <form action="" class="search-wrap ">
                                    <h3>Search by Vehicle Registration</h3>
                                    <div class="row g-2">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="ENTER REG">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <button class="main-btn w-100">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <p class="or">OR</p>

                            <!-- SEARCH SECTION START -->
                            <section class="man-search px-0">
                                <div class="search-wrap">
                                    <div class="row">

                                        <div class="col-md-12 ">
                                            <div class="search-by-tyres">
                                                <h3>Search by Vehicle</h3>

                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-6 col-md-6 mb-2 col-lg px-1">
                                                            <div class="form-group">
                                                                <label for="">Make</label>
                                                                <select name="" id="" class="form-select">
                                                                    option><option value="Yugo">Yugo</option>
                                                                    <option value="Yulon">Yulon</option>
                                                                    <option value="Zastava">Zastava</option>
                                                                    <option value="ZAZ">ZAZ</option>
                                                                    <option value="Zuendapp">Zuendapp</option>
                                                                    <option value="AC">AC</option>
                                                                    <option value="Acura">Acura</option>
                                                                    <option value="Aixam">Aixam</option>
                                                                    <option value="Alfa Romeo">Alfa Romeo</option>
                                                                    <option value="Alpina">Alpina</option>
                                                                    <option value="Alpine">Alpine</option>
                                                                    <option value="AMC">AMC</option>
                                                                    <option value="Andoria">Andoria</option>
                                                                    <option value="ARO">ARO</option>
                                                                    <option value="Asia Motors">Asia Motors</option>
                                                                    <option value="Aston Martin">Aston Martin</option>
                                                                    <option value="Audi">Audi</option>
                                                                    <option value="Austin">Austin</option>
                                                                    <option value="Austin-Healey">Austin-Healey</option>
                                                                    <option value="Auto Union">Auto Union</option>
                                                                    <option value="Autobianchi">Autobianchi</option>
                                                                    <option value="Barkas">Barkas</option>
                                                                    <option value="Bedford">Bedford</option>
                                                                    <option value="Bentley">Bentley</option>
                                                                    <option value="Bertone">Bertone</option>
                                                                    <option value="Bitter">Bitter</option>
                                                                    <option value="BMW">BMW</option>
                                                                    <option value="Bond">Bond</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-md-6 mb-2 col-lg px-1">
                                                            <div class="form-group">
                                                                <label for="">Model</label>
                                                                <select name="" id="" class="form-select">
                                                                    <option value="">Model</option>
                                                                    <option value="3000 MK I">3000 MK I</option>
                                                                    <option value="3000MK">3000MK</option>
                                                                    <option value="Austin-Healey">Austin-Healey</option>
                                                                    <option value="Sprite MK">Sprite MK</option>
                                                                    <option value="Sprite MK I">Sprite MK I</option>
                                                                    <option value="Sprite MK.IV">Sprite MK.IV</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        </select>

                                                        <div class="col-6 col-md-6 mb-2 col-lg px-1">
                                                            <div class="form-group">
                                                                <label for="">Year</label>
                                                                <select name="" id="" class="form-select">
                                                                    <option value="">1965</option>
                                                                    <option value="">1968</option>
                                                                    <option value="">1978</option>
                                                                    <option value="">1986</option>
                                                                    <option value="">1998</option>
                                                                    <option value="">2000</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-6 col-md-6 mb-2 col-lg px-1">
                                                            <div class="form-group">
                                                                <label for="">Engine</label>
                                                                <select name="" id="" class="form-select">
                                                                    <option value="">Engine</option>

                                                                    <option value="">3.9</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 col-12 mb-2 px-1 align-self-end">
                                                            <button class="main-btn w-100" style="height: 45px">
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

                        </div>

                        <!-- CART SECTION START -->
                        <div class="col-lg-4">
                            <h4>Your Order</h4>
                            <div class="cart">
                                <div class="cart-items">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="item-title">
                                                            <p>Balancing And Repairs</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="item-qty input-group input-group-sm">
                                                            <input type="number" class="form-control" value="1"><button
                                                                class="upt-qty-btn input-group-text"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="price">£10.00</p>
                                                    </td>
                                                    <td>
                                                        <div class="text-end">
                                                            <button class="remove-item">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="item-title">
                                                            <p>Summer Tyre Dunlop GRANDTREK AT20 265/65R17 112 S
                                                                (Garage Fitted)</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="item-qty input-group input-group-sm">
                                                            <input type="number" class="form-control" value="1"><button
                                                                class="upt-qty-btn input-group-text"><i
                                                                    class="fa-solid fa-arrows-rotate"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="price">£10.00</p>
                                                    </td>
                                                    <td>
                                                        <div class="text-end">
                                                            <button class="remove-item">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td class="px-0"><strong>Sub-Total</strong></td>
                                                    <td>
                                                        <p class="m-0 text-end">£132.65</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td class="px-0"><strong>Total</strong></td>
                                                    <td>
                                                        <p class="m-0 text-end">£132.65</p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <a href="checkout.php">
                                    <button class="main-btn">PROCEED TO BOOKING</button>
                                </a>
                            </div>

                        </div>
                        <!-- CART SECTION END -->


                    </div>
                </div>
            </section>
            <!-- BOOKING DETAIL END -->






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


    <script>
        $('#date-slides').owlCarousel({
            loop: false,
            margin: 0,
            dots: false,
            nav: true,
            items: 7,
            slideBy: 7,
            drag: false,
            mouseDrag: false,
            touchDrag: false,
            responsive: {
                0: {
                    items: 7
                }

            }
        });
    </script>

</body>

</html>