<?php
session_start();
ob_start();
if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
	header('location:logged.php');
	
}

if(isset($_SESSION['email'])&&isset($_SESSION['id'])&&$_SESSION['email']=="karmana@admin.kiet")
{
	
	
	header('location:reports.php');
}


?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
	
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
           Login Here
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
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Admin Login</b></h3>
            <form class="customform text-white" method="post" action="admin.php" autocomplete="off" enctype="multipart/form-data">
              
					
                              
              <div class="line">       
                <div class="s-12">
              <input name="email"  placeholder="E-mail" title="Your Email" type="email" required />
                </div>
                <div class="s-12">
                  <input name="pass"  placeholder="Password" title="Your Password" type="password" required />
                </div>
				<div class="s-12">
				<?php
					if(isset($_POST['login']))
					{
						require('connect.php');
						require('secure_pass.php');	
						$email=mysqli_real_escape_string($conn,$_POST['email']);
					    $pass=encrypt(mysqli_real_escape_string($conn,$_POST['pass']));
					
					    $verify = "select * from admin where email='$email' && password='$pass'";
					   $exec=$conn->query($verify);
					   
					   if($exec->num_rows>0)
					   {
						      
						   
						   $row=$exec->fetch_assoc();
						   $_SESSION['id']=$row['id'];
						   $_SESSION['email']=$row['email'];
						   $id=$row['id'];
						   
						   date_default_timezone_set('Asia/Kolkata');
								$date=date("Y-M-d");
								$time = date('h:i:s a', time());
						   
						   $task="Admin Logged In";
						   $log="Insert into log values('$id','$task','$date','$time')";
						   $log_query=$conn->query($log);
						   
						   
						   $conn->close();
						   header('location:reports.php');
						   ob_end_flush();
					   }
					
					   else
					   {
						   $conn->close();
						   echo '<p style="color:red; font-size:16px; background-color:red; text-align:center;">Incorrect Email or Password</p><br>';
						   
						   
					   }
					
					
					
					}
					
					?>
					</div>
			  
				
				
                <div class="s-12"><button class="button border-radius  background-primary" name="login" type="submit">Login</button></div>
				
              </div>    
            </form>
          </div>           
        </section>
      </article>
    </main>
    
    <?php
	
	include('footer.php');
	
	?>