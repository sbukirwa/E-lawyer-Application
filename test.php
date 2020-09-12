<?php 
session_start();
include("database.php");


$email = $_SESSION['email'];


$q = "SELECT lawlname FROM lawyer WHERE email ='$email' ";
  $do = mysqli_query($con,$q);
  if(mysqli_num_rows($do) > 0){
  $rows = mysqli_fetch_array($do , MYSQLI_ASSOC);
  $lawlname = $rows['lawlname'];
}

?>
<!DOCTYPE html>

	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

	<center><h4>Counsel <p><?php echo $lawlname; ?></p></h4></center>
	<button type="button" onclick ="location='signin.php'">Out</button>

</body>
</html>