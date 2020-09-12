<?php
session_start();
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>

div.parent{ 
         height: 200px; 
         width: 400px;  
         margin: 100px auto; 
         margin-left: 500px;
         margin-top: 200px;
         } 
body.bodyd {
    background: url(images/imgg.jpg) no-repeat;
    background-size: cover;
    background-position: 0 94px;
}
.user_card {
			height: 280px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #1286f300;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.9), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
			-moz-box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.7), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

    }
    .form_container {
			margin-top: 40px;
		}
		.login_btn {
			width: 50%;
      border: none;
			background: black !important;
      cursor: pointer;
			color: white !important;
       padding: 8px;
      border-radius: 4px;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #000000 !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

      .profiles-image {
        background-image: url("images/imgg.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        margin-top: 94px;
      }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ELAWYER</title>
    <nav class="navbar fixed-top navbar-expand-sm navbar-light  bg-transparent" style="font-family:Times New Roman, Times, serif;  font-size:19px;">

        <a class="navbar-brand" href="#"><img class="logo" src="logos.jpg" style="height:90px; width:100px;; "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class = "container">
              <ul class="nav navbar-nav justify-content-end" >
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
                      <a class="nav-link" href="comments.php">Public Forum</a>
                    </li>
            <li class="nav-item active">
              <a class="nav-link" href="signin.php">Lawyer Sign In <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        </div>
      </nav>

</head>
<body class = "bodyd">
  <div class = "parent">
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
          <div class="user_card">
                  <div class="d-flex justify-content-center"> 

                  </div>
            

              
             <div class="d-flex justify-content-center form_container">
                 <form  method="POST" action="processtwo.php">
                   

                      <div class="input-group mb-3">
                           <div class="input-group-append">
                               <span class="input-group-text"><i class="fas fa-user"></i></span>
                           </div>
                          <input type="email" name="email" class="form-control input_user" value="" placeholder="Email" required>
                      </div>
                      <div class="input-group mb-2">
                          <div class="input-group-append">
                               <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                           <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
                      </div>
                       
                    
                      <div class="d-flex justify-content-center mt-3 login_container">
                            <button class="login_btn" name="sign" type="submit">Login</button>
                      </div>

                </form>
               </div>

              <div class="mt-4">
                  <div class="d-flex justify-content-center links">
                       <p style = "color: white;">Don't have an account? </p><a href="index.php" class="ml-2">Sign Up</a>
                  </div>
              </div>

           


          
  </div>
    </div> 
</div>
 </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


