<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Projects</title>
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

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <section class="projects">
                    <h2 class="section-title">Our Projects</h2>

                    <div class="project-container">

                        <!-- Completed Projects -->
                        <div class="project-card completed">
                            <h3>Completed Projects</h3>
                            <p>Luxury Villas in Kittur</p>
                            <p>2BHK & 3BHK Premium Apartments</p>
                            <p>Commercial Complex - Downtown</p>
                            <button class="btn completed-btn">View Completed</button>
                        </div>

                        <!-- Ongoing Projects -->
                        <div class="project-card ongoing">
                            <h3>Ongoing Projects</h3>
                            <p>Smart City Residency</p>
                            <p>Green Valley Phase 2</p>
                            <p>Premium Gated Community</p>
                            <button class="btn ongoing-btn">View Ongoing</button>
                        </div>

                    </div>
                </section>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="single widget">
                        <!-- Start: Schedule a Tour -->
                        <div class="schedule widget-boxed mt-30">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 book">
                                        <input type="text" id="reservation-date" data-lang="en" data-large-mode="true"
                                            data-min-year="2017" data-max-year="2020"
                                            data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0"
                                            data-theme="my-style" class="form-control" readonly="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 book2">
                                        <input type="text" id="reservation-time" class="form-control" readonly="">
                                    </div>
                                </div>
                                <div class="row mrg-top-15 mb-3">
                                    <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Adult</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quant[1]"
                                                class="border-0 text-center form-control input-number" data-min="0"
                                                data-max="10" value="0">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    data-type="plus" data-field="quant[1]">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-4">
                                        <label class="mb-4">Children</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    disabled="disabled" data-type="minus" data-field="quant[2]">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quant[2]"
                                                class="border-0 text-center form-control input-number" data-min="0"
                                                data-max="10" value="0">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn counter-btn theme-cl btn-number"
                                                    data-type="plus" data-field="quant[2]">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="payment-method.html"
                                    class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit
                                    Request</a>
                            </div>
                        </div>
                        <!-- End: Schedule a Tour -->
                        <!-- end author-verified-badge -->
                        <div class="sidebar">
                            <div class="widget-boxed mt-33 mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Agent Information</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            <img src="images/testimonials/ts-1.jpg" alt="author-image"
                                                class="author__img">
                                            <h4 class="author__title">Lisa Clark</h4>
                                            <p class="author__meta">Agent of Property</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i
                                                        class="fa fa-map-marker"></i></span>302 Av Park, New
                                                York
                                            </li>
                                            <li><span class="la la-phone"><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span><a href="#">(234) 0200
                                                    17813</a></li>
                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                        aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a>
                                            </li>
                                        </ul>
                                        <div class="agent-contact-form-sidebar">
                                            <h4>Request Inquiry</h4>
                                            <form name="contact_form" method="post" action="functions.php">
                                                <input type="text" id="fname" name="full_name" placeholder="Full Name"
                                                    required />
                                                <input type="number" id="pnumber" name="phone_number"
                                                    placeholder="Phone Number" required />
                                                <input type="email" id="emailid" name="email_address"
                                                    placeholder="Email Address" required />
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage" class="multiple-send-message"
                                                    value="Submit Request" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Recent Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img
                                                            src="images/feature-properties/fp-1.jpg" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html">
                                                        <h6>Family Home</h6>
                                                    </a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main my-4">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img
                                                            src="images/feature-properties/fp-2.jpg" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html">
                                                        <h6>Family Home</h6>
                                                    </a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img
                                                            src="images/feature-properties/fp-3.jpg" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html">
                                                        <h6>Family Home</h6>
                                                    </a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header mb-5">
                                        <h4>Feature Properties</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="slick-lancers">
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury
                                                                <i>New
                                                                    York</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury
                                                                <i>Los
                                                                    Angles</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury
                                                                <i>San
                                                                    Francisco</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury
                                                                <i>Miami FL</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-4.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury
                                                                <i>Chicago IL</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-5.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury
                                                                <i>Toronto CA</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-6.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Specials of the day</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img src="images/single-property/banner.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Popular Tags</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Real
                                                        Home</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                            </div>
                                            <div class="tags">
                                                <span><a href="#" class="btn btn-outline-primary">Real
                                                        Estates</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                            </div>
                                            <div class="tags no-mb">
                                                <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                                <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section <!--Footer-->
        <?php include('footer.php'); ?>
        <!--Footer end-->
    </div>


</body>

</html>