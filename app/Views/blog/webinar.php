<?= $this->extend('layout/base'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Apps,Spairum,Lisma ,Untan,Statup pontianak,Naufal,Fakhry">
<meta name="description" content="Registrasi Wbinar & Product Launching SPAIRUM : Make Indonesia Beautiful with Plastic Free">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Registrasi Webinar Launching SPAIRUM</h3>
            <h4>Make Indonesia Beautiful with Plastic Free</h4>
            <p>
                Pembicara :
                1. Fahrurrazi, S.E, Direktur CV.Synergy Business Consulting & Manajer Inkubator Bisnis Teknologi UNTAN

                2. Beny Than Heri, Ketua Akademi Ide Kalimantan

                3.Ranitya Nurlita, Founder WasteHub

                Selanjutnya, untuk keperluan penyampaian informasi YouTube link, kami ingin mengetahui beberapa informasi. Untuk itu dimohohon Sahabat Pesisir untuk mengisi form di bawah ini ya. Terima Kasih. Have a great day, and see you!

                CP: 0895373130201 (Naufal)</p>


        </div>
        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Jadilah Saksi Kami</h3>
                    <form class="user" method="POST" action="Blog/saveWebinar">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengakp*" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="13" name="telp" class="form-control" placeholder="No Whatsapp *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="ket">
                                        <option class="hidden" selected disabled>Bagaimana Anda mengetahui tentang acara ini?</option>
                                        <option>Situs web</option>
                                        <option>Teman</option>
                                        <option>Instagram</option>
                                        <option>Facebook</option>
                                        <option>Iklan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <p>Apakah anda akan menonton secara langsung?.</p>
                                        <label class="radio inline">
                                            <input type="radio" name="confim" value="Ya" checked>
                                            <span>Ya saya akan nonton Live Youtube</span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="confim" value="Tidak">
                                            <span>Saya akan menonton siaran ulang </span>
                                        </label>
                                    </div>
                                </div>
                                <input type="submit" class="btnRegister" value="Kirim" />
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

</div>

<?= $this->endSection('layout'); ?>