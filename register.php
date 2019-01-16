<?php
session_start();
if(isset($_SESSION['fname'])&&isset($_SESSION['reg_id']))
{
	header('location:logged.php');
	
}

$_SESSION['check']=1;
require('connect.php');
$course = "select course from course";
$result_course=$conn->query($course);
$state="select name from state"; 
$result_state=$conn->query($state);
 
?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
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
	<script type="text/javascript" src="js/validate.js"></script>
	<script type="text/javascript" src="js/enable_hidden.js"></script>
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
           Register Here
          </h1>
         
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">      
          <div class="line">
            
            <h2 class="text-dark text-size-50 text-m-size-40"><i class="icon-pen text-primary text-size-40 text-line-height-1"></i>&nbsp;&nbsp;Please fill the form Carefully</h2>
          </div>                                                                                                    
        </section>
        

        <!-- Section 3 -->
        <section class="section background-dark">
          <div class="s-12 m-12 l-4 center">
            <h3 class="text-size-30 margin-bottom-40 text-center"><b>Registration Form</b></h3>
            <form class="customform text-white" method="post" onsubmit="return validate();" action="userdata.php" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input id="first_name" name="first_name"  placeholder="First name" title="Your First Name" type="text" required />
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input id="last_name" name="last_name"  placeholder="Last name" title="Your Last name" type="text" required />
                  </div>
                </div>
              </div>   
					<div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
				  
                    <select name="course" id="course"  title="Select Course" >
					<option value="null"  disabled="disabled" selected="selected">Select Course</option>
                                    
                                <?php
								while ($get_course = $result_course->fetch_assoc())
								  {
								   echo "<option>".$get_course['course']."</option>";
								  }
                                    
								
								?>
					
					</select>
                  </div>
                  <div class="s-12 m-12 l-6">
                     <select id="gender"  name="gender" title="Select Gender" >
					<option value="null"  disabled="disabled" selected="selected">Select Gender</option>
					<option>Male</option>
					<option>Female</option>
					</select>
                  </div>
                </div>
              </div>    

				 <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input id="email" name="email"  placeholder="E-mail" title="Your Email" type="email" required />
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input id="phone" name="phone"  placeholder="Phone number" title="Your Phone Number" type="number" required />
                  </div>
                </div>
              </div>  
                              
              <div class="line">       
                <div class="s-12">
                 <select name="state" id="state" title="Select State" >
					<option value="null"  disabled="disabled" selected="selected">Select State</option>
                                   
								    <?php
								while ($get_state = $result_state->fetch_assoc())
								  {
								   echo "<option>".$get_state['name']."</option>";
								  }
                                    
								
								?>
                                    
					</select>
                </div>
                <div class="s-12">
                 <select name="college" id="college" onchange="show();"  title="Select College" >
					<option value="null"  disabled="disabled" selected="selected">Select College</option>
                                    
                                </select>
					</select>
                </div>
				
				 <div class="s-12" id="others_col" hidden>
                 <input id="others" max="200" disabled name="college"  placeholder="Enter College Name" title="Your College Name" type="text" required />
                </div>
				
				
				<div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input id="pass" name="pass"  placeholder="Password"  type="password" required />
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input id="c_pass" name="c_pass"  placeholder="Confirm Password" type="password" required />
                  </div>
                </div>
              </div>   
			   <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input onclick="show_password();" type="checkbox">Show Password
                  </div>
				  </div>
				  </div>
				  <div class="s-12" id="error">
				  
				  </div>
				
				
                <div class="s-12"><button class="button border-radius background-primary" name="register" id="register_but"  type="submit">Register</button></div>
              </div>    
            </form>
          </div>           
        </section>
      </article>
    </main>
    
    <?php
	
	include('footer.php');
	
	?>
	<script>
		$(document).bind("contextmenu",function(e){
        e.preventDefault();

		});

   $(document).keydown(function(e){

if(e.which===123)
{

	return false;
}

   });


$(document).ready(function(){
	$('#state').change(function(){
		
           var state = $(this).val();
		   
		   $.ajax({
			   
			   url:"load_college.php",
			   type:"POST",
			   
			   data:{state:state},
			   success:function(data){
				  
				  $('#college').html(data); 
			   }
			   
		   });
	});
	
	$('#email').blur(function(){
           var email = $(this).val();
		  
		   $.ajax({
			   
			   url:"checkmail.php",
			   type:"POST",
			   data:{email:email},
			   success:function(data){
				  if(data=="1")
				  {
					  $('#register_but').attr("disabled",true);
					   $('#error').html('<p style=" text-align:center; background-color:red;">Email Already Registered</p><br>');
				 alert("Email Already Registered");
				  
				  }  
				   else
				   {	
                $('#error').html('');			   
				$('#register_but').attr("disabled",false);
				   }				   
				
				 
			   }
			   
		   });
	});
	
	$('#phone').blur(function(){
           var phone = $(this).val();
		   $.ajax({
			   
			   url:"checkphone.php",
			   type:"POST",
			   data:{phone:phone},
			   success:function(data){
				  if(data=="1")
				  {
					  $('#register_but').attr("disabled",true);
					   $('#error').html('<p style=" text-align:center; background-color:red;">Phone Number Already Registered</p><br>');
				 alert("Phone Number Already Registered");
				  
				  }  
				   else
				   {		
                  $('#error').html('');				   
				$('#register_but').attr("disabled",false);
				   }				   
				
				 
			   }
			   
		   });
	});
	
	
});
</script>
<?php
$conn->close();
?>