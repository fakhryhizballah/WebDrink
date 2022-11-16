<?= $this->extend('layout/bootstrap5'); ?>

<?= $this->section('head'); ?>
<meta name="keywords" content="Apps,Spairum,Lisma ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="Spairum merupakan sebuah startup perusahaan air minum yang meneydiakan layanan pengisian ulang air minum dalam upaya mengurangi penggunaan plastik sekali pakai.">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>

<main id="main">
    <section id="Tentang">
        <div class="container-fluid">
            <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdn.spairum.my.id/image/1660318465838-baner-air-gratis.webp" class="d-block h-10" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="Asset/img/home/which is better for the environment.webp" class="d-block h-10" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Asset/img/home/Refill_Reduce.webp" class="d-block h-10" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Asset/img/home/plastic_earth.webp" class="d-block h-10" alt="...">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="3" aria-label="Slide 4" class="active" aria-current="true"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-habit">
        <div class="container-fluid md-3">
            <figure class="text-end" data-aos="fade-up" data-aos-duration="1500">
                <blockquote class="blockquote text-center mt-5">
                    <q>Apa yang bisa kita lakukan bersama <strong class="text-primary">Spairum</strong> ? </q>
                </blockquote>
                <figcaption class="blockquote-footer mt-2 text-center">
                    Ayo Mulai kebiasaan baru untuk<cite title="Source Title"> lebih mencintai lingkungan</cite>
                </figcaption>
            </figure>
            <div class="card mt-5" data-aos="fade-up" data-aos-duration="1500">
                <div class="row justify-content-center align-self-center">
                    <div class="col-sm-4 col-xs-4" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                        <div class="text-center bg-black-50">
                            <img class="img-top icons" src="https://cdn.spairum.my.id/image/1660321194608-Bawatubler.png" alt="Bawa Botol Minum">
                            <div class="card-body">
                                <h5 class="card-title">Kurangi penggunaan plastik sekali pakai</h5>
                                <p class="card-text">
                                    Ayo kita mulai dari kita membiasakan diri untuk membawa tumbler dan kantong belanja yang lebih ringan,
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <div class="text-center bg-black-50" data-aos="fade-down" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                            <img class="img-top icons" src="https://cdn.spairum.my.id/image/1660322025252-Stop-AMDK.png" alt="Stop AMDK">
                            <div class="card-body">
                                <h5 class="card-title">Stop pengunaan air minum dalam kemasan sekali pakai</h5>
                                <p class="card-text">
                                    Saat kamu membeli air minum dalam kemasan kamu telah mempercepat kiamat untuk datang, dan membantu dajal merusak lingkungan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <div class=" text-center bg-black-50" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                            <img class="img-top icons" src="https://cdn.spairum.my.id/image/1660322831485-Pilah-sampah.png" alt="Pilah smpah">
                            <div class="card-body">
                                <h5 class="card-title">Meminimalisir dan memilah sampah</h5>
                                <p class="card-text">
                                    Ayo kita mulai dari kita membisaakan diri untuk meminimalisir dan memilah sampah, karena sampah dapat menjadi manfaat kembali di bank sampah.
                                    temukan bank sampah terdekat di <a href="https://air.spairum.my.id/stasiun">aplikasi air.spairum.my.id</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-scale">
        <div class="container-fluid md-3 mt-5">
            <figure class="text-end" data-aos="fade-up" data-aos-duration="1500">
                <blockquote class="blockquote text-center mt-5">
                    <q>Our <strong class="text-primary">Scale</strong></q>
                </blockquote>
            </figure>

            <div class="hori mt-5" style="box-sizing: border-box; margin-left : 48px;" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="200">
                <div class="vert">
                    <div class="card">
                        <h2><i class="fa fa-user"></i></h2>
                        <h2>1K+</h2>
                        <h2>User</h2>
                    </div>
                </div>

                <div class="vert">
                    <div class="card">
                        <h2><i class="fa fa-tint"></i></h2>
                        <h2>100+</h2>
                        <h2>Station</h2>
                    </div>
                </div>

                <div class="vert">
                    <div class="card">
                        <h2><i class="fa fa-handshake"></i></h2>
                        <h2>100+</h2>
                        <h2>Partner</h2>
                    </div>
                </div>

                <div class="vert">
                    <div class="card">
                        <h2><i class="fa fa-dollar-sign"></i></h2>
                        <h2>1 Million+</h2>
                        <h2>Income</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured" class="featured">
        <div class="container">
            <blockquote class="blockquote text-center mt-5" data-aos="fade-up" data-aos-duration="1500">
                <q class="mb-0">Our <strong class="text-primary">Service</strong></q>
            </blockquote>
            <div class="row mt-5">
                <div class="col-lg-6 col-xs-12">
                    <div class="icon-box" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img class="card-img-top fitur" src="Asset/img/home/natural-park.svg" alt="park">
                        <div class="card-body">
                            <h5 class="card-title text-center">Public area services</h5>
                            <p class="card-text text-center">Find a spairum station in public places such as the futsal court, jogging track, campus, sports hall.
                                <br> Find it at its location in the spairum application.
                            </p>
                            <div class="col text-center">
                                <a href="#" class="btn btn-primary">Download Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xs-12">
                    <div class="icon-box" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <img class="card-img-top fitur" src="Asset/img/home/office.svg" alt="Building Office">
                        <div class="card-body">
                            <h5 class="card-title text-center">Private area service</h5>
                            <p class="card-text text-center">The private area is a service for government offices or office buildings.
                                We provide services for management and quality control and ensure the availability of drinking water needs 24/7
                            </p>
                            <div class="col text-center">
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section id="tiny" class="featured-tiny">
        <div class="container">
            <div class="hori" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="200">
                <blockquote class="blockquote text-center mt-5">
                    <q class="mb-0">Our <strong class="text-primary">Article</strong></q>
                </blockquote>
                <div class="controller mt-5">
                    <div id="controls">
                        <button class="previous">
                            <i class="fas fa-angle-left"></i>
                        </button>
                        <button class="next">
                            <i class="fas fa-angle-right"></i>
                        </button>
                    </div>
                </div>
                <div class="tns-slider mt-3">
                    <div class="vert">
                        <div class="card">
                            <img class="card-img-top fitur" src="https://cdn.spairum.my.id/image/1660210275296-YCSE2.0Day2-0112.webp" alt="YCSE">
                            <br>
                            <h5 class="card-title text-center">YCSE</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque cumque omnis maiores earum! Fugit quas rem repudiandae dolores! Temporibus aliquam laboriosam in nam exercitationem nihil incidunt dicta aut tempora!
                            </p>
                            <div class="col text-center">
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="vert">
                        <div class="card">
                            <img class="card-img-top fitur" src="https://cdn.spairum.my.id/image/1660210290201-pertamina.webp" alt="Pertamina Borneo">
                            <br>
                            <h5 class="card-title text-center">Pertamina Borneo</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque cumque omnis maiores earum! Fugit quas rem repudiandae dolores! Temporibus aliquam laboriosam in nam exercitationem nihil incidunt dicta aut tempora!
                            </p>
                            <div class="col text-center">
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="vert">
                        <div class="card">
                            <img class="card-img-top fitur" src="https://cdn.spairum.my.id/image/1660218528073-YCSE2.0Day3-3883.webp" alt="Bootcamp">
                            <br>
                            <h5 class="card-title text-center">Bootcamp</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque cumque omnis maiores earum! Fugit quas rem repudiandae dolores! Temporibus aliquam laboriosam in nam exercitationem nihil incidunt dicta aut tempora!
                            </p>
                            <div class="col text-center">
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="vert">
                        <div class="card">
                            <img class="card-img-top fitur" src="https://cdn.spairum.my.id/image/1660210254250-IMG20200916154303.webp" alt="Launching">
                            <br>
                            <h5 class="card-title text-center">Launching</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque cumque omnis maiores earum! Fugit quas rem repudiandae dolores! Temporibus aliquam laboriosam in nam exercitationem nihil incidunt dicta aut tempora!
                            </p>
                            <div class="col text-center">
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="our-testimonial" class="padding">
        <div class="container-fluid">
            <div class="blockquote text-center mt-5" data-aos="fade-up" data-aos-duration="1500">
                <q class="mb-0">What do they say about <strong class="text-primary">Spairum</strong></q>
            </div>
            <div class="col-md-12 col-sm-12">
                <div id="testimonial-slider" class="owl-carousel" data-aos="fade-up" data-aos-duration="1500">
                    <div class="item">
                        <div class="testimonial-wrapp"> <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">Hindari pengunaan botol plastik sekali pakai, gunakan spairum untuk isi ulang
                                    #bebasplastik</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="Asset/img/home/testimoni/Angelina.webp"></div>
                            <h4 class="darkcolor">Angelina Diva</h4>
                            <small class="defaultcolor">Businessman</small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrapp"> <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">Kuy guys generasi millineal yang kece kece biar tambah Kece bawa tumbler kemanapun dan jangan lupa jaga kesehatan.
                                    #bebasplastik</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="Asset/img/home/testimoni/pegi.webp"></div>
                            <h4 class="darkcolor">Pegi Aprianti</h4>
                            <small class="defaultcolor">Businessman</small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrapp"> <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">Mari kita gunakan Botol minum untuk mengurangi sampah plastik.
                                    #bebasplastik</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="Asset/img/home/testimoni/farid.webp"></div>
                            <h4 class="darkcolor">Farid Sayoga</h4>
                            <small class="defaultcolor">Businessman</small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrapp"> <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="Asset/img/home/testimoni/farid.webp"></div>
                            <h4 class="darkcolor">David Zucker</h4>
                            <small class="defaultcolor">Businessman</small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrapp"> <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="Asset/img/home/testimoni/farid.webp"></div>
                            <h4 class="darkcolor">Akten Jansen</h4>
                            <small class="defaultcolor">Businessman</small>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-wrapp"> <span class="quoted"><i class="fa fa-quote-right"></i></span>
                            <div class="testimonial-text">
                                <p class="bottom40">Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.</p>
                            </div>
                            <div class="testimonial-photo"><img alt="" src="Asset/img/home/testimoni/farid.webp"></div>
                            <h4 class="darkcolor">Doe Raleway</h4>
                            <small class="defaultcolor">Businessman</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" data-aos="fade-up" data-aos-duration="1500">
                    <div class="carousel-item active" data-interval="10000">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="Asset/img/home/testimoni/Angelina.jpg" class="img-thumbnail rounded" alt="Angelina Diva">
                                </div>
                                <div class="col-md-8 text-align-middle">
                                    <h3 class="text-center">Angelina Diva</h3>
                                    <h5 class="text-center">Hindari pengunaan botol plastik sekali pakai, gunakan spairum untuk isi ulang
                                        #bebasplastik
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="Asset/img/home/testimoni/pegi.jpg" class="img-thumbnail rounded">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="text-center">Pegi Aprianti</h3>
                                    <h5 class="text-center align-middle">Kuy guys generasi millineal yang kece kece biar tambah Kece bawa tumbler kemanapun dan jangan lupa jaga kesehatan.
                                        #bebasplastik
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="Asset/img/home/testimoni/farid.jpg" class="img-thumbnail rounded">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="text-center">Farid Sayoga</h3>
                                    <h5 class="text-center">Mari kita gunakan Botol minum untuk mengurangi sampah plastik.
                                        #bebasplastik
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->
        </div>
    </section>


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <div class="section-title mt-5">
                <q class="mb-0">Partnership <strong class="text-primary">Spairum</strong></q>
                <p>This activity program is supported by</p>
            </div>
            <div class="owl-carousel">
                <!-- <img src="Asset/img/home/partnership/untan.png" alt="Untan"> -->
                <!-- <img href="http://www.untan.ac.id/" src="Asset/img/home/partnership/untan.png" alt=" Universitas tanjungpura">
                <img class="mide" href="http://ibt.untan.ac.id/" src="Asset/img/home/partnership/ibtlogo.png" alt="ibt Untan">
                <img src="Asset/img/home/partnership/Logo_PP.jpg" alt="UKM PP Lisma">
                <img src="Asset/img/home/partnership/download.png" alt="YCSC"> -->
                <div class="item"><img href="http://www.untan.ac.id/" src="https://cdn.spairum.my.id/image/1662879314307-untan.png" alt=" Universitas tanjungpura"></div>
                <div class="item"><img href="http://ibt.untan.ac.id/" src="https://cdn.spairum.my.id/image/1662879325342-ibtlogo.png" alt="ibt Untan"></div>
                <div class="item"><img src="https://cdn.spairum.my.id/image/1662879339556-Logo_PP.jpg" alt="UKM PP Lisma"></div>
                <div class="item"><img src="https://cdn.spairum.my.id/image/1662879468726-YCSE.png" alt="YCSE"></div>
                <div class="item"><img href="https://startupcampus.id/" src="https://cdn.spairum.my.id/image/1662549491991-Startup-Campus-Logo.png" alt="Startup Campus"></div>
                <div class="item"><img href="" src="https://cdn.spairum.my.id/image/1662722737891-1000startup.png" alt="1000 Startup"></div>
                <div class="item"><img href="" src="https://cdn.spairum.my.id/image/1662722821888-KMIEXPO.png" alt="KMI"></div>
                <div class="item"><img href="" src="https://cdn.spairum.my.id/image/1662722836117-SIAP.png" alt="SIAP"></div>
                <div class="item"><img href="" src="https://cdn.spairum.my.id/image/1662722854910-youthcolab.png" alt="Youth co:lab"></div>
                <div class="item"><img href="" src="https://cdn.spairum.my.id/image/1662722943292-blmtau.png" alt=""></div>
                <div class="item"><img href="" src="https://cdn.spairum.my.id/image/1662722674730-moveonprojectpertamina.png" alt="Move On Project Pertamina"></div>
                <div class="item"><img href="" src="https://cdn.spairum.my.id/image/1662722611390-pertamuda.png" alt="Pertamuda"></div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->

