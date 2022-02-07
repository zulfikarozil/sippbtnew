<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Puskesmas Baru Tengah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/frontend/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume - v3.0.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="<?= site_url('home') ?>"><i class="bx bx-home"></i> <span>Home</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->


    <main id="main">


        <?= (!empty($content) ? $content : ''); ?>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/typed.js/typed.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/frontend/js/main.js"></script>

</body>

</html>