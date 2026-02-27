<!DOCTYPE html>
<html lang="en">

<!-- ================= HEAD ================= -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kittur Developers Real Estate">
    <title>Kittur Developers</title>

    <?php include('header.php'); ?>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .rev_slider .rev-slidebg {
            height: 100vh !important;
            object-fit: cover !important;
        }
    </style>
</head>

<!-- ================= BODY START ================= -->
<body>

<div id="wrapper">

    <!-- ================= HEADER SECTION ================= -->
    <header id="header-container">
        <div class="container">
            <div id="logo">
                <a href="index.php">
                    <img src="images/logo.jpg" alt="Logo">
                </a>
            </div>

            <?php include('menue.php'); ?>
        </div>
    </header>
    <!-- ================= END HEADER ================= -->


    <!-- ================= SLIDER SECTION ================= -->
    <section id="home-slider">
        <div id="rev_slider_26_1" class="rev_slider fullscreenbanner">
            <ul>
                <li>
                    <img src="images/bg1-img.png" alt="Slider Image">
                </li>
            </ul>
        </div>
    </section>
    <!-- ================= END SLIDER ================= -->


    <!-- ================= ABOUT SECTION ================= -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h2>About <span class="text-danger">Kittur Developers</span></h2>
                    <p>
                        The projects that we have developed over the years have earned
                        great reputation among clients for quality construction and service.
                    </p>
                    <a href="about2.php" class="btn btn-danger">Read More</a>
                </div>

                <div class="col-lg-6">
                    <img src="images/bg/ab.png" class="img-fluid" alt="About Image">
                </div>

            </div>
        </div>
    </section>
    <!-- ================= END ABOUT ================= -->


    <!-- ================= ONGOING PROJECT SECTION ================= -->
    <section id="projects" class="py-5 bg-light">
        <div class="container">
            <h2>Ongoing <span>Projects</span></h2>

            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <img src="images/team/t-1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Nova City</h5>
                            <p>Ongoing Project</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <img src="images/team/t-4.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>Star City</h5>
                            <p>Completed Project</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================= END PROJECT SECTION ================= -->


    <!-- ================= COUNTER SECTION ================= -->
    <section id="counter" class="counterup py-5 text-center">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <h3>16+</h3>
                    <p>Years of Experience</p>
                </div>

                <div class="col-md-3">
                    <h3>800+</h3>
                    <p>Happy Clients</p>
                </div>

                <div class="col-md-3">
                    <h3>9+</h3>
                    <p>Projects Completed</p>
                </div>

                <div class="col-md-3">
                    <h3>90+</h3>
                    <p>Acres Completed</p>
                </div>

            </div>
        </div>
    </section>
    <!-- ================= END COUNTER ================= -->


    <!-- ================= TESTIMONIAL SECTION ================= -->
    <section id="testimonials" class="py-5 bg-white">
        <div class="container text-center">
            <h2>Clients Testimonials</h2>
            <p>We collect reviews from our customers.</p>
        </div>
    </section>
    <!-- ================= END TESTIMONIAL ================= -->


    <!-- ================= WHY CHOOSE US SECTION ================= -->
    <section id="why-choose" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Why Choose Us</h2>
            <p>We provide full service at every step.</p>
        </div>
    </section>
    <!-- ================= END WHY CHOOSE ================= -->


    <!-- ================= INFO SECTION ================= -->
    <section id="info-help" class="py-5 text-white"
        style="background-image:url('images/house.jpg'); background-size:cover;">
        <div class="container">
            <h3>Apartment for Rent</h3>
            <p>$6,400/month</p>
        </div>
    </section>
    <!-- ================= END INFO ================= -->


    <!-- ================= PARTNERS SECTION ================= -->
    <section id="partners" class="py-5 bg-light text-center">
        <div class="container">
            <h2>Our Partners</h2>
        </div>
    </section>
    <!-- ================= END PARTNERS ================= -->


    <!-- ================= FOOTER ================= -->
    <?php include('footer.php'); ?>
    <!-- ================= END FOOTER ================= -->


</div>

<!-- ================= JS FILES ================= -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/script.js"></script>

</body>
</html>