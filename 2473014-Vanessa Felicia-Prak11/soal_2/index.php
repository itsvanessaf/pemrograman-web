<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM siswa");
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
<h2>Data Siswa</h2>

<a href="tambah.php" class="tbl-tambah">Tambah Data</a>

<table border="0px" cellspadding="0px">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

<?php while($d = mysqli_fetch_array($data)) { ?>
    <tr>
        <td><?= $d['id']; ?></td>
        <td><?= $d['nama']; ?></td>
        <td><?= $d['kelas']; ?></td>
        <td>
            <a href="edit.php?id=<?= $d['id']; ?>" class="tbl-edit">Edit</a>
            <a href="hapus.php?id=<?= $d['id']; ?>" class="tbl-hapus">Hapus</a>
        </td>
    </tr>
<?php } ?>
</table>
</body>
</html>