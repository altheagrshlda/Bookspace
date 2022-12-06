<?php
ini_set("display_errors", 0);
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

// Ambil Data yang Dikirim dari Form
if (isset($_POST['update'])) {
  $id_kategori = $_POST['id_kategori']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
  $nama = $_POST['nama']; // memanggil nama variabel keterangan untuk dibuat menjadi variabel baru $keterangan

  $query = "UPDATE tabel_kategori SET id_kategori='$id_kategori', nama='$nama' WHERE id_kategori='$id_kategori' " or die("data salah : " . mysqli_error($mysqli));
  $sql = mysqli_query($mysqli, $query); // Eksekusi/ Jalankan query dari variabel $query

  if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: edit_kategori.php"); // Redirectke halaman index.php
  } else {
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit_kategori.php'>Kembali Ke menu</a>";
  }
}
