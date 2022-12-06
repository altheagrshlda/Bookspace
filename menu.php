<?php
ini_set("display_errors", 0);
?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("index.php");
}

include "koneksi/koneksi.php";

if ($_SESSION['tipe'] == "1") {
	echo $_SESSION['username'];
	include "edit_buku.php";
} else if ($_SESSION['tipe'] == "0") {
	echo $_SESSION['username'];
	include "buku.php";
}
?>

