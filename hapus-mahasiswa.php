<?php

include('config/koneksi.php');

//get id
$id_mahasiswa = $_GET['id'];

$query = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";

if($connection->query($query) === TRUE) {
	echo "DATA DIHAPUS!";
	header("location: index.php");
}else{
	echo "DATA GAGAL DIHAPUS!";
}