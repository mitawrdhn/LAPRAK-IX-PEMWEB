<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mitawrdhn";
//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed : ".mysqli_connect_error());
}

//create database
$sql = "CREATE TABLE KONTAK (
id INT(4) AUTO_INCREMENT PRIMARY KEY,
Nama VARCHAR(30) NOT NULL,
jkel VARCHAR(10),
Email VARCHAR(40),
Alamat VARCHAR(50),
Kota VARCHAR(20),
Pesan TEXT
)";
if(mysqli_query($conn,$sql)){
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>