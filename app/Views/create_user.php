<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>User</title>
</head>

<body> -->
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div>

</div>


<div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="<?= base_url('/user/store') ?>" method="post"
        enctype="multipart/form-data">


        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                Nama
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="nama" name="nama" type="text" class="form-control " placeholder="Nama">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="kelas">
                Kelas
            </label>
            <select name="kelas" id="kelas">
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
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="npm">
                NPM
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="npm" name="npm" type="text" placeholder="NPM">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
                Foto
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="foto" name="foto" type="file" class="form-control " placeholder="Foto">
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button
                    class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                    type="submit">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>

<!-- </body>

</html> -->