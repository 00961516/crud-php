<?php

//panggil koneksi ke database
include('config/koneksi.php');

$nama 	= $_POST['nama'];
$kode	= $_POST['kode'];
$deskripsi	= $_POST['deskripsi'];

$query 	= "INSERT INTO tbl_makul (nama_makul, kode_makul, deskripsi) VALUES ('$nama', '$kode', '$deskripsi')"; 

if($connection->query($query) === TRUE) {
	header("location: tambah-makul.php");
	echo "DATA TELAH DISIMPAN!";
}else{
	echo "DATA GAGAL DISIMPAN!";
}