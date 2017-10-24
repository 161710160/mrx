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
</head>
<body bgcolor="pink">
<center>
<h1 ><font color="#adejaja">Data Siswa</h1></font><p class="version">2016-2017</p>
<br>
<ul class="nav nav-tabs nav-justified">
<ul class="nav nav-tabs nav-justified">

  <li role="presentation" class=""><a href="/CRUD/jurusan/jurusan.php" class="glyphicon glyphicon-thumbs-up">JURUSAN</a></li>
  <li role="presentation"><a href="/CRUD/kelas/kelas.php" class="glyphicon glyphicon-education">KELAS</a></li>
  <li role="presentation" class="active"><a href="/CRUD/siswa/siswa.php" class="glyphicon glyphicon-user">SISWA</a></li>

</ul>
</div>

	<div class="container">
  <h2>Table Siswa</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nis</th>
        <th>Nama Siswa</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Nama Kelas</th>
        <th colspan="4">Opsi</th>
      </tr>
    </thead>

 
<?php 
include('koneksi.php');
$ma = mysqli_query($koneksi,"SELECT siswa.id,siswa.nis,siswa.nama,siswa.jenis_kelamin,siswa.ttl,siswa.alamat,kelas.kelas FROM siswa JOIN kelas ON kelas.id=siswa.kelas_id");
$no = 1;
foreach ($ma as $data) {
	echo "<tr>
	<td>$no</td>
	<td>".$data ['nis']."</td>
	<td>".$data['nama']."</td>	
	<td>".$data['jenis_kelamin']."</td>
	<td>".$data['ttl']."</td>	
	<td>".$data['alamat']."</td>	
	<td>".$data['kelas']."</td>	
	<td><a class='btn btn-info' href='tambah.php?id=$data[id]'>Tambah</a></td>
	<td><a class='btn btn-danger' href='edit.php?id=$data[id]'>Edit</a></td>
	<td><a class='btn btn-success' href='delete.php?id=$data[id]'>Delete</td>
	</tr>";
	$no++;
	}
 ?>
</table>
</body>
</html>
</center>
