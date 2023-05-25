<?php

//panggil koneksi ke database
include('config/koneksi.php');

$nama 	= $_POST['nama'];
$NIM	= $_POST['NIM'];
$prodi	= $_POST['prodi'];

$query 	= "INSERT INTO tbl_mahasiswa (nama_mahasiswa, NIM, prodi) VALUES ('$nama', '$NIM', '$prodi')"; 

if($connection->query($query) === TRUE) {
	echo "DATA DISIMPAN!";
	header("location: tambah-mahasiswa.php");
}else{
	echo "DATA GAGAL DISIMPAN!";
}