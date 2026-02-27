<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us | Kittur Developers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="css/contact.css">
    <?php include('header.php'); ?>
</head>

<body>
    <?php include('menue.php'); ?>
    <!-- ================= CONTACT BANNER ================= -->
    <section class="contact-banner">
        <div class="banner-overlay">
            <div class="container text-center text-white">
                <h1>Contact Us</h1>
                <p>We’re Here To Help You Find Your Dream Property</p>
            </div>
        </div>
    </section>

    <!-- ================= CONTACT INFO + FORM ================= -->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <!-- CONTACT INFO -->
                <div class="col-lg-5 mb-4">
                    <h3 class="section-title mb-4">Get In Touch</h3>

                    <p><i class="fa-solid fa-location-dot me-2"></i>
                        Eureka Corner,
                        Koppikar Road, HUBLI-20.
                    </p>

                    <p><i class="fa-solid fa-mobile me-2"></i>
                        +91 95388 86974
                    </p>

                    <p><i class="fa-solid fa-mobile me-2"></i>
                        +91 98866 01044
                    </p>

                    <p><i class="fa-solid fa-envelope me-2"></i>
                        kitturweb@gmail.com
                    </p>

                    <p><i class="fa-solid fa-clock me-2"></i>
                        Mon – Sat : 9 AM – 6 PM
                    </p>
                </div>


                <!-- CONTACT FORM -->
                <div class="col-lg-7">
                    <div class="contact-form-box">
                        <form>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                            </div>

                            <div class="mb-3">
                                <select class="form-control">
                                    <option>Select Project</option>
                                    <option>Royal Villas</option>
                                    <option>Smart Residency</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                            </div>

                            <button type="submit" class="btn contact-btn">
                                Send Message
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <h1></h1>



    <!-- ================= GOOGLE MAP ================= -->
    <section>
        <div class="map-container">
            <iframe src="https://www.google.com/maps?q=15.346705455395469,75.14248585260403&output=embed"
                allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </section>
    <!--Footer start-->
    <?php include('footer.php'); ?>
    <!--Footer end-->

</body>

</html>