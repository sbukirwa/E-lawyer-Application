<?php 
session_start();
include("database.php");

include("saveProfile.php");

$email = $_SESSION['email'];


$q = "SELECT lawlname, email FROM lawyer WHERE email ='$email' ";
  $do = mysqli_query($conn,$q);
  if(mysqli_num_rows($do) > 0){
  $rows = mysqli_fetch_array($do , MYSQLI_ASSOC);
  $lawlname = $rows['lawlname'];
  $email = $rows['email'];
}
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
  width: 25rem;
  margin-top: 10px;
  margin-left: 455px;
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
            <li class="nav-item active">
              <a class="nav-link" href="myprof.php">My Profile<span class="sr-only">(current)</span></a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="reports.php">System Report</a>
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
		<div class="row">
      <div class="card">
<div class="card-body">
			<form action="myprof.php" method="POST" enctype="multipart/form-data">
				<h3 class= "text-center">Create Profile</h3>

				<?php if(!empty($msg)): ?>
					<div class = "alert <?php echo $css_class; ?>">
						<?php echo $msg; ?>
					</div>

				<?php endif; ?>



				<div class = "form-group text-center">
					<img src="upload/defaultprofile.png" onclick = "triggerClick()" id="profileDisplay" />
					<label for="profileImage">Profile Image</label>
					<input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style = "display:none;">
				</div>
         <h5><center>Counsel <?php echo $lawlname; ?></center></h5>
        <div class = "form-group">
          <label for = "speciality">Speciality</label>
          <select name = "speciality" class="form-control input_user" required>
             <option value="Property Law">Property Law</option>
             <option value="Divorce Law">Divorce Law</option>
             <option value="Legal Advice">Legal Advice</option>
             <option value="Business Law">Business Law</option>
           </select>
                </div>
                 <div class = "form-group">
          <label for ="dateofgrad">Date of grad</label>
                     <input type="date" name="dateofgrad" class="form-control input_user" max="2018-12-31" title="Must be before December 2018" value="" placeholder="Date of grad" required>
                </div>
                 <div class = "form-group">
          <label for ="location">Location</label>
                     <input type="location" name="location" class="form-control input_user" value="" placeholder="Location" required>
                </div>
            <div class = "form-group">
	        <button type = "submit" name="save-user" class="btn btn-primary btn-block">Save User</button>
            </div>			
        </form>
	</div>
</div>
	</div>



<script src="scripts.js"></script>


</div>
</div>
</body>
</html>