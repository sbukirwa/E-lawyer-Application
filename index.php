<?php
session_start();
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>ELAWYER SIGN UP</title>
<style type = "text/CSS">
.jumbotron{

  position: relative;
    display: flex;
    max-height: 560px;
    margin-top: 10px;
    align-items: center;
    margin-left: 375px;
    margin-right: 390px;

}
body {
	background: url(images/register.jpg) no-repeat fixed center;
}
</style>
</head>

<body>
	<div class="container">
	    <div class="jumbotron">
		
	    <form method="post" action="process.php">
	    	<h4>E-LAWYER REGISTRATION</h4>
	    <div class="form-group">
		First name <br>
		<input type="text" class="form-control" name="fname" required>
		</div>
		<div class="form-group">
		Last name <br>
		<input type="text" class="form-control" name="lname" required>
		</div>
		<div class="form-group">
		Date of birth <br>
		<input type="date" class="form-control" min="1954-12-31" max="1994-12-31" title="25 years and above" name="dob" required>
		</div>

		<div class="form-group">
		Email <br>
		<input type="email" class="form-control" name="email" required>
		</div>
		<div class="form-group">
		Password <br>
		<input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" required>
		</div>
		<div class="form-group">
		Confirm Password <br>
		<input type="password" class="form-control" name="cpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" required>
		</div>
		<input type="submit" class="btn btn-primary" name="save" value="Register">
        </form>
    </div>
</div>
</body>
</html>