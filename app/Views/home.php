<?= $this->extend('layout/base'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Apps,Spairum,Lisma ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="Spairum merupakan sebuah startup perusahaan air minum yang meneydiakan layanan pengisian ulang air minum dalam upaya mengurangi penggunaan plastik sekali pakai.">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>

<section class="carousel-default" id="Tentang">
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ol>
        <!-- The slideshow -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-slide" src="Asset/img/home/which is better for the environment.jpg" alt="which is better for the environment">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-slide" src="Asset/img/home/Refill_Reduce.jpg" alt="">
                <div class="carousel-caption">
                    <!-- <h3 class="text-dark">UMKM</h3>
                    <p class="text-dark text-sm">Kami membantu untuk menikatakan kesejahtraan UKM dengan cara mendistribusi minuman kepada konsumen melalui stasiun pengisian air minum (Spairum)</p> -->
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block img-slide" src="Asset/img/home/plastic_earth.jpg" alt="Bumi dan plastic">
                <div class="carousel-caption">
                    <!-- <h3 class="text-dark">Spairum</h3>
                    <p class="text-dark">merupakan sebuah startup perusahaan air minum yang meneydiakan layanan pengisian ulang air minum dalam upaya mengurangi penggunaan plastik sekali pakai.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-slide" src="Asset/img/home/bottle-up.jpg" alt="bottle refill">
                <div class="carousel-caption">
                    <!-- <h3 class="text">Edukasi</h3>
                    <p class="text">selain itu Kami mengedukasi masarakan untuk menjaga kelestarian bumi.</p> -->
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>

<div class="jumbotron center-block">
    <blockquote class="blockquote text-center" data-aos="fade-up" data-aos-duration="1500">
        <q class="mb-0">What does <strong class="text-primary">spairum </strong>do ?</q>
    </blockquote>
    <div class="container" data-aos="fade-up" data-aos-duration="1500">
        <div class="row justify-content-center align-self-center">
            <div class="col-sm-4 col-xs-4">
                <div class=" text-center bg-black-50">
                    <img class="img-top logo" src="Asset/img/care.png" alt="Card">
                    <div class="card-body">
                        <h5 class="card-title">We build water distribution ecosystem for everyone</h5>
                        <p class="card-text">Spairum build a distribution ecosystem for drinking water refill for bottles that are more environmentally friendly.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <div class=" text-center bg-black-50">
                    <img class="img-top logo" src="Asset/img/home/jempol.png" alt="Cood">
                    <div class="card-body">
                        <h5 class="card-title">We guarantee the safety and hygiene of drinking water</h5>
                        <p class="card-text">By using internet of things technology we can guarantee quality and security in real time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-4">
                <div class=" text-center bg-black-50">
                    <img class="img-top logo" src="Asset/img/home/365.png" alt="service">
                    <div class="card-body">
                        <h5 class="card-title">The best service and provide 365 days non-stop service</h5>
                        <p class="card-text">Spairum station can be used 24 hours without stopping and we guarantee the equality of refilling drinking water with iot.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section id="featured" class="featured">
        <blockquote class="blockquote text-center" data-aos="fade-up" data-aos-duration="1500">
            <q class="mb-0">Our <strong class="text-primary">Service</strong></q>
        </blockquote>
        <div class="row">
            <div class="col-sm-6 col-xs-6">
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
            <div class="col-sm-6 col-xs-6">
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
    </section>
</div>



<div class="jumbotron">
    <div class="blockquote text-center" data-aos="fade-up" data-aos-duration="1500">
        <q class="mb-0">What do they say about <strong class="text-primary">Spairum</strong></q>
    </div>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
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
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<main id="main"></main>

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">

    <div class="container" data-aos="fade-up" data-aos-duration="1500">
        <div class="section-title">
            <q class="mb-0">Partnership <strong class="text-primary">Spairum</strong></q>
            <p>This activity program is supported by</p>
        </div>
        <div class="owl-carousel">
            <!-- <img src="Asset/img/home/partnership/untan.png" alt="Untan"> -->
            <img href="http://www.untan.ac.id/" src="Asset/img/home/partnership/untan.png" alt=" Universitas tanjungpura">
            <img class="mide" href="http://ibt.untan.ac.id/" src="Asset/img/home/partnership/ibtlogo.png" alt="ibt Untan">
            <img src="Asset/img/home/partnership/Logo_PP.jpg" alt="UKM PP Lisma">
            <img src="Asset/img/home/partnership/download.png" alt="YCSC">
        </div>
    </div>
</section>
<!-- End Clients Section -->

</main>

<?= $this->endSection('layout'); ?>