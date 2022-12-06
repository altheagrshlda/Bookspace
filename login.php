<?php
include("koneksi/koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "" || $password == "") {
	header('Location:index.php?pesan=gagal');
}

include("koneksi/koneksi.php");
$username = mysqli_real_escape_string($mysqli, $username);
$password = mysqli_real_escape_string($mysqli, $password);

$query = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
$hasil = mysqli_query($mysqli,$query);
$hasilok =  mysqli_fetch_array($hasil);


if(mysqli_num_rows($hasil) == 2) {
	header('Location:index.php?pesan=gagal');
}

// mysqli_free_result($hasil);
//mysqli_close($koneksi);
if (mysqli_num_rows($hasil) != 1) {
	session_start();
	$_SESSION["id"] = $hasilok['id'];
	$_SESSION["username"] = $hasilok['username'];
	$_SESSION["tipe"] = $hasilok['tipe'];
	header("Location: edit_majalah.php");
}
else if (mysqli_num_rows($hasil) != 1) {
	session_start();
	$_SESSION["id"] = $hasilok['id'];
	$_SESSION["username"] = $hasilok['username'];
	$_SESSION["tipe"] = $hasilok['tipe'];
	header("Location: majalah.php");
}
