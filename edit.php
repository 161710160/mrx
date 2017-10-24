<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Siswa</title>
	<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
		<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
			<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
				<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<?php
include ('koneksi.php');
$id = $_GET['id'];
$mhs = mysqli_query ($koneksi, "SELECT * FROM siswa WHERE id = '$id'");
$data = mysqli_fetch_array ($mhs);
?>
<center><h2>Edit Data Siswa</h2></center>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Edit Biodata Siswa</legend>
	<form action="savedit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<p>
			Nis <br>
			<input type="number" name="nis" class="form-control" value="<?php echo $data['nis'];?>" required>
		</p>
		<p>
			Nama <br>
			<input type="text" name="nama" class="form-control" value="<?php echo $data['nama'];?>" required>
		</p>
		<p>
			Jenis Kelamin <br>
			<div class="radio">
  <label><input type="radio" name="jk">Laki-Laki</label>
</div>
<div class="radio">
  <label><input type="radio" name="jk">Perempuan</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="jk" disabled>Waria</label>
</div

		</p>
		<p>
			Tempat Tanggal Lahir <br>
			<input type="text" name="lahir" class="form-control" value="<?php echo $data['ttl'];?>" required>
		</p>
		<p>
			Alamat <br>
			
			<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'];?>" required>
		</p>
		<p>
			kelas<br>
			<?php
			include ('koneksi.php');
			$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
			?>
			<select name="id_kelas" class="form-control" id="sel1">
				<option>-</option>
				<?php
				foreach ($kelas as $data) {
				?>
				<option value="<?php echo $data['id'];?>">
					<?php echo $data['kelas']?>
				</option>
				<?php
			}?>
			</select>
		</p>
		<p>
			<input type="submit" value="Simpan" class="btn btn-info">
		</p>
	</form>
</fieldset>
<br><center><a href="siswa.php" class="btn btn-primary">KEMBALI</a></center>
</body>
</html>