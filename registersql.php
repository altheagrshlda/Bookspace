<?php
ini_set("display_errors",0);
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
$username     = $_POST['username']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$password    = $_POST['password']; // memanggil nama variabel password untuk dibuat menjadi variabel baru $password
$tipe		=$_POST['tipe']; // memanggil nama variabel tipe untuk dibuat menjadi variabel baru $tipe       

//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli, "INSERT INTO tb_user SET id='$id',  username='$username', password='$password', tipe=2 ") 
or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
    echo "Berhasil Input Data";
    echo "<br><a href='index.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
} else {
    echo "Gagal Input Data!!!";
    echo "<br><a href='register.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
    }
}
?>

