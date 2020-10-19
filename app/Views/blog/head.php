<?= $this->extend('layout/base'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Apps,Spairum,Lisma ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="Spairum merupakan sebuah startup perusahaan air minum yang meneydiakan layanan pengisian ulang air minum dalam upaya mengurangi penggunaan plastik sekali pakai.">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>
<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">Blog
        <small>Event Spairum</small>
    </h1>



    <!-- Related Projects Row -->
    <!-- <h3 class="my-4">Related Projects</h3> -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="Asset/img/Blog/YCSE.jpg" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Pertamina Move On Project</h3>
            <p>Bootcamp edisi YCSE Academy 2.0 Female Socio-techpreneur yang paling ditunggu-tunggu akhirnya dimulai minggu ini. Sejak Minggu, 8 Maret 2020, sudah 30 peserta dari 10 wirausaha sosial yang berbeda berkumpul di All Season Hotel Jakarta untuk mengikuti kegiatan bootcamp hingga Kamis depan. Tim Kami sangat bisa mengikuti kegiatan tersebut</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>
    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="Asset/img/Blog/pertamina.jpg" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Pertamina Move On Project</h3>
            <p>Pertamina Move On Project merupakan kompetisi pengajuan proposal ide inovasi khusus mahasiswa Perguruan Tinggi Negeri di wilayah Kalimantan. Kompetisi ini dimulai sejak 3 Oktober 2019 dan dibagi menjadi 3 tahap yaitu penyisihan, semi final (presentasi online) dan final (presentasi tatap muka).</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

</div>
<!-- /.container -->

<?= $this->endSection('layout'); ?>