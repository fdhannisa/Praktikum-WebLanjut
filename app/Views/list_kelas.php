<?= $this->extend('layouts/app') ?>
<?= $this->section('content')?>
<div class="user">
    <div class="container">
        <div class="table-header mb-3 d-flex justify-content-between align-items-center">
            <h2 class="title">List Kelas</h2>
            <a href="<?= base_url('kelas/create')?>" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kelas as $kelas){
                    ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $kelas['nama_kelas'] ?></td>
                    <td>
                        <div class="wrap d-flex justify-content-start align-items-center">
                            <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit')?>"
                                class="btn btn-primary me-2">Edit</a>
                            <form action="<?= base_url ('kelas/' . $kelas['id'])?>" method="post" class="d-inline">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>