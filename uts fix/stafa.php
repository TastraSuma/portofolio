<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stafa</title>
    <style>
        body {
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            color: black; 
            margin: 0; 
            font-family: Arial, sans-serif; 
        }

        .navbar {
            background-color: black; 
            padding: 15px; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
        }

        .navbar a {
            color: white; 
            text-decoration: none; 
            margin: 0 10px; 
        }

        .navbar a:hover {
            text-decoration: underline; 
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: grey; 
            color: white; 
            margin-top: 50px; 
        }

        table, th, td {
            border: 1px solid black; 
            padding: 10px;
        }

        th {
            background-color: darkgrey; 
        }

        .content {
            padding: 0px; 
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1 style="margin: 0; color: white;">STAFA</h1>
        <div>
            <a href="/">Kembali ke Home</a>
            <a href="/stafa-tambah.php">Tambah</a>
        </div>
    </div>

    <div class="content">
        

        <?php if (isset($_SESSION['BERHASIL_TAMBAH_LAGU'])) : ?>
            <p><?= $_SESSION['BERHASIL_TAMBAH_LAGU'] ?></p>
            <?php session_unset(); ?>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>Bahasa</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Artis</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($p as $k => $v) : ?>
                    <tr>
                        <td><?= $v['bahasa'] ?></td>
                        <td><?= $v['judul'] ?></td>
                        <td><?= $v['tahun'] ?></td>
                        <td><?= $v['artis'] ?></td>
                        <td>
                            <a href="<?= "/stafa-detail.php?id={$v['id']}" ?>">Detail</a>
                            <a href="<?= "/stafa-edit.php?id={$v['id']}" ?>">Edit</a>
                            <a href="<?= "/stafa-delete.php?id={$v['id']}" ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
mysqli_close($conn);
?>
