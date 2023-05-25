<?php

	$id = $_GET['id'];

	//include koneksi
	include('config/koneksi.php');

	$sql = "SELECT * FROM tbl_makul WHERE id_makul = $id LIMIT 1 ";

	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($result);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Mata Kuliah</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-8 offset-md-2">
			<button href="index.php" class="btn btn-success btn-md" style="margin-bottom: 10px">Back</button>
				<form action="update-makul.php" method="POST">

				  <div class="form-group">
				    <label>Nama Mata Kuliah</label>
				    <input type="text" name="nama" value="<?php echo $row['nama_makul'] ?>" class="form-control" placeholder="Masukkan Nama Mata Kuliah">
				  </div>

				  <div class="form-group">
				    <label>Kode Mata Kuliah</label>
				    <input type="text" name="kode" value="<?php echo $row['kode_makul'] ?>" class="form-control" placeholder="Masukkan Kode Mata Kuliah">
				  </div>

				  <div class="form-group">
				    <label>Deskripsi Mata Kuliah</label>
				    <textarea type="text" name="deskripsi" value="<?php echo $row['deskripsi'] ?>" class="form-control" placeholder="Masukkan Dekripsi Mata Kuliah"><?php echo $row['deskripsi'] ?></textarea>
				  </div>
				  <input type="hidden" name="id_makul" value="<?php echo $row['id_makul'] ?>">
				  
				  <button type="submit" class="btn btn-success">UPDATE</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>