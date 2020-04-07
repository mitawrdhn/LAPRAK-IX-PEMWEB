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
$sql = "CREATE TABLE ADMIN (
id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
username varchar(255) NOT NULL,
password varchar(255)  NOT NULL
)";
if(mysqli_query($conn,$sql)){
	echo "Table created succesfully";
} else {
	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>