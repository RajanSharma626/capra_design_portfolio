<?php
include("includes/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Personal, Portfolio, Creative">
    <meta name="description" content="Kalvin Portfolio Template">
    <meta name="author" content="cosmos-themes">

    <title>Marco Capra - Services</title>

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
            <h1>My Services</h1>
            <div class="bread-crumb mt-10">
                <a href='/'>Home</a>
                <a href="services">Services</a>
            </div>
        </div>
    </section>

    <!--Blog List Section Starts-->
    <section class="blogs blog-list pt-100 pb-50" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <?php
                $services = mysqli_query($conn, "SELECT * FROM `service`");
                while ($row = mysqli_fetch_array($services)) {
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/services/<?php echo $row['img'] ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <?php echo $row['heading'] ?>
                                </h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <?php
                $services = mysqli_query($conn, "SELECT * FROM `service`");
                while ($row = mysqli_fetch_array($services)) {
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/services/<?php echo $row['img'] ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <?php echo $row['heading'] ?>
                                </h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <?php
                $services = mysqli_query($conn, "SELECT * FROM `service`");
                while ($row = mysqli_fetch_array($services)) {
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/services/<?php echo $row['img'] ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <h3>
                                    <?php echo $row['heading'] ?>
                                </h3>
                                <p>
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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