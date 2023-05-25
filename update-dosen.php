<?php

//panggil koneksi ke database
include('config/koneksi.php');
$id 	= $_POST['id_dosen'];
$nama 	= $_POST['nama'];
$jenjang	= $_POST['jenjang'];
$nidn	= $_POST['nidn'];

$query = "UPDATE tbl_dosen SET nama_dosen = '$nama', jenjang = '$jenjang' , nidn = '$nidn' WHERE id_dosen = '$id'";


if($connection->query($query) === TRUE) {
	header("location: index.php");
}else{
	echo "DATA GAGAL DIUPDATE!";
}