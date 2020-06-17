<?php
include '../model/database.php';
$db = new database();
?>
<body style="background-color: lightblue;"></body>
<link rel="stylesheet" type="text/css" href="style.css">

<center>
<h1 style="background-color: lightgrey;">REGISTRASI SIM ONLINE</h1>
<h2 style="background-color: black; color: white">DATA USER</h2>
<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<div class="kotak_login">
<label>FORM EDIT</label>
<p></p>
<table>
<tr>
<td>Nama_lengkap</td>
<td>
<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
<input type="text" name="Nama_lengkap" value="<?php echo $d['Nama_lengkap'] ?>">
</td>
</tr>
<tr>
<td>Tinggi</td>
<td><input type="text" name="Tinggi" value="<?php echo $d['Tinggi'] ?>"></td>
</tr>
<tr>
<td>Golongan_darah</td>
<td><input type="text" name="Golongan_darah" value="<?php echo $d['Golongan_darah'] ?>"></td>
</tr>
<tr>
<td>Kode_pos</td>
<td><input type="text" name="Kode_pos" value="<?php echo $d['Kode_pos'] ?>"></td>
</tr>
<tr>
<td>Kota</td>
<td><input type="text" name="Kota" value="<?php echo $d['Kota'] ?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="Alamat" value="<?php echo $d['Alamat'] ?>"></td>
</tr>
<tr>
<td>Phone</td>
<td><input type="text" name="Phone" value="<?php echo $d['Phone'] ?>"></td>
</tr>
<tr>
<td>Pendidikan</td>
<td><input type="text" name="Pendidikan" value="<?php echo $d['Pendidikan'] ?>"></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td><input type="text" name="Pekerjaan" value="<?php echo $d['Pekerjaan'] ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
</div>
</center>
</form>
<?php } ?>