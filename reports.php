<?php 

session_start();

include("database.php");

?>
<!DOCTYPE html>

	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


	<link rel="stylesheet" type="text/css" href="stylo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <style>
      body.bodyd {
    background: url(images/slide1.jpg) no-repeat;
    background-size: cover;
    background-position: 0 94px;
}

.card {
 width: 46rem;
 margin-top: 50px;
 margin-left: 305px;
}
.card-body {
  margin-bottom: 5px;
}

    </style>

    <title>ELAWYER</title>
    <nav class="navbar navbar-expand-sm navbar-light bg-transparent" style="font-family:Times New Roman, Times, serif;  font-size:19px;">
        <a class="navbar-brand" href="#"><img class="logo" src="logos.jpg" style="height:90px; width:100px; "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class = "container">
            <ul class="nav navbar-nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="myprof.php">My Profile</a>
            </li>
             <li class="nav-item active ">
              <a class="nav-link" href="reports.php">System Report <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="signout.php">Sign Out </a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
</head>
<body class = "bodyd">
  <div class="card">
    <div class="card-body">


<?php

$email = $_SESSION['email'];

$q = "SELECT * FROM lawyer WHERE email ='$email'";


  $do = mysqli_query($conn,$q);
  if(mysqli_num_rows($do) > 0){
  $rows = mysqli_fetch_array($do , MYSQLI_ASSOC);
  $lawid = $rows['lawid'];
  $lawfname = $rows['lawfname'];
  $lawlname = $rows['lawlname'];
  $email = $rows['email'];
}

$sqlClient = "SELECT * FROM client";

$sqlLawyer = "SELECT * FROM lawyer";

$qClient = "SELECT * FROM client WHERE lawid = '$lawid'";
$qLawyer = "SELECT * FROM lawyer WHERE lawid = '$lawid' AND email='$email'";

$result = mysqli_query($conn, $qClient);

$numrows = mysqli_num_rows($result);
if($numrows) {
	if(!mysqli_query($conn,$sqlClient)) {
	die('Error: ' .mysqli_error($conn));
	}

	if(!mysqli_query($conn,$sqlLawyer)) {
	die('Error: ' .mysqli_error($conn));
	}

	$resultsqlClient = mysqli_query($conn,$sqlClient);
	$resultsqlLawyer = mysqli_query($con,$sqlLawyer);

	$countsqlClient = mysqli_num_rows($resultsqlClient);
	$countsqlLawyer = mysqli_num_rows($resultsqlLawyer);

    
	echo '<div class="card-header"><b> CLIENT DETAILS </b></div>';
	echo '<br> CLIENT ID | CLIENT FIRST NAME | CLIENT LAST NAME| DATE OF BIRTH | EMAIL | LAWYER ID <br/> ';
	if($countsqlClient>0){
	while($rowsqlClient = mysqli_fetch_array($resultsqlClient)){
		echo '<br>';
	echo $rowsqlClient['clientid']."                | "
	.$rowsqlClient['clientfname']."                 | "
	.$rowsqlClient['clientlname']."                | "
	.$rowsqlClient['clientdob']."                  | "
	.$rowsqlClient['clientemail']."                  | "
	.$rowsqlClient['lawid']."                     | ";
	echo '<br/>';
	}
	} else {
		echo 'No record found <br/>';
	}
}

else {
if(!mysqli_query($conn,$qClient)){
	die('Error : ' .mysqli_error($con));
}
if(!mysqli_query($con,$qLawyer)){
	die('Error : ' .mysqli_error($con));
}
 $resultqClient = mysqli_query($conn, $qClient);
 $resultqLawyer = mysqli_query($conn, $qLawyer);

 $countqClient = mysqli_num_rows($resultqClient);

 $countqLawyer = mysqli_num_rows($resultqLawyer);

 echo '<br> CLIENT DETAILS </br>';
 echo 'CLIENT ID | CLIENT FIRST NAME | CLIENT LAST NAME| DATE OF BIRTH | EMAIL | LAWYER ID  <br>';

 if($countqClient>0){
 	while($rowqClient=mysqli_fetch_array($resultqOffender)) {
 		echo $rowqClient['clientid']."       |"
 		.$rowqClient['clientfname']."        |"
 		.$rowqClient['clientlname']."        |"
 		.$rowqClient['clientdob']."          |"
 		.$rowqClient['clientemail']."         |";
 		echo '<br/>';
 	}
 } else {
 	echo 'No record found.<br/>';
 }

}

?>
</div>
</div>


</body>
</html>