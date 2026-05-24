<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2473014-Vanessa Felicia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="proses_tambah.php" method="POST">
        Nama:<br>
        <input type="text" name="nama"><br><br>

        Kelas:<br>
        <input type="text" name="kelas"><br><br>

        <button type="submit" class="tbl-simpan">Simpan</button><br><br>
    </form>
    <button type="button" class="tbl-kembali" onclick="location.href='index.php'">Kembali</button>
</body>
</html>