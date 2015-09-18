<?php
//pemanggilan data ke variabel $nama
$kpasien = $_POST['txkopas'];
$tglmasuk = $_POST['txtglmas'];
$namapasien = $_POST['txnp'];
$tgllahir = $_POST['txtanlah'];
$temlahir = $_POST['txtemlah'];
$jk = $_POST['seljk'];
$almtpasien = $_POST['txap'];
$usia = $_POST['txu'];
$kr = $_POST['txkr'];
$jenis = $_POST['seljenis'];
$nr = $_POST['txnr'];
$nran = $_POST['selnr'];
$penyakit = $_POST['txpenyakit'];


//memanggil koneksi.php
include "koneksi.php";

//memasukan data kedalam query sql
$kueri = "INSERT INTO tbl_tugasahir(kodepasien,tanggalmasuk,namapasien,tgllahir,tmplahir,jk,almtpasien,usia,koderuangan,jenis,namaruangan,noranjang,penyakit) VALUES ('$kpasien','$tglmasuk','$namapasien','$tgllahir','$temlahir','$jk','$almtpasien','$usia','$kr','$jenis','$nr','$nran','$penyakit')";
mysql_query($kueri);
?>
<center><a href="inputdata.php">kembali</a></center>