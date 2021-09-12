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

    <!-- Portfolio Item Row -->


    <!-- Related Projects Row -->
    <?php foreach ($blog as $b) : ?>
        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="Asset/img/Blog/<?= $b['sampul']; ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?= $b['judul']; ?></h3>
                <p><?= $b['deskipsi']; ?></p>
                <a class="btn btn-primary" href="/blog/<?= $b['slug']; ?>">View Project</a>
            </div>
        </div>
        <!-- /.row -->
    <?php endforeach; ?>
    <hr>

</div>
<!-- /.container -->

<?= $this->endSection('layout'); ?>