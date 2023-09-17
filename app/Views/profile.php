<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
    body {
        text-align: center;
        padding: 20px;
    }

    img.rounded {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        display: block;
        margin: 0 auto;
    }

    .table-container {
        margin-top: 20px;
    }

    table {
        width: 20%;
        margin: 0 auto;
        text-align: center;
        background-color: #b7b7b7;
        border-spacing: 10px;
        padding: 5px;
    }

    td {
        padding: 10px;
    }
    </style>
</head>

<body>
    <img src="<?= base_url('foto.jpeg') ?>" class="rounded" alt="gambar profile">
    <div class="table-container">
        <table>
            <tr>
                <td><?= $nama ?></td>
            </tr>
        </table>
    </div>
    <div class="table-container">
        <table>
            <tr>
                <td><?= $kelas ?></td>
            </tr>
        </table>
    </div>
    <div class="table-container">
        <table>
            <tr>
                <td><?= $npm ?></td>
            </tr>
        </table>
    </div>
</body>

</html>