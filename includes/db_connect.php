
<?php
session_start();
require './tadphp/vendor/autoload.php';

// initializing variables
$FName = "";
$OName = "";
$CompName ="";
$adEmail ="";
$accode ="";



// -----------Innitialisation for the user-------------------------------


  // $acno="";
  $gender="";
  $natility="";
  $jobtitle="";
  $dob="";
  $cadNo="";
  $homadd ="";
  $UName = "";
  $emailNo = "";
  $ofTel ="";
  $prev ="";
  $doe ="";
  $mobNo ="";
  // $uPic ="";
  // $ufingP="";

// -----------Innitialize variables to add department----------------
$dptname ="";
$dpthead ="";
$dptdesc ="";

  // -------general code----------------------------
  $errors = array(); 


// connect to the database

$db = new mysqli('localhost','root', '', 'smartdbTNA');

// REGISTER USER
if (isset($_POST['reg_admin'])) {
  // receive all input values from the form

    $FName = mysqli_real_escape_string($db, $_POST['fname']);
    $OName = mysqli_real_escape_string($db,$_POST['oname']);
    $CompName = mysqli_real_escape_string($db,$_POST['cname']);
    $adEmail = mysqli_real_escape_string($db,$_POST['ademail']);
    $accode = mysqli_real_escape_string($db,$_POST['zipcode']);
    $password_1 = mysqli_real_escape_string($db,$_POST['adpass']);
    $password_2= mysqli_real_escape_string($db, $_POST['repeat-pass']);

    $date = date('Y-m-d G-i-s'); //For capturing the date n time the post was made


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($FName)) { array_push($errors, "First name required"); }
  if (empty($OName)) { array_push($errors, "Other name required"); }
  if (empty($CompName)) { array_push($errors, "Company name required"); }
  if (empty($adEmail)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM adminuert WHERE admin_fname='$FName' OR admin_email='$adEmail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $admin = mysqli_fetch_assoc($result);
  
  if ($admin) { // if user exists
    if ($admin['admin_email'] === $adEmail) {
      array_push($errors, "Email already exists");
    }

    // if ($admin['email'] === $email) {
    //   array_push($errors, "email already exists");
    // }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO adminuert (id_admin, admin_fname, admin_oname, comp_name, admin_email, admin_pass,  zip_code, registered) 
      VALUES('$id_admin', '$FName','$OName', '$CompName', '$adEmail', '$password_1', '$accode',  '$date') ";
  	mysqli_query($db, $query);
  	$_SESSION['admin_email'] = $admin;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

?>

 <!---------------------------------- TO LOGIN USER  --------------------------->
 
 <?php
if (isset($_POST['login_user'])) {
  $userEmail = mysqli_real_escape_string($db, $_POST['useremail']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($userEmail)) {
  	array_push($errors, "UserEmail is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	// $password = md5($password);
  	$query = "SELECT * FROM adminuert WHERE admin_email='$userEmail' AND admin_pass='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin_email'] = $userEmail;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>



<!-- --------------Adding Users----------------- -->

<?php

// REGISTER USER
if (isset($_POST['addtheuser'])) {


  // receive all input values from the form

  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $natility = mysqli_real_escape_string($db,$_POST['natility']);
  $jobtitle = mysqli_real_escape_string($db,$_POST['jobtitle']);
  $dob = mysqli_real_escape_string($db,$_POST['dob']);
  $cadNo = mysqli_real_escape_string($db,$_POST['cadNo']);
  $homadd  = mysqli_real_escape_string($db,$_POST['homadd']);
  $UName= mysqli_real_escape_string($db, $_POST['UName']);
  $emailNo= mysqli_real_escape_string($db, $_POST['emailNo']);
  $ofTel= mysqli_real_escape_string($db, $_POST['ofTel']);
  $prev= mysqli_real_escape_string($db, $_POST['prev']);
  $doe= mysqli_real_escape_string($db, $_POST['doe']);
  $mobNo= mysqli_real_escape_string($db, $_POST['mobNo']);
  // $uPic= mysqli_real_escape_string($db, $_POST['uPic']);
  // $ufingP= mysqli_real_escape_string($db, $_POST['ufingP']);

    $date = date('Y-m-d G-i-s'); //For capturing the date n time the post was made

    // ||$natility || $jobtitle|| $dob||$cadNo||$homadd||$UName||$emailNo||$ofTel||$prev||$doe||$mobNo
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($jobtitle)) { array_push($errors, " All Fields required"); }
  
  



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM theuser WHERE emailno='$emailNo' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $addinUser = mysqli_fetch_assoc($result);
  
  if ($addinUser) { // if user exists
    if ($addinUser['emailno'] === $emailNo) {
      array_push($errors, "Email already exists");
    }

    // if ($admin['email'] === $email) {
    //   array_push($errors, "email already exists");
    // }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO theuser (ac_no, id_gender, nationality, jobtitle, dob, cad_no,  home_add, uname,emailno,offtel,id_priv,doemp,mobno,dateadded) 
      VALUES('$acno', '$gender','$natility', '$jobtitle', '$dob ', '$cadNo', '$homadd','$UName','$emailNo','$ofTel','$prev','$doe','$mobNo',  '$date') ";
  	mysqli_query($db, $query);
  	$_SESSION['emailno'] = $addinUser;
  	$_SESSION['success'] = "User added ";
  	header('location: user.php');
  }



}


?>