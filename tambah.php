<!DOCTYPE html><center>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Siswa</title>
	<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
		<link  href="/CRUD/bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
			<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
				<link  href="/CRUD/bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
				<body>

</head>
<h1 align="center">Tambah Siswa</h1>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Input Biodata Siswa</legend>

	<form action="simpan.php" method="post">
		
		<p>
			Nis <br>
			<input id="kelas" type="number" class="form-control" name="nis" placeholder="Nis">
		</p>
		<p>
			Nama<br>
			<input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Siswa">
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
  <label><input type="radio" name="jk" disabled>Banci</label>
</div> </p>
		<p>
			Tempat lahir <br>
			<input id="tempat_lahir" type="text" class="form-control" name="nama_lahir" placeholder="Tempat Tanggal Lahir">
		</p>
		<p>
			Alamat <br>
	<input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat ">
		</p>
		<p>
			kelas<br>
			<?php
			include ('koneksi.php');
			$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
			?>
			<select name="id_kelas" >
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
			<input class="btn btn-success" type="submit" value="Submit">
			<input type="reset" value="Reset" class="btn btn-success" onclick="return confirm('hapus data yang telah diinput?')">
		</p>
	</form>
</fieldset>
<br>
<center><a href="siswa.php"><input type="submit" value="Kembali" class="btn btn-info"></a></center>
</body>