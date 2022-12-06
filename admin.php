<?php
// memulai session
session_start();
error_reporting(0);

if (isset($_SESSION['tipe']))
{
    // jika level admin
    if ($_SESSION['tipe'] == "1")
   {   
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "0")
   {
       header('location : user.php');
   }
}
if (!isset($_SESSION['tipe']))
{
    header('location: index.php');
}
 ?>