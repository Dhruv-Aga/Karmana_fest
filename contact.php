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
    <title>Contact Us</title>
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
            Contact Us
          </h1>
          
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">      
          <div class="line">
           
           
          </div>                                                                                                    
        </section>
        
        <!-- Section 2 -->
        <section class="full-width background-grey">
       
        <div class="line">
          <div class="margin2x">
            <div class="s-12 m-6 l-4 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-home text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">College Address</h3>
                <p style="color:black;">KIET GROUP OF INSTITUTIONS<br>

Ghaziabad-Meerut Road (NH - 58)<br> Muradnagar-201206<br>
Distt. Ghaziabad</p>
				 
                        
              </div>
            </div>
            <div class="s-12 m-6 l-4 margin-bottom-60">
              <div  class="float-left">
                <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Email</h3>
               <p style="color:black;">karmana@kiet.edu</p>
			    
                             
              </div>
            </div>
            <div class="s-12 m-6 l-4 margin-bottom-60">
              <div class="float-left">
                <i class="icon-sli-phone text-primary text-size-40 text-line-height-1"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Registration Coordinator</h3>
                <p style="color:black;">Dr. Shashank Bhardwaj<br>9897644693</p>
				
                         
              </div>
            </div>
           
          </div>
        </div>
      </section>
        
        
      </article>
    </main>
	
    <?php
	
	include('footer.php');
	
	?>
	