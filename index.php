<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php
	include('config/koneksi.php');
?>

	<div class="container" style="margin-top: 100px">
		<div class="row">
		<div class="col-md-12">
			
			<a href="tambah-makul.php" class="btn btn-success btn-md" style="margin-bottom: 10px">Tambah Mata Kuliah</a>

			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">NAMA</th>
				  <th scope="col">KODE MATAKULIAH</th> 
				  <th scope="col">DESKRIPSI</th>
			      <th scope="col">AKSI</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php
					$query = "SELECT * FROM tbl_makul ORDER BY id_makul DESC";
					$result = mysqli_query($connection, $query);
				?>

				<?php
			  		while ($row = mysqli_fetch_array($result)) {
			  	?>

				    <tr>			      
				      <td><?php echo $row['nama_makul'] ?></td>
					  <td><?php echo $row['kode_makul'] ?></td>
				      <td><?php echo $row['deskripsi'] ?></td>
				      <td>

				      	<a href="edit-makul.php?id=<?php echo $row['id_makul'] ?>" class="btn btn-primary btn-sm">EDIT</a>

				      	<a href="hapus-makul.php?id=<?php echo $row['id_makul'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
				      </td>
				    </tr>

				<?php } ?>
			    
			  </tbody>
			</table>
			</div>
			<div class="col-md-12">
			
			<a href="tambah-dosen.php" class="btn btn-success btn-md" style="margin-bottom: 10px">Tambah Dosen</a>

			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">NAMA DOSEN</th>
				  <th scope="col">NIDN</th>
				  <th scope="col">JENJANG PENDIDIKAN</th> 
			      <th scope="col">AKSI</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php
					$query = "SELECT * FROM tbl_dosen ORDER BY id_dosen DESC";
					$result = mysqli_query($connection, $query);
				?>

				<?php
			  		while ($row = mysqli_fetch_array($result)) {
			  	?>

				    <tr>			      
				      <td><?php echo $row['nama_dosen'] ?></td>
				      <td><?php echo $row['nidn'] ?></td>
					  <td><?php echo $row['jenjang'] ?></td>
				      <td>

				      	<a href="edit-dosen.php?id=<?php echo $row['id_dosen'] ?>" class="btn btn-primary btn-sm">EDIT</a>

				      	<a href="hapus-dosen.php?id=<?php echo $row['id_dosen'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
				      </td>
				    </tr>

				<?php } ?>
			    
			  </tbody>
			</table>

			</div>
			<div class="col-md-12">
			
			<a href="tambah-mahasiswa.php" class="btn btn-success btn-md" style="margin-bottom: 10px">Tambah Mahasiswa</a>

			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">NAMA MAHASISWA</th>
				  <th scope="col">NIM</th> 
				  <th scope="col">PROGRAM STUDI</th>
			      <th scope="col">AKSI</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php
					$query = "SELECT * FROM tbl_mahasiswa ORDER BY id_mahasiswa DESC";
					$result = mysqli_query($connection, $query);
				?>

				<?php
			  		while ($row = mysqli_fetch_array($result)) {
			  	?>

				    <tr>			      
				      <td><?php echo $row['nama_mahasiswa'] ?></td>
					  <td><?php echo $row['NIM'] ?></td>
				      <td><?php echo $row['prodi'] ?></td>
				      <td>

				      	<a href="edit-mahasiswa.php?id=<?php echo $row['id_mahasiswa'] ?>" class="btn btn-primary btn-sm">EDIT</a>

				      	<a href="hapus-mahasiswa.php?id=<?php echo $row['id_mahasiswa'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
				      </td>
				    </tr>

				<?php } ?>
			    
			  </tbody>
			</table>
			</div>

		</div>		
	</div>


</body>
</html>