<?= $this->extend('layout/bootstrap5'); ?>


<?= $this->section('head'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Apps,Spairum,Karir,Untan,Statup pontianak,Naufal,Fakhry, berita, launcing, ycsa">
<meta name="description" content="Registrasi webinar Launching SPAIRUM : Make Indonesia Beautiful with Plastic Free">

<?= $this->endSection('head'); ?>

<?= $this->section('layout'); ?>

<div class="container register">
    <div class="row">
        <div class="col-md-7 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Siap Bergabung Bersama Tim SPAIRUM</h3>
            <h4 class="">Saya Siap Membuat perubahan untuk Indonesia</h4>
            <p class="text-left">
                Persaratan:
                <br>1. Pemuda/i yang cinta & peduli terhadap lingkungan,
                <br>2. Berkomitmen & bertanggung jawab atas pilihan perkerjaan,
                <br>3. Energetic, mobile, and fast learner
                <br>4. kirim CV terbaik kamu di info.spairum@gmail.com.
                <br>5. Mahasiswa aktif - Magang
                <br>
                info lebih lanjut:
                <a class="font-weight-bold text-white" href="https://wa.me/+6282254894778/?text=Hallo%20Salam%20kenal,%0Asaya%20ingin%20bertanya">+62 822-5489-4778</a> (Asha Ridha Hijeriya)
            </p>


        </div>
        <div class="col-md-5 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Kirim lamaran</h3>
                    <form class="user" method="POST" action="/Karir/save">
                        <?= csrf_field(); ?>
                        <div class="row register-form">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap*" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email *" value="<?= $email; ?>" required />
                                </div>
                                <div class="form-group">
                                    <input type="number" minlength="10" maxlength="13" name="telp" class="form-control" placeholder="No Whatsapp *" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="agama" id="agama">
                                        <option class="hidden" selected disabled>Agama</option>
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lulus" placeholder="Alamat*" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="date" id="date" name="date" class="form-control" placeholder="Tanggal lahir*" value="" required />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="pendidikan">
                                        <option class="hidden" selected disabled>Pendidikan Terkahir*</option>
                                        <option>Sekolah Menegah Atas</option>
                                        <option>Sekolah Menegah Kejuruan</option>
                                        <option>Sarjana</option>
                                        <option>Diploma</option>
                                        <option>Lain</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sekolah" placeholder="Nama Universitas*" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="jurusan" placeholder="Fakultas - Prodi*" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="masuk" placeholder="Tahun Masuk Univ*" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" minlength="12" name="link" placeholder="URL Situs Web (Instagram/Linkin/profil)" value="" required />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="info">
                                        <option class="hidden" selected disabled>Bagaimana Anda mengetahui tentang acara ini?</option>
                                        <option>Situs web</option>
                                        <option>Teman</option>
                                        <option>Whatsapp</option>
                                        <option>Instagram</option>
                                        <option>Facebook</option>
                                        <option>Iklan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <p>Anda melamar di posisi </p>
                                        <label class="radio inline">
                                            <input type="radio" name="confim" value="Marketing & Brand" checked>
                                            <span>Marketing & Brand</span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="confim" value="Redaksi & Content">
                                            <span>Redaksi & Content</span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="confim" value="Engineering & Teknologi">
                                            <span>Engineering & Teknologi</span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="confim" value="Creative Design">
                                            <span>Creative Design</span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="confim" value="Business Development and Partnerships">
                                            <span>Business Development and Partnerships</span>
                                        </label>
                                        <!-- <label class="radio inline">
                                            <input type="radio" name="confim" value="Internship">
                                            <span>Internship</span>
                                        </label> -->
                                    </div>
                                </div>
                                <input type="submit" class="btnRegister" value="submit" />
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

</div>

<?= $this->endSection('layout'); ?>