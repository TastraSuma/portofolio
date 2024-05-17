<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = "SELECT * FROM stafa";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function findPendidikanByID($conn, $id)
{
    $sql = "SELECT * FROM stafa WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function laguBaru($conn, $data)
{
    $sql = "INSERT INTO stafa
    (tahun, judul, bahasa, artis, created_at, updated_at)
    VALUES (
        {$data['tahun']}, 
        '{$data['judul']}', 
        '{$data['bahasa']}', 
        '{$data['artis']}', 
        NOW(), 
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function updateLagu($conn, $id, $data) 
{
    $sql = "
    UPDATE stafa
    SET
        bahasa = '{$data['bahasa']}',
        judul = '{$data['judul']}',
        tahun = {$data['tahun']},
        artis = '{$data['artis']}',
        updated_at = NOW()
    WHERE id = $id;
    ";

    if(mysqli_query($conn, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deleteData($conn, $id) 
{
    
    $sql = "DELETE FROM stafa WHERE id = ?";
    
    
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        return false; 
    }

    
    mysqli_stmt_bind_param($stmt, "i", $id);

    
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt); 
        return true; 
    } else {
        mysqli_stmt_close($stmt); 
        return false; 
    }
}
