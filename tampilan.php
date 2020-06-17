<?php
include '../model/database.php';
$db = new database();
?>
<body style="background-color: lightyellow;"></a></body>
<link rel="stylesheet" type="text/css" href="style.css">
<h1 style="background-color: lightgrey; text-align: center;">REGISTRASI SIM ONLINE</h1>
<center>
<h2 style="color: white; background-color: black; ">DATA USER</h2>
<h4 style="text-align: right"><BUTTON><a href="input.php">Input Data</a></BUTTON></h4>
<table border="1" style="background-color: lightpink ; width: 100%; height: 10%">
<tr style="background-color: white">
        <th>No.</th>
		<th>Nama_lengkap</th>
		<th>Tinggi</th>
		<th>Golongan_darah</th>
		<th>Kode_pos</th>
		<th>Kota</th>
		<th>Alamat</th>
		<th>Phone</th>
		<th>Pendidikan</th>
		<th>Pekerjaan</th>
		<th>Action</th>
</tr>
<?php
$no = 1;
foreach($db->tampilan_data() as $x){
?>
<tr style="text-align: center">
td><?php echo $no++; ?></td>
		<td><?php echo $x['Nama_lengkap']; ?></td>
		<td><?php echo $x['Tinggi']; ?></td>
		<td><?php echo $x['Golongan_darah']; ?></td>
		<td><?php echo $x['Kode_pos']; ?></td>
		<td><?php echo $x['Kota']; ?></td>
		<td><?php echo $x['Alamat']; ?></td>
		<td><?php echo $x['Phone']; ?></td>
		<td><?php echo $x['Pendidikan']; ?></td>
		<td><?php echo $x['Pekerjaan']; ?></td>
<td>
<p style="color: red"><a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>

<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a></p>
</td>
</tr>
</center>
<?php
}
?>
</table>