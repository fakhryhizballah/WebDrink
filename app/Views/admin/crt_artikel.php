<?= $this->extend('admin/home'); ?>

<?= $this->section('head'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<?= $this->endSection('head'); ?>

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
                            <label for="previewThumbnail" class="form-label">Preview Thumbnail</label>
                            <img src="https://cdn.spairum.my.id/image/1660032342999-previewimg.png" class="card-img-top img-thumbnail" alt="...">
                            <hr>
                            <label for="inputThumbnail" class="form-label">Url Thumbnail</label>
                            <div class="input-group mb-3">
                                <input type="url" class="form-control" name="inputThumbnail" id="inputThumbnail" required>
                                <a class="btn btn-primary" onclick="thumbnail()">Cari Url</a>
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

        <div class="mb-3">
            <label class="form-label"><strong>Huruf tebal</strong></label>
            <input type="text" class="form-control" readonly="readonly" value="<strong>huhuf tebal</strong>"></input>
        </div>
        <div class="mb-3">
            <label class="form-label">Untuk menabahkan Enter atau spasi</label>
            <input type="text" class="form-control" readonly="readonly" value="<br>"></input>
        </div>
        <div class="mb-3">
            <label class="form-label">Untuk menabahkan foto</label>
            <input class="form-control" readonly="readonly" value="<img class='figure-img img-fluid rounded mx-auto d-block' src='https://cdn.spairum.my.id/image/url...' alt='nama Foto'>"></input>
        </div>
        <div class="mb-3">
            <label class="form-label">
                <h3>Head Line huruf besar</h3>
            </label>
            <input type="text" class="form-control" readonly="readonly" value="<h3>Head Line huruf besar</h3>"></input>
        </div>
        <div class="mb-3">
            <label class="form-label">
                <h3>Panduan lebih lanjut</h3>
            </label>
            <a href="https://getbootstrap.com/docs/5.0/utilities/text/">html lebih lanjut bootstrap5</a>
        </div>
        </p>
    </div>
</div>

<?= $this->endSection('content'); ?>

<?= $this->section('modal'); ?>

<!-- Modal Fotomap -->
<div class="modal fade" id="urlModal" tabindex="-1" role="dialog" aria-labelledby="urlModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="urlModalLabel">Cari Url Thumbnail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <!-- <div class="toast align-items-center text-white bg-info border-0" id="myToast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Berhasi menyimpan gambar
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div> -->
                <div class="container">
                    <table id="tbfoto" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>
                                <!-- <th>Link Thumbnail</th> -->
                                <th>Nama Foto</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('modal'); ?>

<?= $this->section('script'); ?>
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script async src="/Asset/js/crt_artikel.js"></script>
<?= $this->endSection('script'); ?>