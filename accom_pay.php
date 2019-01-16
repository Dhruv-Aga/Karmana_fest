<?php
session_start();
if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
	$name=$_SESSION['fname'];
	$phone=$_SESSION['phone'];
	
    if(isset($_POST['pay']))
	{
		
		
		require('connect.php');
		$mem=$_POST['members'];
		$days=$_POST['days'];
		$amt=$mem*500*$days;
		$status="Unpaid";
		$id=$_SESSION['reg_id'];
		date_default_timezone_set('Asia/Kolkata');
$date=date("Y-M-d");
		$verify="Select * from accomo where reg_id='$id'";
		
		$check=$conn->query($verify);
		
		if($check->num_rows>0)
		{
			
		header('location:logged.php');	
			
		}
		
		
		
		$sql="Insert into accomo values('','$id','$mem','$days','$amt','$status','$date')";
		
	}
	else
	{
		header('location:logged.php');  
	
	}
	
	


	
	
}
else
{
    session_destroy();  
	header('location:login.php');  
}
?>


 <!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accomodation</title>
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
if($conn->query($sql)==true)
{
	$id=$_SESSION['reg_id'];
	require('connect.php');
	 date_default_timezone_set('Asia/Kolkata');
								$date=date("Y-M-d");
								$time = date('h:i:s a', time());
						   
						   $task="Accomodation Registration Successfull";
						   $log="Insert into log values('$id','$task','$date','$time')";
						   $log_query=$conn->query($log);
	echo "Registration Successfull<br>";
	echo "Please wait Redirecting to Home Page";
	$conn->close();
	 header("refresh:3; url=logged.php");
}
else
{
	echo "Registration failed";
	$conn->close();
	 header("refresh:3; url=logged.php");
}


?>



          </h1>
         
          
          <!-- white full width arrow object -->
          
      </article>
    </main>
    
   

  
 


  <?php
  echo "Please wait Redirecting to Home Page";

  header("refresh:5; url=logged.php");
  
  ?>




