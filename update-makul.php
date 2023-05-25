<?php

//panggil koneksi ke database
include('config/koneksi.php');
$id 	= $_POST['id_makul'];
$nama 	= $_POST['nama'];
$kode	= $_POST['kode'];
$deskripsi	= $_POST['deskripsi'];

$query = "UPDATE tbl_makul SET nama_makul = '$nama', kode_makul = '$kode', deskripsi = '$deskripsi'  WHERE id_makul = '$id'";


if($connection->query($query) === TRUE) {
	echo "DATA DIUPDATE!";
	header("location: index.php");
}else{
	echo "DATA GAGAL DIUPDATE!";
}