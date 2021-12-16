<?= $this->extend('layout/base'); ?>





<?= $this->section('head'); ?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="keywords" content="Air ,Spairum,survei ,Untan,Statup pontianak,Naufal,Fakhry, Naufal fadlurahman Irdasyah">

<meta name="description" content="survei device user Ini merupakan survei pengunaan device user untuk mengopimalkan aplikasi air spairum">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<?= $this->endSection('head'); ?>


<?= $this->section('layout'); ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Survei penggunan smartphone</h5>
        <h6 class="card-subtitle mb-2 text-muted">Hi Sobat Spairum yuk mengisi survei ini untuk memudahkan kita dalam pengembangan aplikasi</h6>
        <form method="POST" action="/SurveiControl/BrandSave">
        <?= csrf_field(); ?>
            <div class="form-group">
                <div class="ui-widget">
                    <label for="Brand">Brand Smartphone</label>
                    <input type="text" class="form-control" id="Brand" name="Brand" placeholder="Apple" required>
                </div>
            </div>
            <div class="form-group">
                <div class="ui-widget">
                    <label for="OS">Operating System</label>
                    <input type="text" class="form-control" id="OS" name="OS" placeholder="Android" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form">Tipe/seris Smartphone</label>
                <input type="text" class="form-control" id="form" name="Seris" placeholder="Galaxy A71"required>
            </div>
            <div class="form-group">
                <input type="Hidden" class="form-control" id="iduser" name="Iduser" value="<?= $id_user; ?>">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p class="card-text">Terimakash Sobat Spairum telah mengisi formulir ini untuk memudahkan kita dalam pengembangan aplikasi</p>
    </div>
</div>

<?= $this->endSection('layout'); ?>

<?= $this->section('script'); ?>

<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script>
    $(function() {
        var availableBrand = [
            "Sony",
            "LG",
            "Xiaomi",
            "Samsung",
            "Oppo",
            "Vivo",
            "Hp Lava",
            "Nokia",
            "Lenovo",
            "Apple",
            "HTC",
            "Asus",
            "OnePlus",
            "ZTE",
            "Meizu",
            "Mito Mobile",
            "Advan",
            "Polytron",
            "Digicoop By ITB",
            "Zyrex",
            "Evercoss",
            "HiMax",
            "Realme",
            "Huawei",
            "Motorola",
            "Google",
            "Honor",
            "BlackBerry",
            "Alcatel",
            "Microsoft",
            "Vodafone",
            "Energizer",
            "Sharp",
            "Micromax",
            "TCL",
            "Ulefone",
            "Tecno",
            "BLU",
            "Acer",
            "Wiko",
            "Panasonic",
            "verykool",
            "Plum",
        ];
        var availableOS = [
            "Android",
            "iOS",
            "Windows Phone",
            "BlackBerry OS",
        ];
        $("#Brand").autocomplete({
            source: availableBrand
        });
        $("#OS").autocomplete({
            source: availableOS
        });
    });
</script>
<?= $this->endSection('script'); ?>
