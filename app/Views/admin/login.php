<?= $this->extend('layout/bootstrap5'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>
<!-- Page Content -->
<div class="container">

    <hr>
    <a href="<?= $urlOauth; ?>" class="btn btn-default btn-lg btn-rounded shadow btn-block">
        <i class="fab fa-google-plus-g"></i> Masuk dengan Google
    </a>
    <hr>
</div>
<!-- /.container -->

<?= $this->endSection('layout'); ?>

<?= $this->section('script'); ?>


<?= $this->endSection('script'); ?>