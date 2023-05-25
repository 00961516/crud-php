<?php

	$id = $_GET['id'];

	//include koneksi
	include('config/koneksi.php');

	$sql = "SELECT * FROM tbl_dosen WHERE id_dosen = $id LIMIT 1 ";

	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($result);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<form action="update-dosen.php" method="POST">
				<button href="index.php" class="btn btn-success btn-md" style="margin-bottom: 10px">Back</button>
				  <div class="form-group">
				    <label>NAMA DOSEN</label>
				    <input type="text" name="nama" value="<?php echo $row['nama_dosen'] ?>" class="form-control" placeholder="Masukkan Nama Dosen">
				  </div>

				  <div class="form-group">
				    <label>Jenjang Pendidikan</label>
				  </div>

				  <div class="input-group form-group">
                        <label class="radio">S2
                          <input type="radio" name="jenjang" value="S2" />
                          <span class="radiocheckmark"></span>
                        </label>
                        <label class="radio">S3
                          <input type="radio" name="jenjang" value="S3" />
                          <span class="radiocheckmark"></span>
                        </label>
                    </div>

				  <div class="form-group">
				    <label>NIDN</label>
				    <input type="text" name="nidn" rows="4" value="<?php echo $row['nidn'] ?>" class="form-control" placeholder="Masukkan NIDN" >
				  </div>
				  <input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen'] ?>">
				  
				  <button type="submit" class="btn btn-success">UPDATE</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>