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

    <?php include_once "includes/header.php" ?>

        <!-- HERO SECTION START -->
        <section class="hero-section">
            <div class="container">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tyre-fitting">Tyre
                            Fitting</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#car-services">Car Services</button>
                    </li>
                </ul>

                <div class="tab-content pt-4">

                    <div class="tab-pane fade show active" id="tyre-fitting">

                        <div class="row">
                            <div class="col-lg-4">
                                <form action="">
                                    <div class="number">
                                        <label for="">Recommended</label>

                                        <div class="vehcle-no d-flex align-items-stretch">
                                            <div class="input-wrap">
                                                <input type="text" placeholder="VEHICLE REG.NO.">
                                            </div>
                                            <button class="m-btn">Go</button>
                                        </div>

                                        <div class="d-flex radio">
                                            <div class="form-check ps-0 me-4">
                                                <input type="radio" name="fit-opt" id="garage">
                                                <label for="garage">Garage Fitted</label>
                                            </div>

                                            <div class="form-check ps-0">
                                                <input type="radio" name="fit-opt" id="mobile">
                                                <label for="mobile">Mobile Fitted</label>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-8">
                                <div class="size">
                                    <form action="">
                                        <div class="row">

                                            <div class="col-6 col-md-3 col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Width</label>
                                                    <select name="" id="" class="form-select">
                                                        <option value="">155</option>
                                                        <option value="">100</option>
                                                        <option value="">205</option>
                                                        <option value="">263</option>
                                                        <option value="">22</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-3 col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Profile</label>
                                                    <select name="" id="" class="form-select">
                                                        <option value="">155</option>
                                                        <option value="">100</option>
                                                        <option value="">205</option>
                                                        <option value="">263</option>
                                                        <option value="">22</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-3 col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Rim Size</label>
                                                    <select name="" id="" class="form-select">
                                                        <option value="">155</option>
                                                        <option value="">100</option>
                                                        <option value="">205</option>
                                                        <option value="">263</option>
                                                        <option value="">22</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-3 col-lg-2">
                                                <div class="form-group">
                                                    <label for="">Speed</label>
                                                    <select name="" id="" class="form-select">
                                                        <option value="">Any</option>
                                                        <option value="">H</option>
                                                        <option value="">T</option>
                                                        <option value="">V</option>
                                                        <option value="">W</option>
                                                        <option value="">Y</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-8 px-5 d-none d-md-block">
                                                <img src="assets/imgs/tyre.png" width="100%" alt="">
                                            </div>

                                        </div>


                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-wrap radio">
                                                <div class="form-check ps-0 me-4">
                                                    <input type="radio" name="fit-opt" id="sgarage">
                                                    <label for="sgarage">Garage Fitted</label>
                                                </div>

                                                <div class="form-check ps-0">
                                                    <input type="radio" name="fit-opt" id="smobile">
                                                    <label for="smobile">Mobile Fitted</label>
                                                </div>

                                            </div>
                                            <button class="m-btn mt-3">Search</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="car-services">

                        <div class="row cars">
                            <div class="col-lg-4">
                                <form action="">
                                    <div class="number">
                                        <h4>Online Repair Quote By Reg No.</h4>

                                        <div class="vehcle-no d-flex align-items-stretch mt-4">
                                            <div class="input-wrap">
                                                <input type="text" placeholder="VEHICLE REG.NO.">
                                            </div>
                                            <button class="m-btn">Go</button>
                                        </div>


                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-8">
                                <div class="size">
                                    <h4>Online Repair Quote By Make</h4>
                                    <form action="">

                                        <div class="row">



                                            <div class="col-6 col-md-3 col-lg">
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

                                            <div class="col-6 col-md-3 col-lg">
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

                                            <div class="col-6 col-md-3 col-lg">
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

                                            <div class="col-6 col-md-3 col-lg">
                                                <div class="form-group">
                                                    <label for="">Engine</label>
                                                    <select name="" id="" class="form-select">
                                                        <option value="">Engine</option>

                                                        <option value="">3.9</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 col-lg-2 align-self-end mt-2">
                                                <button class="m-btn">Go</button>
                                            </div>



                                        </div>




                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </section>
        <!-- HERO SECTION END -->


        <!-- STEPS SETION START -->
        <section class="steps">
            <div class="container-fluid">
                <div class="row g-0">

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card">
                            <span class="step-count">01</span>
                            <div class="step-img">
                                <img src="assets/imgs/step-car.png" alt="">
                            </div>
                            <div class="step-text">
                                <h5>Xpress tyres Ltd recovery team are on standby 24/7 to provide fast roadside tyre
                                    fitting services when needed.</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card">
                            <span class="step-count">02</span>
                            <div class="step-img">
                                <img src="assets/imgs/step-calendar.png" alt="">
                            </div>
                            <div class="step-text">
                                <h5 class="text-uppercase">PICK A SUITABLE DATE.</h5>
                                <p>Pick a date and time and pay on deliver</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card">
                            <span class="step-count">03</span>
                            <div class="step-img">
                                <img src="assets/imgs/step-mechanic.png" alt="">
                            </div>
                            <div class="step-text">
                                <h5 class="text-uppercase">COME TO US OR WE COME TO YOU.</h5>
                                <p>Visit our garage or opt for our Car Services</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="step-card active">
                            <div class="step-img">
                                <img src="assets/imgs/step-phone.png" alt="">
                            </div>
                            <div class="step-text">
                                <h5 class="text-uppercase">FOR A QUICK CALL</h5>
                                <a href="tel:01616 547756">01616 547756</a>
                                <p>Get free advice from our experts who are on hand to help</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- STEPS SETION END -->

        <!-- SERVICES SECTION START -->
        <section class="services">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-3 col-sm-6 my-2">

                        <div class="service-card d-flex align-items-stretch">
                            <div class="serv-img">
                                <img src="assets/imgs/wheel-balancing.png" alt="">
                            </div>
                            <div class="serv-text">
                                <h6>BALANCING AND REPAIRS</h6>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-sm-6 my-2">

                        <div class="service-card d-flex align-items-stretch">
                            <div class="serv-img">
                                <img src="assets/imgs/service-icon.webp" alt="">
                            </div>
                            <div class="serv-text">
                                <h6>24X7 SERVICE HOME WORK ROADSIDE</h6>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-sm-6 my-2">

                        <div class="service-card d-flex align-items-stretch">
                            <div class="serv-img">
                                <img src="assets/imgs/service-icon.webp" alt="">
                            </div>
                            <div class="serv-text">
                                <h6>EMERGENCY TYRE REPLACEMENT</h6>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-sm-6 my-2">

                        <div class="service-card d-flex align-items-stretch">
                            <div class="serv-img">
                                <img src="assets/imgs/tyre-repairs.webp" alt="">
                            </div>
                            <div class="serv-text">
                                <h6>TYRE REPAIR</h6>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </section>
        <!-- SERVICES SECTION END -->

        <!-- RECOMMENDED SECTION START -->
        <section class="recommended-section">
            <div class="container">
                <h2 class="text-center">Recommended Tyres
                </h2>

                <div class="row">

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="recommended-card">
                            <div class="b-logo">
                                <img src="assets/imgs/continental-logo.webp" alt="">
                            </div>

                            <div class="card-img">
                                <img src="assets/imgs/continental01.webp" alt="">
                            </div>

                            <div class="rem-card-text">
                                <h3>Continental Tyres</h3>
                                <p>Continental tyres are made up of high-quality materials and offers top-notch
                                    performance. It offers a variety of tyres in the summer, winter and all-season
                                    segment to assist you to drive comfortably on dry, wet and uneven roads with ease.
                                </p>
                            </div>

                            <div class="rem-card-btn mt-5">
                                <a href="#">View all Continental Tyres</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="recommended-card">
                            <div class="b-logo">
                                <img src="assets/imgs/michelin-logo.png" alt="">
                            </div>

                            <div class="card-img">
                                <img src="assets/imgs/michelin01.png" alt="">
                            </div>

                            <div class="rem-card-text">
                                <h3>Michelin Tyres</h3>
                                <p>Michelin tyres is a premium tyre brands with diverse varieties of tyres like summer,
                                    winter, all-season and high-performance as per the motorist’s need. The brand
                                    promises agility, control, and superior balance with every purchase. It even comes
                                    with advanced benefits like hydroplaning resistance, inter-connected grooves to
                                    deliver a high-quality driving experience that you deserve.</p>
                            </div>

                            <div class="rem-card-btn">
                                <a href="#" class="blue-btn">View all Continental Tyres</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 my-3">
                        <div class="recommended-card">
                            <div class="b-logo">
                                <img src="assets/imgs/pirelli-logo.png" alt="">
                            </div>

                            <div class="card-img">
                                <img src="assets/imgs/pirelli-tyres.png" alt="">
                            </div>

                            <div class="rem-card-text">
                                <h3>Pirelli Tyres</h3>
                                <p>Pirelli Tyres are engineered with superior quality compounds and advanced groove
                                    design that enables the motorist to drive comfortably on wet, icy and dry road
                                    services. The brand provides its customers with diverse tyre types to maintain
                                    traction even on the most challenging terrains. It also has a lug-groove patterns,
                                    so the vehicle never sways to alternate sides.</p>
                            </div>

                            <div class="rem-card-btn">
                                <a href="#" class="blue-btn">View all Continental Tyres</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- RECOMMENDED SECTION END -->

        <!-- MAIN SLIDER SECTION START -->
        <section class="main-img-slider owl-carousel owl-theme" id="main-slider-1">

            <div class="slide-img">
                <img src="assets/imgs/main-slider/main-slider1.webp" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider/main-slider2.webp" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider/main-slider3.webp" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider/main-slider4.webp" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider/main-slider5.webp" width="100%" alt="">
            </div>
            <div class="slide-img">
                <img src="assets/imgs/main-slider/main-slider6.webp" width="100%" alt="">
            </div>

        </section>
        <!-- MAIN SLIDER SECTION END -->

        <!-- BRANDS SECTION START -->
        <section class="brands">
            <h2 class="text-center">We Stock All Popular Tyre Brands</h2>


            <div class="row g-0">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/bridgestone-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/nexen-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/dunlop-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/continental-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/goodyear-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/maxxis-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/michelin-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/pirelli-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/uniroyal-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/roadstone-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/matador-logo.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 ">

                    <div class="brand-img">
                        <img src="assets/imgs/brands/riken-logo.webp" alt="">
                    </div>
                </div>
            </div>

        </section>
        <!-- BRANDS SECTION END -->

        <!-- ABOUT SECTION START -->
        <section class="about-section">

            <div class="about-header">
                <div class="about-h-text">
                    <h3>WELCOME TO XPRESS TYRES FOR CONVENIENT MOBILE TYRE FITTING MANCHESTER</h3>

                    <p>Hello and a warm welcome to you to the home of one of the leading automotive workshops in
                        Manchester. We are <strong>XPRESS TYRES LTD</strong>, and we are the most dependable tyres
                        Manchester retailers and car service providers in this area.</p>


                    <p>Our wide client base comes from all parts of the city, and sometimes from beyond. The quality of
                        our products and the promptness of our service have been hailed by one and all, regardless of
                        where they come from. Apart from this, you can choose our convenient <strong>24/7 mobile tyre
                            fitting Manchester</strong> service at reasonable prices.</p>

                    <h4>Our Obsession with tyres Never Grows Old
                    </h4>

                    <p>It is a widely held belief that tyres are nothing but pieces of rubber wrapped around a wheel. We
                        couldn’t disagree more</p>

                    <p>For starters, tyres are the only point of contact between your car and the road. As such, a lot
                        of your ride quality depends on these critical car components. If the tyres of your car are not
                        up to the mark, you can forget about a comfortable ride for good.</p>

                </div>
            </div>

            <div class="container">
                <div class="about-text">

                    <p>To that end, <strong>XPRESS TYRES Manchester</strong> stocks some of the best tyres you’ll find
                        on the market today. Our collection boasts some of the biggest names in the industry, available
                        at the most reasonable prices.</p>

                    <p>Popular brands you’ll find at our workshop include:</p>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <p>Dunlop</p>
                                </li>
                                <li>
                                    <p>Goodyear</p>
                                </li>
                                <li>
                                    <p>Michelin</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <p>Continental</p>
                                </li>
                                <li>
                                    <p>Pirelli</p>
                                </li>
                                <li>
                                    <p>Bridgestone</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p>We are known for supplying high-quality <strong>car tyres Manchester</strong> that last long and
                        perform outstandingly in any of the conditions. When it comes to heavy-duty passenger vehicles,
                        we provide tyres with a high load index at a particular speed rating that will never fail you in
                        any situation.</p>

                    <p>We have all varieties of tyres from these renowned manufacturers at our workshop. You’ll find the
                        following types of tyres in our stock:</p>

                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <p>Summer tyres
                                    </p>
                                </li>
                                <li>
                                    <p>Winter tyres
                                    </p>
                                </li>
                                <li>
                                    <p>All-season tyres
                                    </p>
                                </li>
                                <li>
                                    <p>24hr Mobile Tyre Fitting
                                    </p>
                                </li>
                                <li>
                                    <p>Emergency tyre fitting
                                    </p>
                                </li>
                                <li>
                                    <p>Mobile tyre replacement
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <p>Performance tyres
                                    </p>
                                </li>
                                <li>
                                    <p>4x4 tyres</p>
                                </li>
                                <li>
                                    <p>Run-flat tyres and more
                                    </p>
                                </li>
                                <li>
                                    <p>Roadside tire fitting assistance
                                    </p>
                                </li>
                                <li>
                                    <p>Mobile tyre repair
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p>We also understand that budget is often a constraint for many of our clients. After all, buying
                        four tyres is an expensive affair. For them, we have our collection of budget tyres. These tyres
                        provide great performance while still being affordable.</p>

                    <h4>Why choose our mobile tyre fitting service?</h4>

                    <p>Avoid the inconvenience of going to a workshop and waiting in long garage queues just to get your
                        brand-new tyres fitted; book our mobile tyre-fitting Manchester immediately for quick and
                        reliable results. Our professional technicians will reach your specific location. They come with
                        the necessary equipment and tyres you have ordered to replace the damaged tyres and restore your
                        car to running condition.</p>

                    <p>Moreover, we also help with the following:</p>

                    <h5>Emergency tyre replacement</h5>

                    <p>If you are stuck in the middle of the road and have no option but to replace the tyres, in such a
                        situation, contact us for emergency tyre replacement. We are the most reliable mobile tyre
                        fitting Manchester to get your car back in action.</p>

                    <p>Saves money and time</p>

                    <p>Our services are quite efficient when it comes to saving money and time</p>

                    <p>Another advantage that we present to our customers is the option of buying <strong>tyres
                            Manchester</strong> online. You can even opt for <strong>mobile tyre fitting
                            Manchester</strong> services at reasonable prices, so you don’t get stuck in the middle of
                        your journey.</p>

                    <h4>Mounting Them Right</h4>

                    <p><a href="#">XPRESS TYRES LTD</a>. Manchester also has a competent tyre fitting mechanism in place
                        for your convenience. Tyre mounting is a critical procedure that requires professional expertise
                        to execute. Our technicians are well-trained and dedicated individuals who perform this task
                        with ease.</p>

                    <p>The perils of improper tyre mounting are too severe to ignore. It may cause uneven tread wear,
                        punctures, and even rim damage.</p>

                    <p>We use the latest mounting machine to get the job done. Our technicians undergo training sessions
                        to stay updated with the latest mechanisms and deliver accurate service every time. It’s a
                        relatively inexpensive service with far-reaching consequences.</p>

                    <h4>Balancing your wheels</h4>
                    <p>When you buy cheap tyres Manchester and get them fitted by us, we provide free balancing of your
                        wheels. It is necessary to make sure that you don’t face different problems, such as uneven
                        tread wear or decreased fuel economy because of unbalanced wheels.</p>

                    <h4>We are here for your car</h4>

                    <p>Join us in our endeavour to ensure that every vehicle on the road uses safe tyres. All our
                        products and services are meant to adhere to that principle.</p>

                    <p>Visit our workshop today at <a href="#"><strong>Unit 4 Church Street, Middleton, Manchester, M24
                                2PY</strong></a> and allow us the opportunity to serve you to the best of our
                        capabilities. Book an online appointment with us today. If you have questions for us, drop us a
                        line at any time during our business hours.</p>



                </div>
            </div>


        </section>
        <!-- ABOUT SECTION END -->


        <!-- MAIN 2 SLIDER SECTION START -->
        <section class="main-img-slider main-slider-2 owl-carousel owl-theme" id="main-slider-2">

            <div class="slide-img">
                <img src="assets/imgs/main-slider-2/allseason-tyres-banner.webp" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider-2/churchill-tyres-banner.webp" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider-2/continental-tyres - Copy.jpg" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider-2/goodyear-tyres.jpg" width="100%" alt="">
            </div>

            <div class="slide-img">
                <img src="assets/imgs/main-slider-2/nexen-tyres.webp" width="100%" alt="">
            </div>
            <div class="slide-img">
                <img src="assets/imgs/main-slider-2/bridgestone-banner.webp" width="100%" alt="">
            </div>

        </section>
        <!-- MAIN 2 SLIDER SECTION END -->


        <!-- BRANDS SLIDER SECTION -->
        <section class="logos-section">
            <h2 class="text-center">We supply & fit tyres for all major vehicle manufacturers</h2>

            <div class="brands-slide owl-carousel owl-theme" id="logo-slides">
                <div class="slide-logo"><img src="assets/imgs/logos/m1.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m2.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m2.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m3.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m4.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m5.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m6.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m7.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m8.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m9.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m10.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m11.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m12.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m13.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m15.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m16.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m17.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m18.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m19.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m20.webp" alt=""></div>
                <div class="slide-logo"><img src="assets/imgs/logos/m21.webp" alt=""></div>

            </div>

        </section>
        <!-- BRANDS SLIDER SECTION END -->

        <!-- BANNERS SECTION START -->
        <section class="banner-section">
            <div class="row px-2">

                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/maxxis-banner.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/pirell-bannei.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/continental-offer.jpg" width="100%" alt="">
                </div>
                <div class="col-md-6 my-2 px-2">
                    <img src="assets/imgs/uniroyal-offer.jpg" width="100%" alt="">
                </div>


            </div>
        </section>
        <!-- BANNERS SECTION END -->

        <!-- GOOGLE REVIEWS SECTION  -->
        <section class="reviews">
            <div class="container">
                <h2 class="text-center">Our Recent Google Reviews</h2>


                <div class="reviews-wrap">

                    <div class="review d-flex flex-column flex-lg-row">
                        <div class="name">
                            <h6>Bilal Khan</h6>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="rev-text">
                            <p>Very good tyres at very good prices. I have been using this tyre garage for the past four
                                years and have always had a fast and professional service.</p>
                        </div>
                    </div>

                    <div class="review d-flex flex-column flex-lg-row">
                        <div class="name">
                            <h6>Declan Smith</h6>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="rev-text">
                            <p>Aways great service very quick and great prices. Highly recommend.</p>
                        </div>
                    </div>

                    <div class="review d-flex flex-column flex-lg-row">
                        <div class="name">
                            <h6>Stavros Kollias</h6>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="rev-text">
                            <p>Excellent service good quality! Second time visit for my Clio, since I found them, I will
                                be using their services all the time!.</p>
                        </div>
                    </div>

                    <div class="review d-flex flex-column flex-lg-row">
                        <div class="name">
                            <h6>Nitin Sharma</h6>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="rev-text">
                            <p>Quick service within 15 min, they also provide 24×7 mobile service.</p>
                        </div>
                    </div>

                    <div class="review d-flex flex-column flex-lg-row">
                        <div class="name">
                            <h6>Imran Butt</h6>
                        </div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="rev-text">
                            <p>Great guys, very knowledgeable and great prices! Highly recommend.</p>
                        </div>
                    </div>


                </div>
                <div class="text-center">
                    <a href="#" class="rev-btn">See All Google Reviews</a>
                </div>

            </div>
        </section>
        <!-- GOOGLE REVIEWS SECTION ENS -->


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
        // main image slider
        $('#main-slider-1').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            autoplaySpeed: 1000,
            margin: 0,
            dots: true,
            nav: false,
            items: 1,
            responsive: {
                0: {
                    items: 1
                }

            }
        });

        $('#main-slider-2').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            margin: 0,
            dots: true,
            nav: false,
            items: 1,
            responsive: {
                0: {
                    items: 1
                }

            }
        })
        $('#logo-slides').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplaySpeed: 1000,
            autoplayHoverPause: true,
            margin: 0,
            dots: false,
            nav: false,
            items: 7,
            responsive: {
                0: {
                    items: 3
                },
                576: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 7
                }

            }
        })
    </script>

</body>

</html>