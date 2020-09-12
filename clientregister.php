<?php
session_start();

include("database.php");

$email = $_SESSION['email'];
$q = "SELECT lawid,email FROM lawyer WHERE email ='$email' ";
  $do = mysqli_query($con,$q);
  if(mysqli_num_rows($do) > 0){
  $rows = mysqli_fetch_array($do , MYSQLI_ASSOC);
  $lawid = $rows['lawid'];
  $email = $rows['email'];
}

if(isset($_POST['btn_register']))
{
  $firstname = $_POST['clientfname'];
  $lastname = $_POST['clientlname'];
  $dob = $_POST['clientdob'];
  $email = $_POST['clientemail'];
 


  $sql = "INSERT INTO client (clientfname, clientlname, clientdob, clientemail,lawid) VALUES ('$firstname','$lastname','$dob','$email','$lawid')";

  if (mysqli_query($conn, $sql)) {
    echo("<script>location.href = 'contact.php'</script>");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  } 
  mysqli_close($conn);


}



?>


<!DOCTYPE html>
    <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
         
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


          <title>ELAWYER</title>
          <nav class="navbar navbar-expand-sm navbar-light bg-transparent" style="font-family:Times New Roman, Times, serif; font-size:19px;">
                <a class="navbar-brand" href="#"><img class="logo" src="logos.jpg" style="height:90px; width:100px; "></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <div class = "container">
                  <ul class="nav navbar-nav justify-content-end">
                    <li class="nav-item">
                    <a class="nav-link" href="profiles.php">Lawyer Profiles</a>
                    </li>
                    <li class="nav-item  active">
                    <a class="nav-link" href="clientregister.php">Client Registration<span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                </div>
                </div>   
              </nav>

                    <style type="text/css">
        body.bodyd {
    background: url(images/register.jpg) no-repeat;
    background-size: cover;
    background-position: 0 94px;
}

.card {
 width: 40rem;
 margin-top: 10px;
 margin-left: 350px;
}
.card-body {
  margin-bottom: 5px;
}
label {
  float: left;
}

</style>
</head>
<body class = "bodyd">
  <div class="card">
    <div class="card-body">
  <form method="post" action="clientregister.php">
    
  <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-3" align="center"> 
             <h3>Client Registration Form</h3>

             <div class="form-group" style="margin-top: 10px;">
               <label>First name</label>
               <input type="text" class="form-control" name="clientfname" required>
             </div>
             <div class="form-group" style="margin-top: 10px;">
               <label>Last name </label>
              <input type="text" class="form-control" name="clientlname" required>
             </div>
               <div class="form-group" style="margin-top: 10px;">
               <label>Date of Birth </label>
                 <input type="date" class="form-control" name="clientdob" max="2001-12-31" title="18 years and above" required>
                </div>
               <div class="form-group" style="margin-top: 10px;">
              <label>Email </label>
               <input type="text" class="form-control" name="clientemail" required>
              </div>
             
             
                <div class="d-flex justify-content-center mt-3 login_container">
                <input type="submit" value="Send" class="btn btn-primary" name="btn_register">
              </div>
             </div> 
          </div> 
  </form>
</div>
</div>
</body>

  </html>

