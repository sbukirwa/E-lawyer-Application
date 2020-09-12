<?php

session_start();

include("database.php");
if(isset($_POST['sign']))
{
	$email = $_POST ['email'];
	$password = $_POST ['password'];
	$_SESSION['email'] = $email;
	$password = hash('sha256', $password);

	$query = "SELECT email, password from lawyer WHERE email = '$email' AND password = '$password'";

	$query_run = mysqli_query($conn, $query);

	if(mysqli_num_rows($query_run) > 0)
	{
		$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
		$_POST['email'] = $email;
		$_POST['password'] = $password;
		header("Location: myprof.php");
	}
	else 
	{
		echo '<script type = "text/javascript"> alert("No such user Exists. Invalid Credentials") </script>';
		echo("<script>location.href = 'signin.php'</script>");
	}
}

?>