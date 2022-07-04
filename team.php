<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TK ISLAM LADONGI JAYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <?php include "header.php" ?>

    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Data Guru</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Data Guru</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Daftar Guru</span></p>
                <h1 class="mb-4">Temui dan Kenali Guru Kami</h1>
            </div>
            <div class="row">
                <?php
                include('config/koneksi.php');
                $sql = "SELECT * FROM guru ORDER BY id";
                $query = mysqli_query($con, $sql);

                while ($guru = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-md-6 col-lg-3 text-center team mb-5">
                        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                            <img class="img-fluid w-100" style="width: 30px;
            height: 250px;
            object-fit: cover;
            object-position: center;
        }" src="img/<?php echo $guru['foto']; ?>" alt="">

                        </div>
                        <h4><?php echo $guru['nama']; ?></h4>
                        <i><?php echo $guru['alamat']; ?></i>
                    </div>
                <?php
                };
                ?>

            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <?php include "footer.php" ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>