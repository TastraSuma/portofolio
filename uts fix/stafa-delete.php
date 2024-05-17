<?php
require_once "app.php";
session_start();

$id = $_GET['id']; // Get the ID of the record to delete

if (deleteData($conn, $id)) { // Call the delete function
    $_SESSION['BERHASIL_DELETE_LAGU'] = "Data berhasil dihapus"; // Set success message
} else {
    $_SESSION['BERHASIL_DELETE_LAGU'] = "Gagal menghapus data"; // Set error message
}

header("Location: /stafa.php"); 
exit();
?>