<?php

session_start();

if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
	require('connect.php');
	$name=$_SESSION['fname'];
	$id=$_SESSION['reg_id'];
	$sql="select phone from userdata where reg_id='$id'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	$_SESSION['phone']=$row['phone'];
	
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
    <title>Karmana 2019</title>
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
	
	<style>
	
	@keyframes blink {
    0% {
        opacity: 1;
    }
	 25% {
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
	 75% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
.blinking {
    animation: blink 1s;
    animation-iteration-count: infinite;
}
	
	
	</style>
	
	
  </head>

  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/virtua-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
   <?php
   include('header_logged.php');
   ?>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Header -->
      <header class="section-top-padding background-image text-center" style="background-image:url(img/img-05.jpg)">
       
		<img class="margin-top-20 center" src="img/karm_ana.png" style="height:70%; width:70%;" alt="">
        <p class="text-white"></p>
        
        <!-- Image -->
        <img class="margin-top-20 center blinking" src="img/app.png" alt="">
        
        <!-- dark full width arrow object -->
        <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
      </header>
      
      <!-- Section 1 -->
    
      
      <!-- Section 2 -->
      <section class="section-top-padding background-white">
        <div class="line text-center">
          <i class="icon-sli-heart text-primary text-size-40"></i>
          <h2 class="text-dark text-size-50 text-m-size-40">Karmana <b>Events</b></h2>
          <hr class="break background-primary break-small break-center margin-bottom-50">
        </div>
        <div class="line">
          <div class="margin2x">
            <div class="s-12 m-6 l-4 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-screen-desktop text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Project Competition</h3>
                <p style="color:black;">Registration Fee : Rs 600/- Per Team</p>
				 <a class="text-more-info text-primary" href="project.php">Click here to Register</a> 
                        
              </div>
            </div>
            <div class="s-12 m-6 l-4 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-game-controller text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Lan Gaming</h3>
               <p style="color:black;">Registration Fee : Rs 100/- Per Person</p>
			   <a class="text-more-info text-primary" href="lan.php">Click here to Register</a> 
                             
              </div>
            </div>
            <div class="s-12 m-6 l-4 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-globe text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Online Quiz</h3>
                <p style="color:black;">Registration Fee : Rs 100/- Per Team</p>
				  <a class="text-more-info text-primary" href="quiz.php">Click here to Register</a> 
                         
              </div>
            </div>
           
          </div>
        </div>
      </section>
      
      <!-- Section 3 -->
      
      
      <!-- Section 4 -->
      
      
      <!-- Section 5 -->
      
      
      <!-- Section 7 -->
     
      
    </main>
    
 <?php
	
	include('footer_logged.php');
	
	?>
	<?php
	
	$conn->close();
	
	?>