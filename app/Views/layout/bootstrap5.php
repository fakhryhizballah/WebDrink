<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="image/ico" href="/Asset/img/logo.ico" />
    <?= $this->renderSection('head'); ?>
    <title><?= $title; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font -->
    <script src="https://kit.fontawesome.com/30ddaf6bd8.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href="http://fonts.cdnfonts.com/css/quicksand" rel="stylesheet">


    <!-- Vendor CSS Files -->
    <!-- <link href="Asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.2/venobox.css" rel="stylesheet">
    <!-- AOS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!-- costume css -->
    <link href="\Asset\css\foother.css" rel="stylesheet">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JM6HPZLXEV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JM6HPZLXEV');
    </script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top sticky-top" style="padding-top: 4px; padding-bottom: 4px;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://cdn.spairum.my.id/image/spairum.webp" width="auto" height="60" alt="Logo Spairum">
            </a>
            <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show menu" id="navbarNavDropdown">
                <ul class="nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link text-dark status-nav" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark status-nav" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark status-nav" href="/blogs">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark status-nav" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark status-nav" href="#">Take Action</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark status-nav" href="/careers">Karir</a>
                    </li>
                    <a class="btn btn-sm rounded-pill btn-outline-info nav-link" href="https://air.spairum.my.id">
                        <span class="nav-link-inner-text mr-1">Create Account</span>
                    </a>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar END -->
    <?= $this->renderSection('layout'); ?>

    <footer class="new_footer_area bg_color">
        <div class="new_footer_top ">
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
                                <li><a href="https://air.spairum.my.id">Layanan</a></li>
                                <li><a href="/blog">Berita</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Langanan</a></li>
                                <li><a href="/careers">Karir</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">About US</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">Jl. Merdeka, Pontianak-Kalimantan</a></li>
                                <li><a href="https://wa.me/+6289601207398">contacts</a></li>
                                <li><a href="https://wa.me/+6289601207398">Reporting</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Spairum</h3>
                            <h3 class="f-title f_600 t_color f_size_18">PT. STASIUN PENGISIAN AIR</h3>
                            <p>PT.SPA Merupakan Perusahaan yang memiliki merek dagang Spairum berlokasi di Pontianak-Kalimantan Barat </p>
                        </div>
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Follow us and keep updated!</h3>
                            <div class="f_social_icon">
                                <!-- <i class="fa fa-facebook-square" aria-hidden="true"></i> -->
                                <!-- <i class="fa-brands fa-facebook"></i> -->
                                <a href="https://www.facebook.com/pg/spairum/about/"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/spairum/"> <i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg ">
                <!-- <div class="footer_bg_one"></div> -->
                <!-- <div class="footer_bg_one"></div> -->
                <div class="footer_bg_two"></div>
                <div class="footer_bg_tri"></div>
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

    <?= $this->renderSection('modal'); ?>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Vendor JS Files -->
    <!-- AOS -->
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            // once: true,
            disable: false,
            mirror: false,
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.2/venobox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <!-- Template Main JS File -->

    <?= $this->renderSection('script'); ?>
    <script>
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('.status-nav');
        const menuLength = menuItem.length
        for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].className = "nav-link active"
            }
        }
    </script>
</body>

</html>