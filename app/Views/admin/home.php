<?= $this->extend('layout/bootstrap5'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab">
                <a class="nav-link item" href="/admin/home">Tulis Artikel</a>
                <a class="nav-link item" href="#">Upload Foto</a>
                <a class="nav-link item" href="#">Arsip Foto</a>
                <a class="nav-link disabled" href="#">Sunting Artikel</a>
            </div>
        </div>
        <div class="col-10 border">

            <div class="border" id="isi">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                    </label>
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.container -->

<?= $this->endSection('layout'); ?>

<?= $this->section('script'); ?>
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
<?= $this->endSection('script'); ?>