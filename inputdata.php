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
	<div class="header"><img src="HEADER.png" width="100%" height="151"  alt=""/></div>
  <div class="main">
    <div class="left">
      <p><a href="index.php">HOME</a></p>
		  <p><a href="inputdata.php">INPUT DATA</a></p>
		  <p><a href="tampildata.php">LIHAT DATA</a></p>
    </div>
    <div class="middle">
      <form id="form1" name="form1" method="post" action="simpan.php">
        <table width="100%" border="0" cellpadding="0">
          <tr>
            <td colspan="6" align="center">Input Data Pasien</td>
          </tr>
          <tr>
            <td width="23%">Kode Pasien</td>
            <td width="1%">:</td>
            <td colspan="4"><input type="text" name="txkopas" id="txkopas" /></td>
          </tr>
          <tr>
            <td>Tanggal Masuk</td>
            <td>:</td>
            <td colspan="4"><input type="date" name="txtglmas" id="txtglmas" /></td>
          </tr>
          <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td colspan="4"><input type="text" name="txnp" id="txnp" /></td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td colspan="4"><input type="date" name="txtanlah" id="txtanlah" /></td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td colspan="4"><input type="text" name="txtemlah" id="txtemlah" /></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td colspan="4"><select name="seljk" id="seljk">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select></td>
          </tr>
          <tr>
            <td>Alamat Pasien</td>
            <td>:</td>
            <td colspan="4"><textarea name="txap" cols="45" rows="5" maxlength="300" id="txap"></textarea></td>
          </tr>
          <tr>
            <td>Usia</td>
            <td>:</td>
            <td colspan="4"><input name="txu" type="text" id="txu" size="5" /></td>
          </tr>
          <tr>
            <td>Kode Ruangan</td>
            <td>:</td>
            <td width="24%"><input type="text" name="txkr" id="txkr" /></td>
            <td width="14%">Jenis</td>
            <td width="1%">:</td>
            <td width="37%"><select name="seljenis" id="seljenis">
              <option value="Super VIP">Super VIP</option>
              <option value="VIP">VIP</option>
              <option value="Kelas 1">Kelas 1</option>
              <option value="Kelas 2">Kelas 2</option>
              <option value="Kelas 3">Kelas 3</option>
              <option value="ICU">ICU</option>
              <option value="NICU">NICU</option>
            </select></td>
          </tr>
          <tr>
            <td>Nama Ruangan</td>
            <td>:</td>
            <td><input type="text" name="txnr" id="txnr" /></td>
            <td>No. Ranjang</td>
            <td>:</td>
            <td><select name="selnr" id="selnr">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select></td>
          </tr>
          <tr>
            <td>Penyaki Yang Diderita</td>
            <td>:</td>
            <td colspan="4"><input type="text" name="txpenyakit" id="txpenyakit" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="input" id="input" value="Input Data" /></td>
            <td>&nbsp;</td>
            <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
          </tr>
        </table>
      </form>
    </div>
	</div>
	<div class="footer" align="center">copy@janu finandi|11311056|sicsp</div>
</div>

</body>
</html>
