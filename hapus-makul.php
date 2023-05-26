<?php

include('config/koneksi.php');

//get id
$id_makul = $_GET['id'];

$query = "DELETE FROM tbl_makul WHERE id_makul = '$id_makul'";

if($connection->query($query) === TRUE) {
	echo "DATA DIHAPUS!";
	header("location: index.php");
}else{
	echo "DATA GAGAL DIHAPUS!";
}