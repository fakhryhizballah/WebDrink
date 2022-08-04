<?= $this->extend('admin/home'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Arsip Foto</h1>

    <a href="tambah_foto" class="btn btn-primary">
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

<?= $this->endSection('content'); ?>