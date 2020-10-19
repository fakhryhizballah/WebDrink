<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/ico" href="/Asset/img/logo.ico" />
    <title><?= $title; ?></title>
    <meta name="author" content="Spairum">

    <?= $this->renderSection('head'); ?>

    <link href="Asset/css/desain.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Vendor CSS Files -->

    <!-- <link href="Asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- <link href="Asset/vendor/animate.css/animate.min.css" rel="stylesheet"> -->

    <!-- <link href="Asset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- <link href="Asset/vendor/venobox/venobox.css" rel="stylesheet"> -->


    <!-- Vendor CSS Files -->

    <link href="Asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="Asset/vendor/animate.css/animate.min.css" rel="stylesheet">

    <link href="Asset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="Asset/vendor/venobox/venobox.css" rel="stylesheet">






</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top sticky-top">

        <div class="container">

            <a class="navbar-brand" href="#">

                <img src="/Asset/img/spairum.png" width="auto" height="50" alt="">

            </a>

            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="nav">

                    <li class="nav-item">

                        <a class="nav-link text-dark" href="/">Home</a>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link text-dark" href="/about">About Us</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="layanan-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"=>Service</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item" href="#">Perumahan</a>

                            <a class="dropdown-item" href="#">Perkantoran</a>

                            <a class="dropdown-item" href="#">Tempat Usaha</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class=" btn btn-sm rounded-pill btn-outline-primary" href="https://apps.spairum.com">Daftar/Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar END -->
    <?= $this->renderSection('layout'); ?>


    <footer class="new_footer_area bg_color">

        <div class="new_footer_top">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.8179516312625!2d109.3272833200361!3d-0.02463228170738323!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10016932181f918e!2sSpairum!5e0!3m2!1sen!2sid!4v1586248541957!5m2!1sen!2sid" width="250" height="255" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">

                            <h3 class="f-title f_600 t_color f_size_18">Link</h3>

                            <ul class="list-unstyled f_list">

                                <li><a href="/about">Tentang</a></li>

                                <li><a href="#">Layanan</a></li>

                                <li><a href="/blog">Berita</a></li>

                                <li><a href="#">FAQ</a></li>

                                <li><a href="#">Langanan</a></li>

                                <li><a href="#">Karir</a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">

                            <h3 class="f-title f_600 t_color f_size_18">About US</h3>

                            <ul class="list-unstyled f_list">

                                <li><a href="#">Jl. Merdeka, Pontianak-Kalimantan</a></li>

                                <li><a href="#">contacts</a></li>

                                <li><a href="#">Reporting</a></li>

                                <li><a href="#">Support Policy</a></li>

                                <li><a href="#">Privacy</a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">

                            <h3 class="f-title f_600 t_color f_size_18">Spairum</h3>

                            <h3 class="f-title f_600 t_color f_size_18">PT.EET</h3>

                            <p>PT.EET Merupakan Perusahaan yang memiliki merek dagang Spairum berlokasi di Pontianak-Kalimantan Barat </p>

                        </div>

                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">

                            <h3 class="f-title f_600 t_color f_size_18">Follow us and keep updated!</h3>

                            <div class="f_social_icon">

                                <a href="https://www.facebook.com/pg/spairum/about/" class="fa fa-facebook"></a>

                                <a href="https://www.instagram.com/spairum/" class="fa fa-instagram"></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="footer_bg">

                <div class="footer_bg_one"></div>

                <div class="footer_bg_two"></div>

            </div>

        </div>

        <div class="footer_bottom">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6 col-sm-7">

                        <p class="mb-0 f_400">©Spairum 2020 All rights reserved.</p>

                    </div>

                </div>

            </div>

        </div>

    </footer>


    <!-- Vendor JS Files -->

    <script src="Asset/vendor/jquery/jquery.min.js"></script>

    <script src="Asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="Asset/vendor/jquery.easing/jquery.easing.min.js"></script>

    <script src="Asset/vendor/jquery-sticky/jquery.sticky.js"></script>

    <script src="Asset/vendor/owl.carousel/owl.carousel.min.js"></script>

    <script src="Asset/vendor/waypoints/jquery.waypoints.min.js"></script>

    <script src="Asset/vendor/counterup/counterup.min.js"></script>

    <script src="Asset/vendor/venobox/venobox.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




    <!-- Template Main JS File -->

    <script src="assets/js/main.js"></script>

</body>

</html>