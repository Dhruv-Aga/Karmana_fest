<?php
session_start();
if(isset($_SESSION['check'])&&isset($_SESSION['verify']))
{
	
unset($_SESSION['otp']);
unset($_SESSION['check']);
require('connect.php');
require('secure_pass.php');	
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$course=$_SESSION['course'];
$gender=$_SESSION['gender'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$state=$_SESSION['state'];
$college=$_SESSION['college'];


$pass=encrypt($_SESSION['pass']);

date_default_timezone_set('Asia/Kolkata');
$date=date("Y-M-d");
$time = date('h:i:s a', time());


$select="select * from userdata where email='$email' && phone='$phone'";
$exec=$conn->query($select);

if($exec->num_rows>0)
{
	header('location:login.php');
	
	
}





$insert="Insert into userdata values('','$fname','$lname','$course','$gender','$email','$phone','$state','$college','$pass','$date','$time')";


}
else
{
	
	echo "error";
	header('location:register.php');
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Successfull</title>
	<link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
  </head>

  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
   
    
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
       <header class="section background-image text-center" style="background-image:url(img/img-05.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
           <?php
		   
		   if($conn->query($insert)==true)
{
	$conn->close();
	echo "Registration Successfull<br><br>";
	echo "Please wait Redirecting to Login Page";
	session_destroy();
	header("refresh:3; url=login.php");
	
}
else
{
	echo "Registration failed";
	$conn->close();
	header("refresh:3; url=register.php");
}

		   
		   
		   ?>
          </h1>
         
          
          <!-- white full width arrow object -->
          
      </article>
    </main>
    
   
