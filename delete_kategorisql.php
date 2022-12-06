<?php
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

//peritah untuk menghapus data sesuai id yang dipilih
if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        echo "<b>Data yang dihapus tidak ada</b>";
    } else {
        // query sql hapus data
        $delete = mysqli_query($mysqli, "DELETE FROM tabel_kategori WHERE id_kategori='$_GET[id]'") or die("Mysql Error : " . mysqli_error($mysqli));
        if ($delete) {
            echo "Berhasil Hapus Data <br>";
            echo "<a href='edit_kategori.php'>Kembali</a>";
        }
    }
}
