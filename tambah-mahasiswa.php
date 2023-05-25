<!DOCTYPE html>
<html>
<head>
	<title>Tambah Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


	<div class="container" style="margin-top: 100px">
		<div class="row">
			<div class="col-md-8 offset-md-2">
			<a href="index.php" class="btn btn-success btn-md" style="margin-bottom: 10px">Back</a>
				<form action="simpan-mahasiswa.php" method="POST">

				  <div class="form-group">
				    <label>NAMA MAHASISWA</label>
				    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
				  </div>
				  <div class="form-group">
				    <label>NIM</label>
				    <input class="form-control" name="NIM" rows="4" placeholder="Masukkan NIM" required>
				  </div>
				  <div class="form-group">
				    <label>Program Studi</label>
				    <input class="form-control" name="prodi" placeholder="Masukkan Program Studi" required>
				  </div>
				  
				  <button type="submit" class="btn btn-success">SIMPAN</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>