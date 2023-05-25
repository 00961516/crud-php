<?php

include('config/koneksi.php');

//get id
if ($_GET['id']!=null){

	$id = $_GET['id'];

	$query = "DELETE FROM tbl_dosen WHERE id_dosen = '$id'";
}
else if ($_GET['id_makul']!=null){
$id_makul = $_GET['id_makul'];

$query = "DELETE FROM tbl_makul WHERE id_makul = '$id_makul'";
}
else if ($_GET['id_mahasiswa']!=null){
$id_mahasiswa = $_GET['id_mahasiswa'];

$query = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
}
if($connection->query($query) === TRUE) {
	header("location: index.php");
}else{
	echo "DATA GAGAL DIHAPUS!";
}