<?php
if ($_GET['action']=='tambah-asrama') {
	include "../../koneksi.php";
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$harga=$_POST['harga'];
	$tipe=$_POST['tipe'];
	$lama=$_POST['lama'];
	$kapasitas=$_POST['kapasitas'];

	$koneksi->query("INSERT INTO `asrama` (`id`, `nama`, `HargaP`, `tipe`, `lama`, `jumlah_orang`) VALUES ('$id', '$nama', '$harga', '$tipe', '$lama', '$kapasitas')");
	echo "<script>location='../index.php?page=data_asrama'</script>";
	
}
if ($_GET['action']=='edit-asrama') {
	include "../koneksi.php";
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$harga=$_POST['harga'];
	$tipe=$_POST['tipe'];
	$lama=$_POST['lama'];
	$kapasitas=$_POST['kapasitas'];

	$koneksi->query("UPDATE `asrama` SET `nama` = '$nama', `HargaP` = '$harga', `tipe` = '$tipe', `lama` = '$lama', `jumlah_orang` = '$kapasitas' WHERE `asrama`.`id` = $id");
	echo "<script>location='index.php?page=data_asrama'</script>";
}
if ($_GET['action']=='deleteasrama') {
	include "../../koneksi.php";
	$id=$_GET['id'];
	$koneksi->query("delete from asrama where id='$id'");
	echo "<script>location='../index.php?page=data_asrama'</script>";
}
?>