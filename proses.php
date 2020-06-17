<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
$db->input($_POST['Nama_lengkap'],$_POST['Tinggi'],$_POST['Golongan_darah'],$_POST['Kode_pos'],$_POST['Kota'],$_POST['Alamat'],$_POST['Phone'],$_POST['Pendidikan'],$_POST['Pekerjaan']);
header("location:../view/tampilan.php");
}elseif($aksi == "hapus"){
$db->hapus($_GET['id']);
header("location:../view/tampilan.php");
}elseif($aksi == "update"){
$db->update($_POST['Nama_lengkap'],$_POST['Tinggi'],$_POST['Golongan_darah'],$_POST['Kode_pos'],$_POST['Kota'],$_POST['Alamat'],$_POST['Phone'],$_POST['Pendidikan'],$_POST['Pekerjaan']);
header("location:../view/tampilan.php");
}elseif($aksi == "edit"){
$db->update($_POST['Nama_lengkap'],$_POST['Tinggi'],$_POST['Golongan_darah'],$_POST['Kode_pos'],$_POST['Kota'],$_POST['Alamat'],$_POST['Phone'],$_POST['Pendidikan'],$_POST['Pekerjaan']);
header("location:../view/tampilan.php");
}
?>