<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <?php include('header.php') ?>
    <style>
        <style>
        /* ===== MAKE SLIDER FULL SCREEN ===== */

        .rev_slider,
        .rev_slider_wrapper,
        .rev_slider_wrapper .rev_slider {
            width: 100% !important;
            max-width: 100% !important;
        }

        .rev_slider .rev-slidebg {
            width: 100% !important;
            height: 100vh !important;
            object-fit: cover !important;
        }

        /* Remove unwanted side borders */
        .tp-caption.tp-shapewrapper[style*="border-left"],
        .tp-caption.tp-shapewrapper[style*="border-bottom"] {
            display: none !important;
        }

        /* Remove extra white spacing */
        body,
        html {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
    </style>
    </style>

</head>

<body class="int_white_bg h19 homepage-5 homepage-19">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="images/logo.jpg" data-sticky-logo="images/logo.jpeg"
                                    alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>

                        <?php include('menue.php'); ?>
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <!-- <a href="add-property.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- SLIDER START -->

    <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
        <ul>

            <!-- SLIDE 1 -->
            <li data-index="rs-73" data-transition="fade" data-masterspeed="300">

                <!-- MAIN IMAGE -->
                <img src="images/bg1-img.png" data-bgcolor="#f8f8f8" alt="" data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                <!-- LAYER 1 Dark Overlay -->
                <div class="tp-caption tp-shape tp-shapewrapper" data-x="center" data-y="middle" data-width="full"
                    data-height="full" data-type="shape" data-frames='[
            {"from":"opacity:0;","speed":600,"to":"o:0;","delay":0},
            {"delay":"wait","speed":600,"to":"opacity:0;"}
        ]' style="background-color:rgba(0,0,0,0.5);">
                </div>

                <!-- NUMBER BLOCK -->
                <div class="tp-caption rev-btn tp-resizeme slider-block sx-bg-primary" data-x="left" data-hoffset="60"
                    data-y="middle" data-voffset="-220" data-fontsize="120" data-lineheight="120" data-frames='[
            {"from":"y:-100%;opacity:0;","speed":600,"to":"o:1;","delay":200},
            {"delay":"wait","speed":400,"to":"y:-100%;"}
        ]' style="font-family:Poppins,sans-serif;">
                </div>

            </li>
            <!-- SLIDE 2  -->
            <li data-index="rs-74" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                data-thumb="images/bg2-img.png" data-rotate="0" data-saveperformance="off" data-title="" data-param1="1"
                data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/bg2-img.jpg" data-bgcolor='#f8f8f8' style='' alt="" data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                    data-no-retina>

                <!-- LAYER 1  right image overlay dark-->
                <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup" id="slide-74-layer-1"
                    data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                    data-fontweight="['100','100','400','400']" data-width="['full','full','full','full']"
                    data-height="['full','full','full','full']" data-whitespace="nowrap" data-type="shape"
                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                    data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:0;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                    style="z-index: 6;text-transform:left;background-color:rgba(0,0,0,0.5);">
                </div>



                <!-- Border left Part -->
                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-74-layer-8"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                    data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                    data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                    data-frames='[{"delay":0,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                    style="z-index:8;background-color:rgba(100, 130, 124, 0);border-left:40px solid #eef1f2;">
                </div>

                <!-- Border bottom Part -->
                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-74-layer-7"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                    data-height="full" data-whitespace="nowrap" data-visibility="['on','on','off','off']"
                    data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                    data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                    style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"> </div>
            </li>

        </ul>
        <div class="tp-bannertimer"></div>
        <!-- left side social bar-->
        <div class="slide-left-social">
            <ul class="clearfix">
                <li><a href="#" class="sx-title-swip" data-hover="Linkedin">Linkedin</a></li>
                <li><a href="#" class="sx-title-swip" data-hover="Twitter">Twitter</a></li>
                <li><a href="#" class="sx-title-swip" data-hover="Facebook">Facebook</a></li>
            </ul>
        </div>

    </div>
    </div>
    <!-- SLIDER END -->


    <h1> </h1>
    <!--About Secrion-->
    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT SIDE (TEXT) -->
                <div class="col-lg-6">
                    <h2 class="mb-4">About <span class="text-danger">Kittur Developers</span></h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Laborum odio id voluptatibus incidunt cum.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Esse itaque officiis tempora possimus odio rerum.
                    </p>

                    <a href="about.php" class="btn btn-danger mt-3">
                        Read More
                    </a>
                </div>

                <!-- RIGHT SIDE (IMAGE) -->
                <div class="col-lg-6">
                    <img src="images/bg/ab.png" style="width: 500px; height: 400px;">
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
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">300</p>
                            <h3>Sold Houses</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">400</p>
                            <h3>Daily Listings</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">250</p>
                            <h3>Expert Agents</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0 last">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">200</p>
                            <h3>Won Awars</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COUNTER UP--

      
       
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
    <section class="info-help h17" style="height: 500px; 
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
    <!-- END SECTION PARTNERS -->

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

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/aos2.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/fitvids.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/search.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/searched.js"></script>
    <script src="js/forms-2.js"></script>
    <script src="js/color-switcher.js"></script>
    <script>
        $(window).on('scroll load', function () {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });


    </script>

    <!-- Slider Revolution scripts -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script>
        var tpj = jQuery;
        var revapi26;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_26_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_26_1");
            } else {
                revapi26 = tpj("#rev_slider_26_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },

                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 80,
                                v_offset: 10
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 10,
                                v_offset: 10
                            }
                        },
                        bullets: {
                            enable: false,
                            hide_onmobile: false,
                            style: "bullet-bar",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 30,
                            v_offset: 30,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1270, 1024, 778, 480],
                    gridheight: [729, 600, 600, 480],
                    lazyType: "smart",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: ".site-header",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/

    </script>

    <script>
        $(window).on('load', function () {
            $('.home5-right-slider').owlCarousel({
                loop: true,
                smartSpeed: 800
            });
        });
        $('.home5-right-slider').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            rtl: false,
            autoplayHoverPause: false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480: {
                    items: 1,
                    center: false
                },
                520: {
                    items: 2,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 5
                },
                1366: {
                    items: 5
                },
                1400: {
                    items: 5
                }
            }
        });

    </script>

    <!-- MAIN JS -->
    <script src="js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>