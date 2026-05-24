<?php

$username = $_POST['username'];
$password = $_POST['password'];

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
<?php

if($username == "admin" && $password == "admin"){
    echo "<h1>Login berhasil!</h1>";
    echo "<h1>Selamat datang, <span style='color:blue; font-size:45px'>admin</span>.</h1>";
    echo "<h1><a href='login.php'>Kembali ke halaman login</a><h1>";
}
else{
    echo "<h1><span style='color:red;'>Username: </span> <span>$username</span> <span style='color:red;'> Tidak Terdaftar!</span></h1>";
    echo "<h1><a href='login.php'>Kembali ke halaman login</a></h1>";
}

?>
</body>
</html>