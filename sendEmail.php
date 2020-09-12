<?php

session_start();
include("database.php");
$email = $_SESSION['email'];
$q = "SELECT  email FROM lawyer WHERE email ='$email' ";
  $do = mysqli_query($con,$q);
  if(mysqli_num_rows($do) > 0){
  $rows = mysqli_fetch_array($do , MYSQLI_ASSOC);
  $email = $rows['email'];
}
  //require_once 'VerifyEmail.class.php';
  require_once 'mailer/class.phpmailer.php'; 
  // creates object
  $mail = new PHPMailer(true); 
  if(isset($_POST['btn_send']))
  {
   $email      = $_SESSION['email'];
   $subject    = strip_tags($_POST['subject']);
   $text_message    = "Hello";      
   $message  = strip_tags($_POST['message']);
 try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port        = '465';             
    $mail->AddAddress($email);
    $mail->Username   ="elawyer19@gmail.com";  
    $mail->Password   ="El@wy3r2019";            
    $mail->SetFrom('elawyer19@gmail.com','E LAWYER');
    $mail->AddReplyTo("elawyer19@gmail.com","E LAWYER");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
    if($mail->Send())
    {
      echo "<script> alert('Hi Your mail successfully sent to ".$email."'); </script>";
      echo("<script>location.href = 'profiles.php'</script>");
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  } 
  
?>