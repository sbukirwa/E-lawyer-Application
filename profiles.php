<?php 
session_start();
include("database.php");
include("saveProfile.php");

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


$sql = "SELECT * FROM profile";
$result = mysqli_query($conn, $sql);
$profiles = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="stylo.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      body.bodyd {
    background: url(images/imgg.jpg) no-repeat;
    background-size: cover;
    background-position: 0 94px;
}

      .profiles-image {
        margin-top: 94px;
      }

    </style>
    <title>ELAWYER</title>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-transparent" style="font-family:Times New Roman, Times, serif;  font-size:19px;">
        <a class="navbar-brand" href="#"><img class="logo" src="logos.jpg" style="height:90px; width:100px; "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class = "container">
            <ul class="nav navbar-nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">Home </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="profiles.php">Lawyer Profiles<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="services.php">Legal Services</a>
            </li>
             <li class="nav-item">
                      <a class="nav-link" href="comments.php">Public Forum</a>
                    </li>
            <li class="nav-item ">
              <a class="nav-link" href="signin.php">Lawyer Sign In </a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
</head>
<body class = "bodyd">
  <div class="profiles-image">
    <div class = "container2">
      <div class = "row">
        

          <table class = "table table-borderless">
            <tbody>
              <?php foreach($profiles as $profile): ?>
              
                  <td>
                    <div class="card" style="width: 18rem; height: 30rem;">
                  <img src="upload/<?php echo $profile['profile_image']; ?>" class="card-img-top" alt="..." width="190px" height="205px"/>
                 <div class="card-body">
                 
                 <p><b>
                  Counsel:</b> <?php echo $lawfname; ?> <?php echo $lawlname; ?>
                </p>
                  <p><b>
                  Speciality:</b> <?php echo $profile['speciality']; ?>
                </p>
                    <p><b>
                    Date of Grad:</b>  <?php echo $profile['dateofgrad']; ?>
                  </p>
                   <p><b>
                   Email:</b>  <?php echo $email; ?>
                  </p>
                   <p><b>
                    Location:</b>  <?php echo $profile['location']; ?>
                  </p>
                    <div class="d-flex justify-content-center mt-3 login_container">
                           <button type="button" class="btn btn-dark" onclick ="location='clientregister.php'" style = "background-color:black;">Contact</button>
                      </div>

                     </div>
                   </div>
                 </td>
                 
            <?php endforeach; ?>
            </tbody>
          </table>


       
      </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>