<?php
include "latihan02.php";
if(isset($_POST['submit'])){
    tampil($_POST);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Latihan Form Menggunakan Php</title>

</head>
<body>

    <form action="" method="Post">

    <table border="none">

    <tr>
    <td><label>Form Registrasi</label></td>
    </tr>

    <tr>
    <td><label>Username</label></td>
    <td><input type="text" name="username" placeholder="Masukkan Username anda...">
    </tr>

    <tr>
    <td><label>Password</label></td>
    <td><input type="password" name="password1" placeholder="Masukkan Password anda...">
    </tr>

    <tr>
    <td><label>Konfirmasi Password</label></td>
    <td><input type="password" name="password2" placeholder="Konfirmasi Kembali...">
    </tr>

    <tr>
    <td><label>Submit</label></td>
    <td><button type="submit" name="submit">Registrasi</button></td>
    </tr>
    
    </table>

    </form>
    
</body>
</html>