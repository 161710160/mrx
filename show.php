<!DOCTYPE html>
<html>
<head>
	<title>kelas</title>
</head>
<body>
<?php
include('koneksi.php');
$id = $_GET['id'];
$mhs = mysqli_query ($koneksi,"SELECT siswa.id,siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.ttl,siswa.alamat,kelas.kelas FROM siswa JOIN kelas on kelas.id=siswa.kelas_id");
$data = mysqli_fetch_array ($mhs);
?>
<center><h3>Show Data Siswa</h3></center>
<fieldset style="width: 50%; margin: auto;">
<legend>Form Show Biodata Siswa</legend>
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
			<input type="text" name="jk" class="form-control" value="<?php echo $data['jenis_kelamin'];?>" required>
		</p>
		<p>
			Tgl Lahir <br>
			<input type="text" name="ttl" class="form-control" value="<?php echo $data['ttl'];?>" required>
		</p>
		<p>
			alamat <br>
			<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'];?>" required>
		</p>
		<p>
			 Nama Kelas<br>
			<input type="text" name="id_kelas" class="form-control" value="<?php echo $data['kelas'];?>" required>
		</p>
	</fieldset>
<br><center><a href="siswa.php" class="btn btn primary">&Lt; Tabel Siswa</a></center>
</body>
</html>