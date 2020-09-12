<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "lawyerdb";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("Conection failed: " . mysqli_connect_error());
}

$con = new mysqli($servername,$username,$password,$db);
?>



