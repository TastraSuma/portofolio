<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listartis</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Daftar artis</h1>

    <a href="/">Kembali ke home</a>

    <br>
    <br>

    <table>
        <thead>
            <tr>
                <th>Total Album</th>
                <th>Nama Band</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listartis as $k => $v) : ?>
                <tr>
                    <td><?= $v['total_album'] ?></td>
                    <td><?= $v['nama_band'] ?></td>
                    <td><a href="<?= "/listartis-detail.php?id={$k}" ?>">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>