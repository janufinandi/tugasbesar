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
	<div class="header"><img src="HEADER.png" width="100%" height="150"  alt=""/></div>
  <div class="main">
    <div class="left">
      <p><a href="index.php">HOME</a></p>
		  <p><a href="inputdata.php">INPUT DATA</a></p>
		  <p><a href="tampildata.php">LIHAT DATA</a></p>
    </div>
    <div class="middle">
    
        <table width="auto" border="1" cellpadding="0">
        <thead>
          <tr bgcolor="#00FFFF" style="font-size:12px">
            <td><div align="center">Kode Pasien</div></td>
            <td><div align="center">Tangga Masuk</div></td>
            <td><div align="center">Nama Pasien</div></td>
            <td><div align="center">Tanggal Lahir</div></td>
            <td><div align="center">Tempat Lahir</div></td>
            <td><div align="center">Jenis Kelamin</div></td>
            <td><div align="center">Alamat Pasien</div></td>
            <td>Usia</td>
            <td><div align="center">Kode Ruangan</div></td>
            <td>Jenis</td>
            <td><div align="center">Nama Ruangan</div></td>
            <td><div align="center">No. Ranjang</div></td>
            <td><div align="center">Penyakit Yang Diderita</div></td>
          </tr>
          </thead>
          
          <tbody>
          <?php
  //panggilan koneksi
  include"koneksi.php";
  //buat query
  $query =mysql_query("SELECT * FROM tbl_tugasahir");
  //buat perulangan
  while ($data = mysql_fetch_array($query)){
  ?>
          <tr style="font-size:10px">
            <td><?php echo $data ['kodepasien']?></td>
            <td><?php echo $data ['tanggalmasuk']?></td>
            <td><?php echo $data ['namapasien']?></td>
            <td><?php echo $data ['tgllahir']?></td>
            <td><?php echo $data ['tmplahir']?></td>
            <td><?php echo $data ['jk']?></td>
            <td><?php echo $data ['almtpasien']?></td>
            <td><?php echo $data ['usia']?></td>
            <td><?php echo $data ['koderuangan']?></td>
            <td><?php echo $data ['jenis']?></td>
            <td><?php echo $data ['namaruangan']?></td>
            <td><?php echo $data ['noranjang']?></td>
            <td><?php echo $data ['penyakit']?></td>
          </tr>
          </tbody>
           <?php
  }
  ?>
        </table>
    </div>
    </div>
	</div>
	<div class="footer" align="center">copy@janu finandi|11311056|sicsp</div>
</div>

</body>
</html>
