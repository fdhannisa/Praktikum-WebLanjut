<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="form">
        <div class="form-title mb-3 d-flex justify-content-center align-items-center">
            <h4>Create User</h4>
        </div>
        <form action="<?= base_url('/user/store') ?>" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" name="nama" type="text" class="form-control"
                    placeholder="Nama">
                <label for="floatingInput">
                    Nama
                </label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="kelas" id="floatingSelect">
                    <option value="" selected disabled>Pilih Kelas</option>
                    <?php
                        foreach ($kelas as $item){
                            ?>
                    <option value="<?= $item['id'] ?>">
                        <?= $item['nama_kelas'] ?>
                    </option>
                    <?php
                        }
                        ?>
                </select>
                <label for="floatingSelect">
                    Kelas
                </label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" name="npm" type="text" placeholder="NPM">
                <label for="floatingInput">
                    NPM
                </label>
            </div>
            <div class="mb-3">
                <label class="mb-1" for="foto">
                    Foto
                </label>
                <input name="foto" id="foto" type="file" class="form-control " placeholder="Foto">
            </div>
            <button class="btn btn-primary" type="submit">
                Submit
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>