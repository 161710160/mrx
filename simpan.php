<?php
include ('koneksi.php');

$id 				=$_POST['id'];
$z 				=$_POST['nis'];
$x 				=$_POST['nama'];
$jk 				=$_POST['jk'];
$lahir		=$_POST['tempat_lahir'];
$alamat				=$_POST['alamat'];
$kelas 				=$_POST['id_kelas'];

$tambah = "INSERT INTO siswa SET nis='$z',nama='$x',jenis_kelamin='$jk',ttl='$lahir',alamat='$alamat',kelas_id='$kelas'";
mysqli_query($koneksi,$tambah);
header("location:siswa.php");
?>