<?= $this->extend('layout/bootstrap5'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Apps,Spairum ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="<?= $blog['des']; ?>">
<meta name="author" content="<?= $blog['fullname']; ?>">
<meta name="keywords" content="spairum, blog, <?= $blog['kota']; ?>">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>

<!-- Page Content -->

<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col">

            <!-- Title -->
            <h1 class="mt-4"><?= $blog['judul']; ?></h1>


            <!-- Date/Time -->
            <p>Posted on <?= $blog['tanggal']; ?>, <?= $blog['kota']; ?></p>
            <p>Author <?= $blog['fullname']; ?></p>
            </p>


            <hr>

            <!-- Preview Image -->

            <img class="img-fluid rounded" src="<?= $blog['thumbnail']; ?>" alt="<?= $blog['alt']; ?>">

            <hr>

            <!-- Post Content -->

            <p><?= $blog['konten']; ?></p>

            <hr>

        </div>
    </div>
</div>
<!-- /.container -->
<?= $this->endSection('layout'); ?>