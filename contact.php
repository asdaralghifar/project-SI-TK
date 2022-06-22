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
            <h3 class="display-3 font-weight-bold text-white">Informasi Pendaftaran</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Beranda</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Informasi Pendaftaran</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Lokasi</span></p>
                <h1 class="mb-4">Berikut Lokasi Sekolah Kami</h1>
            </div>
            <div class="map">
                <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15920.425310813724!2d122.50332635000001!3d-3.9985578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9813f535dadbc9%3A0x10882c4d253343b6!2sVW94%2B2QQ%20RA%20NURUL%20ISTIQAMAH%20NURIS%20LADONGI%2C%20Ladongi%2C%20Kec.%20Ladongi%2C%20Kabupaten%20Kolaka%2C%20Sulawesi%20Tenggara%2093573!5e0!3m2!1sid!2sid!4v1655889077841!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">Daftar Kelas</span></p>
                    <h1 class="mb-4">Daftarkan Anak Anda</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Labore eos amet dolor amet diam
                        </li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Diam dolor diam elitripsum vero.
                        </li>
                    </ul>
                    <!-- <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a> -->
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Daftar Kelas</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Nama Anak Anda" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Nama Orang Tua" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="No. HP" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Pilih Kelas</option>
                                        <option value="1">Kelas Islam</option>
                                        <option value="2">Kelas Bahasa</option>
                                        <option value="3">Kelas Sains Dasar</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">saran dan masukan</span></p>
                <h1 class="mb-4">Silahkan Sampaikan Saran dan Masukan Anda</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <p>Labore sea amet kasd diam justo amet ut vero justo. Ipsum ut et kasd duo sit, ipsum sea et erat
                        est dolore, magna ipsum et magna elitr. Accusam accusam lorem magna, eos et sed eirmod dolor est
                        eirmod eirmod amet.</p>
                    <div class="d-flex">
                        <i class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Address</h5>
                            <p>123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Email</h5>
                            <p>info@example.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Phone</h5>
                            <p>+012 345 67890</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle" style="width: 45px; height: 45px;"></i>
                        <div class="pl-3">
                            <h5>Opening Hours</h5>
                            <strong>Sunday - Friday:</strong>
                            <p class="m-0">08:00 AM - 05:00 PM </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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