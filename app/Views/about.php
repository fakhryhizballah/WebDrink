<?= $this->extend('layout/bootstrap5'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="about,Tentang Spairum,Lisma ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="Spairum merupakan sebuah startup perusahaan air minum yang meneydiakan layanan pengisian ulang air minum dalam upaya mengurangi penggunaan plastik sekali pakai.">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>

<div class="flash-data" data-flashdata="<?= session()->getFlashdata('flash'); ?>"></div>
<div class="flash-Success" data-flashdata="<?= session()->getFlashdata('Berhasil'); ?>"></div>

<div class="bg-light">
    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
                <h1 class="display-4">About Spairum</h1>
                <p class="lead text-muted mb-0">Spairum merupakan sebuah startup perusahaan air minum yang meneydiakan layanan pengisian ulang air minum di tempat umum seperti di taman, kantor, kampus, rumah sakit dalam upaya mengurangi penggunaan plastik sekali pakai.</p>
                <p></p>
                <p class="lead text-muted mb-0">
                    Kami menawarkan alternatif sederhana untuk tidak membeli air kemasan dan tujuan kami adalah mengurangi jumlah botol plastik sekali pakai yang digunakan secara tidak perlu.
                </p>
            </div>
            <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
        </div>
    </div>
</div>

<div class="container py-5">

    <figure class="text-end" data-aos="fade-up" data-aos-duration="1500">
        <blockquote class="blockquote text-center mt-5">
            <q>Our <strong class="text-primary">Milestone</strong></q>
        </blockquote>
    </figure>
    <div class="milestone" style="box-sizing: border-box;" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="300">
        <div class="contain left">
            <div class="content">
                <h2>2019</h2>
                <p>Lorem ipsum..</p>
            </div>
        </div>
        <div class="contain right">
            <div class="content">
                <h2>2020</h2>
                <p>Lorem ipsum..</p>
            </div>
        </div>
        <div class="contain left">
            <div class="content">
                <h2>2021</h2>
                <p>Lorem ipsum..</p>
            </div>
        </div>
        <div class="contain right">
            <div class="content">
                <h2>2022</h2>
                <p>Lorem ipsum..</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                <h2 class="font-weight-light">Visi</h2>
                <p class="font-italic text-muted mb-4"> Kami bertujuan untuk mengurangi sumber masalah plastik, memungkinkan lebih banyak orang menjalani gaya hidup yang sadar, dan memberdayakan komunitas lokal untuk memimpin pengurangan sampah plastik.</p>
            </div>
            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                <h2 class="font-weight-light">Misi</h2>
                <p class="font-italic text-muted mb-4">1. Menyatukan bisnis lokal dalam 1 platform untuk menikatkan penjualan dan sebagai Suplayer menyediakan air di stasiun pengisian air minum</p>
                <p class="font-italic text-muted mb-4">2. Melakukan kerja sama keberbagai pihak untuk pengadaan stasiun pengisian air minum</p>
                <p class="font-italic text-muted mb-4">3. Mengubah perilaku wisatawan dan masyarakat dari membeli botol plastik menjadi mengisi ulang botol mereka</p>
                <p class="font-italic text-muted mb-4">4. Meningkatkan kesadaran akan solusi untuk masalah plastik</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-2">
    <div class="container">
        <div class="row mb-4">
            <figure class="text-end" data-aos="fade-up" data-aos-duration="1500">
                <blockquote class="blockquote text-center mt-5">
                    <h2 class="font-weight-light">Our Team</h2>
                </blockquote>
                <h3 class="text-center" style="font-size: 20px; color: #34abeb;">Core Team</h3>
            </figure>
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
            <!-- Team item-->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/team-fakhryh.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Fakhry Hizballah Al Muminurradian</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/adelle.alexa.96" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="https://www.instagram.com/hizballah_al" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/fakhry-hizballah-a226b41b6/" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/Team-Naufal.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Naufal Fadlurahman Irdasyah</h5><span class="small text-uppercase text-muted">CFO - Founder</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.facebook.com/necro.bradley" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/naufal_irdasyah/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/naufal-fadlurahman-irdasyah-7ab85a214/" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://cdn.spairum.my.id/img/Ridha.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Asha Ridha Hijeriya</h5><span class="small text-uppercase text-muted">Public Relations Executive </span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.facebook.com/sacha.hijeriya" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/sacha_hijeriya" class="social-link"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/achachmads/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/Gusti.jpeg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Gusti Muhammad Furkan Azmi</h5><span class="small text-uppercase text-muted">Software Engineer · IT Executive </span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/gusti-muhammad-furkan-azmi-49611b233/" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/gusti_mfa/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Feby Dwi Rahmini</h5><span class="small text-uppercase text-muted">Chief Operating Officer</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/febydr1/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Moh Ilham Al Ghozali</h5><span class="small text-uppercase text-muted">Chief Marketing Officer</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/sacha.hijeriya" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="https://www.instagram.com/ilhamghozali14/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>

        <div class="row mb-4">
            <figure class="text-end" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="text-center" style="font-size: 20px; color: #34abeb;">Engineer Team</h3>
            </figure>
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">

            <!-- Team item-->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="http://pddikti.untan.ac.id/mahasiswax/pic/D1021191091" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Aidil Muhamad</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/adelle.alexa.96" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="https://www.instagram.com/aidil_muhamad_01/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="http://pddikti.untan.ac.id/mahasiswax/pic/D1021191085" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Sultan Zulhafizan</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="instagram.com/suzul_789/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="http://pddikti.untan.ac.id/mahasiswax/pic/D1021191011" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Rigo Maulana</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/rigomaulana_/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End-->
        </div>
        <hr>

        <div class="row mb-4">
            <figure class="text-end" data-aos="fade-up" data-aos-duration="1500">
                <h3 class="text-center" style="font-size: 20px; color: #34abeb;">Contributor</h3>
            </figure>
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
            <!-- Team item-->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Aldy Muardi</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/adelle.alexa.96" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="https://www.instagram.com/aldymuardi/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Syahmi Sajid</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/syahmi_sajid/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Cintya</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/tcintyaaa_/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End-->
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
            <!-- Team item-->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Nuri</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/adelle.alexa.96" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="https://www.instagram.com/nup.ur__/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Maria Yeni Wahyuningsih</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/mariayeni3/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Eka Yuliastika Nainggolan</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/eka_yuliastika/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End-->
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
            <!-- Team item-->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Viviyanti</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/adelle.alexa.96" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="https://www.instagram.com/viviyanti00/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Feby Dwi Rahmini</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/febydr1/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Moh Ilham Al Ghozali</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/sacha.hijeriya" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="https://www.instagram.com/ilhamghozali14/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End-->
        </div>

        <div class="row text-center" data-aos="fade-up" data-aos-duration="1500">
            <!-- Team item-->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Calvin</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/adelle.alexa.96" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="instagram.com/clvnn__/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Silvester Billy Zoe</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="https://www.instagram.com/slvtr_jo/" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="Asset/img/user.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">...</h5>
                    <ul class="social mb-0 list-inline mt-3">
                        <!-- <li class="list-inline-item"><a href="https://www.facebook.com/sacha.hijeriya" class="social-link"><i class="fa fa-facebook-f"></i></a></li> -->
                        <li class="list-inline-item"><a href="" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End-->
        </div>

    </div>
</div>
<?= $this->endSection('layout'); ?>