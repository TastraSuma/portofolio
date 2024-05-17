<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url('background.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            color: white; 
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

        .navbar h1 {
            margin: 0; 
            color: white; 
        }

        .navbar a {
            color: white; 
            text-decoration: none; 
            margin-left: 15px; 
        }

        .navbar a:hover {
            text-decoration: underline; 
        }
    </style>
</head>

<body>
    <div class="navbar">
        <h1>STAFA</h1>
        <div>
            <a href="stafa.php">Daftar Lagu</a>
            <a href="listartis.php">List Artis</a>
        </div>
    </div>

    
</body>

</html>
