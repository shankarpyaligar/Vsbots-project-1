<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Contact Us</title>
    <?php include('header.php') ?>
</head>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="images/logo-red.svg" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <!-- Left Side Content / End -->


                </div>
            </div>
            <!-- Header / End -->

        </header>
        <?php include('menue.php'); ?>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <div class="single-property-4">
            <div class="container-fluid p0">
                <div class="row">
                    <div class="col-12 p0">
                        <div class="popup-images">
                            <a class="popup-img" href="images/career.png">
                                <img class="img-fluid w-100" src="images/career.png" alt="Career Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Our Location</h3>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                            <div id="success" class="successform">
                                <p class="alert alert-success font-weight-bold" role="alert">Your message was sent
                                    successfully!</p>
                            </div>
                            <div id="error" class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="name"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="lastname"
                                    placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-custom input-full" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="message"
                                    required rows="8" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc" style="background-image:cantact.jpg !important;">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">Office:# 10, 2nd floor, Eureka Corner, Koppikar Road, Hubli-20
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">9538886974</p>
                                        <p class="in-p">9886601044</p>
                                        <p class="in-p">8050153337</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">kitturweb@gmail.com</p>
                                    </div>
                                </li>
                                <li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->