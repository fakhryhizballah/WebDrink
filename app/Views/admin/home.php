<?= $this->extend('layout/bootstrap5'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">


<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab">
                <a class="nav-link item" href="/admin/crt_artikel">Tulis Artikel</a>
                <a class="nav-link item" href="/admin/arsip_foto">Arsip Foto</a>
                <a class="nav-link item" href="/admin/arsip_arikel">Sunting Artikel</a>
            </div>
        </div>
        <div class="col-10 ">
            <div class="container">
                <?= $this->renderSection('content'); ?>
            </div>

        </div>
    </div>
</div>
<!-- /.container -->

<?= $this->endSection('layout'); ?>

<?= $this->section('script'); ?>

<script>
    const currentLoca = location.href;
    const menuItemAdmin = document.querySelectorAll('.item');
    const menuLengthAdmin = menuItemAdmin.length
    for (let i = 0; i < menuLengthAdmin; i++) {
        if (menuItemAdmin[i].href === currentLoca) {
            menuItemAdmin[i].className = "nav-link active"
        }
    }
</script>



<?= $this->endSection('script'); ?>