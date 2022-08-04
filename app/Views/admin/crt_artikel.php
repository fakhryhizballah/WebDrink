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
                        <form>
                            <div class="mb-3">
                                <label for="inputThumbnail" class="form-label">Thumbnail Artikel</label>
                                <input type="text" class="form-control" id="inputThumbnail">
                            </div>
                            <div class="mb-3">
                                <label for="inputLokasi" class="form-label">Lokasi Kegiatan</label>
                                <input type="text" class="form-control" id="inputLokasi">
                            </div>
                            <div class="mb-3">
                                <label for="inputTanggal" class="form-label">Tanggal Kegiatan</label>
                                <input type="text" class="form-control" id="inputTanggal">
                            </div>
                            <div class="mb-3">
                                <label for="inputJudul" class="form-label">Judul Artikel</label>
                                <input type="text" class="form-control" id="inputJudul">
                            </div>

                            <div class="mb-3">
                                <label for="inputDeskripsi" class="form-label">Deskripsi Artikel</label>
                                <textarea class="form-control" id="inputDeskripsi" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="inputKonten" class="form-label">Konten Artikel</label>
                                <textarea class="form-control" id="inputKonten" rows="9"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>