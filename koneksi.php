<?php 
//koneksi ke database
$db_host = "localhost";
$db_user = "root";
$db_password = "";
mysql_connect($db_host, $db_user, $db_password);

//untuk memilih nama data base yang kita gunakan
$db_nama = "db_tugasahir";
mysql_select_db($db_nama);
?>