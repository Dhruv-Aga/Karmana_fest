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
    <title>Our Team</title>
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
           Our Team
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        
      </article>
      
      
      <!-- Section 4 -->
    <section class="section-top-padding background-white">
       
        <div class="line">
          <div class="margin2x">
            <div class="s-12 m-6 l-4 margin-bottom-60">
              
              <div align="center">
               <img  src="img/hod.png" style="height:60%; width:60%; border-radius:15px;"><br>
			   <h3 style="text-align:center;" class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Dr. Ajay Kumar Shrivastava</h3>
                <p style="text-align:center; font-weight:bold;">Event Head (HOD)<br>9873657877</p>
                          
              </div>
            </div>
           
            <div class="s-12 m-6 l-4 margin-bottom-60">
              
              <div align="center">
               <img  src="img/amit_sir.jpg" style="height:41%; width:41%; border-radius:15px;"><br>
			   <h3 style="text-align:center; padding-top:6px;" class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Prof. Amit Goyal</h3>
                <p style="text-align:center; font-weight:bold;">Event Coordinator<br>9899979748</p>
                          
              </div>
            </div>
			<div class="s-12 m-6 l-4 margin-bottom-60">
              
              <div align="center">
               <img src="img/team.png" style="height:60%; width:60%; border-radius:15px;"><br>
			   <h3 style="text-align:center;" class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Other Team Members</h3>
                <p style="text-align:center; font-weight:bold;">Download List<br><a href="img/directory.pdf">Click Here</a></p>
                          
              </div>
            </div>
            
          </div>
        </div>
		
		<div class="line">
          <div class="margin2x">
            <div class="s-12 m-6 l-4 margin-bottom-60">
              
              <div align="center">
               <img  src="img/rishabh.jpg" style="height:60%; border-radius:15px; width:60%;"><br>
			   <h3 style="text-align:center;" class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Rishabh Gupta</h3>
                <p style="text-align:center; font-weight:bold;">Student Apex Coordinator<br>9718903760</p>
                          
              </div>
            </div>
           
            <div class="s-12 m-6 l-4 margin-bottom-60">
              
              <div align="center">
               <img  src="img/kartik.jpg" style="height:60%; width:60%; border-radius:15px;"><br>
			   <h3 style="text-align:center;" class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Kartik Deep Sagar</h3>
                <p style="text-align:center; font-weight:bold;">Student Apex Coordinator<br>7290981489</p>
                          
              </div>
            </div>
			<div class="s-12 m-6 l-4 margin-bottom-60">
              
              <div align="center">
               <img src="img/Apoorv.jpg" style="height:60%; width:60%; border-radius:15px;"><br>
			   <h3 style="text-align:center;" class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Apoorv Jain</h3>
                <p style="text-align:center; font-weight:bold;">Student Apex Coordinator<br>9027381740</p>
                          
              </div>
            </div>
            
          </div>
        </div>
		
		
			
      </section>
    </main>
    <?php
	
	include('footer.php');
	
	?>
    