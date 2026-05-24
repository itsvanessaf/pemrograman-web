<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM siswa WHERE id='$id'");

$d = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2473014-Vanessa Felicia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        Nama:<br>
        <input type="text" name="nama"
        value="<?= $d['nama']; ?>"><br><br>

        Kelas:<br>
        <input type="text" name="kelas"
        value="<?= $d['kelas']; ?>"><br><br>

        <button type="submit" class="tbl-simpan">Update</button><br><br>

    </form>
    <button type="button" class="tbl-kembali" onclick="location.href='index.php'">Kembali</button>
</body>
</html>