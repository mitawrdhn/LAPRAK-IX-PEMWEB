<?php
include "koneksi.inc.php"; 

$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) && !empty($password)){
	$sql = mysqli_query($conn, "SELECT * FROM ADMIN where username='$username' and password='$password'");
	$result = mysqli_num_rows($sql);
	if($result){
		header ('location:cetak.php');
	}
	else{
	$msg="Username/Password Salah";
	echo"<script type='text/javascript'>alert('$msg');history.go(-1);</script>";
	}
}
else {
	$msg="Username/Password anda kosong, silahkan diisi terlebih dahulu";
	echo"<script type='text/javascript'>alert('$msg');history.go(-1);</script>";
}
?>