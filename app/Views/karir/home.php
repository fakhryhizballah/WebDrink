<?= $this->extend('layout/base'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Apps,Spairum,Lisma ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="Careers - Ayo bersama Spairum kita membuat pengaruh lokal dan pengaruh secara global untuk membuat Indonesia maju">
<!-- Custom styles for this template -->
<!-- <link href="css/landing-page.min.css" rel="stylesheet"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-landing-page/5.0.9/css/landing-page.min.css" rel="stylesheet">
<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>
<!-- Page Content -->

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-1">Ayo bergabung dengan tim Spairum</h1>
                <p1 class="mb-5">Untuk Mewujutkan Mimpi Bersama</p1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form class="user" method="POST" action="/jobs">
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter your email...">
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Join</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <!-- <i class="icon-screen-desktop m-auto text-primary"></i> -->
                        <img class="card-img-top" src="/Asset/img/marketing.svg" alt="Marketing & Brand">
                    </div>
                    <h3>Marketing & Brand</h3>
                    <p class="lead mb-0">Brand marketing adalah salah satu teknik pemasaran yang memanfaatkan brand dari sebuah produk guna meraih customer sebanyak-banyaknya.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <!-- <i class="icon-layers m-auto text-primary"></i> -->
                        <img class="card-img-top" src="Asset/img/content.svg" alt="">
                    </div>
                    <h3>Redaksi & Content</h3>
                    <p class="lead mb-0">Kamu memiliki kemampuan menulis yang baik, menarik, dan akurat sesuai deadline.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <!-- <i class="icon-check m-auto text-primary"></i> -->
                        <img class="card-img-top" src="Asset/img/monitoring.svg" alt="IT">
                    </div>
                    <h3>Engineering & Teknologi</h3>
                    <p class=" lead mb-0">Tim ini berfokus pada pengembangan teknologi dalam Spairum mulai dari website sampai aplikasi.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <!-- <i class="icon-check m-auto text-primary"></i> -->
                        <img class="card-img-top" src="Asset/img/designer.svg" alt="desain">
                    </div>
                    <h3>Creative Design</h3>
                    <p class="lead mb-0">Creative Design berfokus untuk merancang visual dan keramahan pengguna untuk berbagai produk Spairum dengan berkolaborasi dengan semua tim lainnya.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <!-- <i class="icon-check m-auto text-primary"></i> -->
                        <img class="card-img-top" src="Asset/img/centralized.svg" alt="Business Development and Partnerships">
                    </div>
                    <h3>Business Development and Partnerships</h3>
                    <p class="lead mb-0">Bertugas untuk mencari cara supaya interaksi antara pelanggan, pasar, dan relasi bisnis bisa menciptakan peluang bagi perusahaan untuk terus tumbuh.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <!-- <i class="icon-check m-auto text-primary"></i> -->
                        <img class="card-img-top" src="Asset/img/internship.svg" alt="desain">
                    </div>
                    <h3>Internship</h3>
                    <p class="lead mb-0">Program internship ini memberikan kamu kesempatan untuk bekerja dalam tim lintas departemen dalam mengerjakan sebuah projek tertentu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.container -->

<?= $this->endSection('layout'); ?>