<?php

//panggil koneksi ke database
include('config/koneksi.php');
$id 	= $_POST['id_mahasiswa'];
$nama 	= $_POST['nama'];
$nim	= $_POST['nim'];
$prodi	= $_POST['prodi'];

$query = "UPDATE tbl_mahasiswa SET nama_mahasiswa = '$nama', NIM = '$nim' , prodi = '$prodi' WHERE id_mahasiswa = '$id'";


if($connection->query($query) === TRUE) {
	echo "DATA DIUPDATE!";
	header("location: index.php");
}else{
	echo "DATA GAGAL DIUPDATE!";
}