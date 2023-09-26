<?= $this->extend('layouts/app') ?>
<?= $this->section('content')?>
<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Kelas</th>
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
            <td>
                <form action="/user/ <?= $user['npm']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>