<?= $this->extend('admin/home'); ?>

<?= $this->section('head'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<?= $this->endSection('head'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <table id="tbArtikel" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>des</th>
                <th>Penulis</th>
                <th>Status</th>
                <th>edit</th>
            </tr>
        </thead>
    </table>
</div>
<?= $this->endSection('content'); ?>

<?= $this->section('modal'); ?>
<!-- Modal -->
<div class="modal fade" id="editArtikel" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="judulModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalLabel">Edit</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <form class="artikel" id="upload_artikel" method="POST">
                    <div class="mb-3">
                        <label for="inputThumbnail" class="form-label">Url Thumbnail</label>
                        <input type="url" class="form-control" name="inputThumbnail" id="inputThumbnail" required>
                        <input type="hidden" class="form-control" name="hidden" id="hidden" required>
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
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('modal'); ?>


<?= $this->section('script'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" charset="utf8" src="/Asset/js/arsipArtikel.js"></script>



<?= $this->endSection('script'); ?>