</main>



<?= $this->endSection('layout'); ?>

<?= $this->section('script'); ?>
<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
    "use strict";
    var $window = $(window);
    var windowsize = $(window).width();
    var $root = $("html, body");
    var $this = $(this);
    /*Testimonials 3columns*/
    $("#testimonial-slider").owlCarousel({
        items: 3,
        autoplay: 2500,
        autoplayHoverPause: true,
        loop: true,
        margin: 30,
        dots: true,
        nav: false,
        responsive: {
            1280: {
                items: 3,
            },
            600: {
                items: 2,
            },
            320: {
                items: 1,
            },
        }
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoWidth: true,
        autoHeight: true
    })
</script>

<script>
    var tiny = tns({
        "container": '.tns-slider',
        "items": 2,
        // "startIndex": 1,
        "mouseDrag": true,
        // "center": true,
        "rewind": true,
        "autoplay": true,
        "autoplayHoverPause": true,
        "autoplayButtonOutput": false,
        controlsContainer: "#controls",
        prevButton: ".previous",
        nextButton: ".next",
        "responsive": {
            "1600": {
                "items": 3,
                "guttter": 20
            },
            "1024": {
                "items": 2,
                "guttter": 20
            },
            "360": {
                "items": 1,
                "guttter": 20
            },
        },
        "nav": false,
        "swipeAngle": false,
        "speed": 400
    });
</script>
<?= $this->endSection('script'); ?>