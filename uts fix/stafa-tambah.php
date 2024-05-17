<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lagu</title>
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
    <h1>Tambah Lagu</h1>
    <a href="/stafa.php">Kembali ke stafa</a>
    <div class="content">

        <form action="stafa-store.php" method="post">
            <div>
                <label>Bahasa</label>
                <select name="bahasa">
                    <option value="indonesia">Indonesia</option>
                    <option value="inggris">Inggris</option>
                    <option value="jepang">Jepang</option>
                    <option value="cina">Cina</option>
                    <option value="malaysia">Malaysia</option>
                </select>
            </div>
            <div>
                <label>Judul</label>
                <input type="text" name="judul">
            </div>
            <div>
                <label>Tahun</label>
                <input type="text" name="tahun">
            </div>
            <div>
                <label>Artis</label>
                <input type="text" name="artis">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html>
