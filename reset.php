<?php
session_start();

ob_start();
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
            <h3 class="text-size-30 margin-bottom-40 text-center"><b></b></h3>
            <form class="customform text-white" method="post" action="reset.php" enctype="multipart/form-data">
              
					
                              
              <div class="line">       
                <div class="s-12">
              <input name="phone"  placeholder="Enter Registered Mobile Number" title="Your Mobile Number" type="number" required />
                </div>
				 <div class="s-12">
              <?php
					if(isset($_POST['otp']))
					{
						require('connect.php');
						
					$phone=$_POST['phone'];
					   $verify = "select * from userdata where phone='$phone'";
					   $exec=$conn->query($verify);
					   
					   if($exec->num_rows>0)
					   {
						   
						   $otp=mt_rand(100000,999999);
						   $_SESSION['otp']=$otp;
						   $_SESSION['mob']=$phone;
						   $msg="Your%20OTP%20is%20".$otp;
						    $url="http://203.129.203.243/blank/sms/user/urlsms.php?username=kietgzb&pass=kiet@123&senderid=KIETGZ&dest_mobileno=$phone&message=$msg&response=Y";
						 
						 $c=curl_init();
						   curl_setopt($c,CURLOPT_RETURNTRANSFER,1);
						   curl_setopt($c,CURLOPT_URL,$url);
						   $contents=curl_exec($c);
						   curl_close($c);
						   
						   date_default_timezone_set('Asia/Kolkata');
							$date=date("Y-M-d");
							$time = date('h:i:s a', time());
													   
													   
							$insert="Insert into otp values('','$phone','$otp','$date','$time')";
							$result=$conn->query($insert);
						   
						  $conn->close(); 
						   
						   
						   
						   
						   echo '<p style="color:red; font-size:16px; background-color:green; text-align:center;">OTP Sent Successfully</p><br>';
						   ob_end_flush();
						   
					   }
					
					   else
					   {
						   $conn->close();
						   echo '<p style="color:red; font-size:16px; background-color:red; text-align:center;">Incorrect Mobile Number</p><br>';
						   
						   
					   }
					
					
					
					}
					
					?>
                </div>
				
				
				
				 <div class="s-12"><button class="button border-radius  background-primary" name="otp" type="submit">Get OTP</button></div>
				 </form>
				 <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    &nbsp;
                  </div>
				  </div>
				  </div>
				 <form class="customform text-white" method="post" action="reset.php" enctype="multipart/form-data">
                <div class="s-12">
				
                  <input name="otp_ver"  placeholder="Enter OTP" title="OTP" type="number" required />
                </div>
				 <div class="s-12">
				 <?php
					if(isset($_POST['verify']))
					{
						
						
						if($_SESSION['otp']==$_POST['otp_ver'])
						{
							$_SESSION['verify']=true;
							header('location:reset_pass.php');
							ob_end_flush();
						}
						
						
					
		                 else
					   {
						   
						   echo '<p style="color:red; font-size:16px; background-color:red; text-align:center;">Invalid OTP</p><br>';
						   
						   
					   }
					
					
					
					}
					
					?>
				 
				 </div>
				
			  
				
				
                <div class="s-12"><button class="button border-radius  background-primary" name="verify" type="submit">Verify</button></div>
				
              </div>    
            </form>
          </div>           
        </section>
      </article>
    </main>
    
    <?php
	
	include('footer.php');
	
	?>