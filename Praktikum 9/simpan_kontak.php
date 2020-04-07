<?php
include('admin/koneksi.inc.php');

$vnama=$_POST['nama']; 
$vjkel=$_POST['jkel']; 
$vemail=$_POST['email']; 
$valamat=$_POST['alamat']; 
$vkota=$_POST['kota']; 
$vpesan=$_POST['pesan']; 
 
$sql=mysqli_query($conn, "INSERT INTO kontak SET nama='$vnama', 
jkel='$vjkel', 
email='$vemail', 
alamat='$valamat', 
kota='$vkota', 
pesan='$vpesan'"); 

if($sql){
	header("location:kontak.html"); 
	}
	else{ 
		echo ("Proses simpan ke database gagal");
	}
?> 
