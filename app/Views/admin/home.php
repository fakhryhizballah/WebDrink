<?= $this->extend('layout/bootstrap5'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab">
                <a class="nav-link item" href="/admin/crt_artikel">Tulis Artikel</a>
                <a class="nav-link item" href="/admin/arsip_foto">Arsip Foto</a>
                <a class="nav-link disabled" href="#">Sunting Artikel</a>
            </div>
        </div>
        <div class="col-10 border">

            <?= $this->renderSection('content'); ?>

        </div>
    </div>
</div>
<!-- /.container -->

<?= $this->endSection('layout'); ?>

<?= $this->section('script'); ?>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.item');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].className = "nav-link active"
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('#tabel').DataTable();
    });
</script>


<?= $this->endSection('script'); ?>