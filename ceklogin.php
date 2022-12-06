<?php
ini_set("display_errors", 0);
session_start(); //memulai session

include "koneksi/koneksi.php";
$username = $_POST['username'];//mengambil isian username dan password dari form
$password = $_POST['password'];


//query untuk mengambil data user dari database sesuai dengan username inputan form
$q = "SELECT * FROM tb_user WHERE username = '$username' && password = '$password' " ;
$result = mysqli_query($mysqli,$q);
$data = mysqli_fetch_array($result);
$cek = mysqli_num_rows($result);

	
//cek kesesuaian password masukan dengan database
if($cek['tipe'] == "$Admin")
	{
			//menyimpan tipe user dan username dalam session
		$_SESSION['tipe'] = $data['tipe'];
        $_SESSION['username'] = $data['username'];
        echo "
     <script>
     alert('Anda berhasil login..');
     document.location.href='edit_kota.php';
     </script>";
	}
else if($cek['tipe'] == "$User")
	{
			//menyimpan tipe user dan username dalam session
		$_SESSION['tipe'] = $data['tipe'];
        $_SESSION['username'] = $data['username'];
        echo "
     <script>
     alert('Anda berhasil login ');
     document.location.href='kota.php';
     </script>";
	}
//jika password tidak sesuai
else 
	{
		echo "
    <script>
    alert('Maaf, anda tidak bisa login..');
    document.location.href='index.php';
    </script>";
    echo "<br>";
    echo mysqli_error($conn);
	}
?>
