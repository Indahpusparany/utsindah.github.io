<?php
// memanggil file koneksi.php
include "../koneksi.php";

// membuat variable dengan nilai dari form
$username = $_POST['username'];
// variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
$pass = $_POST['pass'];
// variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi

// menyesuaikan dengan data di database
$perintah = "select * from anggota WHERE username = '$username' AND pass = '$pass'";
$hasil = mysqli_query($kon, $perintah);
$row = mysqli_fetch_array($hasil);
if ($row['username'] == $username and $row['pass'] == $pass) {

    // memulai fungsi session
    session_start();
    $_SESSION['username'] = $username;
    header("location:../anggota/anggota.php"); // jika berhasil login, maka masuk ke file anggota.php

} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peringatan Gagal Login</title>
    </head>
    <body>
        <h1 style="text-align: center; font-size: 26; font-family: Arial;">
            Anda Gagal Log-In. Periksa Kembali Koneksi atau Terjadi Kesalahan Saat Input Password dan Username
        </h1>
        <center><a href="login.php">Silahkan Kembali</a></center>
    </body>
    </html>
    <?php
}
?>