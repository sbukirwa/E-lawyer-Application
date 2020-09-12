<?php

ob_start();

include("database.php");

if(isset($_POST['save']))
{
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$opassword = $_POST['password'];
	$ocpassword = $_POST['cpassword'];

	$password = hash('sha256', $opassword);
	$cpassword = hash('sha256', $ocpassword);

	if($password == $cpassword) {


	$sql = "INSERT INTO lawyer (lawfname, lawlname, dob, email, password) VALUES ('$firstname','$lastname','$dob','$email','$password')";

	if (mysqli_query($conn, $sql)) {
		echo("<script>location.href = 'signin.php'</script>");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	} 
	mysqli_close($conn);


}
else {
	echo "Passwords Do Not Match!";
}
ob_end_flush();
}?>