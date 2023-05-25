<?php

//panggil koneksi ke database
include('config/koneksi.php');

$nama 	= $_POST['nama'];
$jenjang	= $_POST['jenjang'];
$nidn	= $_POST['nidn'];

$query 	= "INSERT INTO tbl_dosen (nama_dosen, jenjang, nidn) VALUES ('$nama', '$jenjang', '$nidn')"; 

if($connection->query($query) === TRUE) {
	header("location: tambah-dosen.php");
}else{
	echo "DATA GAGAL DISIMPAN!";
}