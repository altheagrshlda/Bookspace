<?php
ini_set("display_errors", 0);
include "koneksi/koneksi.php"; // memanggil file koneksi.php untuk menghubungkan ke database

// Ambil Data yang Dikirim dari Form
if (isset($_POST['update'])) {
  $id_buku         = $_POST['id'];
  $judulbuku  = $_POST['judulbuku'];
  $kategori   = $_POST['kategori'];
  $penulis = $_POST['penulis'];
  $gambar     = $_POST['gambar'];
  $deskripsi  = $_POST['deskripsi'];


  $nama_file = $_FILES['gambar']['name'];
  $ukuran_file = $_FILES['gambar']['size'];
  $tipe_file = $_FILES['gambar']['type'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // Set path folder tempat menyimpan gambarnya
  $path = "images/" . $nama_file;

  if ($tipe_file == "image/jpg" || $tipe_file == "image/jpeg" || $tipe_file == "image/png") { // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if ($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if (move_uploaded_file($tmp_file, $path)) { // Cek apakah gambar berhasil diupload atau tidak
        // Jika gambar berhasil diupload, Lakukan :	
        // Proses simpan ke 

        $query = "UPDATE tabel_buku SET id_buku='$id_buku', judulbuku='$judulbuku', kategori='$kategori', penulis='$penulis', gambar='$nama_file', deskripsi='$deskripsi' WHERE id_buku='$id_buku' " or die("data salah : " . mysqli_error($mysqli));

        // $query = "UPDATE tabel_buku SET id='$id', kota='$kota', makanan='$makanan', gambar='$nama_file', keterangan='$keterangan' WHERE id='$id' ";
        $sql = mysqli_query($mysqli, $query); // Eksekusi/ Jalankan query dari variabel $query

        if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          header("location: edit_buku.php"); // Redirectke halaman index.php
        } else {
          // Jika Gagal, Lakukan :
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href='edit_buku.php'>Kembali Ke menu</a>";
        }
      } else {
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a href='edit_buku.php'>Kembali Ke menu</a>";
      }
    } else {
      // Jika ukuran file lebih dari 1MB, lakukan :
      echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
      echo "<br><a href='edit_buku.php'>Kembali Ke menu</a>";
    }
  } else {
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "
  <script>
      alert('Tipe gambar yang diupload harus JPG / JPEG / PNG');
  </script>
";
    // Jika gambar gagal diupload, Lakukan :
    echo "Gagal Input Data!!!";
    echo "<br><a href='edit_buku.php'>Kembali Ke menu</a>";
  }
}
