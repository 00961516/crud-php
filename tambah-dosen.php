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
				<form action="simpan-dosen.php" method="POST">

				  <div class="form-group">
				    <label>NAMA DOSEN</label>
				    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Dosen" required>
				  </div>

				  <div class="form-group">
				    <label>Jenjang Pendidikan</label>
				  </div>

				  <div class="input-group form-group">
                        <label class="radio">S2
                          <input type="radio" checked="checked" name="jenjang" value="S2" />
                          <span class="radiocheckmark"></span>
                        </label>
                        <label class="radio">S3
                          <input type="radio" name="jenjang" value="S3" />
                          <span class="radiocheckmark"></span>
                        </label>
                    </div>

				  <div class="form-group">
				    <label>NIDN</label>
				    <input class="form-control" name="nidn" rows="4" placeholder="Masukkan NIDN" required>
				  </div>
				  
				  <button type="submit" class="btn btn-success">SIMPAN</button>

				</form>

			</div>
		</div>		
	</div>


</body>
</html>