<?php
include 'admin/koneksi.inc.php';
$sql = "INSERT INTO ADMIN (username,password) VALUES ('admin','admin123')";

if(mysqli_query($conn,$sql)){
	echo "New record created succesfully"."<br>";
} else {
	echo "Error: ".$sql."<br>".mysqli_error($conn);
} 
mysqli_close($conn);
?>