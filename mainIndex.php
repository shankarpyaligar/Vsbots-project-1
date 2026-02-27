<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kittur Developers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?php include('header.php'); ?>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* ===== HEADER ===== */
        .navbar {
            background: #001440;
        }

        .navbar a {
            color: #fff !important;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .hero-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        /* ===== SECTION SPACING ===== */
        section {
            padding: 15px 0;
        }

        /* ===== FOOTER ===== */
        footer {
            background: #001440;
            color: white;
            padding: 50px 0;
        }

        .copyright {
            background: #000;
            color: #fff;
            padding: 25px 0;
            text-align: center;
        }

        .info-help {
            min-height: 500px;
            padding: 80px 0;
            background-size: cover !important;
        }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <?php include('menue.php'); ?>


    <!-- ================= HERO SECTION ================= -->
    <section class="hero">
        <img src="images/bg1-img.png" alt="Banner" style="width: auto; height: auto;">
        <div class="hero-overlay"></div>

    </section>


    <!--About Secrion-->
    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT SIDE (TEXT) -->
                <div class="col-lg-6">
                    <h2 class="mb-4">About <span class="text-danger">Kittur Developers</span></h2>

                    <p>
                        The projects that we have developed over the years, have earned great reputation among the
                        clients for the quality of materials that we use, good quality construction and customer
                        service. Our Experts make full utilization of the available resources and the most modern
                        technology in order to provide excellent real estate services. It is our endeavor to offer
                        extremely reliable real estate services that we have carved a niche for ourselves in this highly
                        competitive market. All our professionals try and ensure that the real estate services rendered
                        by us are in compliance with the requirements of the clients, and are at par with the
                        international standards.
                    </p>


                    <a href="about2.php" class="btn btn-danger mt-3">
                        Read More
                    </a>
                </div>

                <!-- RIGHT SIDE (IMAGE) -->
                <div class="col-lg-6">
                    <img src="images/bg/ab.png" class="img-fluid">
                </div>

            </div>
        </div>
    </section>
    <!--About section end-->

    <!-- Priject section start-->
    <section class="team bg-white-3">
        <div class="container">
            <div class="section">
                <h2 class="text-left mb-4">Onging <span>project</span></h2>
                <section class="about">
                    <div class="row team-all">
                        <!--Team Block-->
                        <div class="team-block col-lg-2 col-md-2 col-xs-12">

                        </div>
                        <div class="team-block col-lg-4 col-md-6 col-xs-12">
                            <div class="inner-box team-details" data-aos="fade-up" data-aos-delay="200">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/t-1.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Carls Jhons</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                        <div class="team-block col-lg-4 col-md-6 col-xs-12 pb-none">
                            <div class="inner-box team-details" data-aos="fade-up" data-aos-delay="500">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/t-4.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Katy Grace</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                        <div class="team-block col-lg-2 col-md-2 col-xs-12">

                        </div>
                    </div>
                </section>
            </div>

    </section>
    <!--project section end-->




    <!-- START SECTION COUNTER UP -->
    <section class="counterup">
        <div class="">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">16+</p>
                            <h3>Years of experience</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">800+</p>
                            <h3>Happy Clients</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">9+</p>
                            <h3>projects completed </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0 last">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">90+</p>
                            <h3> acres completed
                                s</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COUNTER UP -->

    <!-- START SECTION TESTIMONIALS -->
    <section class="testimonials home18 bg-white">
        <div class="container">
            <div class="sec-title">
                <h2><span>Clients </span>Testimonials</h2>
                <p>We collect reviews from our customers.</p>
            </div>
            <div class="owl-carousel style1">
                <div class="test-1 pb-0 pt-0">

                    <h3 class="mt-3 mb-0">Lisa Smith</h3>
                    <h6 class="mt-1">New York</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis
                        donec, suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1 pb-0 pt-0">

                    <h3 class="mt-3 mb-0">Jhon Morris</h3>
                    <h6 class="mt-1">Los Angeles</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis
                        donec, suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1 pt-0">

                    <h3 class="mt-3 mb-0">Mary Deshaw</h3>
                    <h6 class="mt-1">Chicago</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis
                        donec, suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1 pt-0">

                    <h3 class="mt-3 mb-0">Gary Steven</h3>
                    <h6 class="mt-1">Philadelphia</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis
                        donec, suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1 pt-0">

                    <h3 class="mt-3 mb-0">Cristy Mayer</h3>
                    <h6 class="mt-1">San Francisco</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis
                        donec, suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1 pt-0">

                    <h3 class="mt-3 mb-0">Ichiro Tasaka</h3>
                    <h6 class="mt-1">Houston</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis
                        donec, suscipit tortor et sapien donec.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->


    <!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white-2">
        <div class="container">
            <div class="sec-title">
                <h2><span>Why </span>Choose Us</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="images/icons/icon-4.svg" alt="">
                            <h3>Wide Renge Of Properties</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                consectetur debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="images/icons/icon-5.svg" alt="">
                            <h3>Trusted by thousands</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                consectetur debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="images/icons/icon-6.svg" alt="">
                            <h3>Financing made easy</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                consectetur debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END SECTION WHY CHOOSE US -->
    <!-- START SECTION INFO-HELP -->
    <section class="info-help h17" style="
            background-image: url('images/house.jpg'); 
            background-size: auto 150%; 
            background-position: center; 
            background-repeat: no-repeat;">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-6 col-md-8 col-xs-8">
                    <div class="info-text" data-aos="fade-right">
                        <h3>Apartment for rent</h3>
                        <h5 class="mt-3">$6,400/month</h5>
                        <p class="pt-2">We Help you find the best places and offer near you. Bring to the
                            table win-win survival strategies to ensure proactive domination going forward.
                        </p>
                        <div class="inf-btn pro">
                            <a href="contact-us.html" class="btn btn-pro btn-secondary btn-lg">Get
                                Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-3"></div>
            </div>
        </div>
    </section>
    <!-- END SECTION INFO-HELP -->



    <!-- STAR SECTION PARTNERS -->
    <div class="partners bg-white-3">
        <div class="container">
            <div class="sec-title">
                <h2><span>Our </span>Partners</h2>
                <p>The Companies That Represent Us.</p>
            </div>
            <div class="owl-carousel style2">
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
            </div>
        </div>
    </div>

    <!-- START FOOTER -->
    <?php include 'footer.php'; ?>

    <!--register form -->
    <div class="login-and-register-form modal">
        <div class="main-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg"><i class="fa fa-times"></i></div>
                <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                <div class="soc-log fl-wrap">
                    <p>Login</p>
                    <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                        Facebook</a>
                    <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                </div>
                <div class="log-separator fl-wrap"><span>Or</span></div>
                <div id="tabs-container">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">Login</a></li>
                        <li><a href="#tab-2">Register</a></li>
                    </ul>
                    <div class="tab">
                        <div id="tab-1" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <label>Username or Email Address * </label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password * </label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Log
                                            In</span></button>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags">
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Remember me</label>
                                    </div>
                                </form>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div id="tab-2" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form"
                                        id="main-register-form2">
                                        <label>First Name * </label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Second Name *</label>
                                        <input name="name2" type="text" onClick="this.select()" value="">
                                        <label>Email Address *</label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password *</label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->

    <!-- ================= REQUIRED JS ================= -->

    <!-- 1️⃣ jQuery (Load FIRST, Only Once) -->
    <script src="js/jquery-3.5.1.min.js"></script>

    <!-- 2️⃣ Bootstrap -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- 3️⃣ Core Plugins -->
    <script src="js/mmenu.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <!-- 4️⃣ Revolution Slider -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <!-- 5️⃣ Initialize Plugins -->
    <script>
        $(document).ready(function () {

            /* ===== Owl Carousel ===== */
            $('.style1').owlCarousel({
                loop: true,
                margin: 10,
                items: 1,
                autoplay: true,
                autoplayTimeout: 4000
            });

            $('.style2').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                responsive: {
                    0: { items: 2 },
                    600: { items: 3 },
                    1000: { items: 5 }
                }
            });

            /* ===== Counter ===== */
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });

            /* ===== AOS Animation ===== */
            AOS.init();

        });


        /* ===== Revolution Slider Init ===== */
        var tpj = jQuery;
        var revapi;

        tpj(document).ready(function () {
            if (tpj("#rev_slider_26_1").revolution !== undefined) {
                revapi = tpj("#rev_slider_26_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    delay: 5000,
                    navigation: {
                        arrows: { enable: true }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    gridwidth: [1270, 1024, 778, 480],
                    gridheight: [729, 600, 600, 480]
                });
            }
        });
    </script>

    <!-- 6️⃣ Main Custom Script -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>