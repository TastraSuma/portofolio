<?php
require_once "data.php";

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listartis</title>
</head>

<body>
    <h1>Listartis Detail</h1>

    <a href="/listartis.php">Kembali ke listartis</a>

    <br>
    <br>

    <p>Nama Band : <?= $listartis[$id]['nama_band'] ?></p>
    <p>Total Album : <?= $listartis[$id]['total_album'] ?></p>
    <p>Total Lagu : <?= $listartis[$id]['total_lagu'] ?></p>

</body>

</html>