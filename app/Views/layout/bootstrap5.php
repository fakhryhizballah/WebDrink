<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->renderSection('head'); ?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/ico" href="/Asset/img/logo.ico" />
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css"> -->
    <link rel="stylesheet" href="\Asset\css\foother.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/Asset/img/spairum.png" width="auto" height="60" alt="Logo Spairum">
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
                    <!-- 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="layanan-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"=>Service</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item" href="#">Perumahan</a>

                            <a class="dropdown-item" href="#">Perkantoran</a>

                            <a class="dropdown-item" href="#">Tempat Usaha</a>
                        </div>
                    </li> 
                    -->
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="/blogs">Blog</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark" href="/careers">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">FAQ</a>
                    </li> -->
                    <li class="nav-item">
                        <a class=" btn btn-sm rounded-pill btn-outline-primary" href="https://air.spairum.my.id">Daftar/Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar END -->
    <?= $this->renderSection('layout'); ?>

    <footer class="new_footer_area bg_color">

        <div class="new_footer_top ">
            <div class="wave"></div>
            <!-- <div class="wave"></div> -->
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
                            <h3 class="f-title f_600 t_color f_size_18">PT.EET</h3>
                            <p>PT.EET Merupakan Perusahaan yang memiliki merek dagang Spairum berlokasi di Pontianak-Kalimantan Barat </p>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <?= $this->renderSection('script'); ?>
</body>

</html>