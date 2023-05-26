<?php

	$id = $_GET['id'];

	//include koneksi
	include('config/koneksi.php');

	$sql = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa = $id LIMIT 1 ";

	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($result);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<form action="update-mahasiswa.php" method="POST">
				<button href="index.php" class="btn btn-success btn-md" style="margin-bottom: 10px">Back</button>
				  <div class="form-group">
				    <label>NAMA MAHASISWA</label>
				    <input type="text" name="nama" value="<?php echo $row['nama_mahasiswa'] ?>" class="form-control" placeholder="Masukkan Nama Mahasiswa">
				  </div>

				  <div class="form-group">
				    <label>NIM</label>
					<input type="text" name="nim" rows="4" value="<?php echo $row['NIM'] ?>" class="form-control" placeholder="Masukkan NIM" >
				  </div>

				  <div class="form-group">
				    <label>Program Studi</label>
				    <input type="text" name="prodi" rows="4" value="<?php echo $row['prodi'] ?>" class="form-control" placeholder="Masukkan Program Studi" >
				  </div>
				  <input type="hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa'] ?>">
				  
				  <button type="submit" class="btn btn-success">UPDATE</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>