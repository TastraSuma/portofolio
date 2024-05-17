<?php
require_once "app.php";

$id = $_GET['id'];

$d = findPendidikanByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stafa</title>
</head>

<body>
    <h1>Stafa Detail</h1>

    <a href="/stafa.php">Kembali ke stafa</a>

    <br>
    <br>

    <p>Bahsa : <?= $d['bahasa'] ?></p>
    <p>Judul : <?= $d['judul'] ?></p>
    <p>Tahun : <?= $d['tahun'] ?></p>
    <p>artis : <?= $d['artis'] ?></p>
    <p>Created At : <?= $d['created_at'] ?></p>
    <p>Updated At : <?= $d['updated_at'] ?></p>

</body>

</html>

<?php
mysqli_close($conn);
?>