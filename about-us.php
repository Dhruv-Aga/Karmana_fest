<?php
session_start();


if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
	header('location:logged.php');
	
}


?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Karmana</title>
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
    <?php
   include('header.php');
   ?>
    
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/img-05.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            About Karmana
          </h1>
         
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section background-white">
          <div class="line text-center">
            <i class="icon-sli-heart text-primary text-size-40"></i>
            
            <hr class="break background-primary break-small break-center margin-bottom-50">
          </div>
          <div class="line">
            <div style="color:black;" class="margin2x">
			The project competition plays an important role in motivating the future MCA graduates to take up more challenging and competitive projects. Moreover, for the sake of branding the KIET Group of Institutions at the national level, we would like to organise a <STRONG><I>National Level Project Competition</I></STRONG>, <STRONG><I>LAN Gaming</I></STRONG> contest and <STRONG><I>Online Quiz</I></STRONG>  for <STRONG><I>MCA/BCA/B.Sc.(CS/IT)</I></STRONG>
              
            </div>    
          </div>  
        </section>      
      </article>
    </main>
    
   <?php
	
	include('footer.php');
	
	?>