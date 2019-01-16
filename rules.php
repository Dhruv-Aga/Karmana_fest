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
    <title>Rules</title>
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
            Rules
          </h1>
         
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section background-white">
          <div class="line text-center" id="project">
            <i class="icon-sli-screen-desktop text-primary text-size-40"></i>
            <h2 class="text-dark text-size-50 text-m-size-40">Project Competition <b>Rules</b></h2>
            <hr class="break background-primary break-small break-center margin-bottom-50">
          </div>
          <div class="line">
            <div class="margin2x">
              <div class="m-12 l-6 margin-m-bottom-30">
                <img src="img/project.jpg" style="border-radius:10px;" alt="">
              </div>          
              <div class="m-12 l-6" style="color:black;">
              
                <p class="animated-element slow margin-bottom-30" style="color:black;" >
				
				<b>1.</b> &nbsp; &nbsp;For Project competition , there will be 4 categories namely 
				<ul style="margin-top:-30px;" type="disc">
				<li>Web Designing</li> 
				<li>Artificial Intelligence(AI)</li>
				<li>Internet Of Things(IoT)</li>
				<li>Android Apps</li>
				</ul><br>
              <b>2.</b>&nbsp; &nbsp;Team participation per project is up to 4 students (max.)<br><br>
             <b>3.</b>&nbsp; &nbsp;	The shortlisted projects will be presented before the panel of judges.<br><br>
              <b>4.</b>&nbsp; &nbsp;	Each participating team will be allotted total time duration of 10 minutes for their presentation.<br><br>
			  <b>5.</b>&nbsp; &nbsp;The project can be presented by any member of the team.
			  
                </p>
                              
              </div>
            </div>    
          </div>  
		  
		  
		   <div style="margin-top:80px;" class="line text-center" id="lan">
            <i class="icon-sli-game-controller text-primary text-size-40"></i>
            <h2 class="text-dark text-size-50 text-m-size-40">Lan Gaming <b>Rules</b></h2>
            <hr class="break background-primary break-small break-center margin-bottom-50">
          </div>
          <div class="line">
            <div class="margin2x">
              <div class="m-12 l-6 margin-m-bottom-30">
                <img src="img/lan.jpg" style="border-radius:10px;" alt="">
              </div>          
              <div class="m-12 l-6">
                
                <p class="animated-element slow margin-bottom-30" style="color:black;">
				
				<b>1.</b>&nbsp; &nbsp;	Student ID card is compulsory for every player.<br>
				<b>2.</b>&nbsp; &nbsp;Participants shall bring their own head phones.<br>
				<b>3.</b>&nbsp; &nbsp;	The decision of the referee will be final and binding, failing which the team may be treated disqualified.<br>
				<b>4.</b>&nbsp; &nbsp;	Only Individual is allowed to play (No team).<br>
				<b>5.</b>&nbsp; &nbsp;Multiple entries from one college are allowed.<br>
				<b>6.</b>&nbsp; &nbsp;	No foul language is allowed while playing.<br>
				<b>7.</b>&nbsp; &nbsp;	Participants shall obey the event coordinator all times. His decision is final.<br>
				<b>8.</b>&nbsp; &nbsp;Use of any unfair means whatsoever shall result in disqualification.<br>
				<b>9.</b>&nbsp; &nbsp;	The participants should not mishandle the PCs and consoles. Any damage caused to them will be borne by you.<br>
				<b>10.</b>&nbsp; &nbsp;	The server machine crashes/freezes/etc. causing the match server to stop responding Solution An administrator will restart the server, stop the tournament clock, and play will continue from the point of disruption.<br>
				<b>11.</b>&nbsp; &nbsp;	The Administrators reserve the right to modify the rules as needed.<br>
                </p>
                              
               
              </div>
            </div>    
          </div>  
		  
		  
		  
		  
		  <div style="margin-top:80px;" class="line text-center" id="quiz">
            <i class="icon-sli-globe text-primary text-size-40"></i>
            <h2 class="text-dark text-size-50 text-m-size-40">Online Quiz <b>Rules</b></h2>
            <hr class="break background-primary break-small break-center margin-bottom-50">
          </div>
          <div class="line">
            <div class="margin2x">
              <div class="m-12 l-6 margin-m-bottom-30">
                <img src="img/quiz.jpg" style="border-radius:10px;" alt="">
              </div>          
              <div class="m-12 l-6">
                
                <p style="color:black;" class="animated-element slow margin-bottom-30">
				<b>1.</b>&nbsp; &nbsp;	Two member will be allowed in one team.<br>
				<b>2.</b>&nbsp; &nbsp;	Quiz will contain the question from C Programming, Java (Core), Data Structure, and OOP’s Concepts.<br>
				<b>3.</b>&nbsp; &nbsp;	Quiz test will be conducted on Moodle Platform. <br>
				<b>4.</b>&nbsp; &nbsp;	Quiz will contain 30 questions within 30 minutes. Question will be MCQ.<br>
				<b>5.</b>&nbsp; &nbsp;	No Internet facility will be allowed. Any use of unfair means may lead to disqualification. <br>
				<b>6.</b>&nbsp; &nbsp;	Teams may not seek hints and/or ask for leads during the contest. <br>
				<b>7.</b>&nbsp; &nbsp;	The Contest Committee will tally the scores for each team and publish a complete list. <br>
				<b>8.</b>&nbsp; &nbsp;	First 3 teams with the highest scores will be declared as winners.<br>
				<b>9.</b>&nbsp; &nbsp;	The Contest Committee's decision in all matters is final.<br>
                </p>
                              
                
              </div>
            </div>    
          </div>  



       

		  
		  
        </section>      
		 
      </article>
    </main>
    
   <?php
	
	include('footer.php');
	
	?>