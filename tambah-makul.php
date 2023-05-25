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
				<form action="simpan-makul.php" method="POST">

				  <div class="form-group">
				    <label>Nama Makul</label>
				    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mata Kuliah" required>
				  </div>

				  <div class="form-group">
				    <label>Kode Mata Kuliah</label>
				    <input class="form-control" name="kode" rows="4" placeholder="Masukkan Kode Mata Kuliah" required>
				  </div>

				  <div class="form-group">
				    <label>Dekripsi</label>
				    <textarea class="form-control" name="deskripsi" rows="4" placeholder="Masukkan Dekripsi" ></textarea>
				  </div>
				  
				  <button type="submit" class="btn btn-success">SIMPAN</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>