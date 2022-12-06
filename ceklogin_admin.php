<?php
ini_set("display_errors", 0);
session_start(); //memulai session

include "koneksi/koneksi.php";
$username = $_POST['username']; //mengambil isian username dari form
$password = $_POST['password']; //mengambil isian password dari form

//query untuk mengambil data user dari database sesuai dengan username inputan form
$q = "SELECT * FROM tabel_login WHERE username= '$username' && password = '$password' ";
$result = mysqli_query($mysqli, $q);
$data = mysqli_fetch_array($result);
$cek = mysqli_num_rows($result);

//cek kesesuaian password masukan dengan database
if ($cek == 1) {
        //menyimpan tipe user dan username dalam session
        $_SESSION['username'] = $data['username'];
        echo "
        <script>
        alert('Anda berhasil login sebagai Admin');
        document.location.href='edit_buku.php';
        </script>";
}
//jika password tidak sesuai
else {
        echo "
        <script>
        alert('Maaf, anda tidak bisa login..');
        document.location.href='login_admin.php';
        </script>";
        echo "<br>";
        echo mysqli_error($conn);
}
