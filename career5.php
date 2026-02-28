<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Contact Us</title>

    <?php include('header.php'); ?>
    <link rel="stylesheet" href="css/career.css">
</head>

<body class="inner-pages hd-white">

    <div id="wrapper">

        <?php include('menue.php'); ?>

        <!-- Banner -->
        <div class="single-property-4">
            <div class="container-fluid p0">
                <div class="row">
                    <div class="col-12 p0">
                        <img class="img-fluid w-100" src="images/career.png" alt="Career Image">
                    </div>
                </div>
            </div>
        </div>

        <!-- Current Openings -->
        <section class="featured portfolio text-center">
            <div class="container">
                <div class="sec-title mb-4 text-center">
                    <h2><span>Current </span>Openings</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Current Jobs</th>
                                <th>Experience</th>
                                <th>Location</th>
                                <th>Details</th>
                                <th>Apply</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Telecaller</td>
                                <td>0-2 Years</td>
                                <td>Hubballi</td>
                                <td>
                                    <a href="tell-calling.php" class="btn btn-sm btn-danger">
                                        View
                                    </a>
                                </td>
                                <td>
                                    <a href="apply-now.php" class="btn btn-sm btn-dark">
                                        Apply
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Sales Executive</td>
                                <td>2-3 Years</td>
                                <td>Hubballi</td>
                                <td>
                                    <a href="sales-executive.php" class="btn btn-sm btn-danger">
                                        View
                                    </a>
                                </td>
                                <td>
                                    <a href="apply-now.php" class="btn btn-sm btn-dark">
                                        Apply
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div> <!-- END WRAPPER -->

    <?php include('footer.php'); ?>

</body>

</html>