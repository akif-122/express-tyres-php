<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express Tyeres</title>


    <!-- LIGHT GALLERY CSS -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css" />

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




        <!-- GALLERY SECION START -->
        <section class="gallery my-3 py-5">
            <h1 class="text-center mb-4">Gallery</h1>
            <div class="container">
                <div class="row " id="gallery">

                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/1.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/1.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/2.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/2.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/33.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/33.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/4.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/4.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/5.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/5.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/6.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/6.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/7.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/7.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/7.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/7.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/8.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/8.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <a href="assets/imgs/gallery/9.jpeg" data-lightbox="image-1" data-title="">
                            <img src="assets/imgs/gallery/9.jpeg" data-lightbox="roadtrip" width="100%" alt="">
                        </a>
                    </div>


                </div>
            </div>
        </section>

        <!-- GALLERY SECION END -->


        <?php
            include_once "includes/footer.php";
        ?>


    </div>


    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- LIGHT GALLERY CDN -->
    <script src="assets/js/lightbox.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>



    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>
</body>

</html>