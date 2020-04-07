<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mitawrdhn";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("koneksi gagal dibangun");
mysqli_select_db($conn, 'mitawrdhn') or die("Database tidak dapat dibuka"); 
?>