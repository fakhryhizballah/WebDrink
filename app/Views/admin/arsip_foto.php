<?= $this->extend('admin/home'); ?>

<?= $this->section('head'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<?= $this->endSection('head'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Arsip Foto</h1>

    <a class="btn btn-primary" onclick="thumbnail()">
        <i class="fa fa-plus"></i> Tambah Foto
    </a>

    <table id="tbfoto" class="display" style="width:100%">
        <thead>
            <tr>
                <th>no</th>
                <th>Thumbnail</th>
                <th>Link Thumbnail</th>
                <th>ALT</th>
            </tr>
        </thead>
    </table>
</div>


<?= $this->endSection('content'); ?>

<?= $this->section('modal'); ?>

<!-- Modal Fotomap -->
<div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fotoModalLabel">Upload Foto Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <div class="toast align-items-center text-white bg-info border-0" id="myToast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Berhasi menyimpan gambar
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
                <div class="container mt-5">
                    <form class="user" id="upload_image_form" method="POST" enctype="multipart/form-data">
                        <div class="d-grid position-relative mb-4 text-center">
                            <img class="mx-auto" id="ajaxImgUpload" alt="Preview Image" src="https://via.placeholder.com/300" />
                        </div>
                        <div class="mb-3">
                            <input type="file" name="file" multiple="true" id="finput" onchange="onFileUpload(this);" class="form-control form-control-lg " accept="image/*">
                            <div class="invalid-feedback" id="valid-file">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alt" class="form-label">Masukan nama foto</label>
                            <input type="text" name="alt" id="alt" class="form-control form-control-lg invalid" placeholder="nama foto" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger uploadBtn">Upload</button>
                        </div>
                    </form>
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
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


<script async src="/Asset/js/arsipFoto.js"></script>
<script async src="/Asset/js/uploadfoto.js"></script>


<?= $this->endSection('script'); ?>