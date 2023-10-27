<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="form">
        <div class="form-title mb-3 d-flex justify-content-center align-items-center">
            <h4>Create Kelas</h4>
        </div>
        <form action="<?= base_url('/kelas/store') ?>" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" name="nama_kelas" type="text" class="form-control"
                    placeholder="Nama Kelas">
                <label for="floatingInput">
                    Nama Kelas
                </label>
            </div>
            <button class="btn btn-primary" type="submit">
                Submit
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>