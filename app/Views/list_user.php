<?= $this->extend('layouts/app') ?>
<?= $this->section('content')?>
<div class="user">
    <div class="container">
        <div class="table-header mb-3 d-flex justify-content-between align-items-center">
            <h2 class="title">List User</h2>
            <a href="<?= base_url('user/create')?>" class="btn btn-primary">
                Tambah Data
            </a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr></tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($user as $user){
                    ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td><?= $user['foto'] ?></td>
                    <td>
                        <div class="wrap d-flex justify-content-start align-items-center">
                            <a href="<?= base_url('user/' . $user['id'])?>" class="btn btn-secondary me-2">Detail</a>
                            <a href="<?= base_url('/user/' . $user['id'] . '/edit')?>"
                                class="btn btn-primary me-2">Edit</a>
                            <form action="<?= base_url ('user/' . $user['id'])?>" method="post" class="d-inline">
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