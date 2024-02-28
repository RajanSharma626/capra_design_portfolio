<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Personal, Portfolio, Creative">
    <meta name="description" content="Kalvin Portfolio Template">
    <meta name="author" content="cosmos-themes">

    <title>Marco Capra - Portfolio</title>

    <!-- favicon -->
    <!-- <link href="images/favicon.ico" rel="icon" type="image/png"> -->

    <!--Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!--Owl Carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!--Magnific Popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900%7cOpen+Sans:400,600,700,800"
        rel="stylesheet">

    <!--Site Main Style css-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="preloader">
        <div class="loader "></div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- LOGO -->
            <a class='navbar-brand logo' href='/'>
            Marco Capra
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class='nav-link active' href='/'>Back</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Navbar End-->

    <section class="banner-blog">
        <div id="particles-js"></div>
        <!--Banner Caption-->
        <div class="banner-caption text-center">
            <h1>My Portfolio</h1>
            <div class="bread-crumb mt-10">
                <a href='index.html'>Home</a>
                <a href="#">Portfolio</a>
            </div>
        </div>
    </section>

    <!--Blog List Section Starts-->
    <section class="portfolio pt-100 pb-70" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="heading text-center">
                        <h6>Portfolio</h6>
                        <h2>Work I Have Done</h2>
                    </div>
                    <!-- <div class="portfolio-filter text-center">
                            <ul>
                                <li class="sel-item" data-filter="*">All</li>
                                <li data-filter=".design">Web Design</li>
                                <li data-filter=".application">Applications</li>
                                <li data-filter=".development">Development</li>
                            </ul>
                        </div> -->
                </div>
            </div>
            <div class="row portfolio-items">
                <!--Portfolio Item-->
                <div class="col-lg-4 col-md-6 item application">
                    <div class="item-content">
                        <img src="images/portfolio/img-1.jpg" alt="">
                        <div class="item-overlay">
                            <h6>Yacht Design</h6>
                            <div class="icons">
                                <span class="icon link">
                                    <a href="images/portfolio/img-1.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio Item-->
                <div class="col-lg-4 col-md-6 item design">
                    <div class="item-content">
                        <img src="images/portfolio/img-2.jpg" alt="">
                        <div class="item-overlay">
                            <h6>2D Yacht Design</h6>
                            <div class="icons">
                                <span class="icon link">
                                    <a href="images/portfolio/img-2.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Portfolio Item-->
                <div class="col-lg-4 col-md-6 item development">
                    <div class="item-content">
                        <img src="images/portfolio/img-3.jpg" alt="">
                        <div class="item-overlay">
                            <h6>Yacht Design</h6>
                            <div class="icons">
                                <span class="icon link">
                                    <a href="images/portfolio/img-3.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog List Section End-->

    <!--Footer Start-->
    <?php include("includes/footer.php") ?>
    <!--Footer End-->

    <!--Jquery js-->
    <script src="js/jquery.min.js"></script>
    <!--Bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--Stellar js-->
    <script src="js/jquery.stellar.js"></script>
    <!--Animated Headline js-->
    <script src="js/animated.headline.js"></script>
    <!--Owl Carousel js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--ScrollIt js-->
    <script src="js/scrollIt.min.js"></script>
    <!--Isotope js-->
    <script src="js/isotope.pkgd.min.js"></script>
    <!--Magnific Popup js-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!--Particles js-->
    <script src="js/particles.min.js"></script>
    <!--Site Main js-->
    <script src="js/main.js"></script>
    <script>
        //Particles
        particlesJS.load('particles-js', 'js/particles.json', function () {
            console.log('callback - particles.js config loaded');
        });
    </script>

</body>


</html>