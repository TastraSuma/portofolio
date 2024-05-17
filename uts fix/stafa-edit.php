<?php
require_once "app.php";
$id = $_GET['id'];

$p = findPendidikanByID($conn, $id);

function nyelekJenjang($v, $d)
{
    if ($v == $d) {
        return 'selected';
    }

    return '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Stafa</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Edit Stafa</h1>
    <a href="/stafa.php">Kembali ke stafa</a>
    <div class="content">

        <form action="stafa-update.php?id=<?= $p['id'] ?>" method="post">
            <div>
                <label>Bahasa</label>
                <select name="bahasa">
                    <option <?= nyelekJenjang("indoneisa", $p['bahasa']) ?> value="indoneisa">Indonesia</option>
                    <option <?= nyelekJenjang("inggris", $p['bahasa']) ?> value="inggris">Inggris</option>
                    <option <?= nyelekJenjang("jepang", $p['bahasa']) ?> value="jepang">Jepang</option>
                    <option <?= nyelekJenjang("cina", $p['bahasa']) ?> value="cina">Cina</option>
                    <option <?= nyelekJenjang("malaysia", $p['bahasa']) ?> value="malaysia">Malaysia</option>
                </select>
            </div>
            <div>
                <label>Judul</label>
                <input type="text" name="judul" value="<?= $p['judul'] ?>">
            </div>
            <div>
                <label>Tahun</label>
                <input type="text" name="tahun" value="<?= $p['tahun'] ?>">
            </div>
            <div>
                <label>artis</label>
                <input type="text" name="artis" value="<?= $p['artis'] ?>">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html>