<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/mediaqueries.css">
<title>Untitled Document</title>
</head>

<body>
<div class="container">
	<div class="header"><font class="warna">JANU FINANDI</font> | 11311056</div>
	<div class="main">
		<div class="left">
		  <p>HOME</p>
		  <p>JANU FINANDI</p>
    </div>
		<div class="middle"><?php
$nama = $_POST['txtnama'];
$nohp = $_POST['txthp'];
$email = $_POST['txtemail'];
$jk =  $_POST['jksel'];
$ti = $_POST['jurusan'];



?>
<table width="86%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="21%">Nama</td>
    <td width="2%">:</td>
    <td width="77%"><?=$nama ?></td>
  </tr>
  <tr>
    <td>Nomer Hp</td>
    <td>:</td>
    <td><?=$nohp?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><?=$email?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><?=$jk?></td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>:</td>
    <td><?=$ti?>
      </td>
  </tr>
</table>
	  </div>
		<div class="right">SI HX SP
	</div></div>
	<div class="footer">UTS SP 2015</div>
</div>

</body>
</html>
