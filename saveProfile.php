<?php
//session_start();

include("database.php");

$email = $_SESSION['email'];
$q = "SELECT lawid FROM lawyer WHERE email ='$email' ";
  $do = mysqli_query($con,$q);
  if(mysqli_num_rows($do) > 0){
  $rows = mysqli_fetch_array($do , MYSQLI_ASSOC);
  $lawid = $rows['lawid'];
}

$msg = "";
$css_class = "";

if(isset($_POST['save-user'])) {
$speciality = $_POST['speciality'];
$location = $_POST['location'];
$dateofgrad = $_POST['dateofgrad'];
$profileImageName = time() . '_' . $_FILES['profileImage']['name'];

$target = 'C:/xampp/htdocs/law/upload/' . $profileImageName;
if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
	$sql = "INSERT INTO profile ( profile_image, speciality,location,dateofgrad, lawid) VALUES ('$profileImageName','$speciality','$location','$dateofgrad','$lawid')";
	if (mysqli_query($conn, $sql)) {
		$msg = "Profile uploaded and saved";
		$css_class = "alert-success";
	} else {
		$msg = "Upload Failure";
	$css_class = "alert-danger";

	}
	

}else {
	$msg = "Failed to upload";
	$css_class = "alert-danger";
}




}


