<?= $this->extend('layout/base'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Apps,Spairum ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="<?= $blog['deskipsi']; ?>">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>

<!-- Page Content -->

<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col">

            <!-- Title -->
            <h1 class="mt-4"><?= $blog['judul']; ?></h1>

            <hr>

            <!-- Date/Time -->
            <!-- <p>Posted on January 1, 2019 at 12:00 PM</p>

            <hr> -->

            <!-- Preview Image -->
            <!-- <img class="img-fluid rounded" src="Asset/img/Blog/<?= $blog['sampul']; ?>" alt="<?= $blog['sampul']; ?>"> -->
            <img class="img-fluid rounded" src="/Asset/img/Blog/<?= $blog['sampul']; ?>" alt="<?= $blog['sampul']; ?>">

            <hr>

            <!-- Post Content -->


            <p><?= $blog['deskipsi']; ?></p>
            <p><?= $blog['konten']; ?></p>
            <p><?= $blog['p1']; ?></p>
            <p><?= $blog['p2']; ?></p>
            <p><?= $blog['p3']; ?></p>
            <p><?= $blog['p4']; ?></p>
            <p><?= $blog['p5']; ?></p>



            <hr>

        </div>
    </div>
</div>
<!-- /.container -->
<?= $this->endSection('layout'); ?>