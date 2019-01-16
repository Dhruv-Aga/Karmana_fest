<?php
session_start();
ob_start();
if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
	header('location:logged.php');
	
}
if(isset($_SESSION['verify'])&&isset($_SESSION['mob']))
{
	
}
else
{
	session_destroy();
	header('location:reset.php');
	
}


?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Reset</title>
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
<script type="text/javascript" src="js/pass_reset.js"></script>	
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
           Reset Password
          </h1>
         
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">      
          <div class="line">
            <i class="icon-lock text-primary text-size-40"></i>
            
          </div>                                                                                                    
        </section>
        

        <!-- Section 3 -->
        <section class="section background-dark">
          <div class="s-12 m-12 l-4 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Reset</b></h3>
            <form class="customform text-white" onsubmit="return check_pass();" action="reset_pass.php" method="post" enctype="multipart/form-data">
              
					
                              
              <div class="line">       
                <div class="s-12">
              <input name="pass" id="pass"  placeholder="New Password" type="password" required />
                </div>
                <div class="s-12">
                  <input name="c_pass" id="c_pass"  placeholder="Confirm Password" type="password" required />
                </div>
				
			    <div class="s-12">
                   <?php
					if(isset($_POST['change']))
					{
						require('connect.php');
						require('secure_pass.php');	
						$phone=$_SESSION['mob'];
					   $pass=encrypt(mysqli_real_escape_string($conn,$_POST['pass']));
					
					   $verify = "update userdata set password='$pass' where phone='$phone'";
					   
					   
					   if($conn->query($verify)==true)
					   {
						   session_destroy();
						  echo '<p style="color:red; font-size:16px; background-color:green; text-align:center;">Password Change Successfull</p><br>';
						   $conn->close();
						   header('refresh:4; url=login.php');
						   
					   }
					
					   else
					   {
						   session_destroy();
						   $conn->close();
						   echo '<p style="color:red; font-size:16px; background-color:red; text-align:center;">Something Went Wrong</p><br>';
						   
						   
					   }
					
					
					
					}
					
					?>
                  </div>
				  
				
				
                <div class="s-12"><button class="button border-radius  background-primary" name="change" type="submit">Change</button></div>
			
              </div>    
            </form>
          </div>           
        </section>
      </article>
    </main>
    
    <?php
	
	include('footer.php');
	
	?>