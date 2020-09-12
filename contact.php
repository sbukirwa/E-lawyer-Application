<?php 

session_start();
include("database.php");
 $email = $_SESSION['email'];
 $q = "SELECT  email FROM lawyer WHERE email ='$email' ";
   $do = mysqli_query($con,$q);
   if(mysqli_num_rows($do) > 0){
   $rows = mysqli_fetch_array($do , MYSQLI_ASSOC);
   $email = $rows['email'];
} ?>

<!DOCTYPE html>
    <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
         
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <style type="text/css">
        body.bodyd {
    background: url(images/register.jpg) no-repeat;
    background-size: cover;
    background-position: 0 94px;
}

.card {
 width: 40rem;
 margin-top: 200px;
 margin-left: 350px;
}
.card-body {
  margin-bottom: 5px;
}


      </style>

          <title>ELAWYER CONTACT</title>
          <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-transparent" style="font-family:Times New Roman, Times, serif; font-size:19px;">
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
            <li class="nav-item">
              <a class="nav-link" href="profiles.php">Lawyer Profiles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="services.php">Legal Services</a>
            </li>
             <li class="nav-item">
                      <a class="nav-link" href="comments.php">Forum</a>
                    </li>
            <li class="nav-item ">
              <a class="nav-link" href="signin.php">Lawyer Sign In </a>
            </li>
          </ul>
          </div>
       
                </div>   
              </nav>
</head>

</head>


<body class = "bodyd">
  <div class="card">
    <div class="card-body">
  <form method="post" action="sendEmail.php">
    
  <div class="row justify-content-center">
            <div class="col-md-10 col-md-offset-3" align="center"> 
             <h3>E-Lawyer Contact Form</h3>
             <label> <?php echo  $email ?> </label> 
              <!--   <input name="email" type="email" placeholder="Lawyer Email" class="form-control" style="margin-top: 10px;" required>  -->
                <input name="subject" placeholder="Subject" type="text" class="form-control" style="margin-top: 10px;" required >
                <textarea class ="form-control" type="text" name="message" style="resize:none; margin-top: 10px;" placeholder="Email Body" style="margin-top: 10px" required></textarea>
                <div class="d-flex justify-content-center mt-3 login_container">
                <input type="submit" value="Send" class="btn btn-primary" name="btn_send">
              </div>
             </div> 
          </div> 
  </form>
</div>
</div>
</body>
</html>



















































<!-- <?php
  //include PHPMailerAutoload.php
  require_once 'mailer/class.phpmailer.php';

  //create an instance of PHPMailer
  $mail = new PHPMailer(true);

  //set a host
  $mail->Host = "smtp.gmail.com";

  //enable SMTP
  $mail->isSMTP();

  //set authentication to true
  $mail->SMTPAuth = true;

  //set login details for gmail account
  $mail->Username = "soniabukirwa@gmail.com";
  $mail->Password = "SonyApril-2baby";

  //set type of protection
  $mail->SMTPSecure = "ssl"; //or we can use TLS

  //set a port
  $mail->Port = 465; //or 587 if TLS

  //set subject
  $mail->Subject = "Test email";
 
  //set body
  $mail->Body = "this is our body...";

  //set who is sending an email
  $mail->SetFrom('soniabukirwa@gmail.com','Sonia');

  //set where we are sending email (recipients)
  $mail->AddAddress('soniabukirwa@yahoo.com');

  //send an email
  if ($mail->send())
    echo "mail is sent";
else
    echo "something wrong";

?> -->