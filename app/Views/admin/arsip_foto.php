<?= $this->extend('admin/home'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Arsip Foto</h1>

    <a class="btn btn-primary" onclick="thumbnail()">
        <i class="fa fa-plus"></i> Tambah Foto
    </a>


    <table class="table bg-white" id="tabel">
        <thead>
            <tr style="text-align: center;">
                <th scope="col">No</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Link Thumbnail</th>
                <th scope="col">ALT</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php $i = 1; ?>
            <?php foreach ($arsip as $ar) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td>
                        <img src="<?= $ar['url']; ?>" alt="<?= $ar['alt']; ?>">
                    </td>
                    <td><?= $ar['url']; ?></td>
                    <td><?= $ar['alt']; ?></td>
                </tr>
                <?php $i++;  ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Fotomap -->
<div class="modal fade" id="fotoModal" tabindex="-1" role="dialog" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fotoModalLabel">Upload Foto Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container mt-5">
                    <form class="user" id="upload_image_form" method="POST" enctype="multipart/form-data">

                        <!-- <input readonly type="hidden" class="form-control form-control-user" id="id_lokasi" name="id_lokasi"> -->

                        <div id="alertMessage" class="alert alert-warning mb-3" style="display: none">
                            <span id="alertMsg"></span>
                        </div>
                        <div class="d-grid text-center">
                            <img class="mb-3" id="ajaxImgUpload" alt="Preview Image" src="https://via.placeholder.com/300" />
                        </div>
                        <div class="mb-3">
                            <input type="file" name="file" multiple="true" id="finput" onchange="onFileUpload(this);" class="form-control form-control-lg" accept="image/*">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-danger uploadBtn">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>

<script async src="/Asset/js/uploadfoto.js"></script>

<?= $this->endSection('script'); ?>