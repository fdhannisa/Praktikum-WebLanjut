<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="form">
        <div class="form-title mb-3 d-flex justify-content-center align-items-center">
            <h4>Edit Kelas</h4>
        </div>
        <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="post">
            <?= csrf_field()?>
            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" name="nama_kelas" type="text" class="form-control"
                    placeholder="Nama Kelas" value="<?= $kelas['nama_kelas']?>">
                <label for="floatingInput">
                    Nama Kelas
                </label>
            </div>
            <input type="hidden" name="_method" value="PUT">
            <button class="btn btn-primary" type="submit">
                Submit
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>