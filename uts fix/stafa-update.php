<?php
require_once "app.php";
session_start();

$n = updateLagu($conn, $_GET['id'], $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_LAGU'] = "Gagal Menambah Lagu";
} else {
    $_SESSION['BERHASIL_TAMBAH_LAGU'] = "Berhasil menambah lagu: {$_POST['bahasa']}, judul: {$_POST['judul']}, tahun: {$_POST['tahun']}, artis: {$_POST['artis']}";
}

header("Location: /stafa.php");
die();
