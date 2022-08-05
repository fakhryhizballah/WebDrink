<?= $this->extend('admin/home'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Artikel</h1>
                        </div>
                        <form class="artikel" id="upload_artikel" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="inputThumbnail" class="form-label">Url Thumbnail</label>
                                <input type="url" class="form-control" name="inputThumbnail" id="inputThumbnail" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputLokasi" class="form-label">Lokasi Kegiatan</label>
                                <input type="text" class="form-control" name="inputLokasi" id="inputLokasi" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputTanggal" class="form-label">Tanggal Kegiatan</label>
                                <input type="date" class="form-control" name="inputTanggal" id="inputTanggal" autocomplete required>
                            </div>
                            <div class="mb-3">
                                <label for="inputJudul" class="form-label">Judul Artikel</label>
                                <input type="text" class="form-control" name="inputJudul" id="inputJudul" required>
                            </div>

                            <div class="mb-3">
                                <label for="inputDeskripsi" class="form-label">Deskripsi Artikel</label>
                                <textarea class="form-control" name="inputDeskripsi" id="inputDeskripsi" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="inputKonten" class="form-label">Konten Artikel</label>
                                <textarea class="form-control" name="inputKonten" id="inputKonten" rows="9" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Cara Penulisan Artikel</h5>
    <div class="card-body">
        <h5 class="card-title">Gunakan Standar layout HTML</h5>
        <p class="card-text">
            <!-- // <h></h> menulis artikel dengan standar layout HTML -->
        </p>
    </div>
</div>

<?= $this->endSection('content'); ?>
<?= $this->section('script'); ?>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('#upload_artikel').on('submit', function(e) {
        e.preventDefault();
        console.log('submit');
        $.ajax({
            url: '/AjaxBlog/upload_artikel',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                console.log(data);
                // alert('Artikel berhasil ditambahkan');
                // location.reload();
                document.getElementById("upload_artikel").reset();
            }
        });
    });
</script>
<?= $this->endSection('script'); ?>